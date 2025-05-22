@extends('layouts.app')

@section('title', 'Verify-email')

@section('content')
<x-guest-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header">
                        {{ __('Verify Your Email Address') }}
                    </div>

                    <div class="card-body">
                        <p class="text-muted mb-4">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Resend Verification Email') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
@endsection
