@extends('dashboard.adminLayout.adminApp')
@section('admin')
@section('title', 'Profile')

<div class="h-screen">

    @section('dashboardCover', 'Add Product')
    @include('dashboard/profileHeader')

    @include('dashboard/eCommerce/addProduct/addProductForm')


</div>

@endsection