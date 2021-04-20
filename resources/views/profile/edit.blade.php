@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    @foreach($data as $info)
    <div class="container   my-5 py-5">
        <form action="" method="POST">
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
                    <select name="marital_status" class="mdb-select form-control" required>
                        <option value="{{$info->marital_status}}" disabled selected>{{$info->marital_status}}</option>
                        <option value="Never Married">Never Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed / Widower">Widow / Widower</option>
                    </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label>Height</label>
                        <input name="height" type="text" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                    <label>Blood Group</label>
                        <select name="blood_group" id="" class="mdb-select form-control">
                            <option value="{{ $info->blood_group }}" disabled selected>{{ $info->blood_group }}</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label>Date of Birth</label>
                    <div class="md-outline input-with-post-icon datepicker">
                    <input placeholder="Select date" type="date" id="example" class="form-control">
                    </div>
                    </div>
                </div>
            </div>  
            <p class="h3 text-center my-5">Education and Career</p>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Highest Qualification</label>
                    <select name="highest_qualification" class="mdb-select form-control" required>
                    <option value="{{ $info->highest_qualification }}" disabled selected>{{ $info->highest_qualification }}</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>College Attended</label>
                        <input type="text" name="college_attended" class="form-control" value="{{ $info->college_attended }}">
                    </div>
                    <div class="form-group">
                        <label>Working For</label>
                        <select name="working_for" class="mdb-select form-control" required>
                        <option value="{{ $info->working_for }}" disabled selected>{{ $info->working_for }}</option>
                        <option value="Goverment Sector">Goverment Sector</option>
                        <option value="Private Sector">Private Sector</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Business">Business</option>
                        <option value="Not Working">Not Working</option>
                        
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label>Working As</label>
                    <select name="working_as" class="mdb-select form-control" required> 
                    <option value="{{ $info->working_as }}" disabled selected>{{ $info->working_as }}</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Annual Income</label>
                        <select name="annual_income" class="mdb-select form-control">
                        <option value="{{ $info->annual_income }}" disabled selected>{{ $info->annual_income }}</option>
                        <option value="Upto Rs 1 Lakh Yearly">Upto Rs 1 Lakh Yearly</option> 
                        <option value="Rs 1 to 2 Lakh Yearly">Rs 1 to 2 Lakh Yearly</option> 
                        <option value="Rs 2 to 4 Lakh Yearly">Rs 2 to 4 Lakh Yearly</option> 
                        <option value="Rs 4 to 7 Lakh Yearly">Rs 4 to 7 Lakh Yearly</option> 
                        <option value="Rs 7 to 10 Lakh Yearly">Rs 7 to 10 Lakh Yearly</option> 
                        <option value="Rs 10 to 15 Lakh Yearly">Rs 10 to 15 Lakh Yearly</option> 
                        <option value="Rs 15 to 20 Lakh Yearly">Rs 15 to 20 Lakh Yearly</option> 
                        <option value="Rs 20 to 30 Lakh Yearly">Rs 20 to 30 Lakh Yearly</option> 
                        <option value="Rs 30 to 50 Lakh Yearly">Rs 30 to 50 Lakh Yearly</option> 
                        <option value="Rs 50 to 75 Lakh Yearly">Rs 50 to 75 Lakh Yearly</option> 
                        <option value="75 Lakh to 1 Crore Yearly">75 Lakh to 1 Crore Yearly</option> 
                        <option value="1 Crore & Above Yearly">1 Crore & Above Yearly</option> 
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
                <input type="text" name="mother_name" class="form-control" value="{{ $info->father_name }}">
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
            <option value="{{ $info->subcaste }}" disabled selected>{{ $info->subcaste }}</option>
            <option value="Ahir">Ahir</option>
            <option value="Lad">Lad</option>
            <option value="Other">Other</option>
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
                <option value="{{ $info->manglik }}" disabled selected>{{ $info->manglik }}</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            </div>
            <div class="form-group">
                <label>Sun Sign</label>
                <select name="sun_sign" class="mdb-select form-control">
                <option value="{{ $info->sun_sign }}" disabled selected>{{ $info->sun_sign }}</option>
                <option value="Aries">Aries</option>
                <option value="Taurus">Taurus</option>
                <option value="Gemini">Gemini</option>
                <option value="Cancer">Cancer</option>
                <option value="Leo">Leo</option>
                <option value="Virgo">Virgo</option>
                <option value="Libra">Libra</option>
                <option value="Scorpio">Scorpio</option>
                <option value="Sagittarius">Sagittarius</option>
                <option value="Capricorn">Capricorn</option>
                <option value="Aquarius">Aquarius</option>
                <option value="Pisces">Pisces</option>
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