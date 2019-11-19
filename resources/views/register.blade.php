<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.menu')
    
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12">
                <div class="registration-form">
                    <form class="form-horizontal" method="" action="">
                        <p class="register-title">Register</p>
                        <div class="form-group name-sec">
                            <div class="">
                                <p>Name</p>
                                <input type="text" placeholder="Your Name" class="form-control signin-name" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group username-sec">
                            <div class="">
                                <p>Email</p>
                                <input type="email" placeholder="example@example.com" class="form-control signin-email" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group password-sec">
                            <p>Password</p>
                            <div class="">
                                <input id="password-field" placeholder="**********" type="password" class="form-control signin-pass" name="password">
                                <span  class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        <div class="">
                            <a href="dashboard.php">
                                <a href="confirm-email">
                                    <button class="register">Register</button>
                                </a>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>
    
    @include('partials.footer')

</body>
</html>