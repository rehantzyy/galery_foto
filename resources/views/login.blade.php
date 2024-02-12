<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form>
            <div style="text-align: center;margin-bottom:20px;"><span style="font-size:40px;">Login</span></div>

            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username or email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password">
            </div>



            <div class="form-group">
                <button type="button" class="btn btn-block create-account">SIGN IN</button>
            </div>
            <p>Doesn't have account ?<a href="{{route('register')}}">Sign up</a>
            </p>
        </form>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
