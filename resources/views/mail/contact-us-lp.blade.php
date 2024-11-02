@extends('mail.layout')

@section('content')
    <div>
        <h1>New Lead</h1>
        <br>
        <p><b>Package Details</b>: {{ $data['title'] }}</p>
        <p><b>Name</b>: {{ $data['name'] }}</p>
        <p><b>Email</b>: {{ $data['email'] }}</p>
        <p><b>Phone</b>: {{ $data['phone'] }}</p>
        <p><b>Message</b>: {{ $data['message'] }}</p>
    </div>
@endsection
