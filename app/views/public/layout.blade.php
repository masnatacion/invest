@extends("public.skeleton")
@section("skeleton")

    @if(!isset($disable_header))
      @include("public.header")
    @endif




      @yield("top-content")
    <div class="container">
      @yield("content")
    </div>

    @if(!isset($disable_footer))
      @include("public.footer")
    @endif


@stop