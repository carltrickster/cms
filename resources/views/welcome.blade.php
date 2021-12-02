<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Get Away</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f1f1f1;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-repeat: repeat-x;
            }

            h1 {
  text-align: center;
  text-transform: uppercase;
  color: #F0FFFF;
  text-shadow: 2px 2px
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
                position: absolute;
  top: 8px;
  right: 16px;
            }

            .header {
                background-image: linear-gradient(to bottom right, #33FF98, #41A9A5);
  padding: 8px;
  text-align: left;
  width: 1500px;
  margin: auto;

}



        </style>
    </head>
    <body>
    <div class="header">
    
    <h1>Get Away Vacation</h1>
  </div>
        <div class="flex-center position-ref full-height">
            

           
                <img src="/images/bora.jpg" alt="Cinque Terre" width="100%" height="590px" />
                <div class="title m-b-md">
                   
                </div>

                <div class="links">
                    
                    <a href="{{ route('Getaway.Registrationform') }}"><button type="submit"><h5>Book An Appointment</h5></button></a>
                </div>
            </div>
        </div>
    </body>
</html>
