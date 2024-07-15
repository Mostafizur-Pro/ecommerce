@extends('layouts.app')
@section('content')
@section('title', 'Recipes')

<div>
    @section('cover', 'Recipes')
    @include('components/cover/cover')
    @include('components/recipes/product')
    @include('components/recipes/instagramPost')
    @include('components/shared/baked/baked')
</div>

@endsection