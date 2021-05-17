@extends('layouts.app')

@section('content')
<div class="container my-5 py-5 z-depth-1">
 
    <section class="text-center text-lg-left dark-grey-text">


          <form class="text-center" method="POST" action="/create-profile">
          @csrf
            <p class="h4 mb-4">Let's Create Your Profile</p>

            <p>Creating profile will help you connect with people</p>

      <div class="row justify-content-center">
            <div class="col-md-6">
                  <div class="form-group">
                  <select  class="form-control" id="profile_for" name="profile_for" required>
                    <option value="" disabled selected>Create Profile For</option>
                    <option value="Son">Son</option>
                    <option value="Self">Self</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                  </select>
                  </div>

            <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Candidate Name" required>
            </div>

            <div class="form-group">
            <input type="text" name="age" id="age" class="form-control" placeholder="Candidate Age" required>
            </div>


            <div class="form-group">
            <select name="gender" id="gender" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            </div>

            <div class="form-group">
            <input name="city" type="text" id="currentCity" class="form-control" placeholder="Your Current City" required>
            </div>

            <div class="form-group">
            <select name="living_with_family" class="form-control" required>
            <option value="" disabled selected>Do you live with your family?</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>
            </div>

            <div class="form-group">
            <input name="height" type="text" id="yourHeight" class="form-control" placeholder="Your Height (in cms)" required>
            </div>

            </div>
            <div class="col-md-6">

            <div class="form-group">
            <select name="marital_status" class="form-control" required>
            <option value="" disabled selected>Marital Status</option>
            <option value="Never Married">Never Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed / Widower">Widow / Widower</option>
            </select>
            </div>

            <div class="form-group">
            <select name="subcaste" class="form-control" required>
            <option value="" disabled selected>Sub-Caste</option>
            <option value="Ahir">Ahir</option>
            <option value="Lad">Lad</option>
            <option value="Other">Other</option>
            </select>
            </div>

            <div class="form-group">
            <input type="text" name="highest_qualification" id="highestQualification" placeholder="Highest Qualification" class="form-control" required>
            </div>

            <div class="form-group">
            <select name="working_for" id="workingFor" class="form-control" required>
            <option value="" disabled selected>Working In</option>
            <option value="Goverment Sector">Goverment Sector</option>
            <option value="Private Sector">Private Sector</option>
            <option value="Freelance">Freelance</option>
            <option value="Business">Business</option>
            <option value="Not Working">Not Working</option>
            </select>
            </div>

            <div class="form-group">
            <input type="text" id="workingAs" name="working_as" placeholder="Working As" class="form-control">
            </div>

            <div class="form-group">
            <select name="annual_income" id="annualIncome" class="form-control">
            <option value="" disabled selected>Annual Income</option>
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

            <div class="form-group">
            <input name="mobile_no" type="text" class="form-control mb-4" placeholder="Mobile no" required>
            </div>

           </div>
          
            <div class="col">
            <div class="form-group">
            <textarea name="bio" name="" id="" cols="30" rows="10" class="form-control" placeholder="Bio" required></textarea>
            </div>
            </div>            
       </div>

            <div class="form-group">
            <button class="btn btn-primary" type="submit">Create Profile</button>
            </div>
    
          </form>    
    </section>
      </div>


@endsection