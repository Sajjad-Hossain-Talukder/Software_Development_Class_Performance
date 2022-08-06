<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Person Details</title>
</head>
<body>
    
    <div class="container">
        <h2 class="text-center" >Create Person Profile</h2>
        <form method='post' action="{{url('store-person')}}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name"> Name </label>
                <input type="text" name='name' class='form-control'>
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" name='email' class='form-control'>
            </div>

            <div class="form-group">
                <label for="birth_date"> Date of Birth </label>
                <input type="date" name='birth_date' class='form-control'>
            </div>

            <div class="form-group">
                <label for="salary"> Salary </label>
                <input type="number" name='salary' class='form-control'>
            </div>

            <div class="form-group">
                <button type="submit" class='btn btn-primary'> Save</button>
            </div>

        </form>

    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>