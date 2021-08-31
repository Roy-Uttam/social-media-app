<!DOCTYPE html>
<html>
    <head>
        <title>FaceBook - The Social Network</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
            .login-form{
                background: rgba(255,255,255,1);
                padding: 10px 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
            }
            .main{
                min-height:100vh;
                padding:10% 0px;
            }
        </style>

    </head>
    <body>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="logo">
                            <h1>FaceBook</h1>
                        </div>
                    </div>
                    <div class="col-sm-3 text-center" >
                        <a type="submit" href="{{ route('home') }}" class="btn btn-primary">Signup</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="pull-left text-center col-sm-3">
                    </div>
                    <div class="pull-right col-sm-6 text-center">
                        <div class="login-form">
                            <p class="h3">Log in to FaceBook</p>
                            <form action="javascript:void(0);" method="post" style="max-width:400px;margin:0px auto;">
                                <div class="form-group">
                                    <input type="text" name="user_email" placeholder="Email Address" class="input-lg col-sm-12"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="New Password" name="pwd" class="input-lg col-sm-12"/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn btn-primary input-lg col-sm-12"/>
                                    <br/><br/><br/><br/>
                                    <a href="{{ route('home') }}">Signup for FaceBook</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; FaceBook 2021.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
