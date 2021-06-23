@extends('frontend.master')

@section('title') 

{{$article->title}}

@endsection


@section('content')
    <!-- Article Image -->
    <div class="hero-image">
        <!--<img class="hero-image" src="{{Storage::url($article->image)}}"  alt="..."> -->
        <img src="{{Storage::url($article->image)}}" class="img-fluid" alt="...">
        <div class="overlay">
        </div>
    </div>
      <!-- End of Article Image -->
  
      <!-- Article Header -->
      <section class="article-header mt-5">
        <div class="container">
          <h6 class="exception">{{$article->category->name}}</h6>
          <h1>{{$article->title}}</h1>
          <p>{{$article->created_at}}</p>
          <hr>
        </div>
      </section>
      <!-- End of Article Header -->
  
      <!-- Article Writing -->
      <section class="article-writing">
        <div class="container">
          <div class="row">
            <div class="col-8 col-lg-8">
                {!! $article->body !!}
            </div>
            <div class="d-none d-lg-block col-lg-4">
              <div class="card newest-article">
                <div class="card-body">
                  <h4 class="card-title mb-4 text-start">Newest Post</h4>
                  <hr>
                  @foreach ($items as $item)
                  @if ($item->status == 'Published')
                  <div class="row mb-3">
                    <div class="col-4">
                      <img src="{{Storage::url($item->image)}}" width="120px" alt="">
                    </div>
                    <div class="col">
                      <a class="text-decoration-none text-dark" href="{{ route('detail', $item->slug)}}">
                        <h5>{{Str::words($item->title,5,'')}}</h5>
                      </a>
                      <small class="text-muted">{{$item->created_at}}</small>
                    </div>
                  </div>
                  @endif
                  
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Article Writing -->
      
@endsection