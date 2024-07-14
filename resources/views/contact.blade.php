@extends('layouts.app')
@section('content')
@section('title', 'contact')

<div>
    @section('cover', 'Contact')
    @include('components/cover/cover')
    @include('components/contact/contact')
    @include('components/shared/baked/baked')
</div>

Contact Page

@endsection