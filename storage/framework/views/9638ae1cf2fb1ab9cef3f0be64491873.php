
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Driver Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Driver ID : <?php echo e($driver->id); ?></h5>
        <p class="card-text">Driver Name : <?php echo e($driver->Name); ?></p>
        <p class="card-text">Contact Number : <?php echo e($driver->Contact_No); ?></p>
        <p class="card-text">Gender : <?php echo e($driver->Gender); ?></p>
        <p class="card-text">License Expiration Date : <?php echo e($driver->licenseExpirationDate); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/drivers/show.blade.php ENDPATH**/ ?>