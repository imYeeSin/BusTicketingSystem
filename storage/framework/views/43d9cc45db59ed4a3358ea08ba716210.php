<?php $__env->startSection('styles'); ?>
<style>
    .container{
        margin-top: 50px;
    }
    
    </style>
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php if(session('flash_message')): ?>
<div class="alert alert-success" id="alert">
    <?php echo e(session('flash_message')); ?>

</div>
<?php endif; ?>

<script>
$(document).ready(function () {
    $('.alert').delay(2000).fadeOut(1000);
});
</script>

<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-md-11"> 

            <div class="card my-4"> 
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10 fs-2">Administrator</div>
                        <div class="col-md-2">
                            <a href="<?php echo e(url('/Administrative/create')); ?>" class="btn btn-primary" title="Add New Contact">
                                                            <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                        </div>
                    </div>
                </div> 
                <div class="card-body" id="cardBody">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Staff ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact No.</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $administrative; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->Administrative_ID); ?></td>
                                <td><?php echo e($item->User_Name); ?></td>
                                <td><?php echo e($item->Name); ?></td>
                                <td><?php echo e($item->Gender); ?></td>
                                <td><?php echo e($item->Contact_No); ?></td>
                                <td><?php echo e($item->Email_Address); ?></td>
                                <td>
                                    <a href="<?php echo e(url('/Administrative/' . $item->Administrative_ID)); ?>" title="View details"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="<?php echo e(url('/Administrative/' . $item->Administrative_ID . '/edit')); ?>" title="Edit account"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="<?php echo e(url('/Administrative/' . $item->Administrative_ID)); ?>" accept-charset="UTF-8" style="display:inline">
                                        <?php echo e(method_field('DELETE')); ?>

                                        <?php echo e(csrf_field()); ?>

                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete account" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/Administrative/index.blade.php ENDPATH**/ ?>