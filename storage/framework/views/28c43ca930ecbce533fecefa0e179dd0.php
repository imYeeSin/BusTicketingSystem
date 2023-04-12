
<!-- Name: Cho Yee Sin -->



<?php $__env->startSection('styles'); ?>
<style>
    .card{
        margin: 100px 50px 50px 320px;
        width: 40%;
        opacity: 0.9;
    }

    body {
        background-image: url('https://grmdaily.com/wp-content/uploads/2022/06/shutterstock_583939735-scaled.jpeg');
        background-size: cover;
    }

    .custom-select {
        width:250px;
        height:40px;
    }

    .custom-select option {
        background:#333;
        color:white;
    }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header" style="font-weight:bold; background-color: lightskyblue;">Bus Schedule Page</div>
    <div class="card-body">

        <form action="<?php echo e(url('schedules')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <label>Departure Time</label></br>
            <input type="time" name="departureTime" id="departureTime" class="form-control" required></br>
            <label>Arrival Time</label></br>
            <input type="time" name="arrivalTime" id="arrivalTime" class="form-control" required></br>
            <label>Pick Up Point</label></br>
            <input type="text" name="pickUpPoint" id="pickUpPoint" class="form-control" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Drop Off Point</label></br>
            <input type="text" name="dropOffPoint" id="dropOffPoint" class="form-control" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Stop Point</label></br>
            <input type="text" name="stopPoint" id="stopPoint" class="form-control" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Bus</label><br>
            <select name="Bus_ID" class="form-control custom-select" required>
                <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bus->id); ?>"><?php echo e($bus->plateNumber); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label>Driver</label><br>
            <select name="Driver_ID" class="form-control custom-select" required>
                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($driver->id); ?>"><?php echo e($driver->Name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label>Price</label></br>
            <input type="number" step="0.01" min="0" name="price" id="price" class="form-control" required onblur="formatPrice(this)"></br>

            <script>
                function formatPrice(input) {
                    input.value = parseFloat(input.value).toFixed(2);
                }
            </script>

            <input type="submit" value="Save" class="btn btn-success">
            <a href="<?php echo e(url('schedules')); ?>" class="btn btn-secondary">Cancel</a><br/></br>
        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/schedules/create.blade.php ENDPATH**/ ?>