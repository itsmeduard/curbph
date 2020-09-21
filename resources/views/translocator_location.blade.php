<!DOCTYPE html>
<html lang='{{ str_replace("_", "-", app()->getLocale()) }}'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='curbph' content='CURBPh is a collaborative response initiated project designed in Happy Homes, Baguio City, Philippines by Diosdado Santiago Jr and Filsen Eduard Valdez when the enhanced community quarantine was implemented in March 16,2020 during the Covid-19 pandemic.'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge,chrome=1'>
        <meta http-equiv='Content-Security-Policy' content='upgrade-insecure-requests'> 
        <title>CURBPh</title>
        <link rel='icon' href='{{ asset('public/img/curbph_ico.ico') }}' type='image/icon type'>
        <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <style>
            @media only screen and (max-width:800px) {
                /* For tablets: */
                .main {
                    width: 100%;
                    flex-direction: column;
                }
                .m-bottom{
                    margin-bottom: 200px;
                }

                .full-height {
                    height: 70vh;
                }
            }
            @media only screen and (max-width:500px) {
                /* For mobile phones: */
                .main{
                    width: 100%;
                    flex-direction: column;
                }
                .m-bottom{
                    margin-bottom: 200px;
                }

                .full-height {
                    height: 70vh;
                }
            }

            .full-height {
                height: 70vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content-main {
                text-align: center;
            }

            .footer {
               /*position: fixed;*/
               left: 0;
               bottom: 0;
               width: 100%;
               color: black;
               text-align: center;
               font-size: 15px;
            }

            a, a:hover {
                text-decoration: none;
            }

            .socialbtns, .socialbtns ul, .socialbtns li {
              margin: 0;
              padding: 5px;
            }

            .socialbtns li {
                list-style: none outside none;
                display: inline-block;
                margin: 5 5 0px 5;
            }

            .socialbtns .fa {
                width: 40px;
                height: 28px;
                border: 1px solid #000;
                padding-top: 12px;
                border-radius: 15px;
                -moz-border-radius: 15px;
                -webkit-border-radius: 15px;
                -o-border-radius: 15px;
            }

            .fa-instagram{
                color: #fff;
                background: #d6249f;
                background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
                box-shadow: 0px 3px 10px rgba(0,0,0,.25);
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-twitter {
                background: #55ACEE;
                color: white;
            }

            .fa-youtube {
                background: red;
                color: white;
            }

            .m-bottom{
                margin-bottom: 50px;
            }

            .content-box{
                box-sizing: content-box;  
                width: 100%;
                height: 100%;
                border: solid black;
            }

            .pin.icon {
                color: #000;
                position: absolute;
                margin-left: 4px;
                margin-top: 2px;
                width: 12px;
                height: 12px;
                border: solid 1px currentColor;
                border-radius: 7px 7px 7px 0;
                -webkit-transform: rotate(-45deg);
                      transform: rotate(-45deg);
            }

            .pin.icon:before {
                content: '';
                position: absolute;
                left: 3px;
                top: 3px;
                width: 4px;
                height: 4px;
                border: solid 1px currentColor;
                border-radius: 3px;
            }

            .link.icon {
                color: #000;
                position: absolute;
                margin-left: 8px;
                margin-top: 10px;
                width: 7px;
                height: 1px;
                background-color: currentColor;
                -webkit-transform: rotate(-45deg);
                      transform: rotate(-45deg);
            }

            .link.icon:before {
                content: '';
                position: absolute;
                top: -3px;
                left: -7px;
                width: 8px;
                height: 5px;
                border-radius: 2px;
                border: solid 1px currentColor;
            }

            .link.icon:after {
                content: '';
                position: absolute;
                top: -3px;
                right: -7px;
                width: 8px;
                height: 5px;
                border-radius: 2px;
                border: solid 1px currentColor;
            }

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

            textarea {
                width: 100%;
                resize: none;
                font-family: "Garamond";
                text-align: justify;
                text-justify: inter-word;
                border-radius: 12px;
                padding: 0px 5px 0px 5px;
            }

            .ico-ecqt:before{
                content: '';
                background:url('{{ asset('public/img/ecq_t.png') }}');
                background-size:cover;
                position:absolute;
                width:20px;
                height:20px;
                margin-left:-80px;
            }

            .ico-ecqt {
                background:url('{{ asset('public/img/ecq_t.png') }}');
                position: absolute;
                margin-left: 75px;
                margin-top: -2px;
                width: 12px;
                height: 12px;
                border-radius: 7px 7px 7px 0;
            }

            .ico-ecqtl:before{
                content: '';
                background:url('{{ asset('public/img/ecq_tl.png') }}');
                background-size:cover;
                position:absolute;
                width:25px;
                height:25px;
                margin-left:-85px;
            }

            .ico-ecqtl {
                background:url('{{ asset('public/img/ecq_tl.png') }}');
                position: absolute;
                margin-left: 75px;
                margin-top: -4px;
                width: 12px;
                height: 12px;
                border-radius: 7px 7px 7px 0;
            }

            .ico-ecqps:before{
                content: '';
                background:url('{{ asset('public/img/ecq_ps.png') }}');
                background-size:cover;
                position:absolute;
                width:20px;
                height:20px;
                margin-left:-81px;
            }

            .ico-ecqps {
                background:url('{{ asset('public/img/ecq_ps.png') }}');
                position: absolute;
                margin-left: 75px;
                margin-top: -2px;
                width: 12px;
                height: 12px;
                border-radius: 7px 7px 7px 0;
            }

            .ico-ecqms:before{
                content: '';
                background:url('{{ asset('public/img/ecq_ms.png') }}');
                background-size:cover;
                position:absolute;
                width:20px;
                height:20px;
                margin-left:-83px;
            }

            .ico-ecqms {
                background:url('{{ asset('public/img/ecq_ms.png') }}');
                position: absolute;
                margin-left: 75px;
                margin-top: -2px;
                width: 12px;
                height: 12px;
                border-radius: 7px 7px 7px 0;
            }

            button{
                background-color: #ffcf00;
                border-radius: 12px;
            }

            #hp-ctn-howItWorks-right {
                padding:0px 0px 08px 0px;
                text-align: center;
                margin: 0px;
                height: 15px;
                background:#e88717;
                z-index:15;
                border-radius: 7px 7px 0px 0px;
                -moz-transform:rotate(-90deg);
                -ms-transform:rotate(-90deg);
                -o-transform:rotate(-90deg);
                -webkit-transform:rotate(-90deg);
                transform-origin: bottom right;
                position: fixed;
                right:-5px;
                opacity: .7;
                font-family: Arial;
            }

            #hp-ctn-howItWorks-right p {
                color:#fff;
                display:inline-block;
                line-height: 0px;
                margin: 0 !important;
                padding: 0 !important;
            }

            #hp-ctn-howItWorks-left {
                padding:0px 0px 08px 0px;
                text-align: center;
                margin: 0px;
                height: 15px;
                background:#e88717;
                z-index:15;
                border-radius: 7px 7px 0px 0px;
                -moz-transform:rotate(-270deg);
                -ms-transform:rotate(-270deg);
                -o-transform:rotate(-270deg);
                -webkit-transform:rotate(-270deg);
                transform-origin: bottom left;
                position: fixed;
                left:-5px;
                opacity: .7;
                font-family: Arial;
            }

            #hp-ctn-howItWorks-left p {
                color:#fff;
                display:inline-block;
                line-height: 0px;
                margin: 0 !important;
                padding: 0 !important;
            }

            .modal { 
                display: none; 
                position: fixed; 
                left: 0; 
                top: 0; 
                width: 100%; 
                height: 100%; 
                overflow: auto; 
                background-color: rgb(0, 0, 0); 
                background-color: rgba(0, 0, 0, 0.4); 
                padding-top: 60px; 
                z-index: 500;
            } 
              
            .modal-content { 
                background-color: #fefefe; 
                margin: 5% auto 15% auto; 
                border: 1px solid #888; 
                width: 90%; 
            } 
            /*define the close button*/ 
              
            .close { 
                position: absolute; 
                right: 35px; 
                top: 15px; 
                color: #000; 
                font-size: 40px; 
                font-weight: bold; 
            } 
            /*define the close hover and focus effects*/ 
              
            .close:hover, 
            .close:focus { 
                color: red; 
                cursor: pointer; 
            } 
              
            .clearfix::after { 
                content: ""; 
                clear: both; 
                display: table; 
            } 
              
            @media screen and (max-width: 300px) { 
                .cancelbtn, 
                .signupbtn {
                    width: 100%; 
                } 
            }

            a.lightbox img {
                height: 150px;
                border: 3px solid white;
                box-shadow: 0px 0px 8px rgba(0,0,0,.3);
                margin: 20px 20px 20px 20px;
            }

            /* Styles the lightbox, removes it from sight and adds the fade-in transition */

            .lightbox-target {
                position: fixed;
                top: -100%;
                width: 100%;
                background: rgba(0,0,0,.7);
                width: 100%;
                opacity: 0;
                -webkit-transition: opacity .5s ease-in-out;
                -moz-transition: opacity .5s ease-in-out;
                -o-transition: opacity .5s ease-in-out;
                transition: opacity .5s ease-in-out;
                overflow: hidden;
            }

            /* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

            .lightbox-target img {
                margin: auto;
                position: absolute;
                top: 0;
                left:0;
                right:0;
                bottom: 0;
                max-height: 0%;
                max-width: 0%;
                border: 3px solid white;
                box-shadow: 0px 0px 8px rgba(0,0,0,.3);
                box-sizing: border-box;
                -webkit-transition: .5s ease-in-out;
                -moz-transition: .5s ease-in-out;
                -o-transition: .5s ease-in-out;
                transition: .5s ease-in-out;
            }

            /* Styles the close link, adds the slide down transition */

            a.lightbox-close {
                display: block;
                width:50px;
                height:50px;
                box-sizing: border-box;
                background: white;
                color: black;
                text-decoration: none;
                position: absolute;
                top: -80px;
                right: 0;
                -webkit-transition: .5s ease-in-out;
                -moz-transition: .5s ease-in-out;
                -o-transition: .5s ease-in-out;
                transition: .5s ease-in-out;
            }

            /* Provides part of the "X" to eliminate an image from the close link */

            a.lightbox-close:before {
                content: "";
                display: block;
                height: 30px;
                width: 1px;
                background: black;
                position: absolute;
                left: 26px;
                top:10px;
                -webkit-transform:rotate(45deg);
                -moz-transform:rotate(45deg);
                -o-transform:rotate(45deg);
                transform:rotate(45deg);
            }

            /* Provides part of the "X" to eliminate an image from the close link */

            a.lightbox-close:after {
                content: "";
                display: block;
                height: 30px;
                width: 1px;
                background: black;
                position: absolute;
                left: 26px;
                top:10px;
                -webkit-transform:rotate(-45deg);
                -moz-transform:rotate(-45deg);
                -o-transform:rotate(-45deg);
                transform:rotate(-45deg);
            }

            /* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

            .lightbox-target:target {
                opacity: 1;
                top: 0;
                bottom: 0;
            }

            .lightbox-target:target img {
                max-height: 100%;
                max-width: 100%;
            }

            .lightbox-target:target a.lightbox-close {
                top: 0px;
            }

            /*body{
                position: fixed;
            }*/
        </style>
    </head>
    <body>
        <div id="hp-ctn-howItWorks-right" style='bottom:500px; width: 90px'>
            <p><a onclick="document.getElementById('about').style.display='block'">About Us</a></p>
        </div>

        <div id="hp-ctn-howItWorks-right" style='bottom: 408px; width: 120px'>
            <p><a  onclick="document.getElementById('response').style.display='block'">Our Response</a></p>
        </div>

        <div id="hp-ctn-howItWorks-right" style='bottom: 286px; width: 100px'>
            <p><a  onclick="document.getElementById('contact').style.display='block'">Support Us</a></p>
        </div>

        <div id="about" class="modal"> 
            <span onclick="document.getElementById('about').style.display='none'" class="close" title="Close Modal">×</span> 
            <form class="modal-content animate"> 
                <div> 
                    {{-- <center><h2>About Us</h2></center> --}}
                   {{--  <textarea style='height: 390px; overflow: hidden;' readonly> --}}<p style='margin: 10px 10px 10px 10px;'>CURBPh is a collaborative response initiated platform designed in Happy Homes, Baguio City, Philippines by Diosdado Santiago Jr and Filsen Eduard Valdez when the Enhanced Community Quarantine(ECQ) was implemented in March 16,2020 during the Covid-19 pandemic. By emphatizing and assessing the needs and pain points of everyone under ECQ, the team believes that creative solutions can be made to help different agencies and sectors through collaboration during crisis situation, where everyone can be part of a conscious and responsible action to address these concerns effectively and efficiently. <br><br>&#13;&#13;Curb literally means to keep things under control, in the road a "curb" would mean a raised stone edging to a path, that is what CURBPh wants to do by properly assessing the needs and condition, CURBPh wants to draw and raise a platform towards a creative solutions from everyone’s contribution and ideas that would work and resolve a given problem. <br><br>&#13;&#13;The CURBPh logo represents ubuntu, which means we as one. It reflects the collaborative and unifying efforts and behavior of humanity to provide solutions together. It aims to use technology and research to bridge the gap, and create solutions to the needs as we emphatize and collaborate towards humanity&#39;s triumph against all challenges.</p>
                    {{-- </textarea> --}}
                </div> 
            </form>
        </div> 
        {{-- +(63) 967 429 0159
        +(074) 309 4434 --}}
        <div id="response" class="modal"> 
            <span onclick="document.getElementById('response').style.display='none'" class="close" title="Close Modal">×</span> 
            <form class="modal-content" action="/action_page.php"> 
                <div> 
                    {{-- <center><h2>Our Response</h2></center> --}}
                    {{-- <textarea style='height: 300px;overflow: hidden;' readonly> --}}<p style='margin: 10px 10px 10px 10px;'>The dramatic increase of infected person with Covid-19 in the Philippines pushed the proclamation of the president to put entire Luzon under Enhanced Community Quarantine and the country under the state of calamity. The action challenged a creative response from different people how to become part of the solution while they stay at home. The team asked the basic question, how might we provided assistance to the government and other sectors to curb the transmission of Covid-19? One of the issue is the need to gather more information regarding the condition of those who are already in their homes but not tested for Covid-19 and the other one is how could family go to the center to buy their supplies, will there be an arranged transportation, mobile sellers and schedule for the PASS that the local government may provide? Hence, CURBPh was born on March 18, 2020, a mobile responsive system which gathers information about the condition of those in their homes and also identify location of arranged transportation, and PASS schedules by the local government unit such as the the barangay and the municipality as well locating seller nearby who could deliver goods to these households . The aim is that the system will get updated every time as the community provides information and trace possible transmission of Covid-19 as well addressing the need to locate arranged transportation, pass schedules and sellers nearby faster and safer.
                    {{-- </textarea> --}}</p>
                </div> 
            </form> 
        </div> 

        <div id="contact" class="modal"> 
            <span onclick="document.getElementById('contact').style.display='none'" class="close" title="Close Modal">×</span> 
            <form class="modal-content"> 
                <div>
                    {{-- <h2><center>Support Us</center></h2> --}}
                    {{-- <textarea style='height: 400px;overflow: hidden;' readonly> --}}<p style='margin: 10px 10px 10px 10px;'>CURBPh serves as a platform to ease some of the concerns during the ECQ period. Our systems need your help and assistance to provide accurate and reliable information. CURBPh is a self funded initiative aimed at providing necessary information and assistance to everyone as we emphatize and collaborate as one. Your contributions and suggestions will be greatly appreciated! Together we can flatten the curve of Covid-19 transmission!&#13;<br><br>
                    
                    Should you wish to support us and be part of our cause and provide other forms of assistance you may send us an email  at curbph@gmail.com and message us via our page FB/ CURBPh<br><br>
                    &#13;Mobile No. 09674290159&#13;<br>Telephone (74)3094434<br><br><b>Disclaimer:</b> Information which will be gathered by CURBPh are community populated and provided by specific individual and groups accessing the system, the developers are not responsible for the information and transactions whatsoever, should you find inaccurate information, please contact us though our email curbph@gmail.com and facebook page FB/ CURBPh so we could do necessary action.<br><br></p>
                </div>
            </form>
        </div>
        <div class='main'>
            <div class='flex-center position-ref'>
                <div class='content-main'>
                    <div class='content-mainpage'>
                        <a href='{{route('mainpage')}}'><img src="{{ asset('public/img/curbph_logo.png') }}" width='30%' height='20%'></a>
                    </div>
                    <br>
                    <form role="form" method="POST" action="{{route('translocator_location_update', $data->barangay_code)}}" enctype="multipart/form-data" onsubmit='disableButtons()'>
                        {{ csrf_field() }}
                        <span style='font-size: 30px'><b>Free Transport Locator</b></span><br>
                        <span style='font-size: 13px; max-width: 90%;'><b>Please provide the proper information needed</b></span>
                        <div>
                            <table>
                                <button type='button' onclick=' window.location.href = "{{URL::to("tl_search")}}" ;' style=" height: 50px; width: 120px; display: block; float: left; margin-left:5%">Search Location</button>

                                <button type='button' id='edit' onclick="edittt()" style='float: right; height: 50px; width: 120px;margin-right: 5%'>Edit Information</button>

                                <button class='update' type='submit' name='update' id="update" style='display: none; float: right;height: 50px; width: 120px; background-color: #35e21d;margin-right: 5%'>Update Information</button>
                            </table>
                        </div>
                        <br>
                        <br>
                        <br>
                        <b><div style='text-align: center;'>
                            <label>Province: </label><br>
                            <input style='text-align: center;width: 300px;' value='{{ $data->province_description ?? '' }}' readonly></input>
                        </div>
                        <div style='text-align: center;'>
                            <label>City/ Municipality: </label><br>
                            <input style='text-align: center;width: 300px;' value='{{ $data->city_municipality_description ?? '' }}' readonly></input>
                        </div>
                        <div style='text-align: center;'>
                            <label>Barangay: </label><br>
                            <input type='hidden' name='brgy' value='{{ $data->barangay_code }}'></input>
                            <input style='text-align: center;width: 300px;' value='{{ $data->barangay_description ?? '' }}' readonly></input>
                        </div>
                        <div style='text-align: left;padding-left: 30px;'>
                            <label>Nearest Landmark: </label><br>
                            <input type='input' style='width: 300px;' value='{{ $data->n_landmark ?? '' }}' id='n_landmark' name='n_landmark' disabled autocomplete='off'></input>
                        </div>
                        <div>
                            <label>Description/More Info.: </label>
                            <textarea style='width: 80%; height: 80px' id='desc' name='desc' disabled placeholder='Add information about place, schedule, and other announcement'>{{ $data->description ?? '' }}</textarea>
                        </div>
                        <div style='text-align: left;padding-left: 30px;'>
                            <label>Operating Hours: </label>
                            <select id='oh_from' name='oh_from' disabled>
                                @if($data->oh_from == '5')
                                    <option value='5' selected>5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '6')
                                    <option value='5' >5AM</option>
                                    <option value='6' selected>6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '7')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' selected>7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '8')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' selected>8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '9')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' selected>9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>
                                    
                                @elseif($data->oh_from == '10')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' selected>10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '11')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' selected>11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '12')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' selected>12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '13')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' selected>1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '14')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' selected>2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>
                                    
                                @elseif($data->oh_from == '15')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' selected>3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '16')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' selected>4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '17')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' selected>5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '18')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' selected>6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '19')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' selected>7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_from == '20')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' selected>8PM</option>
                                @else
                                    <option value='5' selected>5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>
                                @endif
                            </select>
                            {{-- @php
                                $time = ['1', '2', '3', '4', '5', '6', '7', '8'];
                                $int = 1;
                            @endphp --}}
                            <select id='oh_to' name='oh_to' disabled>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->operating_hrs_to) selected @endif>{{$a}}PM</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to == '5')
                                    <option value='5' selected>5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '6')
                                    <option value='5' >5AM</option>
                                    <option value='6' selected>6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '7')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' selected>7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '8')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' selected>8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '9')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' selected>9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>
                                    
                                @elseif($data->oh_to == '10')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' selected>10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '11')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' selected>11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '12')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' selected>12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '13')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' selected>1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '14')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' selected>2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>
                                    
                                @elseif($data->oh_to == '15')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' selected>3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '16')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' selected>4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '17')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' selected>5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '18')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' selected>6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '19')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' selected>7PM</option>
                                    <option value='20' >8PM</option>

                                @elseif($data->oh_to == '20')
                                    <option value='5' >5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' selected>8PM</option>
                                @else
                                    <option value='5' selected>5AM</option>
                                    <option value='6' >6AM</option>
                                    <option value='7' >7AM</option>
                                    <option value='8' >8AM</option>
                                    <option value='9' >9AM</option>
                                    <option value='10' >10AM</option>
                                    <option value='11' >11AM</option>
                                    <option value='12' >12NN</option>

                                    <option value='13' >1PM</option>
                                    <option value='14' >2PM</option>
                                    <option value='15' >3PM</option>
                                    <option value='16' >4PM</option>
                                    <option value='17' >5PM</option>
                                    <option value='18' >6PM</option>
                                    <option value='19' >7PM</option>
                                    <option value='20' >8PM</option>
                                @endif
                            </select>
                        </div>

                        <div style='text-align: center;'>
                            <label>Contact Person: </label><br>
                            <input type='input' style='text-align: center;width: 300px;' id='cp' name='cp' value='{{ $data->contact_person ?? ''}}' disabled autocomplete='off'></input>
                        </div>

                        <div style='text-align: center;'>
                            <label>Mobile No.: </label><br>
                            <input type='input' style='text-align: center;width: 300px;' id='phone' name='cn' value='{{ $data->contact_no ?? ''}}' disabled autocomplete='off'></input>
                        </div>

                        <div class="col-md-12 mb-2">
                            @if($data->image_name != null)                                
                                <a class="lightbox" href="#dog">
                                    <img id='image_preview_containers' src='{{ $product }}' alt="preview image" title="CURBPh"/>
                                </a> 
                                <div class="lightbox-target" id="dog">
                                    <img id='image_preview_containers' style='height: 280px; width: 330px;' src='{{ $product }}' alt="preview image" title="CURBPh"/>
                                    <a class="lightbox-close" href="#"></a>
                                </div>
                            @else
                                <a class="lightbox" href="#dog">
                                    <img id='image_preview_containers' src="{{ asset('public/img/curbph_logo.png') }}" alt="preview image"/>
                                </a> 
                                <div class="lightbox-target" id="dog">
                                    <img id='image_preview_containers' style="height: 280px; width: 300px;" src="{{ asset('public/img/curbph_logo.png') }}" alt="preview image"/>
                                    <a class="lightbox-close" href="#"></a>
                                </div>
                            @endif
                        </div>
                        </b>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="image" placeholder="Choose image" id="image" disabled onchange="ValidateSingleInput(this);">
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>
                        <br>
                        <div>
                            <button type='button' onclick=' window.location.href = "{{URL::to("tl_search")}}" ;' style=" height: 50px; width: 120px; display: block; float: left;margin-left:5%">Search Location</button>
                            <button type='button' id='editt' onclick="edittt()" style='float: right;height: 50px; width: 120px;margin-right: 5%'>Edit Information</button>

                            <button class='update' type='submit' name='update' id="updatee" style='display: none; float: right;height: 50px; width: 120px; background-color: #35e21d;margin-right:5%'>Update Information</button>
                        </div>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
            
            <div class='footer'>
                <div align="center" class="socialbtns" style='padding-bottom: 0px; margin-bottom: 0px'>
                    <ul>
                        <li><a target='_blank' href="https://www.facebook.com/CURBPh/" class="fa fa-facebook"></a></li>

                        <li><a target='_blank' href="https://twitter.com/CurbPh" class="fa fa-twitter"></a></li>

                        <li><a target='_blank' href="https://www.instagram.com/curbph/" class="fa fa-instagram"></a></li>

                        <li><a target='_blank' href="https://www.youtube.com/channel/UC9GlmpyXtGth2xZdFdmiiHg?view_as=subscriber" class="fa fa-youtube"></a></li>
                    </ul>
                </div>
                <p style='padding-top: 0px; border-bottom-style: solid; width: 80%; margin: 5px auto;'>Copyright @ 2020 CURBPh</p>
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
                    <p style='margin: 10px 10px 10px 10px;'>This system will help everyone get proper information where and when are these public transport services arranged by the local unit for their constituents are located so they could attend to their basic needs such as buying foods and medicines as well for emergency needs. This system will also  help the barangay or local government unit in logistic concerns as well as generating the information to organize and monitor the movements of people in and out their localities.
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
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" data-autoinit="true"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/creditablecardtype.js" data-autoinit="true"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/politespace.js" data-autoinit="true"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
    @include('best_script_js')
    <script>
        function edittt() {
            var x = document.getElementById("update");
            var z = document.getElementById("updatee");
            var y = document.getElementById("edit");
            var a = document.getElementById("editt");

            var n_landmark = document.getElementById("n_landmark");
            var desc = document.getElementById("desc");
            var oh_from = document.getElementById("oh_from");
            var oh_to = document.getElementById("oh_to");
            var cp = document.getElementById("cp");
            var cn = document.getElementById("phone");
            var image = document.getElementById("image");

            if (x.style.display === "none") {
                x.style.display = "block";
                z.style.display = "block";
                y.style.display = "none";
                a.style.display = "none";
                n_landmark.disabled = false;
                desc.disabled = false;
                cp.disabled = false;
                oh_from.disabled = false;
                oh_to.disabled = false;
                cn.disabled = false;
                image.disabled = false;
            }
        }

        /*Submit Button*/
        function disableButtons()
        {
          $('button[type="submit"]').attr('disabled', true);
        }

        /*Contact No. Masking*/
        jQuery(document).trigger("enhance");

        /*For Picture Uploading*/
        $(document).ready(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
     
            $('#image').change(function(){
              
                let reader = new FileReader();
                reader.onload = (e) => { 
                  $('#image_preview_containers').attr('src', e.target.result); 
                }
                reader.readAsDataURL(this.files[0]); 
     
            });
        });

        var _validFileExtensions = ['.jpg', '.jpeg', '.bmp', '.gif', '.png','.svg'];    
        function ValidateSingleInput(oInput) {
            if (oInput.type == 'file') {
                var sFileName = oInput.value;
                 if (sFileName.length > 0) {
                    var blnValid = false;
                    for (var j = 0; j < _validFileExtensions.length; j++) {
                        var sCurExtension = _validFileExtensions[j];
                        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                            blnValid = true;
                            break;
                        }
                    }                
                    if (!blnValid) {
                        alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                        oInput.value = '';
                        return false;
                    }
                }
            }
            return true;
        }
    </script>
</html>
