@extends('layouts.app')

@section('main')

    <!-- Hero Section -->
    @include('components.welcome-part.hero-section')
    <!-- Features -->
    @include('components.welcome-part.features')

    @include('components.welcome-part.product-card')

@endsection