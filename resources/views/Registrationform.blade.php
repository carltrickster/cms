<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->

<style>

.header {
  background-image: linear-gradient(to bottom right, #33FF98, #41A9A5);
  padding: 8px;
  text-align: left;
  width: 1500px;
  margin: auto;

}
h1 {
  
  color: #F0FFFF;
 
}
li {
 display:inline;
                
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                position: absolute;
  top: 8px;
  right: 16px;
}
</style>
       
    </head>
    <body>
    
    <div class="header">

      <h1>Account Information</h1>
      
               <li><a href="{{ route('HOME') }}"><button type="button">HOME</button></a></li>
              
    </div>
   
    
  </div>
</nav>


<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                 
                  <h3 class="fw-normal mb-5" style="color: black;">General Infomation</h3>
<h>Fill out this form to continue</h>
<br><br>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev2">First name</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev3">Middle name</label>
                      </div><br>

                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="text" id="form3Examplev4" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplev4">Last name</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
                        <input type="date" id="birthday" class="form-control form-control-lg" />
                        <label class="birthday" for="form3Examplev5">Birthdate</label>
                      </div>

                    </div>
                    
                  </div>
                  
                  <div class="col-md-7 mb-4 pb-2">

<div class="form-outline form-white">
  <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
  <label class="form-label" for="form3Examplea5">Age</label>
  <h3>Emergency Contact Person</h3><br>
  <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev2">Full Name</label>
                      </div>
                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev2">Mobile Number</label>
                      </div>
                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev2">Relationship</label>
                      </div>
</div>

</div>
                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3><br><br>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Street Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea3">City</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                   
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea7">Phone</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea8">Telephone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input
                      class="form-check-input me-3"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div>

                  <a href="{{ route('book') }}"><button type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Continue</button></a>
 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
</html>
