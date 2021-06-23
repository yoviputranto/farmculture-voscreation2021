

<?php $__env->startSection('title', 'Foundation'); ?>

<?php $__env->startSection('content'); ?>
    
       <!-- Carousel -->
       
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($article->title == 'Agriculture 5.0: Artificial Intelligence, Iot & Machine Learning'): ?>
        <div class="carousel-item active" style="background-image: url(assets/pictures/header-image-1.jpg);">
          <div class="header-content container">
            <h1 class="mb-3"><?php echo e($article->title); ?></h1>
            <p class="sub-title mb-3">Artificial Intelligence, IoT and <br> Machine Learning</p>
            <p>A book that changes <br> the representative of Agricculture</p>
            <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="<?php echo e(route('detail', $article->slug)); ?>">Read more</a></button>
          </div>
        </div>
      <?php elseif($article->title == 'Agriculture’s Digital Future'): ?>
        <div class="carousel-item" style="background-image: url(assets/pictures/header-image-2.png);">
          <div class="header-content container">
            <h1 class="mb-3"><?php echo e($article->title); ?></h1>
            <p class="sub-title mb-3">Why is digital agriculture important? <br> E-agriculture strategy guide</p>
            <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="<?php echo e(route('detail', $article->slug)); ?>">Read more</a></button>
          </div>
        </div>
      <?php elseif($article->title == 'Agriculture Sector, Industrial Era 4.0 And Society 5.0'): ?>
        <div class="carousel-item" style="background-image: url(assets/pictures/header-image-3.png);">
          <div class="header-content container">
            <h1 class="mb-3"><?php echo e($article->title); ?></h1>
            <p class="sub-title mb-3">Industrial Era 4.0 <br> Society 5.0</p>
            <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="<?php echo e(route('detail', $article->slug)); ?>">Read more</a></button>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url(assets/pictures/header-image-1.jpg);">
          <div class="header-content container">
            <h1 class="mb-3">Agriculture 5.0</h1>
            <p class="sub-title mb-3">Artificial Intelligence, IoT and <br> Machine Learning</p>
            <p>A book that changes <br> the representative of Agricculture</p>
            <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="#">Read more</a></button>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(assets/pictures/header-image-2.png);">
          <div class="header-content container">
            <h1 class="mb-3">Agriculture’s digital future</h1>
            <p class="sub-title mb-3">Why is digital agriculture important? <br> E-agriculture strategy guide</p>
            <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="#">Read more</a></button>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(assets/pictures/header-image-3.png);">
          <div class="header-content container">
            <h1 class="mb-3">Agriculture sector</h1>
            <p class="sub-title mb-3">Industrial Era 4.0 <br> Society 5.0</p>
            <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="#">Read more</a></button>
          </div>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>-->
    <!-- End of Carousel -->

    <!-- Highlighted-content -->
    
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($article->title == 'The Art Of Agriculture'): ?>
    <section class="highlighted-content container-fluid p-0">
      <div class="row m-0">
        <div class="col-6 d-none d-lg-block p-0 m-0">
          <img src="<?php echo e(Storage::url($article->image)); ?>" class="figure-img img-fluid p-0" alt="...">
        </div>
        <div class="col-12 m-0 pt-5 col-lg-6 d-flex justify-content-center align-items-center">
          <div class="feature-sub-content">
            <h6><?php echo e($article->category->name); ?></h6>
            <h1 class="mb-3"><?php echo e($article->title); ?></h1>
            <p class="sub-title mb-3"><?php echo Str::words($article->body,16,'...'); ?></p>
            <button type="button" class="btn bg-white mt-4"><a class="text-dark text-decoration-none" href="<?php echo e(route('detail', $article->slug)); ?>">Read more</a></button>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--
    <section class="highlighted-content container-fluid p-0">
      <div class="row m-0">
        <div class="col-6 d-none d-lg-block p-0 m-0">
          <img src="<?php echo e(asset('assets/pictures/Photo by no one cares on Unsplash.jpg')); ?>" class="figure-img img-fluid p-0" alt="...">
        </div>
        <div class="col-12 m-0 pt-5 col-lg-6 d-flex justify-content-center align-items-center">
          <div class="feature-sub-content">
            <h6>Feature</h6>
            <h1 class="mb-3">The Art of Agriculture</h1>
            <p class="sub-title mb-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
            <button type="button" class="btn bg-white mt-4"><a class="text-dark text-decoration-none" href="#">Read more</a></button>
          </div>
        </div>
      </div>
    </section>-->
    <!-- End of Highlighted-content -->
    
    <!-- Featured news -->
    
    <section class="feature-news mt-5">
      <div class="container">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($article->title == 'Unlocking Indonesian Agriculture’s Digital Future' ): ?>
              <div class="row reveal">
                <div class="col-8 col-lg-6">
                  <div class="feature-sub-content">
                    <h6><?php echo e($article->category->name); ?></h6>
                    <h1 class="mb-3"><?php echo e($article->title); ?></h1>
                    <p class="sub-title mb-3"><?php echo Str::words($article->body,16,'...'); ?></p>
                    <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="<?php echo e(route('detail', $article->slug)); ?>">Read more</a></button>
                  </div>
                </div>
                <div class="col-8 col-lg-6 m-0 d-none d-lg-block d-flex justify-content-end">
                  <img src="<?php echo e(Storage::url($article->image)); ?>" width="540px" height="405px" alt="">
                </div>
              </div>
            <?php elseif($article->title == 'Agriculture Sector, Industrial Era 4.0 And Society 5.0' ): ?>
              <div class="row mt-5 reveal">
                <div class="col-8 col-lg-6">
                  <img src="<?php echo e(Storage::url($article->image)); ?>" width="540px" height="405px" alt="">
                </div>
                <div class="col-8 col-lg-6 d-flex justify-content-end">
                  <div class="feature-sub-content p-1">
                    <h6><?php echo e($article->category->name); ?></h6>
                    <h1 class="mb-3"><?php echo e($article->title); ?></h1>
                    <p class="sub-title mb-3"><?php echo Str::words($article->body,16,'...'); ?></p>
                    <button type="button" class="btn btn-success mt-4"><a class="text-white text-decoration-none" href="<?php echo e(route('detail', $article->slug)); ?>">Read more</a></button>
                  </div>
                </div>
              </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="content-row row">
          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($article->title == 'The Evolution Of Agriculture' or $article->title == 'Digital Agriculture Strategy' ): ?>
              <div class="col-lg-6">
                <figure class="figure">
                    <a href=""><img src="<?php echo e(Storage::url($article->image)); ?>" width="570px" class="figure-img img-fluid" alt="..."></a>
                  <figcaption class="figure-caption mt-3">
                    <a href="<?php echo e(route('detail', $article->slug)); ?>" class="mb-2"><?php echo e($article->title); ?></a> 
                    <h6><?php echo e($article->category->name); ?></h6>
                  </figcaption>
                </figure>
              </div>
              <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
      </div>
    </section>
