@extends("public.skeleton")
@section("skeleton")

    @if(!isset($disable_header))
      @include("public.header")
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


      @yield("top-content")
    <div class="container">
      @yield("content")
    </div>

    @if(!isset($disable_footer))
      @include("public.footer")
    @endif


@stop