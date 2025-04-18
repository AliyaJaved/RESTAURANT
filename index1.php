<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- For more projects: Visit codeastro.com  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Taste Fusion</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            transition:all .2s ease-in-out;
        }
        .links>a:hover{
            color:black;
            letter-spacing: 4px;

        }

        .m-b-md {
            margin-bottom: 30px;
        }
        span{
            border-bottom:1px solid black;
            transition:all .5s ease-in-out;
        }
        span:hover{
           letter-spacing:2px;
           border-bottom:3px solid black;
        }
    </style>
</head>
<!-- For more projects: Visit codeastro.com  -->
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <span>Taste Fusion</span>
            </div>

            <div class="links">
			<!-- For more projects: Visit codeastro.com  -->
                <a href="index.php">Admin Log In</a>
               
                <a href="./login.php">Customer Log In</a>
            </div>
        </div>
    </div>
</body>
<!-- For more projects: Visit codeastro.com  -->
</html>