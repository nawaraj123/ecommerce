<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">   


</head>

<body class="bg-gradient-primary">
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update passsword!</h1>
              </div>

              @if (session()->has('success'))
    <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="background:red;">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif
            

@if (session()->has('failure'))
    <div class="alert alert-dismissable alert-failure">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('failure') !!}
        </strong>
    </div>
@endif


              <form class="user" action="{{ url('/update-psw')  }}" method="post"> {{ csrf_field() }} 

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label>Current Password</label>
                  
                    <input type="password" id="current_pwd" class="form-control form-control-user" name="current_pwd" required id="exampleFirstName" placeholder="Current Password">
                    <span id="chkPwd"></span>
                  </div>
                  <div class="col-sm-6">
                                    <label>New Password</label>
                    <input type="password" id="new_pwd" class="form-control form-control-user" name="new_pwd" required id="exampleLastName" placeholder="New Password">
                  </div>
                  <div class="col-sm-6">
                                    <label>Confirm Password</label>

                    <input type="password" class="form-control form-control-user" required id="exampleLastName" name="confirm_pwd" placeholder="New Password">
                  </div>           
                
                <input type="submit" class="btn-primary"  value="Reset Password">
                <hr>                
                
              </form>
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}" ></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>


