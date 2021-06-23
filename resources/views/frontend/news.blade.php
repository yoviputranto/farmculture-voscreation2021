@extends('frontend.master')

@section('title', 'Articles')

@section('content')
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
            @foreach ($items as $item)
            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark bg-white" id="pills-{{$item->name}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$item->name}}" type="button" role="tab" aria-controls="pills-{{$item->name}}" aria-selected="true">{{$item->name}}</button>
              </li>
            @endforeach
          </ul>

          
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-home-all">
                <section class="article-list mt-5">
                    <div class="container">
                      <div class="row d-flex">
                          @foreach ($articles as $article)
                          @if ($article->status == 'Published' )
                          <div class="col-12 col-lg-3 text-center">
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
                                <a href="{{ route('detail', $article->slug)}}" style="text-decoration: none; color: #6C757D;"><h4>{{Str::words($article->title,7,'')}}</h4>
                                  <hr></a>
                                <p class="text-secondary">{!!Str::words($article->body,16,'...')!!}</p>
                              </figcaption>
                            </figure>
                          </div>
                          @endif
                          
                          @endforeach
                    </div>
                  </section>
            </div>  
            @foreach ($items as $item)
            <div class="tab-pane fade show" id="pills-{{$item->name}}" role="tabpanel" aria-labelledby="pills-{{$item->name}}-tab">
                <section class="article-list mt-5">
                    <div class="container">
                      <div class="row d-flex">
                          @foreach ($articles as $article)
                            @if ($article->category->name == $item->name && $article->status == 'Published')
                            <div class="col-12 col-lg-3 text-center">
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
                            @endif
                              
                          @endforeach
                        

                      </div>
                    </div>
                  </section>
            </div>
            @endforeach
            
          </div>
      </section>
  
      <!-- End of Menu Bar -->
  
      <!-- List of Articles -->
      
      <!-- End of List of Articles -->
      
@endsection