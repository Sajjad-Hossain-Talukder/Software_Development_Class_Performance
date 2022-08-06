<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div">
        <h2>About Us </h2>
        <p>Name : {{$name}}</p>
        <p>Email : {{$email}}</p>
        <div class="menu">
            <ul>
                <li><a href="{{ URL :: to('/')}}" >  Home </a></li>
                <li><a href="{{ URL :: to('about-us')}}"> About Us </a></li>
                <li><a href="{{url('contact/people')}}"> Contact </a></li>

            </ul>
        </div>



    </div>
</body>
</html>