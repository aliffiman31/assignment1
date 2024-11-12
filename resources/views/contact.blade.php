@extends('layouts.master')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <!-- Card Container for Contact Form -->
    <div class="card p-5 shadow-lg border-0 w-100" style="max-width: 700px; border-radius: 15px;">
        <h2 class="text-center mb-4">Contact Me</h2>
        <form>
            <div class="form-group mb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your name">
            </div>
            <div class="form-group mb-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your email">
            </div>
            <div class="form-group mb-4">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2">Send Message</button>
        </form>
    </div>
</div>
@endsection