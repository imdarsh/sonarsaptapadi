@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  @include('layouts.navbar')
<section>
  <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-body">
    <form action="/search" method="GET">
    <div class="row">
              <div class="col-md-2 form-group">
                <select name="gender" class="mdb-form form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
              </div>
                <div class="col-md-2 form-group">
                  <input type="text" name="city" placeholder="City" class="form-control">
                </div>
                <div class="col-md-2 form-group">
                  <input type="text" name="age_min" placeholder="Minimum Age" class="form-control">
                </div>
                <div class="col-md-2 form-group">
                  <input type="text" name="age_max" placeholder="Maximum Age" class="form-control">
                </div>
                <div class="col-md-2 form-group">
                  <input type="text" name="highest_qualification" placeholder="Education" class="form-control">
                  </select>
                </div>
                <div class="col-md-2 form-group">
                  <button class="btn btn-primary" type="submit">Search</button>
                </div>
              </div>
        </form>
              </div>
          </div>
          </div>
      </div>

  </div>  
</section>
  <!--Section: Content-->
  <section class="white-text p-5 rounded" style="background-color:#ffa500">
    
    <h3 class="text-center font-weight-bold mb-4 pb-2">People We Have Help Connect</h3>

    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="row">
          <div class="col-6 pr-0">
            <h4 class="display-4 text-right mb-0 count-up" data-from="0" data-to="2500" data-time="4000">2,500</h4>
          </div>

          <div class="col-6">
            <p class="text-uppercase font-weight-normal mb-1">Connections</p>
            <p class="mb-0"><i class="fas fa-heart fa-2x mb-0"></i></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="row">
          <div class="col-6 pr-0">
            <h4 class="display-4 text-right mb-0 count1" data-from="0" data-to="3500" data-time="4000">3,500</h4>
          </div>

          <div class="col-6">
            <p class="text-uppercase font-weight-normal mb-1">Customers</p>
            <p class="mb-0"><i class="fas fa-user fa-2x mb-0"></i></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="row">
          <div class="col-6 pr-0">
            <h4 class="display-4 text-right"><span class="d-flex justify-content-end"><span class="count2" data-from="0" data-to="100" data-time="2000">100</span> %</span></h4>
          </div>

          <div class="col-6">
            <p class="text-uppercase font-weight-normal mb-1">Satisfaction</p>
            <p class="mb-0"><i class="fas fa-smile fa-2x mb-0"></i></p>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!--Section: Content-->



<!-- </div> -->


<!-- Testimonials -->
<div class=" py-5 my-5">
  <section class="p-md-5 mx-md-5 text-center text-lg-left">
    <div class="row text-center py-4">
      <h2 class="font-weight-bold mx-auto">Testimonials</h2>
    </div>
    <div class="row text-center d-flex align-items-between">
      <div class="col-lg-4 mb-2 d-flex flex-column justify-content-between">
        <p class="text-muted p-3">
          Before I was single as hell and now I am married as heaven.
        </p>
        <div>
          <div class="avatar w-100 white d-flex justify-content-center align-items-center p-3">
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
              style="max-width: 80px"
              class="rounded-circle z-depth-1"
              alt="woman avatar"
            />
          </div>
          <h4 class="font-weight-bold mt-3 pb-1">Siddhi Bhadak</h4>
          <p class="font-weight-bold text-muted">I hate Coding</p>
        </div>
      </div>
      <div class="col-lg-4 mb-2 d-flex flex-column justify-content-between">
        <p
          class="text-muted p-3">
          My family forced me to get married but I did it my way with sonarsaptapadi.
        </p>
        <div>
          <div class="avatar w-100 white d-flex justify-content-center align-items-center p-3">
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
              style="max-width: 80px"
              class="rounded-circle z-depth-1"
              alt="woman avatar"
            />
          </div>
          <h4 class="font-weight-bold mt-3 pb-1">Sahil Shinde</h4>
          <p class="font-weight-bold text-muted">I hate Communicating</p>
        </div>
      </div>
      <div class="col-lg-4 mb-2 d-flex flex-column justify-content-between">
        <p class="text-muted p-3">
          My new Husband is crazy.
        </p>
        <div>
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center p-3">
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
              style="max-width: 80px"
              class="rounded-circle z-depth-1"
              alt="woman avatar"
            />
          </div>
          <h4 class="font-weight-bold mt-3 pb-1">Durga Ozarkar</h4>
          <p class="font-weight-bold text-muted">I am a Genius</p>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Contact Us -->
  <div class="container my-5 py-5 z-depth-1">


  <!--Section: Content-->
  <section class="text-center px-md-5 mx-md-5 dark-grey-text">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4">Contact Us</h3>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5">Contact us at our Head Office in Nashik.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-9 mb-md-0 mb-5">

        <form>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="contact-name" class="form-control">
                <label for="contact-name" class="text-dark">Your name</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="contact-email" class="form-control">
                <label for="contact-email" class="text-dark">Your email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="contact-Subject" class="form-control">
                <label for="contact-Subject" class="text-dark">Subject</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form">
                <textarea id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="contact-message" class="text-dark">Your message</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </form>

        <div class="text-center text-md-left">
          <a class="btn btn-primary btn-md btn-rounded">Send</a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li>
            <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
            <p>Nashik</p>
          </li>
          <li>
            <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
            <p>+918669081775</p>
          </li>
          <li>
            <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
            <p class="mb-0">support@sonarsaptapadi.com</p>
          </li>
        </ul>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>


<!-- Footer -->
<footer class="page-footer font-small pt-4" style="background-color:#F6B812">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-outline-white">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://itgenetic.com"> ItGenetic.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</main>
@endsection
