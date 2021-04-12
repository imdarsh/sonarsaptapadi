@extends('layouts.app')

@section('content')
<div class="container card my-5">

    <h5 class="card-header primary-color white-text text-center py-4">
        <strong>Let's create your Profile now</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <form class="text-center">

            <div class="md-form mt-3">
                <input type="text" id="height" class="form-control" name="height">
                <label for="height" class="black-text">Your Height</label>
            </div>

            <div class="md-form">
                <input type="text" id="city" class="form-control">
                <label for="city" class="black-text">City you live in</label>
            </div>

            <label class="float-left">Marital Status</label>
            <select class="browser-default custom-select custom-select-md mb-3">
                <option value="" disabled>Choose option</option>
                <option value="Never Married" selected>Never Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>

            <label class="float-left">Do you live with your parents</label>
            <select class="browser-default custom-select custom-select-md mb-3">
                <option value="" disabled>Choose option</option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>

            <label class="float-left">Sub-Caste</label>
            <select class="browser-default custom-select custom-select-md mb-3">
                <option value="" disabled>Choose option</option>
                <option value="Ahir">Ahir</option>
                <option value="Lad">Lad</option>
                <option value="Other">Other</option>
            </select>

            <label class="float-left">Highest Qualification</label>
            <select class="browser-default custom-select custom-select-md mb-3">
                <option value="" disabled>Choose option</option>
                <option value="B.E / B.Tech">B.E / B.Tech</option>
                <option value="BAMS">BAMS</option>
                <option value="Other">Other</option>
            </select>

            <label class="float-left">Annual Income</label>
            <select class="browser-default custom-select custom-select-md mb-3">
                <option value="" disabled>Choose option</option>
                <option value=""></option>
                <option value=""></option>
                <option value="Other">Other</option>
            </select>

            <!-- Send button -->
            <button class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Create Profile</button>

        </form>
    </div>
</div>
<!-- Material form contact --> 
@endsection