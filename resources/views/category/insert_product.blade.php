<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Insert Product</title>
</head>
<body>
    <div class="text-center my-4 " > 
        <h2>Insert Product</h2>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form method='post' action="{{url('store-category')}}">
                    {{ csrf_field() }}

        

                    <div class="form-group">
                        <label for="name"> Product Name </label>
                        <input type="text" name='name' class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="so"> Sort Order </label>
                        <input type="number" name='so' class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="price"> Price </label>
                        <input type="number" name='price' class='form-control'>
                    </div>

                    <div class="form-group">
                        <label for="cat">Category </label> 
                        <select name="cat" class='form-control'>
                            @foreach($row as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden"  name="act" value="0">
                        <input type="checkbox"  name="act" value="1">
                        <label for="act"> Active </label><br>
                    </div>
    
                

                    <div class="form-group">
                        <button type="submit" class='btn btn-primary btn-block'> Add Category </button>
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