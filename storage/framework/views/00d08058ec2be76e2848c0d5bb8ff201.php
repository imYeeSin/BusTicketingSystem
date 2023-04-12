
<!-- Name: Wong Yu Sheng -->


<?php $__env->startSection('styles'); ?>
<style>
    body {
        background-image: url('https://thumbs.dreamstime.com/b/tourist-white-bus-road-highway-very-fast-driving-touristic-travel-concept-d-rendering-109776101.jpg');
        background-size: cover;
    }


    .card{
        width: 40%;
        opacity: 0.9;
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
        <div class="card-header d-flex justify-content-between" style="font-weight:bold; background-color: lightskyblue; color: black">Driver Page</div>
        

            <div class="card-body">
                <h5 class="card-title">Driver ID : <?php echo e($driver->id); ?></h5>
                <p class="card-text">Driver Name : <?php echo e($driver->Name); ?></p>
                <p class="card-text">Contact Number : <?php echo e($driver->Contact_No); ?></p>
                <p class="card-text">Gender : <?php echo e($driver->Gender); ?></p>
                <p class="card-text">License Expiration Date : <?php echo e($driver->licenseExpirationDate); ?></p>
            </div>

            <div class="card-footer">
            <a href="<?php echo e(url('drivers')); ?>" class="btn btn-secondary">Back</a>
        </div>

      
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/drivers/show.blade.php ENDPATH**/ ?>