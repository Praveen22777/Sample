
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Pass</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container col-lg-4">
      <h1>Visitor Pass</h1>
        <form action="formprocess.php" method="post" autocomplete="off" id="userForm">
            <tr>
             <td>Aadhar Number</td>
             <td><input type="number" name="AADHAR_NUMBER" class="form-control"></td><br>
            </tr> 
            <tr>
             <td>Name</td>
             <td><input type="text" name="Name" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><input type="date" name="DOB" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Gender</td><br>
                <td>
                    <input type="radio" name="Gender" value="Male">Male
                    <input type="radio" name="Gender" value="Female">Female
                    <input type="radio" name="Gender" value="Others">Others
                </td><br><br>
            </tr>
            <tr>
                <td>Father Name</td>
                <td><input type="text" name="Father_Name" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="Phone_Number" class="form-control"></td><br>
            </tr>
            <tr>
                <td>To Meet</td>
                <td><input type="text" name="To_Meet" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Meet Reason</td><br>
                <td><textarea name="Meet_Reason" id="Meet_Reason" cols="50" rows="7"></textarea><br>
            </tr>
            <tr>
                <td>Address</td><br>
                <td><textarea name="Address" id="Address" cols="50" rows="7"></textarea><br>
            </tr>
            <tr>
                <td>Comapany Name</td>
                <td><input type="text" name="Company_Name" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Vendor Name</td>
                <td><input type="text" name="Vendor_Name" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Valid From Date</td>
                <td><input type="date" name="Valid_from" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Valid To Date</td>
                <td><input type="date" name="Valid_to" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Issue Date</td>
                <td><input type="date" name="Issue_Date" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Valid Days</td>
                <td><input type="number" name="Valid_Days" class="form-control"></td><br>
            </tr>
            <tr>
                <td>Total Days</td>
                <td><input type="number" name="Total_Days" class="form-control"></td><br>
            </tr>
            <button
              
                type="submit"
                class="btn btn-primary">
                
                Submit
            </button>
         </form>
    </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).on("submit","#userForm",function(e){
            e.preventDefault();
            $.ajax({
                type:"post",
                url:"formprocess.php",
                data:$(this).serialize(),
                dataType:"text",
                success:function(response){
                    if (response=="success"){
                        var str = '<div class="alert alert-success">Data Inserted successfully</div>';
                    }
                    else{
                        var str = '<div class="alert alert-success">'+response+'</div>';
                    }
                    $("#msg").html(str);
                }

            });
        });
    </script>
</body>
</html>