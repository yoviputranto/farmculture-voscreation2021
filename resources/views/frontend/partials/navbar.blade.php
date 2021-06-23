<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('assets/icons/navbar-logo.png')}}" width="120px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i title="" class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link {{request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Agriculture</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link {{request()->is('articles') ? 'active' : ''}}" href="{{route('articles')}}">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="{{route('about')}}">About Us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" style="background-color: #008325;" href="login-page.html">Log in</a>
          </li> -->
        </ul>
        <!--<form action="{{ route('search')}}" method="GET">
          <div class="box-container">
            <div class="form-group">
              <input type="search" placeholder="Search" name="search" class="search" class="form-control">
              <button type="submit" class="btn-sm bg-transparent">
                <img src="{{asset('assets/icons/search.png')}}" width="12px" alt="seacrh">
              </button>
            </div>
          </div>
        </form>-->
        <!--
        <form action="{{ route('search')}}" method="GET" class="d-none d-flex form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="form-group">
                <input type="text" class="form-control bg-transparent border-1 border border-white small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <span>
                  <button class="btn btn-success rounded-circle" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </span>
                <div class="input-group-append">
                    <button class="btn btn-success rounded-circle" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
         </form>-->
    
    <form class="d-flex" action="{{ route('search')}}" method="GET">
      <div class="form-group d-flex">
        <input name="search" class="form-control form-control-sm me-2 border-white bg-transparent text-white rounded-pill" style="color: white; height: 50%" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success rounded-circle btn-sm" type="submit">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
      
    </form>
        <!--<div class="box-container">
          <table class="element-container">
            <tr>
              <td>
                <input type="text" placeholder="Search" class="search">
              </td>
              <td>
                <a href="#">
                  <img src="{{asset('assets/icons/search.png')}}" width="14px" alt="seacrh">
                </a>
              </td>
            </tr>
          </table>
        </div>-->
      </div>
    </div>
  </nav>
  <!-- End of Navigation Bar -->
  