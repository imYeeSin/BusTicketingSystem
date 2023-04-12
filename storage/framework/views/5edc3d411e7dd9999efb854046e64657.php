<!-- Name: Wong Yu Sheng -->


<?php $__env->startSection('styles'); ?>
<style>
    .card{
        margin: 100px 50px 50px 320px;
        width: 40%;
        opacity: 0.9;
    }
    
    body {
        background-image: url('https://blog-assets.busbud.com/wp-content/uploads/2013/05/busbud-coachbus1.jpg');
        background-size: cover;
    }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header" style="font-weight:bold; background-color: lightskyblue;">Driver Page</div>
  <div class="card-body">
      <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
      <form action="<?php echo e(url('drivers/' .$drivers->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($drivers->id); ?>" />
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" class="form-control" value="<?php echo e(old('Name', $drivers->Name)); ?>" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
        <label>Contact Number <i>(Example: 011-12345678)</i></label></br>
        <input type="text" name="Contact_No" id="Contact_No" class="form-control" value="<?php echo e(old('Contact_No', $drivers->Contact_No)); ?>" required pattern="^\d{3}-\d{7,8}$"></br>
        <label>Gender (M/F)</label></br>
        <input type="text" name="Gender" id="Gender" class="form-control" value="<?php echo e(old('Gender', $drivers->Gender)); ?>" required pattern="[MF]" title="Only 'M' or 'F' input allowed!"></br>
        <label>License Expiration Date</label></br>
        <input type="date" name="licenseExpirationDate" id="licenseExpirationDate" class="form-control" value="<?php echo e(old('licenseExpirationDate', $drivers->licenseExpirationDate)); ?>" required></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a href="<?php echo e(url('drivers')); ?>" class="btn btn-secondary">Cancel</a><br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/drivers/edit.blade.php ENDPATH**/ ?>