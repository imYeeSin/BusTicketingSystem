
<!-- Name: Cho Yee Sin -->



<?php $__env->startSection('styles'); ?>
<style>
    body {
        background-image: url('https://www.mantruckandbus.com/fileadmin/_processed_/a/5/csm_FT_04-30_Header_455cea54de.jpg');
        background-size: cover;
    }


    .card{
        width: 40%;
        opacity: 0.85;
        margin-bottom: 50px;
        margin-top: 100px;
    }

    .card-footer {
        display: flex;
        justify-content: flex-end;
    }

    .card-container {
        display: flex;
        align-items: center;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 55px;">
    <div class="card">
        <div class="card-header d-flex justify-content-between" style="font-weight:bold; background-color: blue; color: white">Bus Page</div>

        <div class="card-body">
            <h5 class="card-title">Bus ID : <?php echo e($bus->id); ?></h5>
            <h5 class="card-title">Bus Plate Number : <?php echo e($bus->plateNumber); ?></h5>
            <p class="card-text">Bus Model : <?php echo e($bus->model); ?></p>
            <p class="card-text">Purchase Date : <?php echo e($bus->purchaseDate); ?></p>
            <p class="card-text">Road Tax Expiration Date : <?php echo e($bus->roadTaxExpirationDate); ?></p>
            <p class="card-text">Bus Type : <?php echo e($bus->busType); ?></p>
            <p class="card-text">Total Seats : <?php echo e($bus->seat); ?></p>
        </div>

        <div class="card-footer">
            <a href="<?php echo e(url('buses')); ?>" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/buses/show.blade.php ENDPATH**/ ?>