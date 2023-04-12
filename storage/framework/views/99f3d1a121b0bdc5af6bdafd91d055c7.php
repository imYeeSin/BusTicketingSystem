
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Bus Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('buses')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Bus Plate Number</label></br>
        <input type="text" name="plateNumber" id="plateNumber" class="form-control"></br>
        <label>Bus Model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <label>Purchase Date</label></br>
        <input type="date" name="purchaseDate" id="purchaseDate" class="form-control"></br>
        <label>Road Tax Expiration Date</label></br>
        <input type="date" name="roadTaxExpirationDate" id="roadTaxExpirationDate" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/buses/create.blade.php ENDPATH**/ ?>