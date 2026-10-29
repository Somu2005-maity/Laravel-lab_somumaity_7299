
@extends('layouts.app')

@section('title', 'Home - Creative Studio')

@section('heading', 'Bring Your Ideas to Life')

@section('subtitle', 'We create modern, creative and responsive digital experiences.')

@section('content')
    <h2>Welcome to Our Website</h2>

    <p>
        Creative Studio is a sample website built using Laravel Blade
        template inheritance. It demonstrates how multiple pages can
        share a common design while displaying different content.
    </p>

    <p>
        Our goal is to create simple, attractive and user-friendly
        digital experiences for everyone.
    </p>

    <a href="{{ url('/about') }}" class="button">Learn More</a>
@endsection
