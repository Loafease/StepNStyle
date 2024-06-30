@extends('layouts.app')

@section('title', 'Contact Us - StepNStyle')

@section('content')
    <section class="contact">
        <div class="container">
            <h1 class="section-title">Contact Us</h1>
            <form action="/contact" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="contact-submit">Send Message</button>
            </form>
        </div>
    </section>
@endsection
