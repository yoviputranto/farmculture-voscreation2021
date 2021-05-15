@extends('master')

@section('title', 'Categories')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category</h1>
    <a href="{{route('category.create')}}" class="btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Create Category</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!--{{$no = 1}}-->
                  @forelse ($categories as $category)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>
                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('category.destroy', $category->id)}}" method="POST" class="d-inline">
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
                        <td colspan="7" class="text-center">
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