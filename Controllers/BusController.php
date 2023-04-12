<?php
namespace App\Http\Controllers;

//Name: Cho Yee Sin

use App\Models\Bus;
use Illuminate\Http\Request;
use App\Strategies\BusTypeStrategy;
use App\Strategies\SingleDeckBusStrategy;
use App\Strategies\DoubleDeckBusStrategy;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class BusController extends Controller {

    /**
     * Display a listing of the bus.
     */
    public function index() {
        $buses = Bus::all();
        return view('buses.index')->with('buses', $buses);
    }

    /**
     * Show the form for creating a new bus.
     */
    public function create() {
        return view('buses.create');
    }

    /**
     * Store a newly created bus in storage.
     */
    public function store(Request $request) {

        try {
            // Validate the input of plate number, purchase date, road tax expiration date
            $validatedData = $request->validate([
                'plateNumber' => 'unique:buses,plateNumber',
                'purchaseDate' => 'before_or_equal:today',
                'roadTaxExpirationDate' => 'after:today',
                    ], [
                // Custom the error message
                'plateNumber.unique' => 'The plate number already exists. Please enter the new plate number.',
                'purchaseDate.before_or_equal' => 'The purchase date must be today or before.',
                'roadTaxExpirationDate.after' => 'The road tax expiration date must be after today.',
            ]);
            
            // To store all the new entered input data
            $input = $request->all();
            
            // Store the bus type entered
            $busType = $input['busType'];
            
            // Check the bus type and create the corresponding new object 
            if ($busType == 'Single Deck Bus') {
                $strategy = new SingleDeckBusStrategy();
            } else {
                $strategy = new DoubleDeckBusStrategy();
            }
            
            // Create a new Bus object to store the input
            $bus = new Bus();
            $bus->fill($input);
            
            // Set the bus type and number of seat based on the strategy
            $strategy->setBusType($bus);
            $strategy->setSeat($bus);
            $bus->save();
            
            // Store all the retrived Bus records
            $buses = Bus::all();
            
            // Show the view of the listing of bus, pass the parameters and show the flash message
            return redirect('buses')->with('buses', $buses)->with('busType', $busType)->with('seat', $bus->getSeat())->with('flash_message', 'Bus Addedd!');
            
        } catch (ValidationException $e) { // Handle the input validation exception error
            return redirect()->back()->withErrors($e->errors())->withInput();
            
        } catch (QueryException $e) { // Handle the SQL query exception error
            return redirect()->back()->withInput()->withErrors(['plateNumber' => 'The plate number already exists. Please enter the new plate number.']);
        }
    }

    /**
     * Display the specified bus resource.
     */
    public function show($id) {
        $bus = Bus::find($id);
        return view('buses.show')->with('bus', $bus);
    }

    /**
     * Show the form for editing the specified bus resource.
     */
    public function edit($id) {
        // Find the related Bus record based on the id
        $bus = Bus::find($id);

        // Check the bus type and create the corresponding new object 
        if ($bus->busType == 'Single Deck Bus') {
            $strategy = new SingleDeckBusStrategy();
        } else {
            $strategy = new DoubleDeckBusStrategy();
        }

        // Set the seat based on the strategy
        $strategy->setSeat($bus);
        
        // Show the view of bus editing and pass the parameters
        return view('buses.edit')->with('buses', $bus)->with('seat', $bus->getSeat());
    }

    
    /**
     * Update the specified bus resource in storage.
     */
    public function update(Request $request, $id) {
        // Find the related Bus record based on the id
        $bus = Bus::find($id);
        
        // To handle the related Bus record not exists error
        if (!$bus) {
            return redirect('buses')->with('error_message', 'Bus not found!');
        }
        
        // To store all the new entered input data
        $input = $request->all();
        
        // To store the previous selected bus type
        $originalBusType = $bus->busType;
        
        // To store the new selected bus type
        $newBusType = $input['busType'];
        
        // To update the new bus type selected if the user has changed the bus type selected
        if ($originalBusType != $newBusType) {
            if ($newBusType == 'Single Deck Bus') {
                $strategy = new SingleDeckBusStrategy();
            } else {
                $strategy = new DoubleDeckBusStrategy();
            }

            // Update the number of seats
            $strategy->setSeat($bus);
        }

        try {
            
            // Validate the input of purchase date, road tax expiration date
            $validatedData = $request->validate([
                'purchaseDate' => [
                    'before_or_equal:today'
                ],
                'roadTaxExpirationDate' => [
                    'after:today'
                ]
            ]);

            // Update the bus details
            $bus->purchaseDate = $request->input('purchaseDate');
            $bus->roadTaxExpirationDate = $request->input('roadTaxExpirationDate');

            // Save the updated bus details
            $bus->save();
            $bus->update($input);
            return redirect('buses')->with('flash_message', 'Bus Updated!');
            
        } catch (ValidationException $e) { // Handle the input validation exception
            return redirect()->back()->withErrors($e->errors())->withInput();
        } 
    }

    /**
     * Remove the specified bus resource from storage.
     */
    public function destroy($id) {
        $bus = Bus::find($id);

        if (!$bus) {
            return redirect('buses')->with('error_message', 'Bus not found!');
        }

        try {
            Bus::destroy($id); // Delete the related bus ID record
            return redirect('buses')->with('flash_message', 'Bus deleted!');
            
        } catch (QueryException $e) { //Handle the SQL query exception
            return redirect('buses')->with('error_message', 'Error deleting bus: ' . $e->getMessage());
        }
    }

}
