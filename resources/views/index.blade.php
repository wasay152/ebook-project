@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    @include('partials.hero')
    @include('partials.featured')
    @include('partials.book')
    @include('partials.author')
    @include('partials.contact')
    @include('partials.booklibrary')
    

@endsection
