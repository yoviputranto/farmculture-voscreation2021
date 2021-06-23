

<?php $__env->startSection('title', 'Articles'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url(assets/pictures/header-image-article.png); background-size: cover;">
        <div class="container text-center text-white align-middle">
          <h1 class="display-4">Discover New Things</h1>
        </div>
      </div>
      <!-- End of Jumbotron -->

      <section class="menu-bar">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark active bg-white" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
              </li>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark bg-white" id="pills-<?php echo e($item->name); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($item->name); ?>" type="button" role="tab" aria-controls="pills-<?php echo e($item->name); ?>" aria-selected="true"><?php echo e($item->name); ?></button>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>

          
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-home-all">
                <section class="article-list mt-5">
                    <div class="container">
                      <div class="row d-flex">
                          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($article->status == 'Published' ): ?>
                          <div class="col-12 col-lg-3 text-center">
                            <figure class="figure">
                              <div class="article-image">
                                <img src="<?php echo e(Storage::url($article->image)); ?>" class="figure-img img-fluid rounded" width="318px" height="180px" alt="...">
                              </div>                            
                              <figcaption class="figure-caption">
                                <div class="date-category d-flex justify-content-center">
                                  <p class="text-secondary"><?php echo e($article->created_at); ?></p>
                                  <p>&#9679;</p>
                                  <p class="exception"><?php echo e($article->category->name); ?></p>
                                </div>
                                <a href="<?php echo e(route('detail', $article->slug)); ?>" style="text-decoration: none; color: #6C757D;"><h4><?php echo e(Str::words($article->title,7,'')); ?></h4>
                                  <hr></a>
                                <p class="text-secondary"><?php echo Str::words($article->body,16,'...'); ?></p>
                              </figcaption>
                            </figure>
                          </div>
                          <?php endif; ?>
                          
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </section>
            </div>  
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tab-pane fade show" id="pills-<?php echo e($item->name); ?>" role="tabpanel" aria-labelledby="pills-<?php echo e($item->name); ?>-tab">
                <section class="article-list mt-5">
                    <div class="container">
                      <div class="row d-flex">
                          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($article->category->name == $item->name && $article->status == 'Published'): ?>
                            <div class="col-12 col-lg-3 text-center">
                                <figure class="figure">
                                  <div class="article-image">
                                    <img src="<?php echo e(Storage::url($article->image)); ?>" class="figure-img img-fluid rounded" width="318px" height="180px" alt="...">
                                  </div>                                
                                  <figcaption class="figure-caption">
                                    <div class="date-category d-flex justify-content-center">
                                      <p class="text-secondary"><?php echo e($article->created_at); ?></p>
                                      <p>&#9679;</p>
                                      <p class="exception"><?php echo e($article->category->name); ?></p>
                                    </div>
                                    <a href="<?php echo e(route('detail', $article->slug)); ?>" style="text-decoration: none; color: #6C757D;"><h4><?php echo e(Str::words($article->title,5,'')); ?></h4>
                                      <hr></a>
                                    <p class="text-secondary"><?php echo Str::words($article->body,16,'...'); ?></p>
                                  </figcaption>
                                </figure>
                              </div>
                            <?php endif; ?>
                              
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                      </div>
                    </div>
                  </section>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          </div>
      </section>
  
      <!-- End of Menu Bar -->
  
      <!-- List of Articles -->
      
      <!-- End of List of Articles -->
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/frontend/news.blade.php ENDPATH**/ ?>