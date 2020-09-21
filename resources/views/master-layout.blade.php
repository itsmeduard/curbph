<!DOCTYPE html>
<html lang='{{ str_replace("_", "-", app()->getLocale()) }}'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='curbph' content='CURBPh is a collaborative response initiated project designed in Happy Homes, Baguio City, Philippines by Diosdado Santiago Jr and Filsen Eduard Valdez when the enhanced community quarantine was implemented in March 16,2020 during the Covid-19 pandemic.'>
        {{-- <meta name='csrf-token' content='{{ csrf_token() }}'> --}}

        <meta name="csrf-token" content="{{ csrf_token() }}">
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
               position: fixed;
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
            } 

            .id select:focus{
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
            @yield('content')
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
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162155193-1"></script>
        
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162155193-1');
        </script> --}}

    </body>
</html>
