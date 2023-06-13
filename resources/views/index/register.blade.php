<html><head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</head>
<body>
	<!-- Main Container -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                      <!-- Form -->
                        <form action="/register/store" method="POST">
                            @csrf
                            <label class="form-label " for="form3Example1c">Username</label>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="username" class="form-control" />
                          </div>
                        </div>

                        <label class="form-label" for="form3Example3c">Email</label>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3a-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="email" class="form-control" />

                          </div>
                        </div>

                        <label class="form-label" for="form3Example4c">Password</label>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" name="password" class="form-control" />

                          </div>
                        </div>




                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                          <button type="submit" class="btn btn-primary btn-lg" >Register</button>
                        </div>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body></html>
