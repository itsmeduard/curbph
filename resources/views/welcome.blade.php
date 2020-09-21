@extends('master-layout')
@section('content')
    <div class='flex-center position-ref full-height'>
        <div class='content-main'>
            <div class='m-bottom'>
                <img src="{{ asset('public/img/curbph_logo.png') }}" width='80%' height='70%'>
            </div>
            <div>
                <button onclick=' window.location.href = "{{URL::to("mainpage")}}" ;' style=" height: 50px; width: 100px">Start</button>
            </div>
        </div>
    </div>
@endsection