<!--
    <section class="feature-news mt-5">
      <div class="container">
        <div class="row reveal">
          <div class="col-8 col-lg-6 m-0 d-block d-lg-none">
            <img src="<?php echo e(asset('assets/pictures/Photo by Warren Wong on Unsplash.jpg')); ?>" width="540px" height="405px" alt="">
          </div>
          <div class="col-8 col-lg-6">
            <div class="feature-sub-content">
              <h6>Feature</h6>
              <h1 class="mb-3">Unlocking Indonesian agriculture’s digital future</h1>
              <p class="sub-title mb-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
              </p>
              <button type="button" class="btn btn-success mt-4"><a class="text-dark text-decoration-none" href="#">Read more</a></button>
            </div>
          </div>
          <div class="col-8 col-lg-6 m-0 d-none d-lg-block d-flex justify-content-end">
            <img src="<?php echo e(asset('assets/pictures/Photo by Warren Wong on Unsplash.jpg')); ?>" width="540px" height="405px" alt="">
          </div>
        </div>

        <div class="row mt-5 reveal">
          <div class="col-8 col-lg-6">
            <img src="<?php echo e(asset('assets/pictures/Photo by Tony Pham on Unsplash.jpg')); ?>" width="540px" height="405px" alt="">
          </div>
          <div class="col-8 col-lg-6 d-flex justify-content-end">
            <div class="feature-sub-content p-1">
              <h6>Feature</h6>
              <h1 class="mb-3">Agriculture sector catches Indonesian workforce...</h1>
              <p class="sub-title mb-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
              </p>
              <button type="button" class="btn btn-success mt-4"><a class="text-dark text-decoration-none" href="#">Read more</a></button>
            </div>
          </div>
        </div>

        <div class="content-row row">
          <div class="col-lg-6">
            <figure class="figure">
                <a href=""><img src="<?php echo e(asset('assets/pictures/Photo by Tomas Anunziata from Pexels - cropped.jpg')); ?>" width="570px" class="figure-img img-fluid" alt="..."></a>
              <figcaption class="figure-caption mt-3">
                <a href="#" class="mb-2">The evolution of agriculture</a> 
                <h6>Feature</h6>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-6">
            <figure class="figure">
              <a href=""><img src="<?php echo e(asset('assets/pictures/Photo by Charles Deluvio on Unsplash - cropped.jpg')); ?>" width="570px" class="figure-img img-fluid" alt="..."></a> 
              <figcaption class="figure-caption mt-3">
                <a href="#" class="mb-2">Digital agriculture Strategy</a>
                <h6>Feature</h6>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>-->
    <!-- End of Featured-news -->

    <!-- Featured quote -->
    <section class="feature-quote">
      <div class="container">
        <hr>
        <h1>What they think</h1>
        <div class="row d-flex justify-content-evenly reveal">
          <div class="col-lg-4">
            <blockquote>
              "All wealth comes from the mind. Wealth is in ideas, not money."
            </blockquote>
            <hr>
            <h4>Robert Coller</h4>
          </div>
          <div class="col-lg-4">
            <blockquote>
              "If we have a strong desire from within, then the whole universe will work hand in hand to make it happen"
            </blockquote>
            <hr>
            <h4>Ir. Soekarno</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Featured quote -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/frontend/home.blade.php ENDPATH**/ ?>