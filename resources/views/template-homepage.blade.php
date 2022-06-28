{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  {{-- @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile --}}

  <x-hero-component 
    :menu="$menus['primary_navigation']"
    :titleSliceOne="$data['titleSliceOne']" 
    :titleSliceTwo="$data['titleSliceTwo']" 
    :text="$data['text']" 
    buttonPrimary="Like" 
    buttonGhost="Dislike" 
    :image-id="1" 
    class="bg-color-red text-color-white"
  />

<div class="bg-indigo-400" style="padding:200px 0"></div>

<x-hero-component 
    :menu="$menus['primary_navigation']"
    titleSliceOne="I was Joking" 
    titleSliceTwo="he is not" 
    text="ewqerwreewqe" 
    buttonPrimary="Like" 
    buttonGhost="Dislike" 
    :image-id="1" 
    class="bg-color-red text-color-white"
/>
  
@endsection

@section('pagefooterjs')
@endsection