@extends('master')

@section('title', 'Profile')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
</div>

  <div class="row">
    <div class="col col-lg-4 col-sm-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                src="{{asset('img/undraw_profile.svg')}}" width="150px"
                alt="User profile picture">
          </div>
    
          <h3 class="profile-username text-center">{{$user->name}}</h3>
    
          <p class="text-muted text-center">{{$user->profession}}</p>
          <p class="text-muted text-center">{{$user->email}}</p>    
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-4">
      <div class="card card-row card-secondary">
        <div class="card-header bg-primary">
          <h3 class="card-title text-white">
            Access
          </h3>
        </div>
        <div class="card-body">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h5 class="card-title">Category</h5>
            </div>
            <div class="card-body">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="customCheckbox1" disabled="" wtx-context="1A282C26-3D73-468F-8646-2BD1A4BE7EAF">
                <label for="customCheckbox1" class="custom-control-label">Create Category</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="customCheckbox2" disabled="" wtx-context="CEE698FF-F8DD-4612-8498-526968F4F9DA">
                <label for="customCheckbox2" class="custom-control-label">Edit Category</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="customCheckbox3" disabled="" wtx-context="8EA2B634-8AFA-46E8-84E7-F248268DA3C8">
                <label for="customCheckbox3" class="custom-control-label">Delete Category</label>
              </div>
            </div>
            <div class="card-header">
              <h5 class="card-title">Article</h5>
            </div>
            <div class="card-body">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="customCheckbox1" disabled="" wtx-context="1A282C26-3D73-468F-8646-2BD1A4BE7EAF">
                <label for="customCheckbox1" class="custom-control-label">Create Article</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="customCheckbox2" disabled="" wtx-context="CEE698FF-F8DD-4612-8498-526968F4F9DA">
                <label for="customCheckbox2" class="custom-control-label">Edit Article</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked id="customCheckbox3" disabled="" wtx-context="8EA2B634-8AFA-46E8-84E7-F248268DA3C8">
                <label for="customCheckbox3" class="custom-control-label">Delete Article</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-4">
    </div>
  </div>
    
<!-- /.card-body -->
<!-- Content Row -->


@endsection
    

    

