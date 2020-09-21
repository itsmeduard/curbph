@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <a href='{{URL::to('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
            </div>

            {{-- <h2>Free Transport Locator</h2> --}}
            <center><h2 style='width: 90%; align-content: center'>Free Transport Locator</h2></center>
            <form role='form' method='get' action='{{route('translocator_location')}}' enctype='multipart/form-data'>
                {{-- @csrf_field --}}
                <div>
                    <label>Province: </label><br>
                    <select id='search_mun' name='province' required style='width: 70%;'>
                        <option selected disabled></option>
                            @foreach($provinces as $p)
                                <option value='{{ $p->province_code }}'>{{ $p->province_description }}</option>
                            @endforeach
                    </select>
                </div>
                <br>

                <div>
                    <label>City or Municipality: </label><br>
                    <select id='search_brgy' name='mun' required style='width: 70%;'>
                        <option>                         </option>
                    </select>
                    <select id='search_brgy_show' name='search_brgy_show' style='display: none;width: 70%;'>
                        <option>Please wait...</option>
                    </select>
                </div>

                <br>
                <div>
                    <label>Barangay: </label><br>
                    <select id='brgy' name='brgy' required style='width: 70%;'>
                        <option>                         </option>
                    </select>
                    <select id='brgy_show' name='brgy_show' style='display: none; width: 70%;'>
                        <option>Please wait...</option>
                    </select>
                </div>
                <br>

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
                <p style='margin: 10px 10px 10px 10px;'>This system will help everyone get proper information where and when are these public transport services arranged by the local unit for their constituents are located so they could attend to their basic needs such as buying foods and medicines as well for emergency needs. This system will also  help the barangay or local government unit in logistic concerns as well as generating the information to organize and monitor the movements of people in and out their localities.<br><br>
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

                    Transport Locator<br><br>

                    <b>Accessing the CURBPh Free Transport Locator</b><br>
                    Step1: To access the Free Transport Locator, the user will have to click on the Free Transport Locator
                    button in the main page.<br><br>
                    Step2: The button will lead the user to the page where he/she could read the information about the
                    transport locator.<br><br>
                    Step 3: To proceed the user will be asked to input and select his province, city/town and barangay and
                    click next.<br><br>
                    Step 4: If the transport locator is already updated the user will be able to see the following in relation
                    to his/her selected barangay.<br><br>
                    Nearest landmark<br>
                    Additional Description<br>
                    Operating Hours<br>
                    Contact Person<br>
                    Mobile Number<br>
                    Preview Picture of the transport location<br><br>
                    Step 5: If the transport located is not yet updated the user can update proper information by clicking
                    the edit information button on the top and bellow the page and click again when done.<br><br>
                    Step 6: The user may now search and click the button for other locations where the free transport
                    locator is available
                </p>
            </div> 
        </form> 
    </div>
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
@endsection