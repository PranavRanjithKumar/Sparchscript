<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <title>Sprachscript  |   Dashboard</title>
  </head>
  <body>
  <header>
    <div class="row">
      <div class="col-md-5">
        <h1 style="color:#1ebba3;font-weight: 700;text-transform:uppercase;">Sparchscript</h1>
      </div>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user-doctor"></i> UserName
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item" href="#">Update Profile</a></li>
            <li><a class="dropdown-item" href="#">Forgot Password</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
    </div>
  </header>
  
  <div class="jumbotron jumbotron-container">
    <div class="col-12 text-center">
      <h3 class="heading">Dashboard</h3>
      <p>Easily generate prescriptions through your voice</p>
      <div class="heading-underline"></div>
    </div>
  </div>
  <div class="prescriptions">
  <div class="prescrption-container">
	<div class="prescription">
		<div class="prescription-preview">
			<h2>Arjun Prabha</h2>
			<span>Male, 27 years</span>
		</div>
		<div class="prescription-info">
			<h3>Diagnosis: Fever</h3>
			<h6>Visited date: 17/02/2022</h6>
			<h6>Next Review Date: 03/03/2022</h6>
			<button class="btn-prescription">Download Prescription</button>
		</div>
	</div>
</div>
<div class="prescrption-container">
	<div class="prescription">
		<div class="prescription-preview">
			<h2>Arjun Prabha</h2>
			<span>Male, 27 years</span>
		</div>
		<div class="prescription-info">
			<h3>Diagnosis: Fever</h3>
			<h6>Visited date: 17/02/2022</h6>
			<h6>Next Review Date: 03/03/2022</h6>
			<button class="btn-prescription">Download Prescription</button>
		</div>
	</div>
</div>
<div class="prescrption-container">
	<div class="prescription">
		<div class="prescription-preview">
			<h2>Arjun Prabha</h2>
			<span>Male, 27 years</span>
		</div>
		<div class="prescription-info">
			<h3>Diagnosis: Fever</h3>
			<h6>Visited date: 17/02/2022</h6>
			<h6>Next Review Date: 03/03/2022</h6>
			<button class="btn-prescription">Download Prescription</button>
		</div>
	</div>
</div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <body>
</html>