@extends("cmb.skeleton")
@section("skeleton")

    @include("cmb.header")



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron @yield('jumbotron')">

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

              <li class="@if(str_contains(Route::currentRouteName(),'dashboard')) active @endif"><a href="./cmb/dashboard">Overview <span class="sr-only">(current)</span></a></li>
<!--               <li>{{ HTML::link('cmb/reports','Reports') }}</li>
              <li>{{ HTML::link('cmb/analytics','Analytics') }}</li>
              <li>{{ HTML::link('cmb/export','Export') }}</li> -->
              <li class="@if(str_contains(Route::currentRouteName(),'profile')) active @endif" >{{ HTML::link('cmb/profile','Profile') }}</li>
              <li class="@if(str_contains(Route::currentRouteName(),'warehouse')) active @endif">{{ HTML::link('cmb/warehouse','Warehouse') }}</li>
              <li class="@if(str_contains(Route::currentRouteName(),'services')) active @endif">{{ HTML::link('cmb/services','Services') }}</li>
              <li class="@if(str_contains(Route::currentRouteName(),'message')) active @endif">{{ HTML::link('cmb/messages','Messages') }}</li>
              <li class="@if(str_contains(Route::currentRouteName(),'balance')) active @endif">{{ HTML::link('cmb/balance','Balance') }}</li>
              <li class="@if(str_contains(Route::currentRouteName(),'points')) active @endif">{{ HTML::link('cmb/points','Invitations and Points') }}</li>

              <li>{{ HTML::link('cmb/logout','Logout') }}</li>
            </ul>
          </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

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


              @yield("top-content")
            <div class="container">
              @yield("content")
            </div>

             @include("cmb.footer")
          </div>

        </div>
      </div>  




    </div>

     
@stop