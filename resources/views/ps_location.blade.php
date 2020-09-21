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
                /*.m-bottom{
                    margin-bottom: 200px;
                }

                .full-height {
                    height: 70vh;
                }*/
            }
            @media only screen and (max-width:500px) {
                /* For mobile phones: */
                .main{
                    width: 100%;
                    flex-direction: column;
                }
                /*.m-bottom{
                    margin-bottom: 200px;
                }

                .full-height {
                    height: 70vh;
                }*/
            }

            @media only screen and (max-width:300px) {
                /* For mobile phones: */
                .main{
                    width: 100%;
                    flex-direction: column;
                }
                /*.m-bottom{
                    margin-bottom: 200px;
                }

                .full-height {
                    height: 70vh;
                }*/
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
                font-family: 'Garamond';
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
                padding-top: 50px; 
                z-index: 500;
            } 
              
            .modal-content { 
                background-color: #fefefe; 
                /*margin: 5% auto 15% auto; */
                margin: auto auto 15% auto; 
                border: 1px solid #888; 
                width: 90%; 
            } 
            /*define the close button*/ 
              
            .close { 
                position: absolute; 
                right: 20px; 
                top: 5px; 
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

            select {
                width: 150px;
                margin: 10px;

                text-align: center;
                text-align-last: center;
                -moz-text-align-last: center;
            }

            /*select:focus {
                min-width: 150px;
                width: 150px;
            } */

            /*.id select:focus{
                min-width: 100px;
                width: 100px;
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
                    <form role="form" method="post" action="{{route('ps_location_update', $data->barangay_code)}}" enctype="multipart/form-data" onsubmit='disableButtons()'>
                        {{ csrf_field() }}
                        <span style='font-size: 30px'><b>Quarantine Pass Schedule</b></span><br>
                        <span style='font-size: 13px; max-width: 90%;'><b>Please provide the proper information needed</b></span>
                        <br>
                        <br>
                        <b><div style='text-align: center;'>
                            <label>Province: </label><br>
                            <input style='text-align: center;width: 300px;' value='{{ $data->province_description ?? '' }}' disabled></input>
                        </div>
                        <div style='text-align: center;'>
                            <label>City/ Municipality: </label><br>
                            <input style='text-align: center;width: 300px;' value='{{ $data->city_municipality_description ?? '' }}' disabled></input>
                        </div>
                        <div style='text-align: center;'>
                            <label>Barangay: </label><br>
                            <input type='hidden' name='brgy' value='{{ $data->barangay_code }}'></input>
                            <input style='text-align: center;width: 300px;' value='{{ $data->barangay_description ?? '' }}' disabled></input>
                        </div>
                        <br>
                        <span style='font-size: 13px; max-width: 90%;'><b>Click edit info at the bottom to update the schedule</b></span>
                        <div style='text-align: left;padding-left: 30px;'>
                            <label>Days:</label><br>
                            @if($data->mon == '1')
                                <input type='checkbox' id='sched1' name='sched1' checked disabled value='1'></input>
                            @else
                                <input type='checkbox' id='sched1' name='sched1' value='1' disabled></input>
                            @endif
                            <label style='padding-right: 20px'>Monday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_mon' name='oh_from_mon' disabled style='width: 60px;'>
                                @if($data->oh_from_mon == '5')
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

                                @elseif($data->oh_from_mon == '6')
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

                                @elseif($data->oh_from_mon == '7')
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

                                @elseif($data->oh_from_mon == '8')
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

                                @elseif($data->oh_from_mon == '9')
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
                                    
                                @elseif($data->oh_from_mon == '10')
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

                                @elseif($data->oh_from_mon == '11')
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

                                @elseif($data->oh_from_mon == '12')
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

                                @elseif($data->oh_from_mon == '13')
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

                                @elseif($data->oh_from_mon == '14')
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
                                    
                                @elseif($data->oh_from_mon == '15')
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

                                @elseif($data->oh_from_mon == '16')
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

                                @elseif($data->oh_from_mon == '17')
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

                                @elseif($data->oh_from_mon == '18')
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

                                @elseif($data->oh_from_mon == '19')
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

                                @elseif($data->oh_from_mon == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_mon' name='oh_to_mon' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_mon ?? 1) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_mon == '5')
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

                                @elseif($data->oh_to_mon == '6')
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

                                @elseif($data->oh_to_mon == '7')
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

                                @elseif($data->oh_to_mon == '8')
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

                                @elseif($data->oh_to_mon == '9')
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
                                    
                                @elseif($data->oh_to_mon == '10')
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

                                @elseif($data->oh_to_mon == '11')
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

                                @elseif($data->oh_to_mon == '12')
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

                                @elseif($data->oh_to_mon == '13')
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

                                @elseif($data->oh_to_mon == '14')
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
                                    
                                @elseif($data->oh_to_mon == '15')
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

                                @elseif($data->oh_to_mon == '16')
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

                                @elseif($data->oh_to_mon == '17')
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

                                @elseif($data->oh_to_mon == '18')
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

                                @elseif($data->oh_to_mon == '19')
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

                                @elseif($data->oh_to_mon == '20')
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
                            </select><br>
                            @if($data->tue == '1')
                                <input type='checkbox' id='sched2' name='sched2' disabled checked value='1'></input>
                            @else
                                <input type='checkbox' id='sched2' name='sched2' disabled value='1'></input>
                            @endif
                            <label style='padding-right: 20px'>Tuesday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_tue' name='oh_from_tue' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_from_tue ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_from_tue == '5')
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

                                @elseif($data->oh_from_tue == '6')
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

                                @elseif($data->oh_from_tue == '7')
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

                                @elseif($data->oh_from_tue == '8')
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

                                @elseif($data->oh_from_tue == '9')
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
                                    
                                @elseif($data->oh_from_tue == '10')
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

                                @elseif($data->oh_from_tue == '11')
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

                                @elseif($data->oh_from_tue == '12')
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

                                @elseif($data->oh_from_tue == '13')
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

                                @elseif($data->oh_from_tue == '14')
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
                                    
                                @elseif($data->oh_from_tue == '15')
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

                                @elseif($data->oh_from_tue == '16')
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

                                @elseif($data->oh_from_tue == '17')
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

                                @elseif($data->oh_from_tue == '18')
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

                                @elseif($data->oh_from_tue == '19')
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

                                @elseif($data->oh_from_tue == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_tue' name='oh_to_tue' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_tue ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_tue == '5')
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

                                @elseif($data->oh_to_tue == '6')
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

                                @elseif($data->oh_to_tue == '7')
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

                                @elseif($data->oh_to_tue == '8')
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

                                @elseif($data->oh_to_tue == '9')
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
                                    
                                @elseif($data->oh_to_tue == '10')
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

                                @elseif($data->oh_to_tue == '11')
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

                                @elseif($data->oh_to_tue == '12')
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

                                @elseif($data->oh_to_tue == '13')
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

                                @elseif($data->oh_to_tue == '14')
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
                                    
                                @elseif($data->oh_to_tue == '15')
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

                                @elseif($data->oh_to_tue == '16')
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

                                @elseif($data->oh_to_tue == '17')
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

                                @elseif($data->oh_to_tue == '18')
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

                                @elseif($data->oh_to_tue == '19')
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

                                @elseif($data->oh_to_tue == '20')
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
                            </select><br>
                            @if($data->wed == '1')
                                <input type='checkbox' id='sched3' name='sched3' disabled checked value='1'></input>
                            @else
                                <input type='checkbox' id='sched3' name='sched3' disabled value='1'></input>
                            @endif
                            <label>Wednesday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_wed' name='oh_from_wed' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_from_wed ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_from_wed == '5')
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

                                @elseif($data->oh_from_wed == '6')
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

                                @elseif($data->oh_from_wed == '7')
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

                                @elseif($data->oh_from_wed == '8')
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

                                @elseif($data->oh_from_wed == '9')
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
                                    
                                @elseif($data->oh_from_wed == '10')
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

                                @elseif($data->oh_from_wed == '11')
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

                                @elseif($data->oh_from_wed == '12')
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

                                @elseif($data->oh_from_wed == '13')
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

                                @elseif($data->oh_from_wed == '14')
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
                                    
                                @elseif($data->oh_from_wed == '15')
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

                                @elseif($data->oh_from_wed == '16')
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

                                @elseif($data->oh_from_wed == '17')
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

                                @elseif($data->oh_from_wed == '18')
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

                                @elseif($data->oh_from_wed == '19')
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

                                @elseif($data->oh_from_wed == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_wed' name='oh_to_wed' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_wed ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_wed == '5')
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

                                @elseif($data->oh_to_wed == '6')
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

                                @elseif($data->oh_to_wed == '7')
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

                                @elseif($data->oh_to_wed == '8')
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

                                @elseif($data->oh_to_wed == '9')
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
                                    
                                @elseif($data->oh_to_wed == '10')
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

                                @elseif($data->oh_to_wed == '11')
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

                                @elseif($data->oh_to_wed == '12')
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

                                @elseif($data->oh_to_wed == '13')
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

                                @elseif($data->oh_to_wed == '14')
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
                                    
                                @elseif($data->oh_to_wed == '15')
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

                                @elseif($data->oh_to_wed == '16')
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

                                @elseif($data->oh_to_wed == '17')
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

                                @elseif($data->oh_to_wed == '18')
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

                                @elseif($data->oh_to_wed == '19')
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

                                @elseif($data->oh_to_wed == '20')
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
                            </select><br>
                            @if($data->thu == '1')
                                <input type='checkbox' id='sched4' name='sched4' disabled checked value='1'></input>
                            @else
                                <input type='checkbox' id='sched4' name='sched4' disabled value='1'></input>
                            @endif
                            <label style='padding-right: 15px'>Thursday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_thu' name='oh_from_thu' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_from_thu ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_from_thu == '5')
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

                                @elseif($data->oh_from_thu == '6')
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

                                @elseif($data->oh_from_thu == '7')
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

                                @elseif($data->oh_from_thu == '8')
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

                                @elseif($data->oh_from_thu == '9')
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
                                    
                                @elseif($data->oh_from_thu == '10')
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

                                @elseif($data->oh_from_thu == '11')
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

                                @elseif($data->oh_from_thu == '12')
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

                                @elseif($data->oh_from_thu == '13')
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

                                @elseif($data->oh_from_thu == '14')
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
                                    
                                @elseif($data->oh_from_thu == '15')
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

                                @elseif($data->oh_from_thu == '16')
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

                                @elseif($data->oh_from_thu == '17')
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

                                @elseif($data->oh_from_thu == '18')
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

                                @elseif($data->oh_from_thu == '19')
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

                                @elseif($data->oh_from_thu == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_thu' name='oh_to_thu' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_thu ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_thu == '5')
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

                                @elseif($data->oh_to_thu == '6')
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

                                @elseif($data->oh_to_thu == '7')
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

                                @elseif($data->oh_to_thu == '8')
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

                                @elseif($data->oh_to_thu == '9')
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
                                    
                                @elseif($data->oh_to_thu == '10')
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

                                @elseif($data->oh_to_thu == '11')
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

                                @elseif($data->oh_to_thu == '12')
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

                                @elseif($data->oh_to_thu == '13')
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

                                @elseif($data->oh_to_thu == '14')
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
                                    
                                @elseif($data->oh_to_thu == '15')
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

                                @elseif($data->oh_to_thu == '16')
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

                                @elseif($data->oh_to_thu == '17')
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

                                @elseif($data->oh_to_thu == '18')
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

                                @elseif($data->oh_to_thu == '19')
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

                                @elseif($data->oh_to_thu == '20')
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
                            </select><br>
                            @if($data->fri == '1')
                                <input type='checkbox' id='sched5' name='sched5' disabled checked value='1'></input>
                            @else
                                <input type='checkbox' id='sched5' name='sched5' disabled value='1'></input>
                            @endif
                            <label style='padding-right: 32px'>Friday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_fri' name='oh_from_fri' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_from_fri ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_from_fri == '5')
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

                                @elseif($data->oh_from_fri == '6')
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

                                @elseif($data->oh_from_fri == '7')
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

                                @elseif($data->oh_from_fri == '8')
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

                                @elseif($data->oh_from_fri == '9')
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
                                    
                                @elseif($data->oh_from_fri == '10')
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

                                @elseif($data->oh_from_fri == '11')
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

                                @elseif($data->oh_from_fri == '12')
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

                                @elseif($data->oh_from_fri == '13')
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

                                @elseif($data->oh_from_fri == '14')
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
                                    
                                @elseif($data->oh_from_fri == '15')
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

                                @elseif($data->oh_from_fri == '16')
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

                                @elseif($data->oh_from_fri == '17')
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

                                @elseif($data->oh_from_fri == '18')
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

                                @elseif($data->oh_from_fri == '19')
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

                                @elseif($data->oh_from_fri == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_fri' name='oh_to_fri' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_fri ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_fri == '5')
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

                                @elseif($data->oh_to_fri == '6')
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

                                @elseif($data->oh_to_fri == '7')
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

                                @elseif($data->oh_to_fri == '8')
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

                                @elseif($data->oh_to_fri == '9')
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
                                    
                                @elseif($data->oh_to_fri == '10')
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

                                @elseif($data->oh_to_fri == '11')
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

                                @elseif($data->oh_to_fri == '12')
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

                                @elseif($data->oh_to_fri == '13')
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

                                @elseif($data->oh_to_fri == '14')
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
                                    
                                @elseif($data->oh_to_fri == '15')
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

                                @elseif($data->oh_to_fri == '16')
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

                                @elseif($data->oh_to_fri == '17')
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

                                @elseif($data->oh_to_fri == '18')
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

                                @elseif($data->oh_to_fri == '19')
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

                                @elseif($data->oh_to_fri == '20')
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
                            </select><br>
                            @if($data->sat == '1')
                                <input type='checkbox' id='sched6' name='sched6' disabled checked value='1'></input>
                            @else
                                <input type='checkbox' id='sched6' name='sched6' disabled value='1'></input>
                            @endif
                            <label style='padding-right: 18px'>Saturday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_sat' name='oh_from_sat' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_from_sat ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_from_sat == '5')
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

                                @elseif($data->oh_from_sat == '6')
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

                                @elseif($data->oh_from_sat == '7')
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

                                @elseif($data->oh_from_sat == '8')
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

                                @elseif($data->oh_from_sat == '9')
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
                                    
                                @elseif($data->oh_from_sat == '10')
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

                                @elseif($data->oh_from_sat == '11')
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

                                @elseif($data->oh_from_sat == '12')
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

                                @elseif($data->oh_from_sat == '13')
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

                                @elseif($data->oh_from_sat == '14')
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
                                    
                                @elseif($data->oh_from_sat == '15')
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

                                @elseif($data->oh_from_sat == '16')
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

                                @elseif($data->oh_from_sat == '17')
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

                                @elseif($data->oh_from_sat == '18')
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

                                @elseif($data->oh_from_sat == '19')
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

                                @elseif($data->oh_from_sat == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_sat' name='oh_to_sat' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_sat ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_sat == '5')
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

                                @elseif($data->oh_to_sat == '6')
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

                                @elseif($data->oh_to_sat == '7')
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

                                @elseif($data->oh_to_sat == '8')
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

                                @elseif($data->oh_to_sat == '9')
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
                                    
                                @elseif($data->oh_to_sat == '10')
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

                                @elseif($data->oh_to_sat == '11')
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

                                @elseif($data->oh_to_sat == '12')
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

                                @elseif($data->oh_to_sat == '13')
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

                                @elseif($data->oh_to_sat == '14')
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
                                    
                                @elseif($data->oh_to_sat == '15')
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

                                @elseif($data->oh_to_sat == '16')
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

                                @elseif($data->oh_to_sat == '17')
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

                                @elseif($data->oh_to_sat == '18')
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

                                @elseif($data->oh_to_sat == '19')
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

                                @elseif($data->oh_to_sat == '20')
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
                            </select><br>
                            @if($data->sun == '1')
                                <input type='checkbox' id='sched7' name='sched7' disabled checked value='1'></input>
                            @else
                                <input type='checkbox' id='sched7' name='sched7' disabled value='1'></input>
                            @endif
                            <label style='padding-right: 27px'>Sunday</label>
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_from_sun' name='oh_from_sun' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_from_sun ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_from_sun == '5')
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

                                @elseif($data->oh_from_sun == '6')
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

                                @elseif($data->oh_from_sun == '7')
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

                                @elseif($data->oh_from_sun == '8')
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

                                @elseif($data->oh_from_sun == '9')
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
                                    
                                @elseif($data->oh_from_sun == '10')
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

                                @elseif($data->oh_from_sun == '11')
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

                                @elseif($data->oh_from_sun == '12')
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

                                @elseif($data->oh_from_sun == '13')
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

                                @elseif($data->oh_from_sun == '14')
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
                                    
                                @elseif($data->oh_from_sun == '15')
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

                                @elseif($data->oh_from_sun == '16')
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

                                @elseif($data->oh_from_sun == '17')
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

                                @elseif($data->oh_from_sun == '18')
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

                                @elseif($data->oh_from_sun == '19')
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

                                @elseif($data->oh_from_sun == '20')
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
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            
                            {{-- @php
                                $time = ['5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20'];
                                $int = 5;
                            @endphp --}}
                            <select id='oh_to_sun' name='oh_to_sun' disabled style='width: 60px'>
                                {{-- @foreach($time as $a)
                                    <option value="{{$int}}" @if($int == $data->oh_to_sun ?? 0) selected @endif>{{$a}}</option>
                                    @php
                                        $int++;
                                    @endphp
                                @endforeach --}}
                                @if($data->oh_to_sun == '5')
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

                                @elseif($data->oh_to_sun == '6')
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

                                @elseif($data->oh_to_sun == '7')
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

                                @elseif($data->oh_to_sun == '8')
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

                                @elseif($data->oh_to_sun == '9')
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
                                    
                                @elseif($data->oh_to_sun == '10')
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

                                @elseif($data->oh_to_sun == '11')
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

                                @elseif($data->oh_to_sun == '12')
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

                                @elseif($data->oh_to_sun == '13')
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

                                @elseif($data->oh_to_sun == '14')
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
                                    
                                @elseif($data->oh_to_sun == '15')
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

                                @elseif($data->oh_to_sun == '16')
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

                                @elseif($data->oh_to_sun == '17')
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

                                @elseif($data->oh_to_sun == '18')
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

                                @elseif($data->oh_to_sun == '19')
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

                                @elseif($data->oh_to_sun == '20')
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
                        <div>
                            <label>Description/More Info.: </label>
                            <textarea style='width: 80%; height: 90px' id='desc' name='desc' disabled placeholder='Add information about place, schedule, and other announcement'>{{ $data->description ?? '' }}</textarea>
                        </div>
                        </b>
                        <br>
                        <div>
                            <table>
                                <button type='button' onclick=' window.location.href = "{{URL::to("ps_search")}}" ;' style=" height: 50px; width: 120px; display: block; float: left;margin-left:10px">Search Location</button>
                                <button type='button' id='editt' onclick="edittt()" style='float: right;height: 50px; width: 120px;margin-right:10px'>Edit Information</button>
                                <button class='update' type='submit' name='update' id="updatee" style='display: none; float: right;height: 50px; width: 120px; background-color: #35e21d;margin-right:10px'>Update Information</button>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            
            <br>
            <br>
            <br>
            <div class='footer'>
                <div align="center" class="socialbtns" style='padding-bottom: 0px; margin-bottom: 0px'>
                    <ul>
                        <li><a target='_blank' href="https://www.facebook.com/CURBPh/" class="fa fa-facebook"></a></li>

                        <li><a target='_blank' href="https://twitter.com/CurbPh" class="fa fa-twitter"></a></li>

                        <li><a target='_blank' href="https://www.instagram.com/curbph/" class="fa fa-instagram"></a></li>

                        <li><a target='_blank' href="#" class="fa fa-youtube"></a></li>
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
                    <p style='margin: 10px 10px 10px 10px;'>This system shall provide an updated schedule of pass in each localities, barangays and municipalities to assists everyone who needs to know their schedule so they could properly plan the time and day when will they go out to buy their supplies and attend to some family and personal errands.
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
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" data-autoinit="true"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/creditablecardtype.js" data-autoinit="true"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/politespace.js" data-autoinit="true"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        function edittt() {
            var z = document.getElementById("updatee");
            var a = document.getElementById("editt");
            var desc = document.getElementById("desc");

            var sched1 = document.getElementById("sched1");
            var sched2 = document.getElementById("sched2");
            var sched3 = document.getElementById("sched3");
            var sched4 = document.getElementById("sched4");
            var sched5 = document.getElementById("sched5");
            var sched6 = document.getElementById("sched6");
            var sched7 = document.getElementById("sched7");
            var oh_from_mon = document.getElementById("oh_from_mon");
            var oh_to_mon = document.getElementById("oh_to_mon");

            var oh_from_tue = document.getElementById("oh_from_tue");
            var oh_to_tue = document.getElementById("oh_to_tue");

            var oh_from_wed = document.getElementById("oh_from_wed");
            var oh_to_wed = document.getElementById("oh_to_wed");

            var oh_from_thu = document.getElementById("oh_from_thu");
            var oh_to_thu = document.getElementById("oh_to_thu");

            var oh_from_fri = document.getElementById("oh_from_fri");
            var oh_to_fri = document.getElementById("oh_to_fri");

            var oh_from_sat = document.getElementById("oh_from_sat");
            var oh_to_sat = document.getElementById("oh_to_sat");

            var oh_from_sun = document.getElementById("oh_from_sun");
            var oh_to_sun = document.getElementById("oh_to_sun");

            var cp = document.getElementById("cp");
            var cn = document.getElementById("phone");

            if (z.style.display === "none") {
                z.style.display = "block";
                a.style.display = "none";

                cp.disabled = false;
                cn.disabled = false;
                desc.disabled = false;
                sched1.disabled = false;
                sched2.disabled = false;
                sched3.disabled = false;
                sched4.disabled = false;
                sched5.disabled = false;
                sched6.disabled = false;
                sched7.disabled = false;

                oh_from_mon.disabled = false;
                oh_from_tue.disabled = false;
                oh_from_wed.disabled = false;
                oh_from_thu.disabled = false;
                oh_from_fri.disabled = false;
                oh_from_sat.disabled = false;
                oh_from_sun.disabled = false;

                oh_to_mon.disabled = false;
                oh_to_tue.disabled = false;
                oh_to_wed.disabled = false;
                oh_to_thu.disabled = false;
                oh_to_fri.disabled = false;
                oh_to_sat.disabled = false;
                oh_to_sun.disabled = false;

            }
        }

        /*Submit Button*/
        function disableButtons()
        {
          $('button[type="submit"]').attr('disabled', true);
        }

        /*Contact No. Masking*/
        jQuery(document).trigger("enhance");
    </script>
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162155193-1"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162155193-1');
    </script> --}}
</html>

    
