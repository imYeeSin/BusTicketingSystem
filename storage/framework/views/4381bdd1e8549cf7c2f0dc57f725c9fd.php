
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Bus Schedule Page</div>
    <div class="card-body">

        <form action="<?php echo e(url('schedules')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <label>Departure Time</label></br>
            <input type="time" name="departureTime" id="departureTime" class="form-control"></br>
            <label>Arrival Time</label></br>
            <input type="time" name="arrivalTime" id="arrivalTime" class="form-control"></br>
            <label>Pick Up Point</label></br>
            <input type="text" name="pickUpPoint" id="pickUpPoint" class="form-control"></br>
            <label>Drop Off Point</label></br>
            <input type="text" name="dropOffPoint" id="dropOffPoint" class="form-control"></br>
            <label>Stop Point</label></br>
            <input type="text" name="stopPoint" id="stopPoint" class="form-control"></br>
            <label>Bus</label><br>
            <select name="Bus_ID" class="form-control">
                <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bus->id); ?>"><?php echo e($bus->plateNumber); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label>Driver</label><br>
            <select name="Driver_ID" class="form-control">
                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($driver->id); ?>"><?php echo e($driver->Name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label>Price</label></br>
            <input type="text" name="price" id="price" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/schedules/create.blade.php ENDPATH**/ ?>