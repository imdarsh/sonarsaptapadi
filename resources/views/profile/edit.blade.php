@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    @foreach($data as $info)
    <div class="container   my-5 py-5">
        <form action="/profile/edit/update" method="POST">
        @csrf
        @foreach($data as $info)
        <p class="h3 text-center mb-5">Basic Information</p>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" value="{{ $info->name }}" required>
                    </div>
                    <div class="form-group">
                    <label>Age</label>
                        <input name="age" type="text" class="form-control" value="{{ $info->age }}" required>
                    </div>
                    <div class="form-group">
                    <label>Marital Status</label>
                    <select name="marital_status" class="mdb-select form-control">
                        <option value=""></option>
                        <option value="Never Married" {{ ($info->marital_status) == 'Never Married' ? 'selected' : '' }}>Never Married</option>
                        <option value="Divorced" {{ ($info->marital_status) == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                        <option value="Widow / Widower" {{ ($info->marital_status) == 'Widow / Widower' ? 'selected' : '' }}>Widow / Widower</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label>Do you live with your family?</label>
                    <select name="living_with_family" class="mdb-select form-control"> 
                    <option value=""></option>
                    <option value="Yes"  {{ ($info->living_with_family)  == 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="No"  {{ ($info->living_with_family) == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{ $info->city }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label>Height</label>
                        <input name="height" type="text" class="form-control" value="{{ $info->height }}">
                    </div>
                    <div class="form-group">
                    <label>Blood Group</label>
                        <select name="blood_group" id="" class="mdb-select form-control">
                            <option value=""></option>
                            <option value="A+" {{ ($info->blood_group) == 'A+' ? 'selected' : '' }}>A+</option>
                            <option value="B+" {{ ($info->blood_group) == 'B+' ? 'selected' : '' }}>B+</option>
                            <option value="O+" {{ ($info->blood_group) == 'O+' ? 'selected' : '' }}>O+</option>
                            <option value="O-" {{ ($info->blood_group) == 'O-+' ? 'selected' : '' }}>O-</option>
                            <option value="A-" {{ ($info->blood_group) == 'A-' ? 'selected' : '' }}>A-</option>
                            <option value="B-" {{ ($info->blood_group) == 'B-' ? 'selected' : '' }}>B-</option>
                            <option value="AB+" {{ ($info->blood_group) == 'AB+' ? 'selected' : '' }}>AB+</option>
                            <option value="AB-" {{ ($info->blood_group) == 'AB-' ? 'selected' : '' }}>AB-</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label>Date of Birth</label>
                    <div class="md-outline input-with-post-icon datepicker">
                    <input name="dob" placeholder="Select date" type="date" id="example" class="form-control" value="{{ $info->dob }}">
                    </div>
                    </div>
                    <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="mdb-select form-control">
                    <option value=""></option>
                    <option value="Male" {{ ($info->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ ($info->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                        </div>
                </div>
            </div>  
            <p class="h3 text-center my-5">Education and Career</p>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Highest Qualification</label>
                    <select name="highest_qualification" class="mdb-select form-control">
                    <option value=""></option>
                    <option value="Yes" {{ ($info->highest_qualification) == 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="No" {{ ($info->highest_qualification) == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>College Attended</label>
                        <input type="text" name="college_attended" class="form-control" value="{{ $info->college_attended }}">
                    </div>
                    <div class="form-group">
                        <label>Working For</label>
                        <select name="working_for" class="mdb-select form-control">
                        <option value="Goverment Sector" {{ ($info->working_for) == 'Goverment Sector' ? 'selected' : '' }}>Goverment Sector</option>
                        <option value="Private Sector" {{ ($info->working_for) == 'Private Sector' ? 'selected' : '' }}>Private Sector</option>
                        <option value="Freelance" {{ ($info->working_for) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                        <option value="Business" {{ ($info->working_for) == 'Business' ? 'selected' : '' }}>Business</option>
                        <option value="Not Working" {{ ($info->working_for) == 'Not Working' ? 'selected' : '' }}>Not Working</option>
                        
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label>Working As</label>
                    <select name="working_as" class="mdb-select form-control"> 
                    <option value="Yes"  {{ ($info->working_as)  == 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="No"  {{ ($info->working_as) == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Annual Income</label>
                        <select name="annual_income" class="mdb-select form-control">
                        <option value=""></option>
                        <option value="Upto Rs 1 Lakh Yearly" {{ ($info->annual_income) == 'Upto Rs 1 Lakh Yearly' ? 'selected' : '' }}>Upto Rs 1 Lakh Yearly</option> 
                        <option value="Rs 1 to 2 Lakh Yearly" {{ ($info->annual_income) == 'Rs 1 to 2 Lakh Yearly' ? 'selected' : '' }}>Rs 1 to 2 Lakh Yearly</option> 
                        <option value="Rs 2 to 4 Lakh Yearly" {{ ($info->annual_income) == 'Rs 2 to 4 Lakh Yearly' ? 'selected' : '' }}>Rs 2 to 4 Lakh Yearly</option> 
                        <option value="Rs 4 to 7 Lakh Yearly" {{ ($info->annual_income) == 'Rs 4 to 7 Lakh Yearly' ? 'selected' : '' }}>Rs 4 to 7 Lakh Yearly</option> 
                        <option value="Rs 7 to 10 Lakh Yearly" {{ ($info->annual_income) == 'Rs 7 to 10 Lakh Yearly' ? 'selected' : '' }}>Rs 7 to 10 Lakh Yearly</option> 
                        <option value="Rs 10 to 15 Lakh Yearly" {{ ($info->annual_income) == 'Rs 10 to 15 Lakh Yearly' ? 'selected' : '' }}>Rs 10 to 15 Lakh Yearly</option> 
                        <option value="Rs 15 to 20 Lakh Yearly" {{ ($info->annual_income) == 'Rs 15 to 20 Lakh Yearly' ? 'selected' : '' }}>Rs 15 to 20 Lakh Yearly</option> 
                        <option value="Rs 20 to 30 Lakh Yearly" {{ ($info->annual_income) == 'Rs 20 to 30 Lakh Yearly' ? 'selected' : '' }}>Rs 20 to 30 Lakh Yearly</option> 
                        <option value="Rs 30 to 50 Lakh Yearly" {{ ($info->annual_income) == 'Rs 30 to 50 Lakh Yearly' ? 'selected' : '' }}>Rs 30 to 50 Lakh Yearly</option> 
                        <option value="Rs 50 to 75 Lakh Yearly" {{ ($info->annual_income) == 'Rs 50 to 75 Lakh Yearly' ? 'selected' : '' }}>Rs 50 to 75 Lakh Yearly</option> 
                        <option value="75 Lakh to 1 Crore Yearly" {{ ($info->annual_income) == '75 Lakh to 1 Crore Yearly' ? 'selected' : '' }}>75 Lakh to 1 Crore Yearly</option> 
                        <option value="1 Crore & Above Yearly" {{ ($info->annual_income) == '1 Crore & Above Yearly' ? 'selected' : '' }}>1 Crore & Above Yearly</option> 
                        </select>
                    </div>
                </div>
            </div>  
            <p class="h3 text-center">Family Details</p>
            <div class="row">
                <div class="col">
                <div class="form-group">
                <label>Father's Name</label>
                <input type="text" name="father_name" class="form-control" value="{{ $info->father_name }}">
                </div>
                <div class="form-group">
                <label>Mother's Name</label>
                <input type="text" name="mother_name" class="form-control" value="{{ $info->motherf_name }}">
                </div>
                <div class="form-group">
                <label>No of Brothers</label>
                <input type="text" name="no_of_brothers" class="form-control" value="{{ $info->no_of_brothers }}">
                </div>
                <div class="form-group">
                <label>No of Sisters</label>
                <input type="text" name="no_of_sisters" class="form-control" value="{{ $info->no_of_sisters }}">
                </div>
                </div>
            <div class="col">
            <div class="form-group">
                <label>Native Place</label>
                <input type="text" name="native_place" class="form-control" value="{{ $info->native_place }}">
                </div>
                <div class="form-group">
                <label>Father's Occupation</label>
                <input type="text" name="father_occupation" class="form-control" value="{{ $info->father_occupation }}">
                </div>
                <div class="form-group">
                <label>Mother Tongue</label>
                <input type="text" name="mother_tongue" class="form-control" value="{{ $info->mother_tongue }}">
                </div>
            </div>
            </div>
            <p class="h3 text-center">Astro Details</p>
            <div class="row">
            <div class="col">
            <div class="form-group">
                <label>Time of Birth</label>
                <input type="time" id="default-picker" class="form-control" placeholder="Select time" name="tob" value="{{ $info->tob }}">
            </div>
            <div class="form-group">
                <label>City of Birth</label>
                <input type="text" name="cob" class="form-control" value="{{ $info->cob }}">
            </div>
            <div class="form-group">
                <label>Sub-Caste</label>
                <select name="subcaste" class="mdb-select form-control">
                <option value=""></option>
            <option value="Ahir" {{ ($info->subcaste) == 'Ahir' ? 'selected' : '' }}>Ahir</option>
            <option value="Lad" {{ ($info->subcaste) == 'Lad' ? 'selected' : '' }}>Lad</option>
            <option value="Other" {{ ($info->subcaste) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            </div>
            </div>
            <div class="col">
            <div class="form-group">
                <label>Gotra</label>
                <input type="text" name="gotra" class="form-control" value="{{ $info->gotra }}">
            </div>
            <div class="form-group">
                <label>Are you Manglik</label>
                <select name="manglik" class="mdb-select form-control">
                <option value=""></option>
                <option value="Yes" {{ ($info->manglik) == 'Yes' ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ ($info->manglik) == 'No' ? 'selected' : '' }}>No</option>
            </select>
            </div>
            <div class="form-group">
                <label>Sun Sign</label>
                <select name="sun_sign" class="mdb-select form-control">
                <option value=""></option>
                <option value="Aries" {{ ($info->sun_sign) == 'Aries' ? 'selected' : '' }}>Aries</option>
                <option value="Taurus" {{ ($info->sun_sign) == 'Taurus' ? 'selected' : '' }}>Taurus</option>
                <option value="Gemini" {{ ($info->sun_sign) == 'Gemini' ? 'selected' : '' }}>Gemini</option>
                <option value="Cancer" {{ ($info->sun_sign) == 'Cancer' ? 'selected' : '' }}>Cancer</option>
                <option value="Leo" {{ ($info->sun_sign) == 'Leo' ? 'selected' : '' }}>Leo</option>
                <option value="Virgo" {{ ($info->sun_sign) == 'Virgo' ? 'selected' : '' }}>Virgo</option>
                <option value="Libra" {{ ($info->sun_sign) == 'Libra' ? 'selected' : '' }}>Libra</option>
                <option value="Scorpio" {{ ($info->sun_sign) == 'Scorpio' ? 'selected' : '' }}>Scorpio</option>
                <option value="Sagittarius" {{ ($info->sun_sign) == 'Sagittarius' ? 'selected' : '' }}>Sagittarius</option>
                <option value="Capricorn" {{ ($info->sun_sign) == 'Capricorn' ? 'selected' : '' }}>Capricorn</option>
                <option value="Aquarius" {{ ($info->sun_sign) == 'Aquarius' ? 'selected' : '' }}>Aquarius</option>
                <option value="Pisces" {{ ($info->sun_sign) == 'Pisces' ? 'selected' : '' }}>Pisces</option>
                </select>
            </div>
            </div>
            </div>
            <p class="h3 text-center">Contact Information</p>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $info->email }}" required>
                    </div>
                    <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" name="mobile_no" class="form-control" value="{{ $info->mobile_no }}" required>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary btn-rounded" type="submit">Update Profile</button>
            </div>

            @endforeach
        </form>
    <!-- </section> -->
    </div>        
    @endforeach
@endsection