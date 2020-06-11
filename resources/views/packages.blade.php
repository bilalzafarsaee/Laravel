<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Packages</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

            .m-b-md {
                margin-bottom: 30px;
            }
            thead td {
                background-color: #ff6e65;
            }
            thead td b {
                font-weight: 700;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid p-5">
            <h2 class="text-center mb-3">Form Submission Direct</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action=" {{ route('package.create') }} " method="post" dusk="package-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Package Name*</label>
                            <input type="text" name="name" id="name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="price">Package Price*</label>
                            <input type="text" name="price" id="price" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <button dusk="form-submit" type="submit" id="form-submit" class="btn btn-success w-50 float-right form-submit"> Submit </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <tr>
                                <td><b>Name</b></td>
                                <td><b>Price</b></td>
                            </tr>
                        </thead>
                        @foreach($package as $pc)
                        <tr>
                            <td>{{ $pc->name }}</td>
                            <td>{{ $pc->price }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
