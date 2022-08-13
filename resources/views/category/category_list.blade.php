<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Category List</title>
</head>
<body>
    <div class="text-center my-4 " > 
        <h2>Category List</h2>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
               
                    <table  class="table">
                        <thead>
                            <tr>
                                <td>Cataegory Name </td>
                                <td>Sort Order </td>
                                <td>Is Active?</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($row as $r )
                            <tr>
                                <td>{{$r->name}}</td>
                                <td>{{$r->sort_order}}</td>
                                <td>{{$r->is_active}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        
                    </table>

            </div>
            <div class="col-lg-3"></div>



        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>