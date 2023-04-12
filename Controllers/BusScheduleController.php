<?php
namespace App\Http\Controllers;

// Name: Cho Yee Sin

use App\Models\BusSchedule;
use App\Models\Bus;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class BusScheduleController extends Controller {

    /**
     * Display a listing of the bus schedule resource.
     */
    public function index() {
        $schedules = BusSchedule::all();
        return view('schedules.index')->with('schedules', $schedules);
    }

    /**
     * Show the form for creating a new bus schedule resource.
     */
    public function create() {

        // Store all the retrieved Bus and Driver records respectively
        $buses = Bus::all();
        $drivers = Driver::all();

        return view('schedules.create', compact('buses', 'drivers'));
    }

    /**
     * Store a newly created bus schedule resource in storage.
     */
    public function store(Request $request) {

        // Store the input data entered and excluding the token value
        $input = $request->except('_token');

        try {
            BusSchedule::create($input);
            // Log the activity of adding bus schedule
            Log::channel('schedules')->info('Bus schedule added', $input);
            return redirect('schedules')->with('flash_message', 'Bus Schedule Added!');
        } catch (QueryException $e) {
            // Log the error
            Log::channel('schedules')->error('Error adding bus schedule: ' . $e->getMessage(), $input);
            return redirect('schedules')->with('error_message', 'Error adding bus schedule: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified bus schedule resource.
     */
    public function show($id) {
        $schedule = BusSchedule::find($id);

        // Log the activity of viewing bus schedule
        Log::channel('schedules')->info('Bus schedule viewed', ['id' => $id]);

        return view('schedules.show')->with('schedule', $schedule);
    }

    /**
     * Show the form for editing the specified bus schedule resource.
     */
    public function edit($id) {
        $schedule = BusSchedule::find($id);
        $buses = Bus::all();
        $drivers = Driver::all();

        return view('schedules.edit')->with(['schedules' => $schedule, 'buses' => $buses, 'drivers' => $drivers]);
    }

    /**
     * Update the specified bus schedule resource in storage.
     */
    public function update(Request $request, $id) {
        $schedule = BusSchedule::find($id);
        $input = $request->except('_token');

        try {
            $schedule->update($input);
            // Log the activity of updating bus schedule
            Log::channel('schedules')->info('Bus schedule updated', $input);
            return redirect('schedules')->with('flash_message', 'Bus Schedule Updated!');
        } catch (QueryException $e) {
            // Log the error
            Log::channel('schedules')->error('Error updating bus schedule: ' . $e->getMessage(), $input);
            return redirect('schedules')->with('error_message', 'Error updating bus schedule: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified bus schedule resource from storage.
     */
    public function destroy($id) {
        try {
            BusSchedule::destroy($id); // Delete the related bus schedule ID record
            // Log the activity of deleting bus schedule
            Log::channel('schedules')->info('Bus schedule deleted', ['id' => $id]);
            return redirect('schedules')->with('flash_message', 'Bus Schedule deleted!');
        } catch (QueryException $e) {
            // Log the error
            Log::error('Error deleting bus schedule: ' . $e->getMessage());
            return redirect('schedules')->with('error_message', 'Error deleting bus schedule: ' . $e->getMessage());
        }
    }

}
