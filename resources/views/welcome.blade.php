<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
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
                margin-bottom: 30px;
            }

            .btn {
                  background-color: #4CAF50; /* Green */
                  border: none;
                  color: white;
                  padding: 16px 32px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
                  margin: 4px 2px;
                  -webkit-transition-duration: 0.4s; /* Safari */
                  transition-duration: 0.4s;
                  cursor: pointer;
                }

            .btn {
                  background-color: white; 
                  color: black; 
                  border: 2px solid #4CAF50;
                }

            .btn:hover {
                  background-color: #4CAF50;
                  color: white;
                }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Code Test

                    <div class="col-3">
                        <a href="{{ route("data_entry") }}"><button class="btn btn-3d btn-block btn-dirtygreen"><i class="glyphicon glyphicon-th-large"></i>Add Data</button></a>

                        <a href="{{ route("data_index") }}"><button class="btn btn-3d btn-block btn-dirtygreen"><i class="glyphicon glyphicon-th-large"></i>All Data</button></a>
                    </div>
                </div>

                <div class="links">
                    
                </div>
            </div>
        </div>
    </body>
</html>
