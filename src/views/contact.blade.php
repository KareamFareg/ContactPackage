{{--<!DOCTYPE HTML>--}}

{{--<html>--}}
{{--<head>--}}
{{--      <meta charset="UTF-8">--}}
{{--    <title>Contact Us</title>--}}
{{--</head>--}}
{{--<style>--}}
{{--    h1{--}}

{{--    }--}}
{{--    form{--}}
{{--        text-align: center;--}}
{{--    }--}}
{{--</style>--}}
{{--<body>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <h1 >You Can Send any Message To Admin</h1>--}}
{{--                <form action="{{route('contact')}}" method="post">--}}
{{--                    <label>Name</label><input type="text" class="name" placeholder="Type Your name " name="name" autocomplete="">--}}
{{--                    <label>Message</label><textarea  class="message" name="message" placeholder="Type your Message"></textarea>--}}
{{--                    <label>Email</label><input type="email" name="email" class="email" placeholder="ex:example@example.com" autocomplete="">--}}
{{--                    <input type="submit" value="Send">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--</body>--}}
{{--</html>--}}


<!doctype html>
<html lang="en">
<head>
    <title>Contact Form 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('contacts/assets/css/style.css')}}">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> Cairo, Egypt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1200558649</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="karimshrief222@gmail.com">karimshrief222@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="https://kaream-store.000webhostapp.com/">My Portfolio</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contact Us</h3>

                                <form action="{{route('contact')}}" method="post"  class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting" style="color: #1e7e34"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">

                            <div class="info-wrap w-100 p-5 img" style="background-image: url({{asset('contacts/assets/images/img.jpg')}})">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('contacts/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('contacts/assets/js/popper.js')}}"></script>
<script src="{{asset('contacts/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('contacts/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('contacts/assets/js/main.js')}}"></script>

</body>
</html>

