<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Bus Schedule Page</div>
    <div class="card-body">

        <form action="<?php echo e(url('schedules/' .$schedules->id)); ?>" method="post">
            <?php echo csrf_field(); ?>

            <?php echo method_field("PATCH"); ?>
            <input type="hidden" name="id" id="id" value="<?php echo e($schedules->id); ?>" />
            <label>Departure Time</label></br>
            <input type="time" name="departureTime" id="departureTime" class="form-control" value="<?php echo e($schedules->departureTime); ?>"></br>
            <label>Arrival Time</label></br>
            <input type="time" name="arrivalTime" id="arrivalTime" class="form-control" value="<?php echo e($schedules->arrivalTime); ?>"></br>
            <label>Pick Up Point</label></br>
            <input type="text" name="pickUpPoint" id="pickUpPoint" class="form-control" value="<?php echo e($schedules->pickUpPoint); ?>"></br>
            <label>Drop Off Point</label></br>
            <input type="text" name="dropOffPoint" id="dropOffPoint" class="form-control" value="<?php echo e($schedules->dropOffPoint); ?>"></br>
            <label>Stop Point</label></br>
            <input type="text" name="stopPoint" id="stopPoint" class="form-control" value="<?php echo e($schedules->stopPoint); ?>"></br>
            <label>Bus</label><br>
            <select name="Bus_ID" class="form-control" value="<?php echo e($schedules->Bus_ID); ?>">
                <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bus->id); ?>"><?php echo e($bus->plateNumber); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label>Driver</label><br>
            <select name="Driver_ID" class="form-control" value="<?php echo e($schedules->Driver_ID); ?>">
                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($driver->id); ?>"><?php echo e($driver->Name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label>Price</label></br>
            <input type="text" name="price" id="price" class="form-control" value="<?php echo e($schedules->price); ?>"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/schedules/edit.blade.php ENDPATH**/ ?>