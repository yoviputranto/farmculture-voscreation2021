

<?php $__env->startSection('title', 'Create Category'); ?>


<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
    
</div>

<?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endif; ?>

<div class="card shadow">
    <div class="card-body">
        <form action="<?php echo e(route('category.store')); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <div class="form-group">
             <label for="name">Name</label>
             <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>" required>
         </div>
         <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/admin/category/create.blade.php ENDPATH**/ ?>