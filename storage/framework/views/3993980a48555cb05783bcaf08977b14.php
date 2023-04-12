
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Schedule Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Bus ID : <?php echo e($bus->id); ?></h5>
        <h5 class="card-title">Bus Plate Number : <?php echo e($bus->plateNumber); ?></h5>
        <p class="card-text">Bus Model : <?php echo e($bus->model); ?></p>
        <p class="card-text">Purchase Date : <?php echo e($bus->purchaseDate); ?></p>
        <p class="card-text">Road Tax Expiration Date : <?php echo e($bus->roadTaxExpirationDate); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/buses/show.blade.php ENDPATH**/ ?>