<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 55px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bus </div>
                <div class="card-body">
                    <a href="<?php echo e(url('/buses/create')); ?>" class="btn btn-success btn-sm" title="Add New Bus">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Bus 
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
                                    <td>
                                        <a href="<?php echo e(url('/buses/' . $item->id)); ?>" title="View Bus"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="<?php echo e(url('/buses/' . $item->id . '/edit')); ?>" title="Edit Bus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="<?php echo e(url('/buses/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm( & quot; Confirm delete? & quot; )">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/buses/index.blade.php ENDPATH**/ ?>