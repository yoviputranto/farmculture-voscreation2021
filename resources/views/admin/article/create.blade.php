@extends('master')

@push('script-head')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush

@section('title', 'Create Article')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Article</h1>
    
</div>

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{route('category.store')}}" method="POST">
         @csrf
         <div class="form-group">
             <label for="name">Name</label>
             {{--<input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">--}}
             <textarea name="ce" class="form-control"></textarea>
             <textarea id="summernote-editor" name="content"></textarea>
         </div>
         <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="filepath">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">

        <div style="height: 600px;">
          <div id="fm"></div>
      </div>
    </div>
</div>
@endsection

@push('script')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
<script>
$('textarea.my-editor').ckeditor(options);
</script>
<script>
    var route_prefix = "/filemanager";
   </script>
 
   <!-- CKEditor init -->
   <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
   <script>
     $('textarea[name=ce]').ckeditor({
       height: 100,
       filebrowserImageBrowseUrl: route_prefix + '?type=Images',
       filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
       filebrowserBrowseUrl: route_prefix + '?type=Files',
       filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
     });
   </script>
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
 <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
 <style>
   .popover {
     top: auto;
     left: auto;
   }
 </style>
 <script>
   $(document).ready(function(){

     // Define function to open filemanager window
     var lfm = function(options, cb) {
       var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
       window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
       window.SetUrl = cb;
     };

     // Define LFM summernote button
     var LFMButton = function(context) {
       var ui = $.summernote.ui;
       var button = ui.button({
         contents: '<i class="note-icon-picture"></i> ',
         tooltip: 'Insert image with filemanager',
         click: function() {

           lfm({type: 'image', prefix: '/filemanager'}, function(lfmItems, path) {
             lfmItems.forEach(function (lfmItem) {
               context.invoke('insertImage', lfmItem.url);
             });
           });

         }
       });
       return button.render();
     };

     // Initialize summernote with LFM button in the popover button group
     // Please note that you can add this button to any other button group you'd like
     $('#summernote-editor').summernote({
       toolbar: [
         ['popovers', ['lfm']],
       ],
       buttons: {
         lfm: LFMButton
       }
     })
   });
 </script>
  <script>{!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}</script>
  <script>$('#lfm').filemanager('image');</script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    // $('#lfm').filemanager('file', {prefix: route_prefix});
  </script>
  <script>
    var lfm = function(id, type, options) {
      let button = document.getElementById(id);

      button.addEventListener('click', function () {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        var target_input = document.getElementById(button.getAttribute('data-input'));
        var target_preview = document.getElementById(button.getAttribute('data-preview'));

        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
          var file_path = items.map(function (item) {
            return item.url;
          }).join(',');

          // set the value of the desired input to image url
          target_input.value = file_path;
          target_input.dispatchEvent(new Event('change'));

          // clear previous preview
          target_preview.innerHtml = '';

          // set or change the preview image src
          items.forEach(function (item) {
            let img = document.createElement('img')
            img.setAttribute('style', 'height: 5rem')
            img.setAttribute('src', item.thumb_url)
            target_preview.appendChild(img);
          });

          // trigger change event
          target_preview.dispatchEvent(new Event('change'));
        };
      });
    };

    lfm('lfm2', 'file', {prefix: route_prefix});
  </script>
@endpush