@extends('master-layout')
@section('content')
<div class='flex-center position-ref'>
    <div class='content-main'>
        <div class='content-mainpage'>
            <a href='{{route('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
        </div>
        <br>
        <br>
        <div>
            <button onclick=' window.location.href = "{{URL::to("covid_tracer_q")}}" ;' style=' height: 50px; width: 60%' ><p class='ico-ecqt'></p> ECQ COVID19 Tracer</button>
            <br>
            <br>
            <br>
            <button onclick=' window.location.href = "{{URL::to("tl_search")}}" ;' style=' height: 50px; width: 60%'><p class='ico-ecqtl'></p> Free Transport Locator</button>
            <br>
            <br>
            <br>
            <button onclick=' window.location.href = "{{URL::to("ps_search")}}" ;' style=' height: 50px; width: 60%'><p class='ico-ecqps'></p> Quarantine Pass Schedule</button>
            <br>
            <br>
            <br>
            <button onclick=' window.location.href = "{{URL::to("msl")}}" ;' style=' height: 50px; width: 60%'><p class='ico-ecqms'></p> Mobile Seller Locator</button>
        </div>
    </div>
</div>
<div id="hp-ctn-howItWorks-left" style='bottom: 277px; width: 100px'>
    <p><a onclick="document.getElementById('htu').style.display='block'">How to use</a></p>
</div>
<div id="htu" class="modal"> 
    <span onclick="document.getElementById('htu').style.display='none'" class="close" title="Close Modal">×</span> 
    <form class="modal-content animate"> 
        <div>
            <p style='margin: 10px 10px 10px 10px;'>
                <b>How to use CUBPh Mobile Responsive System</b><br><br>
                General Process:
                CURBPh as mobile responsive system that can be accessed by typing in any browser
                https://curbph.info<br><br>
                Once entered in the search bar, the user will be brought to the home screen of the system. The user
                are encouraged to read the menu such as about us, our response,data privacy and support us modals<br><br>
                Each system has its own selection button which will lead the user to access the different services it
                provides.<br><br>
                ECQ Covid19 Tracer
                Transport Locator
                Quarantine PASS Schedule
                Mobile Seller Locator<br><br>
                <b>1. Accessing the CURPh ECQ Covid 19 Tracer.</b><br><br>
                Step1: To access the ECQ Covid19 Tracer, the user will have to click on the ECQ Covid19 Tracer button
                in the main page.<br><br>
                Step 2: The button will lead the user to the page where he/she could read the information about the
                tracer.<br><br>
                Step 3: To proceed the user will be asked to input his email or contact number, then select his
                province, city/town and barangay and click next.<br><br>
                Step 4: The user will then be asked to provide other specific data such as age, sex,civil status. The
                questions are grouped accordingly:<br>
                1. Socio-economic Status<br>
                2. Living Condition<br>
                3. Travel History<br>
                4. *Work Hazard ( for Frontliners)<br>
                5. Community Interaction<br>
                6. Health Status<br><br>
                Step 5: After providing proper information, the user will have to click the submit button.<br><br>
                <b>2. Accessing the CURBPh Free Transport Locator</b><br><br>
                Step1: To access the Free Transport Locator, the user will have to click on the Free Transport Locator
                button in the main page.<br><br>
                Step2: The button will lead the user to the page where he/she could read the information about the
                transport locator.<br><br>
                Step 3: To proceed the user will be asked to input and select his province, city/town and barangay and
                click next.<br><br>
                Step 4: If the transport locator is already updated the user will be able to see the following in relation
                to his/her selected barangay.<br>
                Nearest landmark<br>
                Additional Description<br>

                Operating Hours<br>
                Contact Person<br>
                Mobile Number<br>
                Preview Picture of the transport location<br><br>
                Step 5: If the transport located is not yet updated the user can update proper information by clicking
                the edit information button on the top and bellow the page and click again when done.<br><br>
                Step 6: The user may now search and click the button for other locations where the free transport
                locator is available<br><br>
                <b>3. Accessing the CURBPh Quarantine PASS Schedule</b><br><br>
                Step1: To access the Quarantine PASS Schedule, the user will have to click on the Quarantine PASS
                Schedule button in the main page.<br><br>
                Step2: The button will lead the user to the page where he/she could read the information about the
                PASS schedule.<br><br>
                Step 3: To proceed the user will be asked to input and select his province, city/town and barangay and
                click next.<br><br>
                Step 4: If the PASS schedule is already updated the user will be able to see the following in relation to
                his/her selected barangay.<br><br>
                Schedule and period of quarantine pass schedule per day
                Contact Person
                Mobile Number
                Description and More Information<br><br>
                Step 5: If the PASS Schedule is not yet updated the user can update proper schedule by clicking the
                edit information button bellow the page and click update information when done.<br><br>
                Step 6: The user may now search and click the button for other locations quarantine PASS Schedule.<br><br>
                <b>4. Accessing the CURBPh Mobile Seller Locator</b><br><br>
                Step1: To access the Mobile Seller Locator, the user will have to click on the Mobile Seller Locator
                button in the main page.<br><br>
                Step2: The button will lead the user to the page where he/she could read the information about the
                Seller locator.<br><br>
                Step 3: To proceed the user will be asked to input and select his province, city/town and barangay and
                click next.<br><br>
                Step4: If the Seler locator is already updated the user will be able to see the following in relation to
                his/her selected barangay.<br><br>
                Products or Services
                Name of Seller
                Contact Information
                Mobile Number
                FB Messenger link
                Additional Description
                And if delivery is free or not<br><br>

                Step 5: If the seller located is not yet updated the user can update proper information by clicking the
                edit information button on the top the page and click again when done.<br><br>
                Step 6: The user may now search and click the button for other locations where sellers of specific
                products are available
            </p>
        </div> 
    </form> 
