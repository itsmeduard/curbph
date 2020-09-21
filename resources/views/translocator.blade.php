<!DOCTYPE html>
<html lang='{{ str_replace("_", "-", app()->getLocale()) }}'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>CURBPh</title>
        <link rel='icon' href="{{ asset('public/img/curbph_ico.ico') }}" type='image/icon type'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
                overflow-y: scroll;
                height: 150px;
                width: 90%;
                resize: none;
                font-family: "Garamond";
            }
        </style>
    </head>
    <body>
        <div class='main'>
            <div class='flex-center position-ref'>
                <div class='content-main'>
                    <div class='content-mainpage'>
                        <img src="{{ asset('public/img/curbph_logo.png') }}" width='30%' height='20%'>
                    </div>
                    <br>
                    <span><b>Transport Locator</b></span>
                    <br>
                    <div class='content-box'>The team asked the basic question, how might we provided assistance to the government and fellow Filipinos to curb the transmission of Covid-19 while under enhanced community quarantine? One of the issue is the need to gather more information regarding the condition of those who are already in their homes but not tested for Covid-19 and the other one is how could family go to the center to buy their supplies, will there be an arranged transportation that the local government may provide? Hence, CURBPh was born a mobile responsive system which gathers information about the condition those in their homes and also identify location of arranged transportation by the local government unit such as the the barangay and the municipality. The aim is that the system will get updated every time as the community provides information and trace possible transmission of Covid-19 as well addressing the need to locate arranged transportation nearby faster</div>
                    <br>
                    <div>
                        <button onclick=' window.location.href = "{{URL::to("tl_search")}}" ;' style=" height: 50px; width: 120px">Search Location</button>
                    </div>
                </div>
            </div>
            <div class='footer'>
                <div align="center" class="socialbtns" style='padding-bottom: 0px; margin-bottom: 0px'>
                    <ul>
                        <li><a target='_blank' href="https://www.facebook.com/CURBPh/" class="fa fa-facebook"></a></li>

                        <li><a target='_blank' href="https://twitter.com/CurbPh" class="fa fa-twitter"></a></li>

                        <li><a target='_blank' href="#" class="fa fa-instagram"></a></li>

                        <li><a target='_blank' href="#" class="fa fa-youtube"></a></li>
                    </ul>
                </div>
                <p style='padding-top: 0px; border-bottom-style: solid; width: 80%; margin: 5px auto;'>Copyright @ 2020 CURBPh</p>
            </div>
        </div>
    </body>
</html>