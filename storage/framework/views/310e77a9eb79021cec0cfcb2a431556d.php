
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Schedule Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Bus Schedule ID : <?php echo e($schedule->id); ?></h5>
        <p class="card-text">Departure Time : <?php echo e($schedule->departureTime); ?></p>
        <p class="card-text">Arrival Time : <?php echo e($schedule->arrivalTime); ?></p>
        <p class="card-text">Pick Up Point : <?php echo e($schedule->pickUpPoint); ?></p>
        <p class="card-text">Drop Off Point : <?php echo e($schedule->dropOffPoint); ?></p>
        <p class="card-text">Stop Point : <?php echo e($schedule->stopPoint); ?></p>
        <p class="card-text">Bus ID : <?php echo e($schedule->Bus_ID); ?></p>
        <p class="card-text">Driver ID : <?php echo e($schedule->Driver_ID); ?></p>
        <p class="card-text">Price : <?php echo e($schedule->price); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\sinTicketingSystem\resources\views/schedules/show.blade.php ENDPATH**/ ?>