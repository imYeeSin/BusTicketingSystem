<!-- Name: Wong Yu Sheng -->


<?php $__env->startSection('styles'); ?>
<style>
    body {
        background-image: url('https://coachwest.com/wp-content/uploads/2017/10/shutterstock_361517306-1452x726.jpg');
        background-size: cover;
    }

    .card{
        margin: 15px 1px 50px 1px;
        opacity: 0.9;
    }

    #addDriver{
        background-color:lightskyblue;
        border: lightskyblue 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }
    
    #addDriver:hover{
        background-color:lightcyan;
        border: lightcyan 7px outset;
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
                <div class="card-header" style="background-color: lightskyblue;font-weight: bold">Driver </div>
                <div class="card-body">
                    <a href="<?php echo e(url('/drivers/create')); ?>" class="btn btn-success btn-sm" title="Add New Driver" id="addDriver">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Driver 
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Driver ID</th>
                                    <th>Driver Name</th>
                                    <th>Contact Number</th>
                                    <th>Gender</th>
                                    <th>License Expiration Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->Name); ?></td>
                                    <td><?php echo e($item->Contact_No); ?></td>
                                    <td><?php echo e($item->Gender); ?></td>
                                    <td><?php echo e($item->licenseExpirationDate); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('/drivers/' . $item->id)); ?>" title="View Driver"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="<?php echo e(url('/drivers/' . $item->id . '/edit')); ?>" title="Edit Driver"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="<?php echo e(url('/drivers/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm('Confirm delete?')">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/drivers/index.blade.php ENDPATH**/ ?>