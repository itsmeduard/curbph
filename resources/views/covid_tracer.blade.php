@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <img src="{{ asset('public/img/curbph_logo.png') }}" width='30%' height='20%'>
            </div>
            <br>
            <span><b>ECQ Tracer</b></span>
            <br>
            <div class='content-box'>The swift and rapid impact of Covid-19 in the entire Luzon, caused the implementation of enhancedcommunity quarantine in the region. Our team CURBPh would like to help by being part of the solution to curb the transmission of Covid -19 by gathering information that the government agency or other sectors would be able to use to trace and understand the transmission of Covid-19 respiratory disease in the Filipino household specially those who may need proper assistance from the government and those of higher risk or more vulnerable of acquiring the dreaded virus. This project needs your help and assistance. Your contributions and suggestions will be greatly appreciated! Together we can flatten the curve of Covid-19 transmission!</div>
            <br>
            <div>
                <button onclick=' window.location.href = "{{URL::to("covid_tracer_q")}}" ;' style=" height: 50px; width: 120px">Start</button>
            </div>
        </div>
    </div>
@endsection