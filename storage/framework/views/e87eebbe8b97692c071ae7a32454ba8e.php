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
        <form action="<?php echo e(url('buses/' .$buses->id)); ?>" method="post">
            <?php echo csrf_field(); ?>

            <?php echo method_field("PATCH"); ?>
            <input type="hidden" name="id" id="id" value="<?php echo e($buses->id); ?>" />
            <label>Bus Plate Number</label></br>
            <input type="text" name="plateNumber" id="plateNumber" value="<?php echo e($buses->plateNumber); ?>" disabled /></br></br>
            <label>Bus Model</label></br>
            <input type="text" name="model" id="model" class="form-control" value="<?php echo e(old('model', $buses->model)); ?>" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Purchase Date</label></br>
            <input type="date" name="purchaseDate" id="purchaseDate" class="form-control" value="<?php echo e(old('purchaseDate', $buses->purchaseDate)); ?>" required></br>
            <label>Road Tax Expiration Date</label></br>
            <input type="date" name="roadTaxExpirationDate" id="roadTaxExpirationDate" class="form-control" value="<?php echo e(old('roadTaxExpirationDate', $buses->roadTaxExpirationDate)); ?>" required></br>
            <label>Bus Type</label></br>
            <input type="radio" id="single" name="busType" value="Single Deck Bus" required <?php echo e(old('busType') == 'Single Deck Bus' ? 'checked' : ''); ?> <?php echo $buses->busType == 'Single Deck Bus' ? 'checked' : ''; ?>>
            <label for="single">Single Deck Bus</label><br>
            <input type="radio" id="double" name="busType" value="Double Deck Bus" required <?php echo e(old('busType') == 'Double Deck Bus' ? 'checked' : ''); ?> <?php echo $buses->busType == 'Double Deck Bus' ? 'checked' : ''; ?>>
            <label for="double">Double Deck Bus</label></br></br>
            <input type="submit" value="Update" class="btn btn-success">
            <a href="<?php echo e(url('buses')); ?>" class="btn btn-secondary">Cancel</a><br/></br>
        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/buses/edit.blade.php ENDPATH**/ ?>