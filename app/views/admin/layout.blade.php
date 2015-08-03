@extends("admin.skeleton")
@section("skeleton")


    @if (Auth::admin()->check())
      @include("admin.dashboard.leftbar")
      @include("admin.dashboard.toolbar")
    @endif

    <!-- if there are creation errors, they will show here -->
    @if ($errors->all())
      <div class="alert alert-danger" role="alert">
        {{ HTML::ul($errors->all()) }}
      </div>
    @endif

    <!-- will be used to show any messages -->
    @if (Session::has('success'))
      <div class="alert alert-success" role="alert">{{ Session::get('success') }} :)</div>
    @endif

    @if (Session::has('error'))
      <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }} :(
      </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
              @yield("content")
            </div>
        </div>
    </div>




@stop