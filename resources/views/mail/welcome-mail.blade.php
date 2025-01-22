@extends('mail.layout')

@section('content')
    <h1>Welcome to RFS Logo Design</h1>
    <p>Dear {{ $user->name }},</p>
    <br>
    <p>Welcome to RFS Logo Design. We are excited to have you on board.</p>
    <br>
    <p>Thank you for signing up.</p>
    <p>Best regards,</p>
    <p>RFS Logo Design</p>
@endsection
