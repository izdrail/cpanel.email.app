
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cpanel Email Creator</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>


</head>

<body class="text-center">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form id="app" class="form-signin">

                <h1 class="h3 mb-3 font-weight-normal">Cpanel Email Creator</h1>

                <div class="result"></div>

                <div class="form-group">
                    <label for="inputUsername" class="sr-only">Email </label>
                    <input type="email" required name="email" id="inputUsername" class="form-control" placeholder="Email Address" autofocus>
                    <small id="emailHelp" class="form-text text-muted">
                        Example: <b>"test1234@de-companie.com"</b>
                    </small>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password </label>
                    <input type="password" required id="inputPassword" name="password" class="form-control" placeholder="Password">
                    <small id="emailHelp" class="form-text text-muted">
                        Example: <b>"qwerty@@##"</b>
                    </small>
                </div>

                <button id="target" class="btn btn-lg btn-primary btn-block" type="button">
                    Create Email
                </button>

            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p class="mt-5 mb-3 text-muted">&copy; Created with &hearts; by - Lzo Media</p>
        </div>
    </div>
</div>


<script>

    console.log("Welcome to the email creator");
    // A $( document ).ready() block.
    $( document ).ready(function() {


        $( "#target" ).click(function() {

            var username = $("input#inputUsername").val();

            var password = $("input#inputPassword").val();

            $.post( "create", {username: username, password:password}, function( data ) {

                $( ".result" ).html( data );

            });

        });
    });


</script>

</body>
</html>
