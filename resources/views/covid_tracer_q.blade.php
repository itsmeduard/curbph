@extends('master-layout')
@section('content')

<div class='flex-center position-ref'>
    <div class='content-main'>
        <div class='content-mainpage'>
            <a href='{{route('mainpage')}}'><img src='{{ asset('public/img/curbph_logo.png') }}' width='30%' height='20%'></a>
        </div>

        <div class='container'>
            <form role="form" method="get" action="{{route('covid_tracer_q_submit')}}" enctype="multipart/form-data" onsubmit='disableButtons()'>
                {{ csrf_field() }}
                <span style='font-size: 30px'><b>ECQ COVID19 Tracer</b></span><br>
                <span style='font-size: 13px; max-width: 90%;'><b>Please provide the proper information needed</b></span>
                <br>
                <br>
                <div id='t1' style='display: block; text-align: left; padding-left: 50px;'>
                    <label>Email Address or Mobile Number: </label>
                    <input type='input' name='q1' id='q1' placeholder=' juan@gmai.com or 09216082998' style='width: 246px'></input><br>
                    <br>
                    <label>Province: </label>
                    <select id="search_mun" name='province' style="width: 165px">
                        <option selected disabled>Select</option>
                            @forelse($province as $p)
                                <option value='{{ $p->province_code }}'>{{ $p->province_description }}</option>
                            @empty
                                <option>                         </option>
                            @endforelse
                    </select>
                    <br>
                    <label>City/ Town: </label>
                     <select id="search_brgy" name='mun'>
                        <option selected disabled>                         </option>
                    </select>
                    <select id='search_brgy_show' name='search_brgy_show' style='display: none;'>
                        <option>Please wait...</option>
                    </select>
                    <br>
                    <label>Barangay: </label>
                    <select id="brgy" name="q2" style="width: 160px">
                        <option selected disabled value='0'>                         </option>
                    </select>
                    <select id='brgy_show' name='brgy_show' style='display: none;'>
                        <option>Please wait...</option>
                    </select>
                </div>

                <div id='t2' style='display: none; text-align: left; padding-left: 50px;'>
                    <label>Age: </label>
                    <select name='q3' id='q3' style='width: 40px'>
                        @for ($i = 13;$i <= 100;$i++)
                            <option value='{{ $i }}'>{{ $i }}</option>
                        @endfor
                    </select>
                    <br><br>

                    <label>Sex: </label>
                    <input type='radio' id='q4' name='q4' value='1'>
                    <label for='male'>Male</label>
                    <input type='radio' id='q4' name='q4' value='2'>
                    <label for='female'>Female</label>
                    <input type='radio' id='q4' name='q4' value='3'>
                    <label for='other'>Other</label><br><br>

                    <label>Civil Status: </label>
                    <select name='q5' id='q5'>
                        <option value='1'>Single</option>
                        <option value='2'>Married</option>
                        <option value='3'>Widow</option>
                    </select><br>
                </div>

                <div id='t3' style='display: none; text-align: left; padding-left: 40px;'>
                    <br>
                    <br>
                    <label style='padding-left: 5px'>Socio Economic Status 1 </label><br>

                    <div>
                        <input type='radio' name='q6' value='1'>
                        <label>Self-Employed/ Business Owner</label><br>

                        <input type='radio' name='q6' value='2'>
                        <label>Employed</label><br>
                        
                        <input type='radio' name='q6' value='3'>
                        <label>Unemployed</label><br>
                    </div>
                </div>

                <div id='t4' style='display: none; text-align: left; padding-left: 40px;'>
                    <br>
                    
                    <label>Socio Economic Status 2 </label><br>
                    <label>Educational Background: </label><br>
                    <div>
                        <select name='q7' id='q6' style='width: 200px; margin: 0px;'>
                            <option value='1'>Elementary</option>
                            <option value='2'>High School/ Senior Highschool</option>
                            <option value='3'>College</option>
                            <option value='4'>Master's</option>
                            <option value='5'>Post Graduate</option>
                        </select>
                    </div>
                </div>

                <div id='t5' style='display: none; text-align: left; padding-left: 40px;'>
                    <label style='padding-left: 5px'>Living Condition 1 </label><br>

                    <input type='radio' name='q8' value='1' checked>
                    <label>Alone</label><br>
                    <input type='radio' name='q8' value='2'>
                    <label>With Partner/ Husband/ Wife</label><br>
                    <input type='radio' name='q8' value='3'>
                    <label>With Core Family/ With Children</label><br>
                    <input type='radio' name='q8' value='4'>
                    <label>With Extended Family/ Relatives</label><br>
                    <input type='radio' name='q8' value='5'>

                    <label>Religious Community </label><br>
                    <input type='radio' name='q8' value='6'>

                    <label>With Co-Workers </label><br>
                    <input type='radio' name='q8' value='7'>
                    <label>With Boardmates/ Dormates</label><br>
                    <input type='radio' name='q8' value='8'>
                    <label>Friends</label>
                </div>

                <div id='t6' style='display: none; text-align: left; padding-left: 40px;'>
                    <label style='padding-left: 5px'>Living Condition 2 </label><br>

                    <input type='radio' name='q9' value='1' checked>
                    <label>Single Detached House</label><br>
                    <input type='radio' name='q9' value='2'>
                    <label>Fenced Subdivision/ Community</label><br>
                    <input type='radio' name='q9' value='3'>
                    <label>Compound</label><br>
                    <input type='radio' name='q9' value='4'>
                    <label>Residential Building/ Condo</label><br>
                    <input type='radio' name='q9' value='5'>
                    <label>Informal Settlement</label><br>
                    <input type='radio' name='q9' value='6'>
                    <label>Government Housing Facility</label><br>
                    <input type='radio' name='q9' value='7'>
                    <label>Evacuation Center</label><br>
                    <input type='radio' name='q9' value='8'>
                    <label>Boarding House/ Dormitories</label>
                </div>

                <div id='t7' style='display: none; text-align: left; padding-left: 40px;'>
                    <br><br>
                    <label>No. of Members in the Household: </label>  
                    <select name='q10' id='q10' style='width: 40px'>
                        @for ($i = 1;$i <= 100;$i++)
                            <option value='{{ $i }}'>{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div id='t8' style='display: none; text-align: left; padding-left: 30px;'>
                    <br><br>
                    <label>Are you a person with compromised health condition? </label><br>

                    <label>
                    <input type="radio" name='q11' value='0' id='r_10' onclick='r10_display()'>Yes</label>
                    <label>
                    <input type="radio" name='q11' value='1' id='r_10' onclick='r10_display()'>No</label>

                    <br><br>
                    <div style='display: none;' id='r_show'>
                        <label>
                        <input type="radio" name='q11' value='2' id='q10_select' onclick='r10_select()'>Due to Age: </label>

                        <select name='q11' id='q10_select_show' style="width: 100px" disabled>
                            <option value='3'>18 Below</option>
                            <option value='4'>Old Age</option>
                        </select>

                        <br>
                        <label>
                        <input type="radio" id='q10_select' name='q11' value='5' onclick='r10_select()'>Due to particular sickness/illness</label>
                    </div>
                </div>

                <div id='t9' style='display: none; text-align: left; padding-left: 30px;'>
                    <br><br>
                    <label>Are you living with a person who has compromised health condition? </label><br>
                    
                    <label>
                    <input type="radio" name='q12' value='0' id='r_11' onclick='r11_display()'>Yes</label>
                    <label>
                    <input type="radio" name='q12' value='1' id='r_11' onclick='r11_display()'>No</label>
                    
                    <br><br>
                    <div style='display: none;' id='r11_show'>
                        <label>
                        <input type="radio" name='q12' value='2' id='q11_select' onclick='r11_select()'>Due to Age: </label>

                        <select name='q12' id='q11_select_show' style="width: 100px" disabled>
                            <option value='3'>18 Below</option>
                            <option value='4'>Old Age</option>
                        </select>

                        <br>
                        <label>
                        <input type="radio" id='q11_select' name='q12' value='5' onclick='r11_select()'>Due to particular sickness/illness</label>
                    </div>
                </div>

                <div id='t10' style='display: none; text-align: left; padding-left: 40px;'>
                    <label>Travel History</label><br>
                    <label>Did you travel in the last 14 days?</label><br>
                    <div>
                        <label>
                        <input type="radio" name='q13' value='0' id='r_12' onclick='r12_display()'>Yes</label>
                        <label>
                        <input type="radio" name='q13' value='1' id='r_12' onclick='r12_display()'>No</label>
                    </div>
                    <br><br>
                    <div style='display: none;' id='r12_show'>
                        <label><input type="radio" name='q13' value='2' id='q12_select' onclick='r12_select()'>Domestic/ Inland </label>

                        <label><input type="radio" id='q12_select2' name='q12' value='5' onclick='r12_select()'>Out of the Country</label><br>

                        <label id='q12_select_show_ph' style="display: none;">Last Province Visited: </label>
                        <select id="search_mun_place" name='q13' style="width: 165px;display: none;">
                            <option selected disabled>Select</option>
                                @forelse($province as $p)
                                    <option value='{{ $p->province_code }}'>{{ $p->province_description }}</option>
                                @empty
                                    <option>                         </option>
                                @endforelse
                        </select>
                        <label id='q12_select_show_ph2' style="display: none;">Last  City/ Town Visited: </label>
                         <select id="search_brgy_place" name='q14' style='display: none;'>
                            <option selected disabled>                         </option>
                        </select>

                        {{-- Start --}}
                        <label id='q12_select_show' style="display: none;">Last Country Visited: </label>
                        <select id="search_country" name='q13' style="width: 165px;display: none;">
                            <option selected disabled>Select</option>
                                @forelse($country as $c)
                                    <option value='{{ $c->id }}'>{{ $c->country_name }}</option>
                                @empty
                                    <option>                         </option>
                                @endforelse
                        </select>
                        <label id='q12_select_show2' style="display: none;">Last City/ Town Visited: </label>
                        <input type='input' name='q14' id='q12_show_foreign' style="display: none;"></input>
                        {{-- End --}}
                    </div>
                </div>

                <div id='t11' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label style='width: 80%'>Are you a frontliner? </label>

                        <input type="radio" name='q15' value='1' id='r_13' onclick='r13_display()'>Yes</label>

                        <label>
                        <input type="radio" name='q15[]' value='2' id='r_13_v2' onclick='r13_display()'>No</label>
                        <br>

                        {{-- <br><br> --}}
                        <div style='display: none;' id='t13_show'>
                            <label>
                            <input type='checkbox' name='q15[]' value='1' id='q11_check'>Law enforcers and public safety personnel<br>(Tanod, PNP, AFP, LGU worker, Other agency)</label><br>

                            <input type='checkbox' name='q15[]' value='2' id='q11_check'>Health Care Workers<br>(Nurses, Doctors, RHU staff)</label><br>

                            <input type='checkbox' name='q15[]' value='3' id='q11_check'>Maintenance And Utility personnel<br>(Janitor, Cleaners, Street Sweefers)</label><br>

                            <input type='checkbox' name='q15[]' value='4' id='q11_check'>Food Handlers and Food Service Staff<br>(Fastfood, Crew, Takeout/Delivery crew)</label><br>

                            <input type='checkbox' name='q15[]' value='5' id='q11_check'>Cashiers And Supermarket attendants</label><br>

                            <input type='checkbox' name='q15[]' value='6' id='q11_check'>Clerical And Administrative personnel<br>(Still working in their respective offices under skeletal schedule)</label><br>

                            <input type='checkbox' name='q15[]' value='7' id='q11_check'>Guard on duty</label>
                            <div><br></div>
                            <div><br></div>
                            <div><br></div>
                            <div><br></div>
                            <div><br></div>
                        </div>
                    </div>
                </div>

                <div id='t12' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label>Work Hazzard 1</label><br>
                        <label style='width: 80%'>Did you interact with suspected person under monitoring in the last 14 days?</label><br>

                        <input type='radio' name='q16' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q16' value='2'>
                        <label>No</label><br>

                        <label style='width: 80%'>Did you interact with suspected person under investigation in the last 14 days?</label><br>

                        <input type='radio' name='q17' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q17' value='2'>
                        <label>No</label><br>

                        <label style='width: 80%'>Did you interact with confirmed COVID19 patient in the last 14 days?</label><br>

                        <input type='radio' name='q18' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q18' value='2'>
                        <label>No</label><br>
                    </div>
                </div>

                <div id='t13' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label>Work Hazzard 2</label><br>
                        <label style='width: 80%'>Did you stay in your home/household, after your work schedule?</label><br>
                        <label>
                        <input type="radio" name='q19' value='1' id='r17' onclick='r17_display()'>Yes</label>
                        <label>
                        <input type="radio" name='q19' value='2' id='r17_v2' onclick='r17_display()'>No</label><br>
                        

                        <div style='display: none;' id='r17_yes'>
                            <label style='width: 80%'>Do you isolate yourself from the members of your household?</label><br>
                            <label>
                            <input type="radio" name='q19' value='1'>Yes</label>
                            <label>
                            <input type="radio" name='q19' value='2'>No</label><br>

                            <label style='width: 80%'>Do you take a bath and wash yourself or disinfect upon entering your home/house?</label><br>
                            <label>
                            <input type="radio" name='q20' value='1'>Yes</label>
                            <label>
                            <input type="radio" name='q20' value='2'>No</label><br>

                            <label style='width: 80%'>Do you follow the DOH prescribed protocols for frontliners?</label><br>
                            <label>
                            <input type="radio" name='q21' value='1'>Yes</label>
                            <label>
                            <input type="radio" name='q21' value='2'>No</label><br>
                        </div>

                        <div style='display: none;' id='r17_no'>
                            <label style='width: 80%'>Where do you stay?</label><br>
                            <select name='q19'>
                                <option value='1'>Company provided facility</option>
                                <option value='2'>Government provided facility</option>
                                <option value='3'>Separate house from the family</option>
                            </select><br>

                            <label style='width: 80%'>Do you take a bath and wash yourself or disinfect upon entering your quarters/ provided facility?</label><br>
                            <label>
                            <input type="radio" name='q20' value='1'>Yes</label>
                            <label>
                            <input type="radio" name='q20' value='2'>No</label><br>

                            <label style='width: 80%'>Do you follow the DOH prescribed protocols for frontliners?</label><br>
                            <label>
                            <input type="radio" name='q21' value='1'>Yes</label>
                            <label>
                            <input type="radio" name='q21' value='2'>No</label><br>
                        </div>
                    </div>
                </div>


                {{-- Community Start here --}}
                <div id='t14' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label>Community Interaction 1(Barangay Level)</label><br><br>
                        <label style='width: 80%'>Are you staying in a community with a person under monitoring? </label><br>

                        <input type='radio' name='q22' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q22' value='2'>
                        <label>No</label>
                        <input type='radio' name='q22' value='3'>
                        <label>Not Sure</label><br>

                        <label style='width: 80%;'>Are you staying in a community with a person under investigation? </label><br>

                        <input type='radio' name='q23' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q23' value='2'>
                        <label>No</label>
                        <input type='radio' name='q23' value='3'>
                        <label>Not Sure</label><br>

                        <label style='width: 80%;'>Are you staying in a community with a person confirmed with COVID19? </label><br>

                        <input type='radio' name='q24' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q24' value='2'>
                        <label>No</label>
                        <input type='radio' name='q24' value='3'>
                        <label>Not Sure</label><br>
                    </div>
                </div>

                <div id='t15' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label>Community Interaction 2(Barangay Level)</label><br>
                        <label style='width: 80%'>Did you interact with a person under monitoring in the last 14 days? </label><br>

                        <input type='radio' name='q25' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q25' value='2'>
                        <label>No</label>
                        <input type='radio' name='q25' value='3'>
                        <label>Not Sure</label><br>

                        <label style='width: 80%'>Did you interact with a person under investigation in the last 14 days? </label><br>

                        <input type='radio' name='q26' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q26' value='2'>
                        <label>No</label>
                        <input type='radio' name='q27' value='3'>
                        <label>Not Sure</label><br>

                        <label style='width: 80%'>Did you interact with a person confirmed a with COVID19 in the last 14 days? </label><br>

                        <input type='radio' name='q28' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q28' value='2'>
                        <label>No</label>
                        <input type='radio' name='q28' value='3'>
                        <label>Not Sure</label>
                    </div>
                </div>

                <div id='t16' style='display: none; text-align: left; padding-left: 40px;'>
                    <div>
                        <label style='width: 80%'>Have you felt any of the following in the last 14 days? </label><br>

                        <input type='checkbox' name='q29[]' value='1' id='t12_1' onclick='t12_check1()'>
                        <label>Head Ache</label><br>
                        <input type='checkbox' name='q29[]' value='2' id='t12_2' onclick='t12_check2()'>
                        <label>Fever</label><br>
                        <input type='checkbox' name='q29[]' value='3' id='t12_3' onclick='t12_check3()'>
                        <label>Cold</label><br>
                        <input type='checkbox' name='q29[]' value='4' id='t12_4' onclick='t12_check4()'>
                        <label>Sore Throat</label><br>
                        <input type='checkbox' name='q29[]' value='5' id='t12_5' onclick='t12_check5()'>
                        <label>Chills</label><br>
                        <input type='checkbox' name='q29[]' value='6' id='t12_6' onclick='t12_check6()'>
                        <label>Shortness of Breath</label><br>
                        <input type='checkbox' name='q29[]' value='7' id='t12_7' onclick='t12_check7()'>
                        <label>Dry Cough</label><br>
                        <input type='checkbox' name='q29[]' value='8' id='t12_8' onclick='t12_check8()'>
                        <label>Diarrhea</label><br>
                        <input type='checkbox' name='q29[]' value='9' id='t12_9' onclick='t12_check()'>
                        <label style='width: 50%;'>Not any</label>
                    </div>
                </div>

                <div id='t17' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label style='width: 80%'>Did you take any over the counter medicine in the last 14 days? </label>

                        <input type='radio' name='q30' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q30' value='2'>
                        <label>No</label><br>

                        <label style='width: 80%'>Did you feel better after taking over the counter medicine? </label>

                        <input type='radio' name='q31' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q31' value='2'>
                        <label>No</label><br>

                        <label style='width: 80%'>Did you condition improve in the last 14 days? </label>

                        <input type='radio' name='q32' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q32' value='2'>
                        <label>No</label><br>

                        <label style='width: 80%'>Has the symptom been re-occurring in the last 14 days? </label>
                        <input type='radio' name='q33' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q33' value='2'>
                        <label>No</label><br>
                    </div>
                </div>

                <div id='t18' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label style='width: 80%'>Did you visit the hospital in the last 14 days? </label>

                        <input type='radio' name='q34' value='1'>
                        <label>Yes</label>
                        <input type='radio' name='q34' value='2'>
                        <label>No</label><br>
                    </div>
                </div>

                <div id='t19' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label style='width: 80%'>What did you do after feeling some of the symptoms? </label>
                        <br>
                        <input type='checkbox' name='q35[]' value='1'>
                        <label>Self Quarantine</label><br>
                        <input type='checkbox' name='q35[]' value='2'>
                        <label>Social Distancing</label><br>
                        <input type='checkbox' name='q35[]' value='3'>
                        <label>Visit the Doctor</label><br>
                        <input type='checkbox' name='q35[]' value='4'>
                        <label>Self Medicate</label><br>
                    </div>
                </div>

                <div id='t20' style='display: none; text-align: left; padding-left: 30px;'>
                    <div>
                        <label style='width: 80%'>How long have been feeling the symptoms? </label><br>
                        <input type='radio' name='q36' value='1'>
                        <label>1-3 days</label><br>
                        <input type='radio' name='q36' value='2'>
                        <label>4-7 days</label><br>
                        <input type='radio' name='q36' value='3'>
                        <label>2 weeks</label><br>
                        <input type='radio' name='q36' value='4'>
                        <label>3 weeks</label>
                    </div>
                </div>

                <div id='t21' style='display: none; text-align: left; padding-left: 30px;'>
                    <div style='width: 75%'>
                        <label style='width: 75%'>Check any of the following that you have been observing while under ECQ: </label><br>
                        <input type='checkbox' name='q37[]' value='1'>
                        <label>Washing hands with soap and water</label><br>
                        <input type='checkbox' name='q37[]' value='2'>
                        <label>Social distancing</label><br>
                        <input type='checkbox' name='q37[]' value='3'>
                        <label>Home quarantine</label><br>
                        <input type='checkbox' name='q37[]' value='4'>
                        <label>Taking Vitamins</label>
                    </div>
                </div>

                <br><br><br>
                <div style="position: fixed; bottom: 90px; left: 10px; ">
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick='bn2()' id='b2'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick='bn3()' id='b3'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn4()" id='b4'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn5()" id='b5'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn6()" id='b6'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn7()" id='b7'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn8()" id='b8'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn9()" id='b9'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn10()" id='b10'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn11()" id='b11'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn12()" id='b12'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn13()" id='b13'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn14()" id='b14'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn15()" id='b15'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn16()" id='b16'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn17()" id='b17'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn18()" id='b18'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn19()" id='b19'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn20()" id='b20'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn21()" id='b21'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn22()" id='b22'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn23()" id='b23'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn24()" id='b24'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn25()" id='b25'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn26()" id='b26'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn27()" id='b27'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn28()" id='b28'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn29()" id='b29'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn30()" id='b30'>Back</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="bn31()" id='b31'>Back</button>
                </div>

                {{-- Next Button --}}
                <div style="position: fixed; bottom: 90px; right: 10px; ">
                    <button type='button' style='display: block; height: 50px; width: 100px; font-size: 20px;' onclick='nn1()' id="n1">Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick='nn2()' id='n2'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick='nn3()' id='n3'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick='nn4()' id='n4'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn5()" id='n5'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn6()" id='n6'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn7()" id='n7'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn8()" id='n8'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn9()" id='n9'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn10()" id='n10'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn11()" id='n11'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn12()" id='n12'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn13()" id='n13'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn14()" id='n14'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn15()" id='n15'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn16()" id='n16'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn17()" id='n17'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn18()" id='n18'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn19()" id='n19'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn20()" id='n20'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn21()" id='n21'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn22()" id='n22'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn23()" id='n23'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn24()" id='n24'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn25()" id='n25'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn26()" id='n26'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn27()" id='n27'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn28()" id='n28'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn29()" id='n29'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn30()" id='n30'>Next</button>
                    <button type='button' style='display: none; height: 50px; width: 100px; font-size: 20px;' onclick="nn31()" id='n31'>Next</button>

                    <button type='submit' style='display: none; height: 50px; width: 100px; font-size: 20px;' id='submit'>Submit</button>
                </div>
            </form>
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
            <p style='margin: 10px 10px 10px 10px;'>This system gives utmost focus on everyone’s health by gathering information that the government
            agency or other sectors would be able to use to trace and understand the transmission of Covid-19
            respiratory disease in the Filipino household under ECQ specially those who may need proper
            assistance from the government and isolation of those manifesting symptoms or of higher risk or
            more vulnerable to the corona virus.<br><br>
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
                <b>How to use CUBPh Mobile Responsive System</b><br>
                General Process:<br><br>
                CURBPh as mobile responsive system that can be accessed by typing in any browser
                https://curbph.info<br><br>
                Once entered in the search bar, the user will be brought to the home screen of the system. The user
                are encouraged to read the menu such as about us, our response,data privacy and support us modals<br><br>
                Each system has its own selection button which will lead the user to access the different services it
                provides.<br><br>

                ECQ Covid19 Tracer<br><br>

                <b>Accessing the CURPh ECQ Covid 19 Tracer</b><br><br>
                Step1: To access the ECQ Covid19 Tracer, the user will have to click on the ECQ Covid19 Tracer button
                in the main page.<br><br>
                Step 2: The button will lead the user to the page where he/she could read the information about the
                tracer.<br><br>
                Step 3: To proceed the user will be asked to input his email or contact number, then select his
                province, city/town and barangay and click next.<br><br>
                Step 4: The user will then be asked to provide other specific data such as age, sex,civil status. The
                questions are grouped accordingly:<br><br>
                1. Socio-economic Status<br>
                2. Living Condition<br>
                3. Travel History<br>
                4. *Work Hazard ( for Frontliners)<br>
                5. Community Interaction<br>
                6. Health Status<br><br>
                Step 5: After providing proper information, the user will have to click the submit button.
            </p>
        </div> 
    </form> 
</div>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
@include('best_script_js')
    <script type="text/javascript">
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

        $('#search_mun_place').on('change', function(){
            $('#search_brgy_place > option').remove();
            $.ajax({
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    mun: $(this).val()
                },
                dataType: 'JSON',
                url: '{{ route("search_mun") }}',
                success: (data) => {
                    $('#search_brgy_place').html("<option value='0' selected disabled></option>");
                    JSON.parse(JSON.stringify(data)).map(datas => {
                        $('#search_brgy_place').append(`<option value="${datas.city_municipality_code}">${datas.city_municipality_description}</option>`)
                    });
                }
            });
        });

        $('#search_brgy_place').on('change', function(){
            $('#brgy_place > option').remove();
            $.ajax({
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    brgy: $(this).val()
                },
                dataType: 'JSON',
                url: '{{ route("search_brgy") }}',
                success: (data) => {
                    $('#brgy_place').html("<option value='0' selected disabled id='brgy_place'></option>");
                    JSON.parse(JSON.stringify(data)).map(datas => {
                        $('#brgy_place').append(`<option value="${datas.barangay_code}">${datas.barangay_description}</option>`)
                    });
                }
            });
        });

        function disableButtons()
        {
            $('button[type="submit"]').attr('disabled', true);
        }

        /*Nex Button*/
        function nn1() {
            var b2 = document.getElementById("b2");

            var n1 = document.getElementById("n1");
            var n2 = document.getElementById("n2");

            var t1 = document.getElementById("t1");
            var t2 = document.getElementById("t2");

            var q1 = document.getElementById("q1");
            var q2 = document.getElementById("brgy");
            if( (q1.value.length == '0') ){
                alert('Email or Phone Number empty.');

            }else if (q2.value == '0'){
                alert('Please select location.');

            }else{
                if(t1.style.display == 'block'){
                    n1.style.display = 'none';
                    n2.style.display = 'block';

                    t1.style.display = 'none';
                    t2.style.display = 'block';

                    b2.style.display = 'block';
                }
            }
        }

        function nn2() {
            var b2 = document.getElementById("b2");
            var b3 = document.getElementById("b3");

            var n2 = document.getElementById("n2");
            var n3 = document.getElementById("n3");

            var t2 = document.getElementById("t2");
            var t3 = document.getElementById("t3");

            var q3 = document.getElementById("q3");
            var q4 = document.querySelector('input[name="q4"]:checked'); 
            var q5 = document.getElementById("q5");

            if( (q3.value.length == '0') ){
                alert('Age is Empty');

            }else if (q4 == null){
                alert('Sex is Empty');

            }else if (q5.value == '0'){
                alert('Please select a Status');

            }else{
                if(t2.style.display == 'block'){
                    n2.style.display = 'none';
                    n3.style.display = 'block';

                    t2.style.display = 'none';
                    t3.style.display = 'block';

                    b2.style.display = 'none';
                    b3.style.display = 'block';
                }
            }
        }

        function nn3() {
            var b3 = document.getElementById("b3");
            var b4 = document.getElementById("b4");

            var n3 = document.getElementById("n3");
            var n4 = document.getElementById("n4");

            var t3 = document.getElementById("t3");
            var t4 = document.getElementById("t4");
            
            if(t3.style.display == 'block'){
                n3.style.display = 'none';
                n4.style.display = 'block';

                t3.style.display = 'none';
                t4.style.display = 'block';

                b3.style.display = 'none';
                b4.style.display = 'block';
            }
        }

        function nn4() {
            var b4 = document.getElementById("b4");
            var b5 = document.getElementById("b5");

            var n4 = document.getElementById("n4");
            var n5 = document.getElementById("n5");

            var t4 = document.getElementById("t4");
            var t5 = document.getElementById("t5");
            
            if(t4.style.display == 'block'){
                n4.style.display = 'none';
                n5.style.display = 'block';

                t4.style.display = 'none';
                t5.style.display = 'block';

                b4.style.display = 'none';
                b5.style.display = 'block';
            }
        }

        function nn5() {
            var b5 = document.getElementById("b5");
            var b6 = document.getElementById("b6");

            var n5 = document.getElementById("n5");
            var n6 = document.getElementById("n6");

            var t5 = document.getElementById("t5");
            var t6 = document.getElementById("t6");
            
            if(t5.style.display == 'block'){
                n5.style.display = 'none';
                n6.style.display = 'block';

                t5.style.display = 'none';
                t6.style.display = 'block';

                b5.style.display = 'none';
                b6.style.display = 'block';
            }
        }

        function nn6() {
            var b6 = document.getElementById("b6");
            var b7 = document.getElementById("b7");

            var n6 = document.getElementById("n6");
            var n7 = document.getElementById("n7");

            var t6 = document.getElementById("t6");
            var t7 = document.getElementById("t7");
            
            if(t6.style.display == 'block'){
                n6.style.display = 'none';
                n7.style.display = 'block';

                t6.style.display = 'none';
                t7.style.display = 'block';

                b6.style.display = 'none';
                b7.style.display = 'block';
            }
        }

        function nn7() {
            var b7 = document.getElementById("b7");
            var b8 = document.getElementById("b8");

            var n7 = document.getElementById("n7");
            var n8 = document.getElementById("n8");

            var t7 = document.getElementById("t7");
            var t8 = document.getElementById("t8");
            
            if(t7.style.display == 'block'){
                n7.style.display = 'none';
                n8.style.display = 'block';

                t7.style.display = 'none';
                t8.style.display = 'block';

                b7.style.display = 'none';
                b8.style.display = 'block';
            }
        }

        function nn8() {
            var b8 = document.getElementById("b8");
            var b9 = document.getElementById("b9");

            var n8 = document.getElementById("n8");
            var n9 = document.getElementById("n9");

            var t8 = document.getElementById("t8");
            var t9 = document.getElementById("t9");
            
            if(t8.style.display == 'block'){
                n8.style.display = 'none';
                n9.style.display = 'block';

                t8.style.display = 'none';
                t9.style.display = 'block';

                b8.style.display = 'none';
                b9.style.display = 'block';
            }
        }

        function nn9() {
            var b9 = document.getElementById("b9");
            var b10 = document.getElementById("b10");

            var n9 = document.getElementById("n9");
            var n10 = document.getElementById("n10");

            var t9 = document.getElementById("t9");
            var t10 = document.getElementById("t10");
            
            if(t9.style.display == 'block'){
                n9.style.display = 'none';
                n10.style.display = 'block';

                t9.style.display = 'none';
                t10.style.display = 'block';

                b9.style.display = 'none';
                b10.style.display = 'block';
            }
        }

        function nn10() {
            var b10 = document.getElementById("b10");
            var b11 = document.getElementById("b11");

            var n10 = document.getElementById("n10");
            var n11 = document.getElementById("n11");

            var t10 = document.getElementById("t10");
            var t11 = document.getElementById("t11");
            
            if(t10.style.display == 'block'){
                n10.style.display = 'none';
                n11.style.display = 'block';

                t10.style.display = 'none';
                t11.style.display = 'block';

                b10.style.display = 'none';
                b11.style.display = 'block';
            }
        }

        function nn11() {
            var b11 = document.getElementById("b11");
            var b12 = document.getElementById("b12");

            var n11 = document.getElementById("n11");
            var n12 = document.getElementById("n12");
            var n15 = document.getElementById("n15");

            var t11 = document.getElementById("t11");
            var t12 = document.getElementById("t12");

            var t14 = document.getElementById("t14");

            var b15 = document.getElementById("b15");
            var n13 = document.getElementById("n13");

            var r_13 = document.getElementById("r_13");

            if(r_13.checked == true){

                t12.style.display = 'block';
                b12.style.display = 'block';
                n13.style.display = 'block';

                t11.style.display = 'none';
                b11.style.display = 'none';
                n12.style.display = 'none';

            } else if(t11.style.display == 'block'){
                
                t14.style.display = 'block';
                n11.style.display = 'none';
                b11.style.display = 'none';
                n15.style.display = 'block';
                t11.style.display = 'none';

                b15.style.display = 'block';

            }
        }

        function nn12() {
            var t11 = document.getElementById("t11");
            var t12 = document.getElementById("t12");
            
            var n11 = document.getElementById("n11");
            var n12 = document.getElementById("n12");
            var n13 = document.getElementById("n13");

            var b11 = document.getElementById("b11");
            var b12 = document.getElementById("b12");
            
            if(t11.style.display == 'block'){
                t11.style.display = 'none';

                t12.style.display = 'block';
                n11.style.display = 'none';
                n12.style.display = 'none';
                n13.style.display = 'block';

                b11.style.display = 'none';
                b12.style.display = 'block';
            }
        }

        function nn13() {
            var b13 = document.getElementById("b13");
            var b12 = document.getElementById("b12");

            var t12 = document.getElementById("t12");
            
            var n13 = document.getElementById("n13");
            var n16 = document.getElementById("n16");
            
            if(t12.style.display == 'block'){
                t12.style.display = 'none';
                n13.style.display = 'none';

                t13.style.display = 'block';
                n16.style.display = 'block'; 

                b12.style.display = 'none'; 
                b13.style.display = 'block'; 
            }
        }

        function nn14() {
            var b14 = document.getElementById("b14");
            var b15 = document.getElementById("b15");

            var n14 = document.getElementById("n14");
            var n15 = document.getElementById("n15");

            var t14 = document.getElementById("t14");
            var t15 = document.getElementById("t15");
            
            if(t14.style.display == 'block'){
                n14.style.display = 'none';
                n15.style.display = 'block';

                t14.style.display = 'none';
                t15.style.display = 'block';

                b14.style.display = 'none';
                b15.style.display = 'block';
            }
        }

        function nn15() {
            var b15 = document.getElementById("b15");
            var b16 = document.getElementById("b16");

            var n15 = document.getElementById("n15");
            var n16 = document.getElementById("n16");

            var t14 = document.getElementById("t14");
            var t15 = document.getElementById("t15");

            if(t14.style.display == 'block'){
                n15.style.display = 'none';
                n16.style.display = 'block';

                t14.style.display = 'none';
                t15.style.display = 'block';

                b15.style.display = 'none';
                b16.style.display = 'block';
            }
        }

        function nn16() {
            var n16 = document.getElementById("n16");
            var n17 = document.getElementById("n17");

            var t15 = document.getElementById("t15");
            var t16 = document.getElementById("t16");

            var t13 = document.getElementById("t13");

            var b13 = document.getElementById("b13");
            var b14 = document.getElementById("b14");

            var b16 = document.getElementById("b16");
            var b17 = document.getElementById("b17");

            if(t13.style.display == 'block'){
                t13.style.display = 'none';
                n16.style.display = 'none';

                n17.style.display = 'block';
                t16.style.display = 'block';

                b13.style.display = 'none';
                b14.style.display = 'block';
                // console.log('true');

            }else if(t15.style.display == 'block'){
                n16.style.display = 'none';
                n17.style.display = 'block';

                t15.style.display = 'none';
                t16.style.display = 'block';

                b16.style.display = 'none';
                b17.style.display = 'block';

            }
        }

        function nn17() {
            var n17 = document.getElementById("n17");
            var n18 = document.getElementById("n18");

            var t16 = document.getElementById("t16");
            var t17 = document.getElementById("t17");

            var b17= document.getElementById("b17");
            var b18= document.getElementById("b18");

            var t12_9= document.getElementById("t12_9");

            var n21= document.getElementById("n21");
            var t21= document.getElementById("t21");
            var submit= document.getElementById("submit");
            var b23= document.getElementById("b23");

            if(t12_9.checked == true){
                n17.style.display = 'none';
                n21.style.display = 'none';
                t16.style.display = 'none';
                t21.style.display = 'block';
                submit.style.display = 'block';

                b17.style.display = 'none';
                b23.style.display = 'block';

            } else if(t16.style.display == 'block'){
                n17.style.display = 'none';
                n18.style.display = 'block';

                t16.style.display = 'none';
                t17.style.display = 'block';

                b17.style.display = 'none';
                b18.style.display = 'block';

            }
        }

        function nn18() {
            var n18 = document.getElementById("n18");
            var n19 = document.getElementById("n19");

            var t17 = document.getElementById("t17");
            var t18 = document.getElementById("t18");

            var b18= document.getElementById("b18");
            var b19= document.getElementById("b19");

            if(t17.style.display == 'block'){
                n18.style.display = 'none';
                n19.style.display = 'block';

                t17.style.display = 'none';
                t18.style.display = 'block';

                b18.style.display = 'none';
                b19.style.display = 'block';

            }
        }

        function nn19() {
            var n19 = document.getElementById("n19");
            var n20 = document.getElementById("n20");

            var t18 = document.getElementById("t18");
            var t19 = document.getElementById("t19");

            var b19= document.getElementById("b19");
            var b20= document.getElementById("b20");

            if(t18.style.display == 'block'){
                n19.style.display = 'none';
                n20.style.display = 'block';

                t18.style.display = 'none';
                t19.style.display = 'block';

                b19.style.display = 'none';
                b20.style.display = 'block';

            }
        }

        function nn20() {
            var n20 = document.getElementById("n20");
            var n21 = document.getElementById("n21");

            var t19 = document.getElementById("t19");
            var t20 = document.getElementById("t20");

            var b20= document.getElementById("b20");
            var b21= document.getElementById("b21");

            if(t19.style.display == 'block'){
                n20.style.display = 'none';
                n21.style.display = 'block';

                t19.style.display = 'none';
                t20.style.display = 'block';

                b20.style.display = 'none';
                b21.style.display = 'block';
            }
        }

        function nn21() {
            var n17 = document.getElementById("n17");
            var n21 = document.getElementById("n21");
            var submit = document.getElementById("submit");

            var t20 = document.getElementById("t20");
            var t21 = document.getElementById("t21");

            var t12_9 = document.getElementById("t12_9");

            // var t12_9 = document.getElementById("t12_9");
            var b21 = document.getElementById("b21");
            var b22 = document.getElementById("b22");

            var b17 = document.getElementById("b17");
            var b23 = document.getElementById("b23");
            var b14 = document.getElementById("b14");

            if(t12_9.checked == true){
                n17.style.display = 'none';
                n21.style.display = 'none';
                t16.style.display = 'none';
                t21.style.display = 'block';
                submit.style.display = 'block';

                b14.style.display = 'none';
                b17.style.display = 'none';
                b23.style.display = 'block';

            }else if(t20.style.display == 'block'){
                n21.style.display = 'none';
                submit.style.display = 'block';

                t20.style.display = 'none';
                t21.style.display = 'block';

                b14.style.display = 'none';
                b21.style.display = 'none';
                b22.style.display = 'block';
            }
        }



        /*Back Button*/
        function bn2() {
            var t1 = document.getElementById("t1");
            var t2 = document.getElementById("t2");

            var b2 = document.getElementById("b2");
            var n1 = document.getElementById("n1");
            var n2 = document.getElementById("n2");
            
            if(t1.style.display == 'none'){
                t1.style.display = 'block';
                t2.style.display = 'none';

                b2.style.display = 'none';
                n1.style.display = 'block';
                n2.style.display = 'none';
            }
        }

        function bn3() {
            var t2 = document.getElementById("t2");
            var t3 = document.getElementById("t3");

            var b2 = document.getElementById("b2");
            var b3 = document.getElementById("b3");
            var n2 = document.getElementById("n2");
            var n3 = document.getElementById("n3");
            
            if(t2.style.display == 'none'){
                t2.style.display = 'block';
                t3.style.display = 'none';

                b3.style.display = 'none';
                b2.style.display = 'block';

                n2.style.display = 'block';
                n3.style.display = 'none';
            }
        }

        function bn4() {
            var t3 = document.getElementById("t3");
            var t4 = document.getElementById("t4");

            var b3 = document.getElementById("b3");
            var b4 = document.getElementById("b4");

            var n3 = document.getElementById("n3");
            var n4 = document.getElementById("n4");
            
            if(t3.style.display == 'none'){
                t3.style.display = 'block';
                t4.style.display = 'none';

                b3.style.display = 'block';
                b4.style.display = 'none';
                
                n3.style.display = 'block';
                n4.style.display = 'none';
            }
        }

        function bn5() {
            var t4 = document.getElementById("t4");
            var t5 = document.getElementById("t5");

            var b4 = document.getElementById("b4");
            var b5 = document.getElementById("b5");

            var n4 = document.getElementById("n4");
            var n5 = document.getElementById("n5");
            
            if(t4.style.display == 'none'){
                t4.style.display = 'block';
                t5.style.display = 'none';

                b4.style.display = 'block';
                b5.style.display = 'none';
                
                n4.style.display = 'block';
                n5.style.display = 'none';
            }
        }

        function bn6() {
            var t5 = document.getElementById("t5");
            var t6 = document.getElementById("t6");

            var b5 = document.getElementById("b5");
            var b6 = document.getElementById("b6");

            var n5 = document.getElementById("n5");
            var n6 = document.getElementById("n6");
            
            if(t5.style.display == 'none'){
                t5.style.display = 'block';
                t6.style.display = 'none';

                b5.style.display = 'block';
                b6.style.display = 'none';
                
                n5.style.display = 'block';
                n6.style.display = 'none';
            }
        }

        function bn7() {
            var t6 = document.getElementById("t6");
            var t7 = document.getElementById("t7");

            var b6 = document.getElementById("b6");
            var b7 = document.getElementById("b7");

            var n6 = document.getElementById("n6");
            var n7 = document.getElementById("n7");
            
            if(t6.style.display == 'none'){
                t6.style.display = 'block';
                t7.style.display = 'none';

                b6.style.display = 'block';
                b7.style.display = 'none';
                
                n6.style.display = 'block';
                n7.style.display = 'none';
            }
        }

        function bn8() {
            var t7 = document.getElementById("t7");
            var t8 = document.getElementById("t8");

            var b7 = document.getElementById("b7");
            var b8 = document.getElementById("b8");

            var n7 = document.getElementById("n7");
            var n8 = document.getElementById("n8");
            
            if(t7.style.display == 'none'){
                t7.style.display = 'block';
                t8.style.display = 'none';

                b7.style.display = 'block';
                b8.style.display = 'none';
                
                n7.style.display = 'block';
                n8.style.display = 'none';
            }
        }

        function bn9() {
            var t8 = document.getElementById("t8");
            var t9 = document.getElementById("t9");

            var b8 = document.getElementById("b8");
            var b9 = document.getElementById("b9");

            var n8 = document.getElementById("n8");
            var n9 = document.getElementById("n9");
            
            if(t8.style.display == 'none'){
                t8.style.display = 'block';
                t9.style.display = 'none';

                b8.style.display = 'block';
                b9.style.display = 'none';
                
                n8.style.display = 'block';
                n9.style.display = 'none';
            }
        }

        function bn10() {
            var t9 = document.getElementById("t9");
            var t10 = document.getElementById("t10");

            var b9 = document.getElementById("b9");
            var b10 = document.getElementById("b10");

            var n9 = document.getElementById("n9");
            var n10 = document.getElementById("n10");
            
            if(t9.style.display == 'none'){
                t9.style.display = 'block';
                t10.style.display = 'none';

                b9.style.display = 'block';
                b10.style.display = 'none';
                
                n9.style.display = 'block';
                n10.style.display = 'none';
            }
        }

        function bn11() {
            var t10 = document.getElementById("t10");
            var t11 = document.getElementById("t11");

            var b10 = document.getElementById("b10");
            var b11 = document.getElementById("b11");
            var b12 = document.getElementById("b12");

            var n10 = document.getElementById("n10");
            var n11 = document.getElementById("n11");
            var n12 = document.getElementById("n12");
            
            if(t10.style.display == 'none'){
                t10.style.display = 'block';
                t11.style.display = 'none';

                b10.style.display = 'block';
                b11.style.display = 'none';
                b12.style.display = 'none';
                
                n10.style.display = 'block';
                n11.style.display = 'none';
                n12.style.display = 'none';
            }
        }

        function bn12() {
            var t11 = document.getElementById("t11");
            var t12 = document.getElementById("t12");

            var b11 = document.getElementById("b11");
            var b12 = document.getElementById("b12");

            var n11 = document.getElementById("n11");
            var n12 = document.getElementById("n12");
            var n13 = document.getElementById("n13");
            
            if(t11.style.display == 'none'){
                t11.style.display = 'block';
                t12.style.display = 'none';

                b11.style.display = 'block';
                b12.style.display = 'none';
                
                n12.style.display = 'block';
                n13.style.display = 'none';
            }
        }

        function bn13() {
            var t12 = document.getElementById("t12");
            var t13 = document.getElementById("t13");

            var b12 = document.getElementById("b12");
            var b13 = document.getElementById("b13");

            var n12 = document.getElementById("n12");
            var n13 = document.getElementById("n13");
            var n14 = document.getElementById("n14");
            var n16 = document.getElementById("n16");

            var n21 = document.getElementById("n21");
            
            if(t12.style.display == 'none'){
                t12.style.display = 'block';
                t13.style.display = 'none';

                b12.style.display = 'block';
                b13.style.display = 'none';
                
                n13.style.display = 'block';
                n14.style.display = 'none';
                n16.style.display = 'none';
                n21.style.display = 'none';
            }
        }

        function bn14() {
            var t13 = document.getElementById("t13");
            var b13 = document.getElementById("b13");
            var b14 = document.getElementById("b14");
            var n16 = document.getElementById("n16");

            var t16 = document.getElementById("t16");
            var b16 = document.getElementById("b16");
            var n17 = document.getElementById("n17");
            var n21 = document.getElementById("n21");

            if(t13.style.display == 'none'){
                // console.log('trueqweqweqe');
                t13.style.display = 'block';
                b13.style.display = 'block';
                n16.style.display = 'block';

                b14.style.display = 'none';
                t16.style.display = 'none';
                b16.style.display = 'none';
                n17.style.display = 'none';
                n21.style.display = 'none';
            }
        }

        function bn15() {
            var n11 = document.getElementById("n11");
            var b11 = document.getElementById("b11");
            var b15 = document.getElementById("b15");
            var t11 = document.getElementById("t11");

            var t14 = document.getElementById("t14");
            var n15 = document.getElementById("n15");

            if(t14.style.display == 'block'){
                n11.style.display = 'block';
                b11.style.display = 'block';
                t11.style.display = 'block';

                t14.style.display = 'none';
                n15.style.display = 'none';
                b15.style.display = 'none';
            }
        }

        function bn16() {
            var t14 = document.getElementById("t14");
            var b15 = document.getElementById("b15");
            var n15 = document.getElementById("n15");

            var t15 = document.getElementById("t15");
            var n16 = document.getElementById("n16");
            var b16 = document.getElementById("b16");

            t14.style.display = 'block';
            b15.style.display = 'block';
            n15.style.display = 'block';

            t15.style.display = 'none';
            n16.style.display = 'none';
            b16.style.display = 'none';
        }

        function bn17() {
            var t15 = document.getElementById("t15");
            var b16 = document.getElementById("b16");
            var n16 = document.getElementById("n16");

            var t16 = document.getElementById("t16");
            var n17 = document.getElementById("n17");
            var b17 = document.getElementById("b17");
            var b21 = document.getElementById("b21");
            var n21 = document.getElementById("n21");

            t15.style.display = 'block';
            b16.style.display = 'block';
            n16.style.display = 'block';

            t16.style.display = 'none';
            n17.style.display = 'none';
            b17.style.display = 'none';
            b21.style.display = 'none';
            n21.style.display = 'none';
        }

        function bn18() {
            var t16 = document.getElementById("t16");
            var b17 = document.getElementById("b17");
            var n17 = document.getElementById("n17");

            var t17 = document.getElementById("t17");
            var n18 = document.getElementById("n18");
            var b18 = document.getElementById("b18");

            t16.style.display = 'block';
            b17.style.display = 'block';
            n17.style.display = 'block';

            t17.style.display = 'none';
            n18.style.display = 'none';
            b18.style.display = 'none';
        }

        function bn19() {
            var t17 = document.getElementById("t17");
            var b18 = document.getElementById("b18");
            var n18 = document.getElementById("n18");

            var t18 = document.getElementById("t18");
            var n19 = document.getElementById("n19");
            var b19 = document.getElementById("b19");

            t17.style.display = 'block';
            b18.style.display = 'block';
            n18.style.display = 'block';

            t18.style.display = 'none';
            n19.style.display = 'none';
            b19.style.display = 'none';
        }

        function bn20() {
            var t18 = document.getElementById("t18");
            var b19 = document.getElementById("b19");
            var n19 = document.getElementById("n19");

            var t19 = document.getElementById("t19");
            var n20 = document.getElementById("n20");
            var b20 = document.getElementById("b20");

            t18.style.display = 'block';
            b19.style.display = 'block';
            n19.style.display = 'block';

            t19.style.display = 'none';
            n20.style.display = 'none';
            b20.style.display = 'none';
        }

        function bn21() {
            var t19 = document.getElementById("t19");
            var b20 = document.getElementById("b20");
            var n20 = document.getElementById("n20");

            var t20 = document.getElementById("t20");
            var n21 = document.getElementById("n21");
            var b21 = document.getElementById("b21");

            t19.style.display = 'block';
            b20.style.display = 'block';
            n20.style.display = 'block';

            t20.style.display = 'none';
            n21.style.display = 'none';
            b21.style.display = 'none';
        }

        function bn22() {
            var t20 = document.getElementById("t20");
            var b21 = document.getElementById("b21");
            var n21 = document.getElementById("n21");

            var t21 = document.getElementById("t21");
            var n22 = document.getElementById("n22");
            var b22 = document.getElementById("b22");
            var submit = document.getElementById("submit");

            t20.style.display = 'block';
            b21.style.display = 'block';
            n21.style.display = 'block';

            t21.style.display = 'none';
            n22.style.display = 'none';
            b22.style.display = 'none';
            submit.style.display = 'none';
        }

        function bn23() {
            var b17 = document.getElementById("b17");
            var t16 = document.getElementById("t16");
            var n21 = document.getElementById("n21");

            var t21 = document.getElementById("t21");
            var b23 = document.getElementById("b23");
            var submit = document.getElementById("submit");

            if(t21.style.display == 'block'){
                b17.style.display = 'block';
                t16.style.display = 'block';
                n21.style.display = 'block';

                t21.style.display = 'none';
                b23.style.display = 'none';
                submit.style.display = 'none'; 
            }
        }

        function r_10(){
            var r_10 = document.getElementById("r_10");
            var r_show = document.getElementById("r_show");

            if(r_10.value == '0'){
                r_show.style.display = 'block';

            } else {
                r_show.style.display = 'block';

            }
        }

        function r10_display() {
            var r_10 = document.getElementById("r_10");

            var r_show = document.getElementById("r_show");

            r_show.style.display = r_10.checked ? "block" : "none";
        }

        function r10_select() {
            var q10_select = document.getElementById("q10_select");

            var q10_select_show = document.getElementById("q10_select_show");

            q10_select_show.disabled = q10_select.checked ? false : true;
        }

        function r11_display() {
            var r_11 = document.getElementById("r_11");

            var r11_show = document.getElementById("r11_show");

            r11_show.style.display = r_11.checked ? "block" : "none";
        }

        function r11_select() {
            var q11_select = document.getElementById("q11_select");

            var q11_select_show = document.getElementById("q11_select_show");

            q11_select_show.disabled = q11_select.checked ? false : true;
        }

        function r12_display() {
            var r_12 = document.getElementById("r_12");

            var r12_show = document.getElementById("r12_show");

            r12_show.style.display = r_12.checked ? "block" : "none";
        }

        function r12_select() {
            var q12_select = document.getElementById("q12_select");

            var q12_select_show_ph = document.getElementById("q12_select_show_ph");
            var q12_select_show_ph2 = document.getElementById("q12_select_show_ph2");
            var search_mun_place = document.getElementById("search_mun_place");
            var search_brgy_place = document.getElementById("search_brgy_place");

            var q12_select_show = document.getElementById("q12_select_show");
            var q12_select_show2 = document.getElementById("q12_select_show2");
            var q12_show_foreign = document.getElementById("q12_show_foreign");
            var search_country = document.getElementById("search_country");

            q12_select_show_ph.style.display = q12_select.checked ? "block" : "none";
            q12_select_show_ph2.style.display = q12_select.checked ? "block" : "none";
            search_mun_place.style.display = q12_select.checked ? "block" : "none";
            search_brgy_place.style.display = q12_select.checked ? "block" : "none";

            q12_select_show.style.display = q12_select2.checked ? "block" : "none";
            q12_select_show2.style.display = q12_select2.checked ? "block" : "none";
            q12_show_foreign.style.display = q12_select2.checked ? "block" : "none";
            search_country.style.display = q12_select2.checked ? "block" : "none";
        }

        function r13_display() {
            var r_13 = document.getElementById("r_13");
            var n11 = document.getElementById("n11");
            var n12 = document.getElementById("n12");

            if(r_13.checked == true){
                n11.style.display = 'none';
                n12.style.display = 'block';

                t13_show.style.display ='block';

            } else if(r_13_v2.value == '2'){
                n11.style.display = 'block';
                n12.style.display = 'none';

                t13_show.style.display ='none';
            }
        }

        function r17_display() {
            var r17 = document.getElementById("r17");
            var r17_v2 = document.getElementById("r17_v2");
            var r17_yes = document.getElementById("r17_yes");
            var r17_no = document.getElementById("r17_no");

            if(r17.checked == true){
                // console.log('true');
                r17_yes.style.display = 'block';
                r17_no.style.display = 'none';

            } else if(r17_v2.checked == true) {
                // console.log('false');
                r17_yes.style.display = 'none';
                r17_no.style.display = 'block';
            }
        }

        function t12_check() {
            var t12_1 = document.getElementById("t12_1");
            var t12_2 = document.getElementById("t12_2");
            var t12_3 = document.getElementById("t12_3");
            var t12_4 = document.getElementById("t12_4");
            var t12_5 = document.getElementById("t12_5");
            var t12_6 = document.getElementById("t12_6");
            var t12_7 = document.getElementById("t12_7");
            var t12_8 = document.getElementById("t12_8");

            var t12_9 = document.getElementById("t12_9");

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");

            t12_1.checked = t12_9.checked ? false : '';
            t12_2.checked = t12_9.checked ? false : '';
            t12_3.checked = t12_9.checked ? false : '';
            t12_4.checked = t12_9.checked ? false : '';
            t12_5.checked = t12_9.checked ? false : '';
            t12_6.checked = t12_9.checked ? false : '';
            t12_7.checked = t12_9.checked ? false : '';
            t12_8.checked = t12_9.checked ? false : '';

            if(t12_9.checked == true){
                n21.style.display = 'block';
                n17.style.display = 'none';
            }

            else{
                n21.style.display = 'none';
                n17.style.display = 'block';
            }
            
        }

        function t12_check1() {
            var t12_1 = document.getElementById("t12_1");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_1.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check2() {
            var t12_2 = document.getElementById("t12_2");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_2.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check3() {
            var t12_3 = document.getElementById("t12_3");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_3.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check4() {
            var t12_4 = document.getElementById("t12_4");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_4.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check5() {
            var t12_5 = document.getElementById("t12_5");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_5.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check6() {
            var t12_6 = document.getElementById("t12_6");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_6.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check7() {
            var t12_7 = document.getElementById("t12_7");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_7.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }

        function t12_check8() {
            var t12_8 = document.getElementById("t12_8");
            var t12_9 = document.getElementById("t12_9");
            t12_9.checked = t12_8.checked ? false : '';

            var n21 = document.getElementById("n21");
            var n17 = document.getElementById("n17");
            n21.style.display = 'none';
            n17.style.display = 'block';
        }
    </script>
@endsection