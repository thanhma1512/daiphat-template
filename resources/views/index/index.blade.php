@extends('layout.app')
@section('content')
    <div class="page-content-wrapper">
        @include('index.partials.panner')
        @include('index.partials.advantages')
        @include('index.partials.image_gallery')
        @include('index.partials.product_categories')
    </div>
@endsection
