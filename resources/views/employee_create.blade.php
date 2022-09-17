<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Create Employee</title>
</head>
<body>


    <div class="container">
        <h2 class="text-center" >Create Employee</h2>
        <form >
           

            <div class="form-group">
                <label for="name"> Name </label>
                <input type="text" name='name' id ="name" class='form-control'>
            </div>

            <div class="form-group">
                <label for="division"> Division </label>
                <select name="divison" id="division" class='form-control'>
                    <option value="">Select Division</option>
                    @foreach($row as $r )
                    <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="district"> Division </label>
                <select name="district" id="district" class='form-control'>
                    
                </select>
            </div>

            <div class="form-group">
                <button type="button" class='btn btn-primary' id="submitbtn"> Insert </button>
            </div>

        </form>

    
    </div>
    


    <script>
        $(document).ready(function(){
            //alert('working')
            // receive division id on select 
            $("#division").change(function(){
                var division = $(this).val();
                $('#district').empty();
                
                $.ajax({
                    url: "http://localhost:8000/api/districts/"+division,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(response) {
                        var districts = response.districts ; 
                        var str = '' ;
                        for ( var i = 0 ; i < districts.length ; i++ ){
                            str += '<option value="'+ districts[i].id+'">'+districts[i].name+'</option>';
                        }

                        $('#district').append(str);


                        //alert(response;
                    }
                });
            });
                //end 
                $('#submitbtn').click(function(){

                    $.ajax({
                        type: "POST",
                        url: "api/insert-employee/",
                        data: {
                            name : $('#name').val(),
                            division : $('#division').val(),
                            district : $('#district').val()
                        },
                        dataType: 'json' , 
                        success: function(data){
                            console.log(data);
                        }
                    });

            
                });
            //end
            });
    </script>
</body>
</html>