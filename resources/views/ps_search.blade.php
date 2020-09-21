@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <a href='{{URL::to('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
            </div>

            <center><h2 style='width: 90%; align-content: center'>Quarantine Pass Schedule</h2></center>
            <form role='form' method='get' action='{{route('ps_location')}}' enctype='multipart/form-data'>
                @csrf
                <div>
                    <label>Province: </label><br>
                    <select id='search_mun' name='province' required style='width: 70%'>
                        <option selected disabled></option>
                            @foreach($provinces as $p)
                                <option value='{{ $p->province_code }}'>{{ $p->province_description }}</option>
                            @endforeach
                    </select>
                </div>
                <br>

                <div>
                    <label>City or Municipality: </label><br>
                    <select id='search_brgy' name='mun' required style='width: 70%'>
                        <option>                         </option>
                    </select>

                    <select id='search_brgy_show' style='display: none;width: 70%'>
                        <option>Please wait...</option>
                    </select>

                    <select id='search_brgy_error' style='display: none;width: 70%'>
                        <option>Error...</option>
                    </select>
                </div>

                <br>
                <div>
                    <label>Barangay: </label><br>
                    <select id='brgy' name='brgy' required style='width: 70%'>
                        <option>                         </option>
                    </select>
                    <select id='brgy_show' style='display: none;width: 70%'>
                        <option>Please wait...</option>
                    </select>
                    <select id='brgy_error' style='display: none;width: 70%'>
                        <option>Error...</option>
                    </select>
                </div>
                <br>
                {{ csrf_field() }}
                @csrf
                <div>
                    <button type='submit' style='height: 50px; width: 100px; font-size: 20px;'>Submit</button>
                </div>
            </form>
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
                <p style='margin: 10px 10px 10px 10px;'>This system shall provide an updated schedule of pass in each localities, barangays and municipalities to assists everyone who needs to know their schedule so they could properly plan the time and day when will they go out to buy their supplies and attend to some family and personal errands.<br><br>
                How to use: 
                <a onclick="document.getElementById('htu').style.display='block';document.getElementById('info').style.display='none'" style='color: blue'>Click Me</a>
                </p>
            </div> 
        </form> 
    </div>
    <div id="hp-ctn-howItWorks-left" style='bottom:330px; width: 110px'>
        <p><a onclick="document.getElementById('htu').style.display='block'" id='information'>How to Use</a></p>
    </div>
    <div id='htu' class='modal'> 
        <span onclick="document.getElementById('htu').style.display='none'" class='close' title='Close Modal'>×</span> 
        <form class='modal-content animate'> 
            <div> 
                <p style='margin: 10px 10px 10px 10px;'>
                    <b>How to use CUBPh Mobile Responsive System</b><br>
                    General Process:<br><br>
                    CURBPh as mobile responsive system that can be accessed by typing in any browser
                    https://curbph.info<br><br>
                    Once entered in the search bar, the user will be brought to the home screen of the system. The user
                    are encouraged to read the menu such as about us, our response,data privacy and support us modals<br><br>
                    Each system has its own selection button which will lead the user to access the different services it
                    provides.<br><br>

                    Quarantine PASS Schedule<br><br>

                    <b>Accessing the CURBPh Quarantine PASS Schedule<br><br>
                    Step1: To access the Quarantine PASS Schedule, the user will have to click on the Quarantine PASS
                    Schedule button in the main page.<br><br>
                    Step2: The button will lead the user to the page where he/she could read the information about the
                    PASS schedule.<br><br>
                    Step 3: To proceed the user will be asked to input and select his province, city/town and barangay and
                    click next.<br><br>
                    Step 4: If the PASS schedule is already updated the user will be able to see the following in relation to
                    his/her selected barangay.<br><br>
                    Schedule and period of quarantine pass schedule per day<br><br>
                    Contact Person<br><br>
                    Mobile Number<br><br>
                    Description and More Information<br><br>
                    Step 5: If the PASS Schedule is not yet updated the user can update proper schedule by clicking the
                    edit information button bellow the page and click update information when done.<br><br>
                    Step 6: The user may now search and click the button for other locations quarantine PASS Schedule.
                </p>
            </div> 
        </form> 
    </div>
    {{-- <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"> --}}
    {{-- <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script> --}}
    @include('best_script_js')
    <script type='text/javascript'>
        $(window).on('load',function(){
            $("#information").trigger('click');
        });

        $("#search_mun").on("change", function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#search_brgy > option").remove();
            $.ajax({
                type: "POST",
                data: {
                    mun: $(this).val()
                },
                dataType: "JSON",
                
                url: "{{URL::to("search_mun")}}",
                
                beforeSend: function(){
                    $("#search_brgy").hide();
                    $("#search_brgy_show").show();
                },
                complete: function() {
                    $("#search_brgy").show();
                    $("#search_brgy_show").hide();
                },
                success: (data) => {
                    $('#search_brgy').html("<option value='0' selected></option>");
                    JSON.parse(JSON.stringify(data)).map(datas => {
                        $('#search_brgy').append(`<option value='${datas.city_municipality_code}'>${datas.city_municipality_description}</option>`)
                    });
                },
                error: function(xhr) { // if error occured
                    $("#search_brgy_show").hide();
                    $("#search_brgy").hide();

                    // $("#search_brgy_error").append(xhr.statusText + xhr.responseText);
                    $("#search_brgy_error").show();
                    console.log(xhr.statusText + xhr.responseText);


                },
            });
        });

        $('#search_brgy').on('change', function(){
            $.ajaxSetup({
                headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            $('#brgy > option').remove();
            $.ajax({
                type: 'POST',
                data: {
                    // _token: '{{ csrf_token() }}',
                    "_token": "{{ csrf_token() }}",
                    brgy: $(this).val()
                },
                dataType: 'JSON',
                url: '{{URL::to("search_brgy")}}',
                beforeSend: function(){
                    $("#brgy_show").show();
                    $("#brgy").hide();
                },
                complete: function() {
                    $("#brgy_show").hide();
                    $("#brgy").show();
                },
                success: (data) => {
                    $('#brgy').html("<option value='0' selected disabled></option>");
                    JSON.parse(JSON.stringify(data)).map(datas => {
                        $('#brgy').append(`<option value='${datas.barangay_code}'>${datas.barangay_description}</option>`)
                    });
                },
                error: function(xhr) { // if error occured
                    $("#brgy_show").hide();
                    $("#brgy").hide();

                    // $("#brgy_error").append(xhr.statusText + xhr.responseText);
                    $("#brgy_error").show();
                },
            });
        });
    </script>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
@endsection