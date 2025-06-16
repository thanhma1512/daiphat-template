@extends('layout.app')
@section('content')
    <div class="page-content-wrapper">
        @include('index.partials.panner')
        @include('index.partials.advantages')
        @include('index.partials.image_gallery')
        @include('index.partials.product_categories')
        @include('index.partials.product-categories-section')
        @include('index.partials.product_and_banner_section')
        @include('index.partials.product_and_banner_section1')
        @include('index.partials.product_and_banner_section2')
        @include('index.partials.contact')
    </div>
@endsection