</div>

<div id="hp-ctn-howItWorks-left" style='bottom: 500px; width: 220px'>
    <p><a onclick="document.getElementById('info').style.display='block'">Data Privacy & Terms of Use</a></p>
</div>
<div id="info" class="modal"> 
    <span onclick="document.getElementById('info').style.display='none'" class="close" title="Close Modal">×</span> 
    <form class="modal-content animate"> 
        <div>
            <p style='margin: 10px 10px 10px 10px;'>
                <b>PRIVACY POLICY &amp; TERMS OF USE</b>
                <br><br>
                <b>Privacy Policy</b><br><br>
                CURBPh Privacy Policy shall abide by the regulations implemented under the Data Privacy Act
                of 2012. CUBPh respect the personal data, and your right to privacy in terms of the data and
                information that the system gather, use or otherwise process and interpret from your provided
                responses.<br><br>
                Personal data refers to information and data which includes concept of personal, sensitive, and
                privileged information. CURBPh collect personal data that you inputted in our system through
                your responses. The data you share with us may include the following but not limited to:<br><br>
                • e-mail address;<br>
                • telephone and cell phone numbers;<br>
                • age;<br>
                • gender;<br>
                • living condition;<br>
                • socio economic condition;<br>
                • travel history;<br><br>
                The information you provide to CURBPh through your responses will be used for a limited
                period only for the following purposes:<br>
                • trace information of households under enhanced community quarantine during the Covid-19
                pandemic<br>
                • share information with the government institutions, respective agencies and sectors who has
                legal and legitimate interest<br>
                • compiling and generating reports for statistical, academic and research purposes;<br><br>
                The terms used in CURBPh Privacy Policy have the same meanings as in our Terms and
                Conditions. CURBPh shall disclose, transfer and share your information only to legitimate
                institution, secured in a variety of paper and electronic formats including databases. Access to
                your personal data is limited to CURBPh and its designated personnel incharge of securing
                legal and legitimate interest in them. Rest assured that the system use of your personal data is
                solely for us to help in curbing the Covid19 transmission and providing solution where the
                system could help.<br><br>
                CURBPH use third party services that may collect information used to identify you specifically
                google analytics. We want to inform you that whenever you use our system, we collect log data.
                Log Data may include information such as your device Internet Protocol (“IP”) address, device
                name, operating system version, when utilizing our system, the time and date of your use of the
                system, and other statistics.<br><br>
                The information that we request will be retained by us and used as described in this privacy
                policy. Unless otherwise provided by law or by appropriate institutions and agencies, relevant
                personal data shall be indefinitely retained for historical and statistical purposes. Where a

                retention period is provided by law, all affected records will be securely disposed of after such
                period. In addition, to the extent permitted or required by law, we may also share, disclose, or
                transfer your personal data to an institution and agency who has legitimate interest to them.<br>
                Your personal data send through your responses are protected against unauthorized use,
                collection, copying, modification, and other similar risks. However, since much of our data
                collection courses through the Internet, we cannot assure that it is completely 100 percent
                secure. We value your trust in providing us your Personal Information, thus we are striving to
                use all acceptable means of protecting it. But remember that no method of transmission over
                the internet, or method of electronic storage is 100% secure and reliable, and we cannot
                guarantee its absolute security. However, we can assure you that we do not transfer or share
                your personal data with other individuals or organizations, unless it is required or permitted by
                law.<br><br>
                Once you provide us with your personal information, you also give us consent to use your
                information. If you choose to use our system, you agree to the collection and use of information
                in relation to this policy. The Personal Information that we collect is used for providing and
                improving the system. We will not use or share your information with anyone except as
                described in this Privacy Policy.<br><br>
                Contact us immediately for any queries and/or clarifications with regards to our system. You
                may let us know and ask us to stop collecting and using your personal data at any given time by
                reaching us through our e-mail:curbph@gmail.com<br><br>
                Under the law, you have rights to request and access the information you have provided us.
                Please contact us through our e-mail or through our phone number so that we may assist you in
                your request. Should you wish to correct and update the information you have given us, you
                may reach us through our e-mail: curbph@gmail.com with “Information Update” as your subject
                line. We would want to make sure that your personal information is up to date and correct at all
                times.<br><br>
                We may update our Privacy Policy from time to time or make changes to this policy. Hence, you
                are advised to review this page periodically for any changes. We will notify you of any changes
                by posting the new Privacy Policy on this page. Any modification is effective immediately after
                they are posted on this website.<br><br>
                <b>Terms of Use</b><br><br>
                This website and the contents herein – including all information, analysis and mapping
                CURBPh.info © 2020, all rights reserved – is intended for public service and data analysis
                purposes only in relation to the Covid-19 transmission during the enhanced community
                quarantine. CURBPh disclaims any and all representations and warranties with respect to the
                website, including accuracy,fitness for use and merchantability. CURBPh rely on the publicly
                provided data from different sources users and individuals that may not always or consistently

                agree. Any and all medical concerns must be directed towards and addressed by qualified
                health professionals, respective agencies and the local and government authorities. The use of
                CURBPh in commerce is strictly prohibited.
            </p>
        </div> 
    </form> 
</div>
@endsection