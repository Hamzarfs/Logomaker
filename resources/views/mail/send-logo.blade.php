@extends('mail.layout')

@section('content')
    <div>Please find your logo attached to this email.</div>

    <a href="{{ route('orders') }}">
        <img class="logo" src='{{ asset("orders/{$order->user_id}_{$order->product_id}.png") }}' alt="Logo">
    </a>
@endsection

@section('styles')
    <style>
        img.logo {
            width: 75%
        }
    </style>
@endsection