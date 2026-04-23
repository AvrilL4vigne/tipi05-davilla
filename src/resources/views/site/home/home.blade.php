@extends('layout.site')

@section('content')


   @include('site.home.slider.slider')

    @include('site.home.services.services')
    @include('site.home.action.action')
    @include('site.home.features.features')
    @include('site.home.pricing.pricing')
    @include('site.home.recipes.recipes')

 
    @include('site.home.testimonials.testimonials')

 
@endsection