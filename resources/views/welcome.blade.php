<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Status Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/36172d73cc.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                background-image: url("https://beta.ls-rp.com/assets/images/gunbg.png");
                font-weight: 200;
                /*height: 100vh;*/
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                padding-bottom: 30px;
            }
            .lsrplogo{
                padding-top: 60px;
            }
            /*.card{*/
            /*    height: 16rem;*/
            /*    padding-right: 150px;*/
            /*}*/
            .fa-check-square{
                color: green;
            }
            .fa-times-circle {
                color: red;
            }
            .info-text{
                color: white;
            }
            /*.bottom{*/
            /*    padding-left: 550px;*/
            /*}*/
            .card-img-top h3 {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="lsrplogo container mt-4">
            <div class="content">
                <div class="title m-b-md">
                    <img src="https://beta.ls-rp.com/assets/images/lsrplogo.png" alt="">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="card-deck">
                <div class="card col p-3" >
                    <div class="card-img-top text-center"><h3>GAME</h3></div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Operational</h3>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-check-square fa-m"></i></h2>
                    </div>
                </div>
                <div class="card p-3 col" >
                    <div class="card-img-top text-center"><h3>WEBSITE</h3></div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Operational</h3>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-check-square fa-m"></i></h2>
                    </div>
                </div>
                <div class="card p-3 col">
                    <div class="card-img-top text-center"><h3>FORUM</h3></div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Operational</h3>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-check-square fa-m"></i></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom container mt-5">
            <div class="card-deck">
                <div class="card col p-3">
                    <div class="card-img-top text-center text-bold"><h3>LSGOV</h3></div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Operational</h3>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-check-square fa-m"></i></h2></div>
                </div>
                <div class="card col p-3">
                    <div class="card-img-top text-center"><h3>TEAMSPEAK</h3></div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Operational</h3>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-check-square fa-m"></i></h2>
                    </div>
                </div>
                <div class="card col p-3" >
                    <div class="card-img-top text-center"><h3>SUPPORT PAGE</h3></div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Operational</h3>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-check-square fa-m"></i></h2>
                    </div>
                </div>
                <div class="card col p-3">
                    <div class="card-img-top text-center"><h3>FACEINVADER</h3></div>
                    <div class="card-body">
                        <h4 class="card-title text-center">Non-Operational</h4>
                        <h2 class="card-text text-center" style="padding-top: 25px;"><i class="fas fa-times-circle"></i></h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="info-text container mt-4">
            <div class="container text-center p-4">
                <div class=" m-b-md">
                    You can use this as a reference to check whether any of our services are out of order.
                </div>
                <div class="m-b-md">
                    Check our <a href="https://discord.gg/ls-rp">Discord</a> for any updates
                </div>
            </div>
        </div>
    </body>
</html>
