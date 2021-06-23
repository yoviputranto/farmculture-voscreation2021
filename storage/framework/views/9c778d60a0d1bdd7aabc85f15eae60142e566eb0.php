<?php 

use Illuminate\Support\Str;

 ?>



<?php $__env->startSection('title', 'Articles'); ?>


<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Archived Articles</h1>
    <a href="<?php echo e(route('article.create')); ?>" class="btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Create Articles</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Summary</th>       
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!--<?php echo e($no = 1); ?>-->
                  <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($article->category->name); ?></td>
                        <td><?php echo e($article->title); ?></td>
                        <td>
                            <img src="<?php echo e(Storage::url($article->image)); ?>" alt="" style="width: 150px" class="img-thumbnail">
                        </td>
                        <td><?php echo e(Str::words($article->body,7,'...')); ?></td>
                        <td><?php echo e($article->status); ?></td>
                        <td><?php echo e($article->created_at); ?></td>
                        <td>
                            <a href="<?php echo e(route('article.edit', $article->id)); ?>" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="<?php echo e(route('article.destroy', $article->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="8" class="text-center">
                            Empty Data 
                        </td>
                    </tr>        
                  <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/admin/article/archarticle.blade.php ENDPATH**/ ?>