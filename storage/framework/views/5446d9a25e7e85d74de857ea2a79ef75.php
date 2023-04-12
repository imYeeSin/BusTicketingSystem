<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Bus Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('buses/' .$buses->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($buses->id); ?>" />
        <input type="hidden" name="plateNumber" id="plateNumber" value="<?php echo e($buses->plateNumber); ?>" />
        <label>Bus Model</label></br>
        <input type="text" name="model" id="model" class="form-control" value="<?php echo e($buses->model); ?>"></br>
        <label>Purchase Date</label></br>
        <input type="date" name="purchaseDate" id="purchaseDate" class="form-control" value="<?php echo e($buses->purchaseDate); ?>"></br>
        <label>Road Tax Expiration Date</label></br>
        <input type="date" name="roadTaxExpirationDate" id="roadTaxExpirationDate" class="form-control" value="<?php echo e($buses->roadTaxExpirationDate); ?>"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/buses/edit.blade.php ENDPATH**/ ?>