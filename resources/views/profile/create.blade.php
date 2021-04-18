@extends('layouts.app')

@section('content')
<div class="container my-5 py-5 z-depth-1">
 
    <section class="text-center text-lg-left dark-grey-text">

      <div class="row-md-12 flex justify-content-center">

          <form class="text-center" method="POST" action="/create-profile">
          @csrf
            <p class="h4 mb-4">Let's Create Your Profile</p>

            <p>Creating profile will help you connect with people</p>

            <div class="col">
            <div class="md-form">
                  <select  class="mdb-select form-control" id="profile_for" name="profile_for">
                    <option value="" disabled selected>Create Profile For</option>
                    <option value="Son">Son</option>
                    <option value="Self">Self</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                  </select>
            </div>

            <select name="gender" id="gender" class="form-control md-select md-form">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>

            <input name="city" type="text" id="currentCity" class="form-control mb-4" placeholder="Your Current City" required>

            <select name="live_with_family" class="mdb-select form-control md-form" required>
            <option value="" disabled selected>Do you live with your family?</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>

            <input name="height" type="text" id="yourHeight" class="form-control mb-4" placeholder="Your Height (in cms)" required>

            <select name="marital_status" class="mdb-select form-control md-form" required>
            <option value="" disabled selected>Marital Status</option>
            <option value="Never Married">Never Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed / Widower">Widow / Widower</option>
            </select>

            <select name="subcaste" class="mdb-select form-control md-form" required>
            <option value="" disabled selected>Sub-Caste</option>
            <option value="Ahir">Ahir</option>
            <option value="Lad">Lad</option>
            <option value="Other">Other</option>
            </select>

            <select name="highest_qualification" class="mdb-select form-control md-form" required>
            <option value="" disabled selected>Highest Qualification</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>

            </div>
            <div class="col">

            <select name="working_in" class="mdb-select form-control md-form" required>
            <option value="" disabled selected>Job / Business</option>
            <option value="Goverment Sector">Goverment Sector</option>
            <option value="Private Sector">Private Sector</option>
            <option value="Freelance">Freelance</option>
            <option value="Business">Business</option>
            <option value="Not Working">Not Working</option>
            </select>

            <select name="jobprofile" class="mdb-select form-control md-form">
            <option value="" disabled selected>As</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>

            <select name="annual_income" class="mdb-select form-control md-form">
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

            <textarea name="bio" name="" id="" cols="30" rows="10" class="form-control mb-4" placeholder="Bio" required></textarea>

            <input name="mobileno" type="text" class="form-control mb-4" placeholder="Mobile no" required>

            </div>

            <button class="btn btn-primary btn-block" type="submit">Create Profile</button>
    
          </form>
        
      </div>
    </section>
  </div>


@endsection