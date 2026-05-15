@extends('layouts.app')

@section('main')

    @include('components.about-part.hero-section')

    @include('components.about-part.about')

    @include('components.about-part.mission')

    @include('components.about-part.member')

    <style>
        /* Minimal Custom CSS for branding & animations */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f7;
            color: #1d1d1f;
        }

        .text-brand {
            color: #0071e3 !important;
        }

        /* Custom Button */
        .btn-brand {
            background: #0071e3;
            color: white;
            transition: 0.3s;
            border: none;
        }

        .btn-brand:hover {
            background: #005bb5;
            color: white;
        }

        /* Hover Animation for Cards */
        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
        }

        /* Exact 20px border radius from your design */
        .rounded-custom {
            border-radius: 20px !important;
        }
    </style>

@endsection