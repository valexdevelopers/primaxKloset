<!doctype html>
<html>
    <head>
        <title>Store Front | Admin</title>
        @include('includes.adminHeadContent')
    </head>
    <style>
        
    </style>
    <body >
        <div class="page-wrapper">
            <section >
                <div class="rows mother-row">
                    
                    @include('includes.adminmenu')
                    <!-- main page wrap -->
                    <div class="main-page-wrapper">
                        <!-- main page: header wrap row  -->
                        @include('includes.adminStickyHeader')
                        
                        <!-- main page: roles-wrap wrap row  -->
                        <section class="scroll-y">
                            
                            @include('includes.statistics')

                            <div class="padding-5">
                                <form id="product_form" method="post" action="http://127.0.0.1:8000/products/" enctype="multipart/form-data">
                                    
                                    <div class="lg-grid-70-30 " id="product_form_details">
                                        <div class=" grid-col-70 ">
                                            
                                            <div id="image_preview_wrap" class="image_preview_wrap">
                                                <div class="image-preview-container white-bg with-box-shadow" id="image-preview-container">
                                                    <div class="image-preview">
                                                        <img class="setImagePreview" id="banner1" />
                                                    </div>
                                                    <div class="preview-image-details">
                                                        <p class="preview-image-name">image-name.jpg</p>
                                                        <p class="preview-image-size">1.3KB</p>
                                                       
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            <div class="product-image-dropzone mt-20 mt-20-sm with-box-shadow white-bg rounded-edges padding-20">
                                                <div><h6 class="product-name">Business Logo</h6></div>
                                                <div class="file-upload-wrapper">
                                                    <div  class="upload-info">
                                                        <p ><i class="bi bi-cloud-upload"></i></p>
                                                        <p class="drag-drop">drag and drop up to logo here</p>
                                                        
                                                        <button class="upload-product-images">click to upload</button>
                                                    </div>
                                                    
                                                    <input required name="business_logo" accept="image" type="file" id="banner-images-input" class="product-image-upload file-upload @error('product_images') is-invalid @enderror" data-height="500" />
                                                    @error('business_logo')
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                 </div>
                                            </div>
                                            <div class="with-box-shadow white-bg rounded-edges padding-20">
                                                <div class=""><h6 class="product-name">Store Information</h6></div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Business Name</label>
                                                            <input value="{{ old('business_name') }}" type="text" class="form-control appearance-text-field @error('business_name') is-invalid @enderror" required name="business_name" >
                                                            @error('business_name')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Business Description</label>
                                                            <textarea name="business_description" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="business description"></textarea>
                                                            @error('business_description')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">business Tagline</label>
                                                            <input value="{{ old('business_tagline') }}" type="text" class="form-control appearance-text-field @error('business_tagline') is-invalid @enderror" name="business_tagline" >
                                                            @error('business_tagline')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">business Sector</label>
                                                            <div class="form-group">
                                                                <label class="form-label flexed-label" ><span class="flexed-label-span">Currency</span> </label>
                                                                <select class="form-select"  id="country" name="business_sector" required >
                                                                    <option value="" id="selectProductCategorybtn" disabled selected >Select Sector</option>
                                                                    <option value="" id="selectProductCategorybtn" >Fashion</option>
                                                                    <option value="" id="selectProductCategorybtn" >Electronics</option>
                                                                </select>
                                                            </div>
                                                            @error('business_sector')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">business Keywords (optional)</label>
                                                            <textarea name="business_keywords" class="form-control @error('business_keywords') is-invalid @enderror" id="exampleFormControlTextarea1" rows="6" placeholder="add multiple keywords e.g Women fashion, corporate wears, men fashnion. seperate tags with a comma"></textarea>
                                                            <div class="help-block form-text form-control-feedback" style="color: red"><i class="bi-exclamation-circle"></i> &nbsp; Keywords to appear on search engines like google</div>
                                                            @error('business_keywords')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>


                                        <div class="grid-col-30 mt-20-sm" >
                                            <div class="with-box-shadow white-bg rounded-edges padding-20">
                                                <div ><h6 class="product-name">Social Media</h6></div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">@Instagram Handle</label>
                                                            <input value="{{ old('business_instagram') }}"  type="text" class="form-control @error('business_instagram') is-invalid @enderror" required name="business_instagram" placeholder="">
                                                            @error('business_instagram')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">@Instagram Facebook</label>
                                                            <input value="{{ old('business_facebook') }}" type="text" class="form-control @error('business_facebook') is-invalid @enderror" name="business_facebook" placeholder="">
                                                            @error('business_facebook')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">@Instagram TikTok</label>
                                                            <input value="{{ old('business_tiktok') }}" type="text" class="form-control @error('business_tiktok') is-invalid @enderror" name="business_tiktok" placeholder="">
                                                            @error('business_tiktok')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" mt-20 mt-20-sm  with-box-shadow white-bg rounded-edges padding-20">
                                                <div><h6 class="product-name">Organise</h6></div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label flexed-label" ><span class="flexed-label-span">Currency</span> </label>
                                                            <select class="form-select"  id="country" name="business_currency" required >
                                                                <option value="" id="selectProductCategorybtn" disabled selected >Select Currency</option>
                                                                <option value="" id="selectProductCategorybtn" >Nigerian Naira</option>
                                                                <option value="" id="selectProductCategorybtn" >United State Dollar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="mt-20 mt-20-sm with-box-shadow white-bg rounded-edges padding-20">
                                                <div ><h6 class="product-name">Location and Address</h6></div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Address (Optional)</label>
                                                            <input value="{{ old('business_address') }}"  type="text" class="form-control appearance-text-field @error('business_address') is-invalid @enderror" name="business_address" placeholder="">
                                                            @error('business_address')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">City</label>
                                                            <input value="{{ old('business_city') }}"  type="text" class="form-control appearance-text-field @error('business_city') is-invalid @enderror" required name="business_city" placeholder="">
                                                            @error('business_city')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">State & Region</label>
                                                            <input value="{{ old('business_state') }}"  type="text" class="form-control appearance-text-field @error('business_state') is-invalid @enderror" required name="business_state" placeholder="">
                                                            @error('business_state')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                           
                                                            <label class="form-label flexed-label" ><span class="flexed-label-span">business Country</span> </label>
                                                            <select class="form-select"  id="country" name="business_country" required="required">
                                                                <option value="">Select country</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Aland Islands">Aland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Curacao">Curacao</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                                <option value="Kosovo">Kosovo</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Martin">Saint Martin</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Sint Maarten">Sint Maarten</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                <option value="South Sudan">South Sudan</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-Leste">Timor-Leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Postal Code</label>
                                                            <input value="{{ old('business_postal') }}"  type="text" class="form-control appearance-text-field @error('business_postal') is-invalid @enderror" required name="business_postal" placeholder="">
                                                            @error('business_postal')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                           <button id="save_product" type="submit" class="btn btn-primary green-bg color-green button-2">Save Product</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </form>
                            </div>
                            <!-- main page: transactions-order wrap row  -->
                            
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                        </section>
                        
                        <div class="rows sticky-footer with-box-shadow" >
                            <div class="quickactions-container">
                                <div class="quickactions">
                                    <a href="admin.product.index" class="quickaction-link">
                                        <div class="action-icon red-bg">
                                            <i class="bi bi-tags color-red"></i>
                                        </div>
                                        <div class="link-name">
                                            <p>Products</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.category.index" class="quickaction-link">
                                        <div class="action-icon purple-bg"><i class="bi bi-boxes color-purple"></i></div>
                                        <div class="link-name">
                                            <p>Categories</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.brands" class="quickaction-link">
                                        <div class="action-icon green-bg"><i class="bi bi-shield-check color-green"></i></div>
                                        <div class="link-name">
                                            <p>Brands</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.discount" class="quickaction-link">
                                        <div class="action-icon blue-bg"><i class="bi bi-flower2 color-blue"></i></div>
                                        <div class="link-name">
                                            <p>Run Sales</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.coupons" class="quickaction-link">
                                        <div class="action-icon yellow-bg"><i class="bi bi-percent color-yellow"></i></div>
                                        <div class="link-name">
                                            <p>Coupons</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.orders.display" class="quickaction-link">
                                        <div class="action-icon red-bg"><i class="bi bi-cart4 color-red"></i></div>
                                        <div class="link-name">
                                            <p>Orders</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.users.show" class="quickaction-link">
                                        <div class="action-icon blue-bg"><i class="bi bi-people color-blue"></i></div>
                                        <div class="link-name">
                                            <p>Users</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- extra details for notification, available on click -->
                {{-- @include('includes.adminNotification') --}}
                <!-- extra details for notification ends here, available on click -->
                <!-- extra details for profile, available on click -->
                @include('includes.adminProfile')
                <!-- extra details for profile ends here, available on click -->
            </section>
        </div>
        @include('includes.adminFooter')
       
        
        
    </body>
    
</html>