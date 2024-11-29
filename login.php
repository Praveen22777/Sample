

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-fluid1 {
            height: 22px;
            background-color: #5a86dd;
            margin-top: 0px;
        }
        .container-fluid2 {
            height: 24px;
            background-color: #51adc2;  
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
        </div>
    </nav>
    <div class="container-fluid1"></div>
    <div class="container-fluid text-start">
        <div class="col">
            <p class="lead mx-5 fw-bold">Login</p>
        </div>
    </div>

    <div class="container text-center border mb-3 shadow">
        <div class="row align-items-center">
            <div class="col">
                
                <form id="loginForm">
                    <div>
                        <label for="username"><p class="fw-bold px-1 mx-4 mt-3"> User Name*</p></label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="email"><p class="mx-5 fw-bold">Email*</p></label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
                <div id="responseMessage" class="mt-3"></div>
            </div>
        </div>
     
        
    </div>

    <div class="container text-start border bg-light shadow">
        
    </div>
    <div class="container-fluid2 mt-4">
       
    </div>

    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                const formData = $(this).serialize();

                $.ajax({
                    url: 'process_login.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        const messageBox = $('#responseMessage');
                        if (response.status === 'success') {
                            messageBox.html('<div class="alert alert-success">' + response.message + '</div>');
                        } else {
                            messageBox.html('<div class="alert alert-success">' + response.message + '</div>');
                        }
                    },
                    error: function() {
                        $('#responseMessage').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    }
                });
            });
        });
    </script>
</body>
</html>
