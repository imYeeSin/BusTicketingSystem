
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

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header" style="font-weight:bold; background-color: lightskyblue;">Bus Page</div>
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
        <form action="<?php echo e(url('buses')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <label>Bus Plate Number <i>(Example: JAB1234)</i></label><br>
            <input type="text" name="plateNumber" id="plateNumber" class="form-control" value="<?php echo e(old('plateNumber')); ?>" oninput="this.value = this.value.toUpperCase();" required pattern="[A-Za-z]{3}\d{4}"><br>
            <label>Bus Model</label><br>
            <input type="text" name="model" id="model" class="form-control" value="<?php echo e(old('model')); ?>" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"><br>
            <label>Purchase Date</label><br>
            <input type="date" name="purchaseDate" id="purchaseDate" class="form-control" value="<?php echo e(old('purchaseDate')); ?>" required><br>
            <label>Road Tax Expiration Date</label><br>
            <input type="date" name="roadTaxExpirationDate" id="roadTaxExpirationDate" class="form-control" value="<?php echo e(old('roadTaxExpirationDate')); ?>" required><br>
            <label>Bus Type</label><br>
            <input type="radio" id="single" name="busType" value="Single Deck Bus" <?php echo e(old('busType') == 'Single Deck Bus' ? 'checked' : ''); ?> required>
            <label for="single">Single Deck Bus</label><br>
            <input type="radio" id="double" name="busType" value="Double Deck Bus" <?php echo e(old('busType') == 'Double Deck Bus' ? 'checked' : ''); ?> required>
            <label for="double">Double Deck Bus</label><br><br>
            <input type="submit" value="Save" class="btn btn-success">
            <a href="<?php echo e(url('buses')); ?>" class="btn btn-secondary">Cancel</a><br>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/buses/create.blade.php ENDPATH**/ ?>