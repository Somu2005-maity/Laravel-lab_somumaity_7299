
@extends('layouts.app')

@section('title', 'About Us - Creative Studio')

@section('heading', 'About Our Studio')

@section('subtitle', 'Learn more about our vision and mission.')

@section('content')
    <h2>Who We Are</h2>

    <p>
        Creative Studio is a fictional digital design company focused
        on modern website design and creative solutions.
    </p>

    <h2>Our Mission</h2>

    <p>
        Our mission is to build attractive, responsive and accessible
        websites that provide a good user experience.
    </p>

    <h2>Our Services</h2>

    <ul>
        <li>Website Design</li>
        <li>Web Development</li>
        <li>Responsive UI Design</li>
        <li>Creative Digital Solutions</li>
    </ul>

    <a href="{{ url('/') }}" class="button">Back to Home</a>
@endsection
