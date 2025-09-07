@extends('layouts.app')


@section('title', 'Purchase a Book')

@section('content')
    {{-- Form and book list will render from main.blade.php --}}
        @include('partials.bookpurchase')
@endsection
