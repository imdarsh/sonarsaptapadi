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
                </div>
            </div>  
            <p class="h3 text-center my-5">Education and Career</p>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Highest Qualification</label>
                    <select name="highest_qualification" class="mdb-select form-control" required>
                    @if($info->highest_qualification)
                    <option value="{{ $info->highest_qualification }}">{{ $info->highest_qualification }}</option>
                    @else
                    <option value="" disabled selected>Highest Qualification</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    @endif
                    </select>
                    </div>
                    <div class="form-group">
                        <label>College Attended</label>
                        <input type="text" name="college_attended" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Working For</label>
                        <select name="working_for" class="mdb-select form-control" required>
                        @if($info->working_for)
                        <option value="{{ $info->working_for }}">{{ $info->working_for }}</option>
                        @else
                        <option value="" disabled selected>Job / Business</option>
                        <option value="Goverment Sector">Goverment Sector</option>
                        <option value="Private Sector">Private Sector</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Business">Business</option>
                        <option value="Not Working">Not Working</option>
                        @endif
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label>Working As</label>
                    <select name="working_as" class="mdb-select form-control" required>
                    @if($info->working_as)
                    <option value="{{ $info->working_as }}">{{ $info->working_as }}</option>
                    @else
                    <option value="" disabled selected>As</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    @endif
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
            @endforeach
        </form>
    <!-- </section> -->
    </div>        
    @endforeach
@endsection