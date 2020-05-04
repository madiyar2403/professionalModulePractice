<!DOCTYPE HTML>
<html>
<head>
    <title>Professional Practice module</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body class="is-preload">

<!-- Nav -->
<nav id="nav">
    <ul class="container">
        <li><a href="#top">Home</a></li>
        <li><a href="#work">About Us</a></li>
        <li><a href="#portfolio">Main Page</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif
        </li>
        <li>
            @if (Route::has('register'))
                <div class="top-right links">
                    @auth
                    @else
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </li>
    </ul>
</nav>



<!-- Home -->
<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="col-3 col-5-large col-12-medium">
                <span class="image fit" style="float: right"><img src="images/prof1.jpg" alt="" /></span>
            </div>
            <div class="col-8 col-7-large col-12-medium">
                <header>
                    <h3>Professional Practice Module</h3>
                </header>
                <p>Website: <strong>profpractice.com</strong></p>
                <p>Email: <strong>info@profpractice.com</strong></p>
                <a href="#work" class="button large scrolly">Learn about what we do</a>
            </div>
        </div>
    </div>
</article>

<!-- Work -->

<article id="work" class="wrapper style2">
    <div class="container">
        <div style="padding:20px; margin-top:10px;" class="row shado-1">
            <div data-sr="enter left, hustle 40px" class="col-sm-6">
                <h3> <a>Info About Us</a></h3>
                <p style=" text-align:center; text-indent:18px;">
                    The website should ensure that the base of practice is maintained. Our website is a student internship tracking system. On our website there is information about the places of practical training, providing employers with information about students, as well as keeping records of practical training contracts, storing electronic reports on the course Practice.
                </p>


            </div>
        </div>
        <header>
            <h2>Our Services</h2>
            <p>Take a look at what we have are doing</p>
        </header>
        <div class="row aln-center">
            <div class="col-10 col-6-medium col-12-small">
                <section class="box style1">
                    <span class="icon featured fa-user inner-icon"></span>
                    <h3>INFORMATION ABOUT PROFESSIONAL PRACTICE</h3>
                    <p>Our main focus is on providing information about internships(Professional practice), providing employers with information about students.</p>
                </section>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box style1">
								<span class="icon solid featured fa-chalkboard-teacher">
								<h3>PRACTICE CONTRACTS</h3>
								<p>Keeping records of practice contracts.</p>
                </section>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box style1">
                    <span class="icon featured fa-list-alt inner-icon"></span>
                    <h3>REPORTS</h3>
                    <p>Electronic storage of progress reports Practice.</p>
                </section>
            </div>
        </div>
        <footer>
            <div style="padding:20px; margin-top:10px;" class="row shado-1">
                <div data-sr="enter left, hustle 40px" class="col-sm-6">
                    <h3> <a>What we are ?</a></h3>
                    <p style=" text-align:center; text-indent:18px;">
                        We are students of 3 course in IT university. This Lab work is part of SWD 5: Web Technologies course.
                    </p>

                    <h3> <a>Our Key Features ?</a></h3>
                    <p style=" text-align:center; text-indent:18px;">
                        The website should ensure that the base of practice is maintained. Our website is a student internship tracking system. On our website there is information about the places of practical training, providing employers with information about students, as well as keeping records of practical training contracts, storing electronic reports on the course Practice.
                    </p>
                    <h3>How can I contact You ?</h3>
                    <p>Just fill out the forms in contact us section, file your suggestions, enquires, complaints and we will get back to you in 24 hours time.</p>
                    <br>
                    <h3>How profpractice.com help me ?</h3>
                    <p>Thanks to our site, you can easily find information on Professional Practices, contracts, reports, as well as contact employers.</p>
                </div>
            </div>
            <a href="#portfolio" class="button large scrolly">Our Professional Practice Services</a>
        </footer>
    </div>
</article>

