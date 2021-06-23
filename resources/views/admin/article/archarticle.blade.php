<?php 

use Illuminate\Support\Str;

 ?>

@extends('master')

@section('title', 'Articles')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Archived Articles</h1>
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
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$article->category->name}}</td>
                        <td>{{$article->author}}</td>
                        <td>{{$article->title}}</td>
                        <td>
                            <img src="{{Storage::url($article->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                        </td>
                        <td>{{Str::words($article->body,7,'...')}}</td>
                        <td>{{$article->status}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>
                            <a href="{{route('article.edit', $article->id)}}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('article.destroy', $article->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                  @empty
                    <tr>
                        <td colspan="8" class="text-center">
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