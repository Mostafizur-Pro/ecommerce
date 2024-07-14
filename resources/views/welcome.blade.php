@extends('layouts.app')
@section('content')
@section('title', 'Home')

<div>
    @include('components/home/banner')
    @include('components/home/featured')
    @include('components/shared/baked/baked')


</div>

@endsection