<!-- Portfolio -->
<article id="portfolio" class="wrapper style3">
    <div class="container">
        <header>
            <h2>Our Professional Practice Services:</h2>
        </header>
        <div class="row">
            <div class="col-6 col-4-medium col-12-small">
                <article class="box style2">
                    <a href="#" class="image featured"><img src="images/places.jpg" alt="" /></a>
                    <h3><a href="#">Places</a></h3>
                    <p>Information about internships(Professional Practice).</p>
                    <div class="course-detail-btn"> <a ui-sref="buy" >View More Details</a> <a ui-sref="continue"  style="float:right;color:red">Continue</a> </div>
                </article>
            </div>
            <div class="col-6 col-4-medium col-12-small">
                <article class="box style2">
                    <a href="#" class="image featured"><img src="images/database.jpg" alt="" /></a>
                    <h3><a href="#">Practice Database</a></h3>
                    <p>Database containing all practice information.</p>
                    <div class="course-detail-btn"> <a href="#" >View More Details</a> <a href="#"  style="float:right;color:red">Continue</a> </div>
                </article>
            </div>
            <div class="col-6 col-4-medium col-12-small">
                <article class="box style2">
                    <a href="#" class="image featured"><img src="images/students.jpg" alt="" /></a>
                    <h3><a href="#">Students</a></h3>
                    <p>Information about students.</p>
                    <div class="course-detail-btn"> <a ui-sref="buy" >View More Details</a> <a ui-sref="continue"  style="float:right;color:red">Continue</a> </div>
                </article>
            </div>
            <div class="col-6 col-4-medium col-12-small">
                <article class="box style2">
                    <a href="#" class="image featured"><img src="images/reports.jpg" alt="" /></a>
                    <h3><a href="#">Reports</a></h3>
                    <p>Electronic storage of progress reports Practice.</p>
                    <div class="course-detail-btn"> <a ui-sref="buy" >View More Details</a> <a ui-sref="continue"  style="float:right;color:red">Continue</a> </div>
                </article>
            </div>
            <div class="col-6 col-4-medium col-12-small">
                <article class="box style2">
                    <a href="#" class="image featured"><img src="images/contracts.jpg" alt="" /></a>
                    <h3><a href="#">Contracts</a></h3>
                    <p>Records of practice contracts.</p>
                    <div class="course-detail-btn"> <a ui-sref="buy" >View More Details</a> <a ui-sref="continue"  style="float:right;color:red">Continue</a> </div>
                </article>
            </div>
        </div>
        <footer>
            <a href="#contact" class="button large scrolly">Contact Us</a>
        </footer>
    </div>
</article>

<!-- Contact -->
<article id="contact" class="wrapper style4">
    <div class="container medium">
        <header>
            <h2>Contact Form</h2>
            <h4>How can I contact You ?</h4>
            <p>Just fill out the forms in contact us section, file your suggestions, enquires, complaints and we will get back to you in 24 hours time.</p>
            <br>
            <h4>How profpractice.com help me ?</h4>
            <p>Thanks to our site, you can easily find information on Professional Practices, contracts, reports, as well as contact employers.</p>
        </header>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {
                    lat: 43.235099,
                    lng: 76.909444
                };
                var grayStyles = [{
                    featureType: "all",
                    stylers: [{
                        saturation: -90
                    },
                        {
                            lightness: 50
                        }
                    ]
                },
                    {
                        elementType: 'labels.text.fill',
                        stylers: [{
                            color: '#ccdee9'
                        }]
                    }
                ];
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 43.235099,
                        lng: 76.909444
                    },
                    zoom: 9,
                    styles: grayStyles,
                    scrollwheel: false
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
        </script>
        <br>
        <div class="row">
            <div class="col-12">
                <form method="post" action="#">
                    <div class="row">
                        <div class="col-6 col-12-small">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-small">
                            <input type="text" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" id="subject" placeholder="Subject" />
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" a href="#"/></li>
                                <li><input type="reset" value="Clear Form" class="alt" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <hr />
                <h3>Social networks: </h3>
                <ul class="social">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                    <li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
                    <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                    <!--
                    <li><a href="#" class="icon solid fa-rss"><span>RSS</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span>Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-foursquare"><span>Foursquare</span></a></li>
                    <li><a href="#" class="icon brands fa-skype"><span>Skype</span></a></li>
                    <li><a href="#" class="icon brands fa-soundcloud"><span>Soundcloud</span></a></li>
                    <li><a href="#" class="icon brands fa-youtube"><span>YouTube</span></a></li>
                    <li><a href="#" class="icon brands fa-blogger"><span>Blogger</span></a></li>
                    <li><a href="#" class="icon brands fa-flickr"><span>Flickr</span></a></li>
                    <li><a href="#" class="icon brands fa-vimeo"><span>Vimeo</span></a></li>
                    -->
                </ul>
                <hr />
            </div>
        </div>
        <footer>
            <ul id="copyright">
                <li>All Rights Reserved &copy; profpractice.com | Designed &amp; Developed By Toktarbekov Madiyar and Tolebay Amirzhan 2020 ®</li>
            </ul>
        </footer>
    </div>
</article>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
