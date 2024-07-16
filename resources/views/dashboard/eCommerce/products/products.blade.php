@extends('dashboard.adminLayout.adminApp')
@section('admin')
@section('title', 'Profile')

<div class="">
    @section('cover', 'Product')
    @include('components/cover/cover')

    @include('dashboard/eCommerce/products/productCard')
</div>

@endsection