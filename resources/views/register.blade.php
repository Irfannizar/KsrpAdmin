<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Form</title>
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">
    
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('post-register')}}" method="POST" id="regForm">
                                         {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">Full Name</label>
                                                <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Enter Full Name" required />
                                                @if ($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span>
                                                @endif  
                                                </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email address" required />
                                                            @if ($errors->has('email'))
                                                                <span class="error">{{ $errors->first('email') }}</span>
                                                            @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputBudgetAllocate">Budget Allocate</label>
                                                            <input class="form-control py-4" id="inputBudgetAllocate" type="int" name="budget_allocate" placeholder="Enter budget allocate on this region" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                            <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" required/>
                                                            @if ($errors->has('password'))
                                                            <span class="error">{{ $errors->first('password') }}</span>
                                                            @endif
                                                    </div>
                                                        <div class="form-group mt-4 mb-0">
                                                            <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                                                        </div>
                                        </form>
                                        </div>
                                            <div class="card-footer text-center">
                                                <div class="small"><a href="{{url('login')}}">Have an account? Go to login</a></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
    </body>
</html>