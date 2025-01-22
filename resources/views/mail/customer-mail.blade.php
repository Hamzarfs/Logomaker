@extends('mail.layout')

@section('content')
    <div>
        <p>Dear {{ $data['name'] }},</p>
        <br>
        <p>We hope this email finds you well. We want to confirm that your form has been successfully received and one of our representatives will contact you soon. Once again, thank you for choosing {{ config('app.name') }}. We appreciate your engagement and eagerly anticipate the opportunity to create something special for you.</p>
        <br>
        <p>For any inquiries or assistance,</p>
        <p>Please feel free to contact us at <a href="tel:+1 (551) 666-5255">+1 (551) 666-5255</a></p>
        <br>
        <p>Warm regards,</p>
        <p>{{ config('app.name') }}</p>
        <p><a href="mailto:support@rfslogodesign.com">support@rfslogodesign.com</a></p>
    </div>
@endsection
