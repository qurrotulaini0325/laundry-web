@extends('layouts.app')

@section('title', 'Make a Reservation')

@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Make a Reservation</h1>
                    <p class="mb-4">Book your laundry service with us today.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reservation-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="reservation-form p-4 bg-light rounded">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Service Type</label>
                        <select class="form-control" id="service" required>
                            <option value="">Select a service</option>
                            <option value="wash-iron">Wash & Iron</option>
                            <option value="express">Express Service</option>
                            <option value="premium">Premium Care</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pickup-date" class="form-label">Pickup Date</label>
                        <input type="date" class="form-control" id="pickup-date" required>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Special Instructions</label>
                        <textarea class="form-control" id="notes" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection