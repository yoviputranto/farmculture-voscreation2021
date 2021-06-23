@extends('master')

@section('title', 'Create Category')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
    
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
             <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}" required>
         </div>
         <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>
@endsection