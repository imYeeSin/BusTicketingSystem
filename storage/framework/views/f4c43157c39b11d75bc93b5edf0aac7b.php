<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 55px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bus Schedule</div>
                <div class="card-body">
                    <a href="<?php echo e(url('/schedules/create')); ?>" class="btn btn-success btn-sm" title="Add New Bus Schedule">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Bus Schedule
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Schedule ID</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Pick Up Point</th>
                                    <th>Drop Off Point</th>
                                    <th>Stop Point</th>
                                    <th>Bus ID</th>
                                    <th>Driver ID</th>
                                    <th>Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->departureTime); ?></td>
                                    <td><?php echo e($item->arrivalTime); ?></td>
                                    <td><?php echo e($item->pickUpPoint); ?></td>
                                    <td><?php echo e($item->dropOffPoint); ?></td>
                                    <td><?php echo e($item->stopPoint); ?></td>
                                    <td><?php echo e($item->Bus_ID); ?></td>
                                    <td><?php echo e($item->Driver_ID); ?></td>
                                    <td><?php echo e($item->price); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('/schedules/' . $item->id)); ?>" title="View Bus Schedule"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="<?php echo e(url('/schedules/' . $item->id . '/edit')); ?>" title="Edit Bus Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="<?php echo e(url('/schedules/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/schedules/index.blade.php ENDPATH**/ ?>