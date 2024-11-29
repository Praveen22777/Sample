<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Checkboxes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .sub-checkboxes {
            margin-left: 20px;
            display: none; 
        }
    </style>
</head>
<body>
    

<label>
    <p>Menu</p>
        <input type="checkbox" id="mainCheckbox"> Master
    </label>

  
    <div class="sub-checkboxes" id="subCheckboxes">
       
    </div> <br><br>
  
    

    <label>
    <p>Menu</p>
        <input type="checkbox" id="mainCheckbox1"> Reports
    </label>

  
    <div class="sub-checkboxes1" id="subCheckboxes1">
       
    </div> <br><br>

    <label>
    <p>Menu</p>
        <input type="checkbox" id="mainCheckbox2"> Access Controls
    </label>

  
    <div class="sub-checkboxes2" id="subCheckboxes2">
       
    </div>

    <script>
        $(document).ready(function () {
            
            $("#mainCheckbox").change(function () {
                if (this.checked) {
                  
                    $.ajax({
                        url: "test.php", 
                        method: "GET",
                        success: function (response) {
                            
                            $("#subCheckboxes").html(response).show();
                        },
                       
                    });
                } else {
                   
                    $("#subCheckboxes").hide();
                }
            });
        });

        $(document).ready(function () {
            
            $("#mainCheckbox1").change(function () {
                if (this.checked) {
                  
                    $.ajax({
                        url: "test1.php", 
                        method: "GET",
                        success: function (response) {
                            
                            $("#subCheckboxes1").html(response).show();
                        },
                       
                    });
                } else {
                   
                    $("#subCheckboxes1").hide();
                }
            });
        });

        $(document).ready(function () {
            
            $("#mainCheckbox2").change(function () {
                if (this.checked) {
                  
                    $.ajax({
                        url: "test2.php", 
                        method: "GET",
                        success: function (response) {
                            
                            $("#subCheckboxes2").html(response).show();
                        },
                       
                    });
                } else {
                   
                    $("#subCheckboxes2").hide();
                }
            });
        });
    </script>
</body>
</html>
