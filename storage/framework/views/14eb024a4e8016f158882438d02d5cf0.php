
<!-- Name: Cho Yee Sin -->



<?php $__env->startSection('styles'); ?>
<style>
    body {
        background-image: url('https://www.mantruckandbus.com/fileadmin/_processed_/a/5/csm_FT_04-30_Header_455cea54de.jpg');
        background-size: cover;
    }
    
    .card{
        width: 40%;
        margin-bottom: 50px;
        margin-top: 100px;
    }
    
    .card-footer {
        display: flex;
        justify-content: flex-end;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 55px;">
    <div class="card">
        <div class="card-header d-flex justify-content-between" style="font-weight:bold; background-color: blue; color: white">Bus Page</div>
        <div class="card-body">
            <div class="card-body">
        <h5 class="card-title">Bus Schedule ID : <?php echo e($schedule->id); ?></h5>
        <p class="card-text">Departure Time : <?php echo e($schedule->departureTime); ?></p>
        <p class="card-text">Arrival Time : <?php echo e($schedule->arrivalTime); ?></p>
        <p class="card-text">Pick Up Point : <?php echo e($schedule->pickUpPoint); ?></p>
        <p class="card-text">Drop Off Point : <?php echo e($schedule->dropOffPoint); ?></p>
        <p class="card-text">Stop Point : <?php echo e($schedule->stopPoint); ?></p>
        <p class="card-text">Bus ID : <?php echo e($schedule->Bus_ID); ?></p>
        <p class="card-text">Driver ID : <?php echo e($schedule->Driver_ID); ?></p>
        <p class="card-text">Price : <?php echo e(number_format($schedule->price,2)); ?></p>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo e(url('schedules')); ?>" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/schedules/show.blade.php ENDPATH**/ ?>