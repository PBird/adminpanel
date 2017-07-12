@extends('site.layouts.master')

@section('head')

    @include('site.pages.head')

@endsection('head')

@section('header')

    @include('site.pages.nav')
    @include('site.pages.hero');

@endsection('header')

@section('body')



    @include('site.pages.feature')

    @include('site.pages.meals')

    @include('site.pages.works')

    @include('site.pages.cities')

    @include('site.pages.testimonials')

    @include('site.pages.plans')

    @include('site.pages.form')

    @include('site.pages.footer')

    @include('site.pages.scripts')

@endsection('body')
