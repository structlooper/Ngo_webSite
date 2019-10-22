
@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.nav')

@section('footer_str')
@section('nav_bar')
@endsection('nav_bar')
@section('header_str')

@endsection('header_str')

<title>Donate online</title>
<hr>
<div class='container-fluid  '>
 
  <div class='row'>
        <div class="col-sm-6 p-3 p-md-5 text-secondary rounded bg-light">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="">
                
                  <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                  <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                  <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                
              </div>
         <div class="col-sm-5 p-3 p-md-6 text-dark rounded bg-light border ml-2">
         <div class='container '>
           <h1>Support Us!!</h1>
         </div>
         <hr>
                <div class="impact-story"> 
                            <div id="tplx-donation-form">
                            
                              <form method="post" name="frmSample" action="register-submit.asp" onsubmit="return ValidateForm()">
                                
                                <div class="form-group clearfix">
                                  <div class="col-sm-1">
                                    <input type="radio" class="radio-inline" name="amount_advanced" id="aamount18" value="30000.00" onclick="update_amount('30000.00')">
                                  </div>
                                  <label class="col-sm-11 control-label">
                                  Rs. 30,000/-
                                  </label>
                                </div>
                                <div class="form-group clearfix">
                                  <div class="col-sm-1">
                                    <input type="radio" class="radio-inline" name="amount_advanced" id="aamount25" value="18000.00" onclick="update_amount('18000.00')">
                                  </div>
                                  <label class="col-sm-11 control-label">
                                  Rs. 18,000/-
                                  </label>
                                </div>
                                <div class="form-group clearfix">
                                  <div class="col-sm-1">
                                    <input type="radio" class="radio-inline" name="amount_advanced" id="aamount50" value="6000.00" checked="checked" onclick="update_amount('6000.00')">
                                  </div>
                                  <label class="col-sm-11 control-label">
                                  Rs. 6,000/-
                                  </label>
                                </div>
                                <div class="form-group clearfix">
                                  <div class="col-sm-1">
                                    <input type="radio" name="amount_advanced" id="aamountother" onclick="custom_amount_read()">
                                  </div>
                                  <label class="col-sm-11 control-label">
                                  <span class="col-sm-4 control-label">
                                  Other amount:
                                  </span>
                                  <span class="col-sm-8">
                                  <input type="text" class="donationTextField1 form-control" name="number" id="number" size="20" maxlength="12" onfocus="custom_amount()" onblur="custom_amount()" border:="" 0px="">
                                  </span>
                                  </label>
                                </div>
                                <div class="row2">  <input id="submit_amount" type="hidden" name="AMOUNT" value=""></div>
                                
                                <input type="hidden" name="Order_Id" value=""> 
                                <input type="hidden" name="Merchant_Id" value="">

                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label ">
                                  Name *
                                  </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="donationTextField2 form-control" name="name" id="name">
                                  </div>
                                </div>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label">
                                  Email *
                                  </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="donationTextField2 form-control" name="email" id="email">
                                  </div>
                                </div>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label">
                                  Phone
                                  </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="donationTextField2 form-control" name="txtPhone" id="Phone">
                                  </div>
                                </div>
                                <div class="form-group clearfix">
                                  
                                  
                                </div>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label">
                                  Country
                                  </label>
                                  <div class="col-sm-9">
                                    <select name="country" class=" form-control selectpicker">
                                      <option value="India" title="India">India</option>
                                      <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                      <option value="�land Islands" title="�land Islands">�land Islands</option>
                                      <option value="Albania" title="Albania">Albania</option>
                                      <option value="Algeria" title="Algeria">Algeria</option>
                                      <option value="American Samoa" title="American Samoa">American Samoa</option>
                                      <option value="Andorra" title="Andorra">Andorra</option>
                                      <option value="Angola" title="Angola">Angola</option>
                                      <option value="Anguilla" title="Anguilla">Anguilla</option>
                                      <option value="Antarctica" title="Antarctica">Antarctica</option>
                                      <option value="Argentina" title="Argentina">Argentina</option>
                                      <option value="Armenia" title="Armenia">Armenia</option>
                                      <option value="Aruba" title="Aruba">Aruba</option>
                                      <option value="Australia" title="Australia">Australia</option>
                                      <option value="Austria" title="Austria">Austria</option>
                                      <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                      <option value="Bahamas" title="Bahamas">Bahamas</option>
                                      <option value="Bahrain" title="Bahrain">Bahrain</option>
                                      <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                      <option value="Barbados" title="Barbados">Barbados</option>
                                      <option value="Belarus" title="Belarus">Belarus</option>
                                      <option value="Belgium" title="Belgium">Belgium</option>
                                      <option value="Belize" title="Belize">Belize</option>
                                      <option value="Benin" title="Benin">Benin</option>
                                      <option value="Bermuda" title="Bermuda">Bermuda</option>
                                      <option value="Bhutan" title="Bhutan">Bhutan</option>
                                      <option value="Botswana" title="Botswana">Botswana</option>
                                      <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                                      <option value="Brazil" title="Brazil">Brazil</option>
                                      <option value="Brunei" title="Brunei">Brunei</option>
                                      <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                      <option value="Burundi" title="Burundi">Burundi</option>
                                      <option value="Cambodia" title="Cambodia">Cambodia</option>
                                      <option value="Cameroon" title="Cameroon">Cameroon</option>
                                      <option value="Canada" title="Canada">Canada</option>
                                      <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                      <option value="Chad" title="Chad">Chad</option>
                                      <option value="Chile" title="Chile">Chile</option>
                                      <option value="China" title="China">China</option>
                                      <option value="Colombia" title="Colombia">Colombia</option>
                                      <option value="Comoros" title="Comoros">Comoros</option>
                                      <option value="Congo" title="Congo">Congo</option>
                                      <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                      <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                      <option value="C�te d'Ivoire" title="C�te d'Ivoire">C�te d'Ivoire</option>
                                      <option value="Croatia" title="Croatia">Croatia</option>
                                      <option value="Cuba" title="Cuba">Cuba</option>
                                      <option value="Cura�ao" title="Cura�ao">Cura�ao</option>
                                      <option value="Cyprus" title="Cyprus">Cyprus</option>
                                      <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                                      <option value="Denmark" title="Denmark">Denmark</option>
                                      <option value="Djibouti" title="Djibouti">Djibouti</option>
                                      <option value="Dominica" title="Dominica">Dominica</option>
                                      <option value="Ecuador" title="Ecuador">Ecuador</option>
                                      <option value="Egypt" title="Egypt">Egypt</option>
                                      <option value="Eritrea" title="Eritrea">Eritrea</option>
                                      <option value="Estonia" title="Estonia">Estonia</option>
                                      <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                      <option value="Fiji" title="Fiji">Fiji</option>
                                      <option value="Finland" title="Finland">Finland</option>
                                      <option value="France" title="France">France</option>
                                      <option value="Gabon" title="Gabon">Gabon</option>
                                      <option value="Gambia" title="Gambia">Gambia</option>
                                      <option value="Georgia" title="Georgia">Georgia</option>
                                      <option value="Germany" title="Germany">Germany</option>
                                      <option value="Ghana" title="Ghana">Ghana</option>
                                      <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                      <option value="Greece" title="Greece">Greece</option>
                                      <option value="Greenland" title="Greenland">Greenland</option>
                                      <option value="Grenada" title="Grenada">Grenada</option>
                                      <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                      <option value="Guam" title="Guam">Guam</option>
                                      <option value="Guatemala" title="Guatemala">Guatemala</option>
                                      <option value="Guernsey" title="Guernsey">Guernsey</option>
                                      <option value="Guinea" title="Guinea">Guinea</option>
                                      <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                      <option value="Guyana" title="Guyana">Guyana</option>
                                      <option value="Haiti" title="Haiti">Haiti</option>
                                      <option value="Honduras" title="Honduras">Honduras</option>
                                      <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                      <option value="Hungary" title="Hungary">Hungary</option>
                                      <option value="Iceland" title="Iceland">Iceland</option>
                                      <option value="Indonesia" title="Indonesia">Indonesia</option>
                                      <option value="Iran" title="Iran">Iran</option>
                                      <option value="Iraq" title="Iraq">Iraq</option>
                                      <option value="Ireland" title="Ireland">Ireland</option>
                                      <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                      <option value="Israel" title="Israel">Israel</option>
                                      <option value="Italy" title="Italy">Italy</option>
                                      <option value="Jamaica" title="Jamaica">Jamaica</option>
                                      <option value="Japan" title="Japan">Japan</option>
                                      <option value="Jersey" title="Jersey">Jersey</option>
                                      <option value="Jordan" title="Jordan">Jordan</option>
                                      <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                      <option value="Kenya" title="Kenya">Kenya</option>
                                      <option value="Kiribati" title="Kiribati">Kiribati</option>
                                      <option value="Korea" title="Korea">Korea</option>
                                      <option value="Kuwait" title="Kuwait">Kuwait</option>
                                      <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                      <option value="Latvia" title="Latvia">Latvia</option>
                                      <option value="Lebanon" title="Lebanon">Lebanon</option>
                                      <option value="Lesotho" title="Lesotho">Lesotho</option>
                                      <option value="Liberia" title="Liberia">Liberia</option>
                                      <option value="Libya" title="Libya">Libya</option>
                                      <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                      <option value="Lithuania" title="Lithuania">Lithuania</option>
                                      <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                      <option value="Macao" title="Macao">Macao</option>
                                      <option value="Madagascar" title="Madagascar">Madagascar</option>
                                      <option value="Malawi" title="Malawi">Malawi</option>
                                      <option value="Malaysia" title="Malaysia">Malaysia</option>
                                      <option value="Maldives" title="Maldives">Maldives</option>
                                      <option value="Mali" title="Mali">Mali</option>
                                      <option value="Malta" title="Malta">Malta</option>
                                      <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                      <option value="Martinique" title="Martinique">Martinique</option>
                                      <option value="Mauritania" title="Mauritania">Mauritania</option>
                                      <option value="Mauritius" title="Mauritius">Mauritius</option>
                                      <option value="Mayotte" title="Mayotte">Mayotte</option>
                                      <option value="Mexico" title="Mexico">Mexico</option>
                                      <option value="Monaco" title="Monaco">Monaco</option>
                                      <option value="Mongolia" title="Mongolia">Mongolia</option>
                                      <option value="Montenegro" title="Montenegro">Montenegro</option>
                                      <option value="Montserrat" title="Montserrat">Montserrat</option>
                                      <option value="Morocco" title="Morocco">Morocco</option>
                                      <option value="Mozambique" title="Mozambique">Mozambique</option>
                                      <option value="Myanmar" title="Myanmar">Myanmar</option>
                                      <option value="Namibia" title="Namibia">Namibia</option>
                                      <option value="Nauru" title="Nauru">Nauru</option>
                                      <option value="Nepal" title="Nepal">Nepal</option>
                                      <option value="Netherlands" title="Netherlands">Netherlands</option>
                                      <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                      <option value="New Zealand" title="New Zealand">New Zealand</option>
                                      <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                      <option value="Niger" title="Niger">Niger</option>
                                      <option value="Nigeria" title="Nigeria">Nigeria</option>
                                      <option value="Niue" title="Niue">Niue</option>
                                      <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                                      <option value="Norway" title="Norway">Norway</option>
                                      <option value="Oman" title="Oman">Oman</option>
                                      <option value="Pakistan" title="Pakistan">Pakistan</option>
                                      <option value="Palau" title="Palau">Palau</option>
                                      <option value="Panama" title="Panama">Panama</option>
                                      <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                      <option value="Paraguay" title="Paraguay">Paraguay</option>
                                      <option value="Peru" title="Peru">Peru</option>
                                      <option value="Philippines" title="Philippines">Philippines</option>
                                      <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                      <option value="Poland" title="Poland">Poland</option>
                                      <option value="Portugal" title="Portugal">Portugal</option>
                                      <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                      <option value="Qatar" title="Qatar">Qatar</option>
                                      <option value="R�union" title="R�union">R�union</option>
                                      <option value="Romania" title="Romania">Romania</option>
                                      <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
                                      <option value="Rwanda" title="Rwanda">Rwanda</option>
                                      <option value="Saint Barth�lemy" title="Saint Barth�lemy">Saint Barth�lemy</option>
                                      <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                      <option value="Samoa" title="Samoa">Samoa</option>
                                      <option value="San Marino" title="San Marino">San Marino</option>
                                      <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                      <option value="Senegal" title="Senegal">Senegal</option>
                                      <option value="Serbia" title="Serbia">Serbia</option>
                                      <option value="Seychelles" title="Seychelles">Seychelles</option>
                                      <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                      <option value="Singapore" title="Singapore">Singapore</option>
                                      <option value="Slovakia" title="Slovakia">Slovakia</option>
                                      <option value="Slovenia" title="Slovenia">Slovenia</option>
                                      <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                      <option value="Somalia" title="Somalia">Somalia</option>
                                      <option value="South Africa" title="South Africa">South Africa</option>
                                      <option value="South Georgia" title="South Georgia">South Georgia</option>
                                      <option value="South Sudan" title="South Sudan">South Sudan</option>
                                      <option value="Spain" title="Spain">Spain</option>
                                      <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                      <option value="Sudan" title="Sudan">Sudan</option>
                                      <option value="Suriname" title="Suriname">Suriname</option>
                                      <option value="Swaziland" title="Swaziland">Swaziland</option>
                                      <option value="Sweden" title="Sweden">Sweden</option>
                                      <option value="Switzerland" title="Switzerland">Switzerland</option>
                                      <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
                                      <option value="Taiwan" title="Taiwan">Taiwan</option>
                                      <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                      <option value="Tanzania" title="Tanzania">Tanzania</option>
                                      <option value="Thailand" title="Thailand">Thailand</option>
                                      <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                      <option value="Togo" title="Togo">Togo</option>
                                      <option value="Tokelau" title="Tokelau">Tokelau</option>
                                      <option value="Tonga" title="Tonga">Tonga</option>
                                      <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                      <option value="Tunisia" title="Tunisia">Tunisia</option>
                                      <option value="Turkey" title="Turkey">Turkey</option>
                                      <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                      <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                      <option value="Uganda" title="Uganda">Uganda</option>
                                      <option value="Ukraine" title="Ukraine">Ukraine</option>
                                      <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
                                      <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                      <option value="United States" title="United States">United States</option>
                                      <option value="Uruguay" title="Uruguay">Uruguay</option>
                                      <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                      <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                      <option value="Venezuela" title="Venezuela">Venezuela</option>
                                      <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                      <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                      <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                      <option value="Yemen" title="Yemen">Yemen</option>
                                      <option value="Zambia" title="Zambia">Zambia</option>
                                      <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                    </select>
                                  </div>
                                </div>
                                <label class="col-sm-3 control-label">
                                  D.O.B
                                  </label>
                                <div class='container position-sticky '>
                                  <div class='row'>
                                 
                                  <div class="col-sm-3">

                                    <select name="agedd" class="form-control selectdate selectpicker" style="padding:6px 2px;">
                                      <option value="">Date</option>
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                      <option value="24">24</option>
                                      <option value="25">25</option>
                                      <option value="26">26</option>
                                      <option value="27">27</option>
                                      <option value="28">28</option>
                                      <option value="29">29</option>
                                      <option value="30">30</option>
                                      <option value="31">31</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-3">
                                    <select name="agemm" class=" form-control selectdate selectpicker" style="padding:6px 2px;">
                                      <option value="">Month</option>
                                      <option value="01">Jan</option>
                                      <option value="02">Feb</option>
                                      <option value="03">March</option>
                                      <option value="04">April</option>
                                      <option value="05">May</option>
                                      <option value="06">June</option>
                                      <option value="07">July</option>
                                      <option value="08">Aug</option>
                                      <option value="09">Sept</option>
                                      <option value="10">Oct</option>
                                      <option value="11">Nov</option>
                                      <option value="12">Dec</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-3">
                                    <select name="ageyy" class="form-control selectdate selectpicker" style="padding:6px 2px;">
                                      <option value="">Year</option>
                                      <option value="1920">1920</option>
                                      <option value="1921">1921</option>
                                      <option value="1922">1922</option>
                                      <option value="1923">1923</option>
                                      <option value="1924">1924</option>
                                      <option value="1925">1925</option>
                                      <option value="1926">1926</option>
                                      <option value="1927">1927</option>
                                      <option value="1928">1928</option>
                                      <option value="1929">1929</option>
                                      <option value="1930">1930</option>
                                      <option value="1931">1931</option>
                                      <option value="1932">1932</option>
                                      <option value="1933">1933</option>
                                      <option value="1934">1934</option>
                                      <option value="1935">1935</option>
                                      <option value="1936">1936</option>
                                      <option value="1937">1937</option>
                                      <option value="1938">1938</option>
                                      <option value="1939">1939</option>
                                      <option value="1940">1940</option>
                                      <option value="1941">1941</option>
                                      <option value="1942">1942</option>
                                      <option value="1943">1943</option>
                                      <option value="1944">1944</option>
                                      <option value="1945">1945</option>
                                      <option value="1946">1946</option>
                                      <option value="1947">1947</option>
                                      <option value="1948">1948</option>
                                      <option value="1949">1949</option>
                                      <option value="1950">1950</option>
                                      <option value="1951">1951</option>
                                      <option value="1952">1952</option>
                                      <option value="1953">1953</option>
                                      <option value="1954">1954</option>
                                      <option value="1955">1955</option>
                                      <option value="1956">1956</option>
                                      <option value="1957">1957</option>
                                      <option value="1958">1958</option>
                                      <option value="1959">1959</option>
                                      <option value="1960">1960</option>
                                      <option value="1961">1961</option>
                                      <option value="1962">1962</option>
                                      <option value="1963">1963</option>
                                      <option value="1964">1964</option>
                                      <option value="1965">1965</option>
                                      <option value="1966">1966</option>
                                      <option value="1967">1967</option>
                                      <option value="1968">1968</option>
                                      <option value="1969">1969</option>
                                      <option value="1970">1970</option>
                                      <option value="1971">1971</option>
                                      <option value="1972">1972</option>
                                      <option value="1973">1973</option>
                                      <option value="1974">1974</option>
                                      <option value="1975">1975</option>
                                      <option value="1976">1976</option>
                                      <option value="1977">1977</option>
                                      <option value="1978">1978</option>
                                      <option value="1979">1979</option>
                                      <option value="1980">1980</option>
                                      <option value="1981">1981</option>
                                      <option value="1982">1982</option>
                                      <option value="1983">1983</option>
                                      <option value="1984">1984</option>
                                      <option value="1985">1985</option>
                                      <option value="1986">1986</option>
                                      <option value="1987">1987</option>
                                      <option value="1988">1988</option>
                                      <option value="1989">1989</option>
                                      <option value="1990">1990</option>
                                      <option value="1991">1991</option>
                                      <option value="1992">1992</option>
                                      <option value="1993">1993</option>
                                      <option value="1994">1994</option>
                                      <option value="1995">1995</option>
                                      <option value="1996">1996</option>
                                      <option value="1997">1997</option>
                                      <option value="1998">1998</option>
                                      <option value="1999">1999</option>
                                      <option value="2000">2000</option>
                                      <option value="2001">2001</option>
                                      <option value="2002">2002</option>
                                      <option value="2003">2003</option>
                                      <option value="2004">2004</option>
                                      <option value="2005">2005</option>
                                      <option value="2006">2006</option>
                                      <option value="2007">2007</option>
                                      <option value="2008">2008</option>
                                      <option value="2009">2009</option>
                                      <option value="2010">2010</option>
                                      <option value="2011">2011</option>
                                      <option value="2012">2012</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group clearfix mt-1">
                                  <label class="col-sm-3 control-label">
                                  PAN <br>
                                  <span class="sm-is"> Only for India</span>    
                                  </label> 
                                  <div class="col-sm-9">
                                    <input type="text" class="donationTextField2 form-control" name="txtpan" id="pan">
                                  </div>
                              </div>
                             <div class="col-sm-12 padd">
                                 <input type="submit" value="Donate Now" class="btn btn-warning" name="" onclick="return validate_form()" id="tplx-donation-btn">
                             </div>

                         </form>
                   </div>
             </div>
         </div>
                       
  </div>
</div>

<div class='mt-2'>
  @endsection('footer_str')
  

 