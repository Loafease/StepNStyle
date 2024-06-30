@extends('layouts.app')

@section('title', 'Home - StepNStyle')

@section('content')
    <section class="hero">
        <h1 class="hero-title">Welcome to StepNStyle</h1>
        <p class="hero-subtitle">Explore the best footwear at unbeatable prices.</p>
        <a href="{{ route('shop.index') }}" class="hero-button">Shop Now</a>
    </section>
@endsection
