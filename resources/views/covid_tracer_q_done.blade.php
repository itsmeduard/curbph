@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <a href='{{URL::to('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
            </div>
            <br>
            <br>
            <br>
            <center><h2>Thank you</h2></center>
            <form enctype='multipart/form-data'>
                <center>
                    <div style='width: 90%'>
                        <label>If you think you have COVID19 call DOH Emergency Hotline 1555 for proper assistance.</label><br>
                        
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <div>
                        {{-- <button type='submit' style='height: 50px; width: 100px; font-size: 20px;'>Home</button> --}}

                        <center><button type='button' onclick=' window.location.href = "{{URL::to("mainpage")}}" ;' style=" height: 50px; width: 120px; display: block; float: center; ">Home</button></center>
                    </div>
                </center>
            </form>
        </div>
    </div>
    {{-- <div id="hp-ctn-howItWorks-left" style='bottom:410px; width: 90px; font-color: white; color: white;'>
        <p><a href='{{route('mainpage')}}'><font color="FFFFFF">Home</font></a></p>
    </div> --}}
    <div id="hp-ctn-howItWorks-left" style='bottom:317px; width: 90px'>
        <p><a onclick="document.getElementById('info').style.display='block'">Info</a></p>
    </div>
    <div id='info' class='modal'> 
        <span onclick="document.getElementById('info').style.display='none'" class='close' title='Close Modal'>×</span> 
        <form class='modal-content animate'> 
            <div> 
            {{-- <textarea style='height: 300px;overflow: hidden;' readonly> --}}<p style='margin: 10px 10px 10px 10px;'>This system gives utmost focus on everyone’s health by gathering information that the government agency or other sectors would be able to use to trace and understand the transmission of Covid-19 respiratory disease in the Filipino household under ECQ specially those who may need proper assistance from the government and isolation of those manifesting symptoms or of higher risk or more vulnerable to the corona virus.
            {{-- </textarea> --}}</p>
        </div> 
        </form> 
    </div>
@endsection