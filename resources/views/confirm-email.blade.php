<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.menu')

    <div class="container">
        <div class="col-md-12 verification">
            <div class="col-sm-12 col-md-4"></div>
            <div class="col-sm-12 col-md-4">
                <p class="verification-thanks">Thank you for Registering.<p>
                <p class="verification-desc">We have sent an email to {Email} to verify your account. Please click the link in your email to continue.</p>
                <a href="/">
                    <button class="back-home"> Back to Home </button>
                </a>
            </div>
            <div class="col-sm-12 col-md-4"></div>
        </div>
    </div>

    @include('partials.footer')


</body>