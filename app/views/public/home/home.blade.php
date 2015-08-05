@extends("public.layout")

@section("class")
home
@stop


@section("content")
	@include("public.home.carousel")
	@include("public.home.inmuebles")
	@include("public.home.botones")
	@include("public.home.quienes-somos")
	@include("public.home.mapa")
	@include("public.home.contactanos")
@stop


