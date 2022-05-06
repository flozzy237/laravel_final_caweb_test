

<?php $__env->startSection('title', 'List of Tasks'); ?>

<?php $__env->startSection('main'); ?>
	<div class="task-list">
		<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3><?php echo e($task->title); ?></h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/<?php echo e($task->id); ?>" class="card-footer-item">Show task ></a>
				<a href="/remove/<?php echo e($task->id); ?>" class="card-footer-item">Delete task ></a>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
    <div class="card-content">
				<div class="content">
					<h3><a href="/" >Back to List of Tasks  ></a></h3>
				</div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Flozzy\Documents\laravel-test-version\resources\views/abc.blade.php ENDPATH**/ ?>