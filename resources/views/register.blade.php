<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
    <div class="text-center" > 
        <h2>Register </h2>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form method='post' action="{{url('store-register')}}">
                    {{ csrf_field() }}

                    @if ( Session::has('err_msg'))
                        <div class="alert alert-danger">
                            <strong> {{  Session::get('err_msg') }}</strong>
                        </div>
                    @endif

                    
                    @if ( Session::has('success'))
                        <div class="alert alert-success">
                            <strong> {{  Session::get('success') }}</strong>
                        </div>
                    @endif


                    <div class="form-group">
                        <label for="name"> Name </label>
                        <input type="text" name='name' class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" name='email' class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input type="password" name='password' class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="cpassword"> Confirm Password </label>
                        <input type="password" name='cpassword' class='form-control'>
                    </div>

                

                    <div class="form-group">
                        <button type="submit" class='btn btn-primary btn-block'> Register </button>
                    </div>
                </form>


            </div>
            <div class="col-lg-3"></div>

 
           

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>