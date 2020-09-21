@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <a href='{{URL::to('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
            </div>

            <h2>Mobile Seller Locator</h2>
            
            <form role='form' method='get' action='{{route('msl_product')}}' enctype='multipart/form-data'>
                <div>
                    <label>Province: </label><br>
                    <select id='search_mun' name='province' required style='width:80%;margin-top: 0px;'>
                        <option selected disabled></option>
                            @foreach($province as $p)
                                <option value='{{ $p->province_code }}'>{{ $p->province_description }}</option>
                            @endforeach
                    </select>
                </div>
                <div style='margin:0px'>
                    <label>City or Municipality: </label><br>
                    <select id='search_brgy' name='mun_code' required style='width:80%;margin-top: 0px;'>
                        <option>                         </option>
                    </select>

                    <select id='search_brgy_show' name='search_brgy_show' style='display: none;width:200px;margin-top: 0px;'>
                        <option>Please wait...</option>
                    </select>

                    <select id='search_brgy_error' name='search_brgy_error' style='display: none;width:200px;margin-top: 0px;'>
                        <option>Refresh page</option>
                    </select>
                </div>
                <div>
                    <button type='submit' style='height: 50px; width: 220px; font-size: 20px;'>Find Product</button>
                </div>
                <br>
                <br>
                <br>
                <button onclick=' window.location.href = "{{URL::to("msl_seller")}}" ;' style=' height: 50px; width: 220px'><p class='ico-ecqms'></p> Be a Seller</button>
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
                <p style='margin: 10px 10px 10px 10px;'>This system will help in locating sellers of specific goods nearby by providing their FB and messenger link and contact numbers. The system will also serve as a platform for sellers to get easily contacted and arrange with their buyers directly.<br><br>
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
            $('#brgy > option').remove();
            $.ajax({
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    brgy: $(this).val()
                },
                dataType: 'JSON',
                url: '{{ route('search_brgy') }}',
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
                errorSend: function(){
                    $("#brgy").hide();
                    $("#brgy_show").hide();
                    $("#brgy_error").hide();
                },
            });
        });
    </script>
@endsection