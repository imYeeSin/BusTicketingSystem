<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Driver Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('drivers/' .$drivers->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($drivers->id); ?>" />
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" class="form-control" value="<?php echo e($drivers->Name); ?>"></br>
        <label>Contact Number</label></br>
        <input type="text" name="Contact_No" id="Contact_No" class="form-control" value="<?php echo e($drivers->Contact_No); ?>"></br>
        <label>Gender</label></br>
        <input type="text" name="Gender" id="Gender" class="form-control" value="<?php echo e($drivers->Gender); ?>"></br>
        <label>License Expiration Date</label></br>
        <input type="date" name="licenseExpirationDate" id="licenseExpirationDate" class="form-control" value="<?php echo e($drivers->licenseExpirationDate); ?>"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/drivers/edit.blade.php ENDPATH**/ ?>