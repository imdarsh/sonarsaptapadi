@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    @include('admin.navbar')

    <div class="container my-2">
    <p class="h1 text-center">Users Data</p>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Current City</th>
                    <th>Height</th>
                    <th>Martial Status</th>
                    <th>Sub Caste</th>
                    <th>Highest Qualification</th>
                    <th>Working In</th>
                    <th>Working As</th>
                    <th>Annual Income</th>
                    <th>Mobile</th>
                    <th>Living with Family</th>
                    <th>Date of Birth</th>
                    <th>Blood Group</th>
                    <th>College Attended</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>No of Brothers</th>
                    <th>No of Sisters</th>
                    <th>Native Place</th>
                    <th>Father Occupation</th>
                    <th>Mother Tongue</th>
                    <th>Time of Birth</th>
                    <th>City of Birth</th>
                    <th>Gotra</th>
                    <th>Manglik</th>
                    <th>Sun Sign</th>
                    <th>Bio</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->height }}</td>
                    <td>{{ $user->marital_status }}</td>
                    <td>{{ $user->subcaste }}</td>
                    <td>{{ $user->highest_qualification }}</td>
                    <td>{{ $user->working_for }}</td>
                    <td>{{ $user->working_as }}</td>
                    <td>{{ $user->annual_income }}</td>
                    <td>{{ $user->mobile_no }}</td>
                    <td>{{ $user->living_with_family }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->blood_group }}</td>
                    <td>{{ $user->college_attended }}</td>
                    <td>{{ $user->father_name }}</td>
                    <td>{{ $user->mother_name }}</td>
                    <td>{{ $user->no_of_brothers }}</td>
                    <td>{{ $user->no_of_sisters }}</td>
                    <td>{{ $user->native_place }}</td>
                    <td>{{ $user->father_occupation }}</td>
                    <td>{{ $user->mother_tongue }}</td>
                    <td>{{ $user->tob }}</td>
                    <td>{{ $user->cob }}</td>
                    <td>{{ $user->gotra }}</td>
                    <td>{{ $user->manglik }}</td>
                    <td>{{ $user->sun_sign }}</td>
                    <td>{{ $user->bio }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>     
@endsection