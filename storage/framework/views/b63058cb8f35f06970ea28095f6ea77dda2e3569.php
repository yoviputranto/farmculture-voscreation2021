

<?php $__env->startPush('script-head'); ?>
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo e(asset('vendor/file-manager/css/file-manager.css')); ?>">
<script src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>
<!--summernote-->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- SummerNote -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Edit Article'); ?>


<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Article <?php echo e($article->name); ?></h1>
    
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
        <form action="<?php echo e(route('article.update', $article->id)); ?>" method="POST" enctype="multipart/form-data">
         <?php echo method_field('PUT'); ?>
         <?php echo csrf_field(); ?>
         <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control" required>
              <option value="<?php echo e($article->category_id); ?>">Don't Change</option>
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($category->id); ?>">
                <?php echo e($category->name); ?>

              </option> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Author" value="<?php echo e($article->author); ?>" required>
         </div>
           <div class="form-group">
               <label for="name">Title</label>
               <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo e($article->title); ?>" required>
            </div>
            <!--
            <div class="form-group">
              <label for="image_label">Image</label>
                <div class="input-group">
                    <input type="text" id="image_label" class="form-control" name="image"
                          aria-label="Image" aria-describedby="button-image">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                    </div>
                </div>
            </div>
          -->
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" class="form-control" placeholder="Image" value="<?php echo e($article->image); ?>">
            </div>
            <div class="form-group">
              <label for="name">Body</label>
              <!--
              <input type="textarea" name="body" class="form-control" value="<?php echo $article->body; ?>" required>-->
              <textarea name="body" required class="form-control"><?php echo old('body',$article->body ?? ''); ?></textarea>
              <!--
              <textarea name="body" id="summernote" required><?php echo old('body', $article->body ?? ''); ?></textarea>-->
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" class="form-control" required>
                <option value="Published">Published</option>
                <option value="Archived">Archived</option>
              </select>
            </div>
         <button type="submit" class="btn btn-primary btn-block">Edit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('button-image').addEventListener('click', (event) => {
      event.preventDefault();
      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });
  });
  // set file link
  function fmSetLink($url) {
    document.getElementById('image_label').value = $url;
  }
</script>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'body', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
</script>


//summernote
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- SummerNote js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

<script>
  $(document).ready(function(){
    // File manager button (image icon)
    const FMButton = function(context) {
      const ui = $.summernote.ui;
      const button = ui.button({
        contents: '<i class="note-icon-picture"></i> ',
        tooltip: 'File Manager',
        click: function() {
          window.open('/file-manager/summernote', 'fm', 'width=1400,height=800');
        }
      });
      return button.render();
    };
    $('#summernote').summernote({
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['fm-button', ['fm']],
      ],
      buttons: {
        fm: FMButton
      }
    });
  });
  // set file link
  function fmSetLink(url) {
    $('#summernote').summernote('insertImage', url);
  }
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('button-image').addEventListener('click', (event) => {
      event.preventDefault();
      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });
  });
  // set file link
  function fmSetLink($url) {
    document.getElementById('image_label').value = $url;
  }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/admin/article/edit.blade.php ENDPATH**/ ?>