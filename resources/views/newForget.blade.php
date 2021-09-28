<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill up your Form</title>
    <link rel="shortcut icon" href="{{ asset('/register/assets/img/Mi.png') }}" type="image/x-icon">

    <!-- Bootstrap! -->
    <link rel="stylesheet" href="{{ asset('/register/assets/css/bootstrap.min.css') }}">
    <!-- Custom css  -->
    <link rel="stylesheet" href="{{ asset('/register/assets/css/style.css') }}">
    <!-- Responsive! -->
    <link rel="stylesheet" href="{{ asset('/register/assets/css/resposive.css') }}">
    
    
</head>
<body>
    
    <main>
        <section>
            <!-- main section! -->
            <div>
                <form action="" enctype="multipart/form-data" class="main d-md-flex">
                <div class="form-img">
                    <img class="image" src="{{ asset('/register/assets/img/upload.png') }}" alt="image">
                </div>
                <div class="form-div">
                    <h4>Change Password</h4>
                    <div class="form">
                                           
                        <div class="form-group input-div">
                                <input id="" class="input" type="email" placeholder="Your Email">
                        </div>                                                                                                                                                                                                 
                        <div class="form-group input-div">
                                <input id="" class="input" type="text" placeholder="Your PassWord">
                        </div>                                                                                                                           
                        <div class="form-group input-div">
                                <input id="" class="input" type="text" placeholder="Your PassWord">
                        </div>                                                                                                                           
                        <div class="form-group input-div">
                                <input id="btn" class="form-control" type="button" value="Submit">
                        </div>                                                                                                                           
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Bootstrap! JS -->
    <script src="{{ asset('/register/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custo JS! -->
    <script src="{{ asset('/register/assets/js/script.js') }}"></script>
</body>
</html>