

<?php $__env->startSection('title', 'Task'); ?>

<?php $__env->startSection('main'); ?>

<h2><?php echo e($task->title); ?></h2>
	<div class="task-content">
		<div class="card">
			<div class="card-content">
				<div class="content">
					<p><?php echo e($task->description); ?></p>
					<p>  Creation Date : <?php echo e($task->created_at->format('jS \\of F Y')); ?></p>
					<div class="card-footer">
					<a href="/" class="card-footer-item">Back to List of Tasks ></a>
			</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Flozzy\Documents\laravel-test-version\resources\views/task.blade.php ENDPATH**/ ?>