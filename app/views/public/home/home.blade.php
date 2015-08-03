@extends("public.layout")

@section("class")
home
@stop

@section("jumbotron")
@stop


@section("top-content")
	@include("public.home.carousel")
@stop


@section("content")
	@include("public.home.panels")
	@include("public.home.content")
@stop


