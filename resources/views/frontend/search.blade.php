@extends('frontend.master')

@section('title', 'Search Articles')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url(assets/pictures/header-image-article.png); background-size: cover; height:40px">
        <div class="container text-center text-white align-middle">
          <h1 class="display-4">Search articles</h1>
        </div>
      </div>
      <!-- End of Jumbotron -->

      <div class="container">
        <h3 class="mb-3 mt-3 ml-5">Search result for: {{$keyword}}</h3>
      </div>
      <!--
      <section class="article-list mt-5">
        <div class="container">
          <div class="row d-flex justify-content-evenly">
              @foreach ($articles as $article)              
                <div class="col-12 col-lg-4 text-center">
                    <figure class="figure">
                      <img src="{{Storage::url($article->image)}}" class="figure-img img-fluid rounded" alt="...">
                      <figcaption class="figure-caption">
                        <div class="date-category d-flex justify-content-center">
                          <p class="text-secondary">{{$article->created_at}}</p>
                          <p>&#9679;</p>
                          <p class="exception">{{$article->category->name}}</p>
                        </div>
                        <a href="{{ route('detail', $article->slug)}}" style="text-decoration: none; color: #6C757D;"><h3>{{$article->title}}</h3>
                          <hr></a>
                        <p class="text-secondary">{!!Str::words($article->body,7,'...')!!}</p>
                      </figcaption>
                    </figure>
                  </div>
                
                  
              @endforeach
            

          </div>
        </div>
    </section>-->

    <section class="article-list mt-5">
      <div class="container">
        <div class="row d-flex">
            @foreach ($articles as $article)
              <div class="col-12 col-lg-4 text-center">
                  <figure class="figure">
                    <div class="article-image">
                      <img src="{{Storage::url($article->image)}}" class="figure-img img-fluid rounded" width="318px" height="180px" alt="...">
                    </div>                                
                    <figcaption class="figure-caption">
                      <div class="date-category d-flex justify-content-center">
                        <p class="text-secondary">{{$article->created_at}}</p>
                        <p>&#9679;</p>
                        <p class="exception">{{$article->category->name}}</p>
                      </div>
                      <a href="{{ route('detail', $article->slug)}}" style="text-decoration: none; color: #6C757D;"><h4>{{Str::words($article->title,5,'')}}</h4>
                        <hr></a>
                      <p class="text-secondary">{!!Str::words($article->body,16,'...')!!}</p>
                    </figcaption>
                  </figure>
                </div>
        
                
            @endforeach
          

            </div>
          </div>
    </section>
  
      <!-- End of Menu Bar -->
  
      <!-- List of Articles -->
      
      <!-- End of List of Articles -->
      
@endsection