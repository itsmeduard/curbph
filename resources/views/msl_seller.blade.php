@extends('master-layout')
@section('content')
    <div class='flex-center position-ref'>
        <div class='content-main'>
            <div class='content-mainpage'>
                <a href='{{URL::to('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
            </div>

            <span style='font-size: 25px'><b>Mobile Seller Locator</b></span><br>
            <span style='font-size: 13px; max-width: 90%;'><b>Please provide the proper information needed</b></span>
            <br>
            <form role='form' method='get' action='{{route('msl_seller_create')}}' enctype='multipart/form-data'>
                <div>
                    <label>Province: </label><br>
                    <select id='search_mun' name='province' required style='width:80%;margin-top: 0px;'>
                        <option selected disabled></option>
                            @foreach($province as $p)
                                <option value='{{ $p->province_code }}'>{{ $p->province_description }}</option>
                            @endforeach
                    </select>
                </div>
                <div>
                    <label>City or Municipality: </label><br>
                    <select id='search_brgy' name='mun_code' required style='width:80%;margin-top: 0px;'>
                        <option>                         </option>
                    </select>

                    <select id='search_brgy_show' name='search_brgy_show' style='display: none;width:200px;margin-top: 0px;'>
                        <option>Please wait...</option>
                    </select>
                </div>
                <div>
                    <label>Product: </label><br>
                    <input style='width:80%;margin-top: 0px;' name='product' placeholder='Product Here...' required onkeyup='fullCheckProduct(this)' maxlength='40'></input>
                </div>
                <div>
                    <label>Description/More Info.: </label>
                    <textarea style='width: 80%; height: 90px' id='desc' name='desc' required placeholder='Add information about place, product information, service information etc...' onkeyup='fullCheckDesc(this)' maxlength='250'></textarea>
                </div>
                <div>
                    <label>Seller: </label><br>
                    <input style='width:80%;' name='seller' placeholder='Juan Dela Cruz(max of 30 text to be inputted)' required maxlength='40' onkeyup='fullCheckSeller(this)'></input>
                </div>
                <div>
                    <label>Facebook Link/Page or Messenger: </label><br>
                    <input style='width:80%;' name='fb_link' placeholder='facebook.com/curbph' onkeyup='fullCheckLink(this)' maxlength='50'></input>
                </div>
                <div>
                    <label>Contact information: </label><br>
                    <input type=text maxlength=10 onkeyup='fullCheckContact(this)' style='width:80%;' name='contact' placeholder='0921.608.2998'>
                </div>
                <div>
                    <label>Free Delivery:</label>
                    <select style='width:80%;margin-top: 0px;' name='delivery' required onkeyup='fullCheckDelivery(this)'>
                        <option value='1'>Yes</option>
                        <option value='2'>No</option>
                    </select>
                    
                </div>
                <br>
                <div style="position: fixed; bottom: 90px; left: 10px;">
                    <button type='button' onclick=' window.location.href = "{{URL::to("msl")}}" ;' style='height: 50px; width: 100px; font-size: 20px;'>Back</button>
                </div>
                <div style="position: fixed; bottom: 90px; right: 10px;">
                    <button type='submit' style='height: 50px; width: 100px; font-size: 20px;'>Submit</button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </form>
        </div>
    </div>
    <div id="hp-ctn-howItWorks-left" style='bottom:500px; width: 90px; font-color: white; color: white;'>
        <p><a href='{{route('mainpage')}}'><font color="FFFFFF">Home</font></a></p>
    </div>
    <div id="hp-ctn-howItWorks-left" style='bottom:405px; width: 70px'>
        <p><a onclick="document.getElementById('info').style.display='block'">Info</a></p>
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
    {{-- <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script> --}}
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript'>
       $('#search_mun').on('change', function(){
            $('#search_brgy > option').remove();
            $.ajax({
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    x: $(this).val()
                },
                dataType: 'JSON',
                url: '{{ route('search_mun') }}',
                beforeSend: function(){
                    $("#search_brgy").hide();
                    $("#search_brgy_show").show();
                },
                complete: function() {
                    $("#search_brgy").show();
                    $("#search_brgy_show").hide();
                },
                success: (data) => {
                    $('#search_brgy').html("<option value='0' selected disabled></option>");
                    JSON.parse(JSON.stringify(data)).map(datas => {
                        $('#search_brgy').append(`<option value='${datas.city_municipality_code}'>${datas.city_municipality_description}</option>`)
                    });
                },
            });
        });

        function fullCheckProduct( obj ) {
            if ( obj.value.length == obj.maxLength ) {
                alert( 'You reach the limit input' )
            }
        }

        function fullCheckSeller( obj ) {
            if ( obj.value.length == obj.maxLength ) {
                alert( 'You reach the limit input' )
            }
        }

        function fullCheckDesc( obj ) {
            if ( obj.value.length == obj.maxLength ) {
                alert( 'You reach the limit input' )
            }
        }

        function fullCheckLink( obj ) {
            if ( obj.value.length == obj.maxLength ) {
                alert( 'You reach the limit input' )
            }
        }

        function fullCheckContact( obj ) {
            if ( obj.value.length == obj.maxLength ) {
                alert( 'You reach the limit input' )
            }
        }

    </script>
@endsection