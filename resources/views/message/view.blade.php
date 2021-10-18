@extends('layouts.admin')
@section('content')
    <div class="bg-white shadow rounded-sm p-4">
        <h2 class=""><b>Inquiry details:</b></h2>
        <p><b>Name:</b> {{ $inquiry->name }}</p>
        <p><b>Email:</b> {{ $inquiry->email }}</p>
        <p><b>Message:</b> {{ $inquiry->message }}</p>
    </div>
@endsection
