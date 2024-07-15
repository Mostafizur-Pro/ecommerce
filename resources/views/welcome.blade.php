@extends('layouts.app')
@section('content')
@section('title', 'Home')

<div>
    @include('components/home/banner')
    @include('components/home/featured')
    @include('components/home/product')
    @include('components/shared/baked/baked')


</div>

@endsection