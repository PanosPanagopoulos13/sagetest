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
    :titleSliceOne="$data['titleSliceOne']" 
    :titleSliceTwo="$data['titleSliceTwo']" 
    :text="$data['text']" 
    buttonPrimary="Like" 
    buttonGhost="Dislike" 
    :image-id="1" 
    class="bg-color-red text-color-white"
  />


@endsection
