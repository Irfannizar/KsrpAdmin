<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registerform/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="registerform/css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="registerform/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Event Registration</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="fname" id="fname" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="lname" id="lname" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">KSRP Region :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="wt">Wilayah Tengah</option>
                                        <option value="wu">Wilayah Utara</option>
                                        <option value="wse">Wilayah Selatan</option>
                                        <option value="wsb">Wilayah Sabah</option>
                                        <option value="wsr">Wilayah Sarawak</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">KSRP ID :</label>
                                <input type="text" name="ksrp" id="" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Petronas ID (Email) :</label>
                            <input type="text" name="email" id="email">
                        </div>
                       
                        <div class="form-submit">
                            
                            <input type="submit" value="CHECKOUT" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="registerform/vendor/jquery/jquery.min.js"></script>
    <script src="registerform/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>