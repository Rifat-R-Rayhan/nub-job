@extends('client.layouts.homelayout')

@section('content')
    @include('client.components.slider');
    @include('client.components.search');
    @include('client.components.category');
    @include('client.components.list');
@endsection
