

<?php $__env->startSection('title'); ?> 

<?php echo e($article->title); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Article Image -->
    <div class="hero-image">
        <!--<img class="hero-image" src="<?php echo e(Storage::url($article->image)); ?>"  alt="..."> -->
        <img src="<?php echo e(Storage::url($article->image)); ?>" class="img-fluid" alt="...">
        <div class="overlay">
        </div>
    </div>
      <!-- End of Article Image -->
  
      <!-- Article Header -->
      <section class="article-header mt-5">
        <div class="container">
          <h6 class="exception"><?php echo e($article->category->name); ?></h6>
          <h1><?php echo e($article->title); ?></h1>
          <p><?php echo e($article->created_at); ?></p>
          <hr>
        </div>
      </section>
      <!-- End of Article Header -->
  
      <!-- Article Writing -->
      <section class="article-writing">
        <div class="container">
          <div class="row">
            <div class="col-8 col-lg-8">
                <?php echo $article->body; ?>

            </div>
            <div class="d-none d-lg-block col-lg-4">
              <div class="card newest-article">
                <div class="card-body">
                  <h4 class="card-title mb-4 text-start">Newest Post</h4>
                  <hr>
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($item->status == 'Published'): ?>
                  <div class="row mb-3">
                    <div class="col-4">
                      <img src="<?php echo e(Storage::url($item->image)); ?>" width="120px" alt="">
                    </div>
                    <div class="col">
                      <a class="text-decoration-none text-dark" href="<?php echo e(route('detail', $item->slug)); ?>">
                        <h5><?php echo e(Str::words($item->title,5,'')); ?></h5>
                      </a>
                      <small class="text-muted"><?php echo e($item->created_at); ?></small>
                    </div>
                  </div>
                  <?php endif; ?>
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Article Writing -->
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/frontend/newsdetail.blade.php ENDPATH**/ ?>