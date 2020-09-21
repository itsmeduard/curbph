@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <a href='{{URL::to('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
            </div>
            <span style='font-size: 25px'><b>Mobile Seller Locator</b></span><br>
            <span style='font-size: 13px; max-width: 85%;'><b>Product List in {{ $data->first()->city_municipality_description ?? '' }}, {{ $data->first()->province_description ?? '' }}</b></span>
            <br><br>
            <div>
                    @php $i=1; @endphp
                    @forelse($data as $d)
                        @if($d->product != null)
                            @if($i  % 2 == 0)
                                <a onclick=' window.location.href = "{{route('msl_item', $d->item_id)}}" ;' style='height: 50px;  font-size: 15px;'><span style='float: left;margin-left:8%;width: 85%;text-align: left;background-color: #dad9d7'>{{ $i++ }}.{{ $d->product }}</span></a><br>
                                
                            @else
                                <a onclick=' window.location.href = "{{route('msl_item', $d->item_id)}}" ;' style='height: 50px;  font-size: 15px;'><span style='float: left;margin-left:8%;width: 85%;text-align: left'>{{ $i++ }}.{{ $d->product }}</span></a><br>
                            
                            @endif
                        @endif
                    @empty
                        <p>No record found.</p>
                    @endforelse
                
            </div>

            <div style="position: fixed; bottom: 20%; width: 100%">
                <button type='button' onclick=' window.location.href = "{{URL::to("msl")}}" ;' style='height: 50px; width: 220px; font-size: 20px;'>Back</button>

                {{-- <button type='submit' style='height: 50px; width: 220px; font-size: 20px;'>Find Product</button> --}}
            </div>
        </div>
    </div>
    <div id="hp-ctn-howItWorks-left" style='bottom:500px; width: 90px; font-color: white; color: white;'>
        <p><a href='{{route('mainpage')}}'><font color="FFFFFF">Home</font></a></p>
    </div>
    <div id="hp-ctn-howItWorks-left" style='bottom:405px; width: 70px'>
        <p><a onclick="document.getElementById('info').style.display='block'" id='information'>Info</a></p>
    </div>
    <div id='info' class='modal'> 
        <span onclick="document.getElementById('info').style.display='none'" class='close' title='Close Modal'>×</span> 
        <form class='modal-content animate'> 
            <div> 
                <p style='margin: 10px 10px 10px 10px;'>This system will help in locating sellers of specific goods nearby by providing their FB and messenger link and contact numbers. The system will also serve as a platform for sellers to get easily contacted and arrange with their buyers directly.<br><br>
                How to use: 
                <a onclick="document.getElementById('htu').style.display='block';document.getElementById('info').style.display='none'" style='color: blue'>Click Me</a>
                </p>
            </div> 
        </form> 
    </div>
    <div id="hp-ctn-howItWorks-left" style='bottom:330px; width: 110px'>
        <p><a onclick="document.getElementById('htu').style.display='block'">How to Use</a></p>
    </div>
    <div id='htu' class='modal'> 
        <span onclick="document.getElementById('htu').style.display='none'" class='close' title='Close Modal'>×</span> 
        <form class='modal-content animate'> 
            <div> 
                <p style='margin: 10px 10px 10px 10px;'>
                    <b>Accessing the CURBPh Mobile Seller Locator</b><br><br>
                    Step1: To access the Mobile Seller Locator, the user will have to click on the Mobile Seller Locator
                    button in the main page.<br><br>
                    Step2: The button will lead the user to the page where he/she could read the information about the
                    Seller locator.<br><br>
                    Step 3: To proceed the user will be asked to input and select his province, city/town and barangay and
                    click next.<br><br>
                    Step4: If the Seler locator is already updated the user will be able to see the following in relation to
                    his/her selected barangay.<br><br>
                    Products or Services<br>
                    Name of Seller<br>
                    Contact Information<br>
                    Mobile Number<br>
                    FB Messenger link<br>
                    Additional Description<br>
                    And if delivery is free or not<br><br>

                    Step 5: If the seller located is not yet updated the user can update proper information by clicking the
                    edit information button on the top the page and click again when done.<br><br>
                    Step 6: The user may now search and click the button for other locations where sellers of specific
                    products are available
                </p>
            </div> 
        </form> 
    </div>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
@endsection