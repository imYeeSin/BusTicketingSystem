<!-- Name: Cho Yee Sin -->



<?php $__env->startSection('styles'); ?>
<style>
    body {
        background-image: url('https://wpvip.edutopia.org/wp-content/uploads/2023/01/hero_blog_Administration-Leadership_photo_iStock_1417664345_ferrantraite.jpg?w=2880&quality=85');
        background-size: cover;
    }

    .card{
        margin: 15px 1px 50px 1px;
        opacity: 0.9;
    }

    #addBus{
        background-color:orange;
        border: orange 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }
    
    #addBus:hover{
        background-color:yellow;
        border: yellow 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }
    
    #alert{
        margin-top: 70px;
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
    $(document).ready(function() {
        $('.alert').delay(2000).fadeOut(1000);
    });
</script>

<div class="container-fluid" style="margin-top: 55px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: orange;font-weight: bold">Bus </div>
                <div class="card-body">
                    <a href="<?php echo e(url('/buses/create')); ?>" class="btn btn-success btn-sm" title="Add New Bus" id="addBus">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Bus
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Bus ID</th>
                                    <th>Bus Plate Number</th>
                                    <th>Bus Model</th>
                                    <th>Purchase Date</th>
                                    <th>Road Tax Expiration Date</th>
                                    <th>Bus Type</th>
                                    <th>Total Seats</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->plateNumber); ?></td>
                                    <td><?php echo e($item->model); ?></td>
                                    <td><?php echo e($item->purchaseDate); ?></td>
                                    <td><?php echo e($item->roadTaxExpirationDate); ?></td>
                                    <td><?php echo e($item->busType); ?></td>
                                    <td><?php echo e($item->seat); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('/buses/' . $item->id)); ?>" title="View Bus"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        <a href="<?php echo e(url('/buses/' . $item->id . '/edit')); ?>" title="Edit Bus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                                        <form method="POST" action="<?php echo e(url('/buses/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bus" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> 
                                            </button>
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
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/buses/index.blade.php ENDPATH**/ ?>