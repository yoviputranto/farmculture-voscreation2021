<?php 

use Illuminate\Support\Str;

 ?>

@extends('master')

@section('title', 'Articles')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Articles</h1>
    <a href="{{route('article.create')}}" class="btn btn-sm btn-primary shadow-sm"><i
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
                        <th>Author</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Summary</th>       
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!--{{$no = 1}}-->
                  @forelse ($articles as $article)
                    @if ($article->title == 'The Art Of Agriculture' or $article->title == 'Unlocking Indonesian Agriculture’s Digital Future' or $article->title == 'Agriculture Sector Catches Indonesian Workforce' or $article->title == 'The Evolution Of Agriculture' or $article->title == 'Digital Agriculture Strategy' or $article->title == 'Agriculture 5.0: Artificial Intelligence, Iot & Machine Learning' or $article->title == 'Agriculture’s Digital Future' or $article->title == 'Agriculture Sector, Industrial Era 4.0 And Society 5.0')
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$article->category->name}}</td>
                            <td>{{$article->author}}</td>
                            <td>{{$article->title}}</td>
                            <td>
                                <img src="{{Storage::url($article->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                            </td>
                            <td>{!!Str::words($article->body,7,'...')!!}</td>
                            <td>{{$article->status}}</td>
                            <td>{{$article->created_at}}</td>
                            <td>
                                <a href="{{route('article.edit', $article->id)}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$article->category->name}}</td>
                            <td>{{$article->author}}</td>
                            <td>{{$article->title}}</td>
                            <td>
                                <img src="{{Storage::url($article->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                            </td>
                            <td>{!!Str::words($article->body,7,'...')!!}</td>
                            <td>{{$article->status}}</td>
                            <td>{{$article->created_at}}</td>
                            <td>
                                <a href="{{route('article.edit', $article->id)}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form id="delete-company" action="{{route('article.destroy', $article->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button id="delete" class="btn btn-danger" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                    @endif
                  @empty
                    <tr>
                        <td colspan="9" class="text-center">
                            Empty Data 
                        </td>
                    </tr>        
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')


@endpush