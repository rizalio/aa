@extends('layouts.authhead')
@section('title', 'Login untuk mulai belajar!')
@section('content')
  @section('content')
    <body class="fixed-header ">
      <div class="login-wrapper ">
        <!-- START Login Background Pic Wrapper-->
        <div class="bg-pic">
          <!-- START Background Pic-->
          <img src="assets/img/login-board.jpg" data-src="assets/img/login-board.jpg" data-src-retina="assets/img/login-board.jpg" alt="" class="lazy">
          <!-- END Background Pic-->
          <!-- START Background Caption-->
          <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white quote" id="quote" width="auto"></h2>
            <p class="small">
              Hak Cipta &copy; {{date('Y')}} devscratch.com allright reserved.
            </p>
          </div>
          <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->
        <!-- START Login Right Container-->
        <div class="login-container bg-white">
          <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <img src="assets/img/devscratch-logo.png" alt="logo" data-src="assets/img/devscratch-logo.png" data-src-retina="assets/img/logo_2x.png" class="img-responsive">
            <!-- START Login Form -->
            <form id="form-login" class="p-t-15" role="form" action="{{url('/login')}}" method="post">
              <!-- START Form Control-->
              @if($errors->has('email'))
                <div class="alert alert-danger">
                  Tidak dapat masuk!, Periksa kembali entri kamu.
                </div>
              @elseif($errors->has('password'))
                <div class="alert alert-danger">
                  Tidak dapat masuk!, Periksa kembali entri kamu.
                </div>
              @endif
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group form-group-default">
                <label>Login</label>
                <div class="controls">
                  <input type="text" name="email" placeholder="Email" class="form-control" required>
                </div>
              </div>
              <!-- END Form Control-->
              <!-- START Form Control-->
              <div class="form-group form-group-default">
                <label>Password</label>
                <div class="controls">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
              </div>
              <!-- START Form Control-->
              <div class="row">
                <div class="col-md-6 no-padding">
                  <div class="checkbox ">
                    <input type="checkbox" value="1" id="checkbox1">
                    <label for="checkbox1">Biarkan saya tetap masuk</label>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <a href="{{url('/password/reset')}}" class="text-info small">Lupa Password?</a>
                </div>
              </div>
              <!-- END Form Control-->
              <button class="btn btn-success btn-cons m-t-10" type="submit">Login</button>
            </form>
            <!--END Login Form-->
            <br />
            <button class="btn btn-block btn-info" type="button">
              <span class="pull-left"><i class="fa fa-github"></i>
                            </span>
              <span class="bold">Login with Github</span>
            </button>
            <button class="btn btn-block btn-complete active" type="button">
              <span class="pull-left"><i class="fa fa-facebook"></i>
                            </span>
              <span class="bold">Login with Facebook</span>
            </button>
            <button class="btn btn-block btn-complete" type="button">
              <span class="pull-left"><i class="fa fa-twitter"></i>
                            </span>
              <span class="bold">Login with Twitter</span>
            </button>
            <button class="btn btn-block btn-danger" type="button">
              <span class="pull-left"><i class="fa fa-google-plus"></i>
                            </span>
              <span class="bold">Login with Google+</span>
            </button>
          </div>
        </div>
        <!-- END Login Right Container-->
      </div>
      <!-- START OVERLAY -->
      <div class="overlay hide" data-pages="search">
        <!-- BEGIN Overlay Content !-->
        <div class="overlay-content has-results m-t-20">
          <!-- BEGIN Overlay Header !-->
          <div class="container-fluid">
            <!-- BEGIN Overlay Logo !-->
            <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            <!-- END Overlay Logo !-->
            <!-- BEGIN Overlay Close !-->
            <a href="#" class="close-icon-light overlay-close text-black fs-16">
              <i class="pg-close"></i>
            </a>
            <!-- END Overlay Close !-->
          </div>
          <!-- END Overlay Header !-->
          <div class="container-fluid">
            <!-- BEGIN Overlay Controls !-->
            <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
            <br>
            <div class="inline-block">
              <div class="checkbox right">
                <input id="checkboxn" type="checkbox" value="1" checked="checked">
                <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
              </div>
            </div>
            <div class="inline-block m-l-10">
              <p class="fs-13">Press enter to search</p>
            </div>
            <!-- END Overlay Controls !-->
          </div>
          <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
          <div class="container-fluid">
            <span>
                  <strong>suggestions :</strong>
              </span>
            <span id="overlay-suggestions"></span>
            <br>
            <div class="search-results m-t-40">
              <p class="bold">Pages Search Results</p>
              <div class="row">
                <div class="col-md-6">
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                      <div>
                        <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                      <p class="hint-text">via john smith</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                      <div>T</div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                      <p class="hint-text">via pages</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                      <div><i class="fa fa-headphones large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                      <p class="hint-text">via pagesmix</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                </div>
                <div class="col-md-6">
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                      <div><i class="fa fa-facebook large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                      <p class="hint-text">via facebook</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                      <div><i class="fa fa-twitter large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                      <p class="hint-text">via twitter</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                      <div><i class="fa fa-google-plus large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                      <p class="hint-text">via google plus</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                </div>
              </div>
            </div>
          </div>
          <!-- END Overlay Search Results !-->
        </div>
        <!-- END Overlay Content !-->
      </div>
@endsection
