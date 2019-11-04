<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>
  <div class="search-box">
        <input class="search-txt" type="text" name=" " placeholder="Type to search"> </input>
        <a href="#" class="search-btn">
            <!--font-awesome-->
            <i class="fa fa-search fa-2x"></i>
        </a>
    </div>
    <div class="logo">
        <a href="../"><img src="../assets/logo.png"></a>
    </div>
    <input id="burger" type="checkbox" />

    <label class="burger-spans" for="burger">
        <span class="first"></span>
        <span class="second"></span>
        <span class="third"></span>
    </label>

    <nav>
        <div class="menu-details">
            <div class="col-md-12 manage-details-bg">
                <div class="col-md-8 edit-profile">
                    <i class="fa fa-pencil fa-2x"></i>
                    <span>Manage Profile</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="notification">
                    <i class="fa fa-bell fa-2x"></i>
                    <span>Notifications</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="vid-notif">
                    <img src="../assets/menu-vid1.png">
                </div>
                <div class="txt-notif">
                    <h3>Downloaded</h3>
                    <h5>Your video is successfully downloaded. 12.03 PM</h5>
                </div>
            </div>

<<<<<<< HEAD
    <div class="video-bg">
        {{-- <video class="main-video" src="videos/mystical.mp4" autoplay="true" metadata muted="true" playsinline></video> --}}
        <img src="../assets/homeposters/amukan.jpg" class="video-posters">
=======
            <div class="col-md-12">
                <div class="vid-notif">
                    <img src="../assets/menu-vid2.png">
                </div>
                <div class="txt-notif">
                    <h3>New Arrival</h3>
                    <h5>CiptaAsia Original : Hentian 10.35 AM</h5>
                </div>
            </div>

            <div class="col-md-12 mylist-border">
                <div class="my-list">
                    <i class="fa fa-check fa-2x"></i>
                    <span>My List</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="notification">
                    <span>App Setting</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="notification">
                    <span>Account</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="notification">
                    <span>Help</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="notification">
                    <span>Sign out</span>
                </div>
            </div>

        </div>
    </nav>

        <div class="video-bg">
        <video class="main-video" src="videos/mystical.mp4" autoplay="true" metadata muted="true" playsinline></video>

>>>>>>> b7293b340e3d78394a36d49d540eb0e95fc9fab7
        <div class="play-icon">
            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><img src="../assets/play-icon.png"></button>
        </div>

    </div>

        <!--Video pop up -->
    <div class="play-icon">
        <img src="assets/play-icon.png" data-toggle="modal" data-target="#homeVideo" class="img-responsive" onclick="playVid()">
    </div>
    <div class="modal fade" id="homeVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="video-close-btn" data-dismiss="modal" onclick="pauseVid()"><span class="x">&times;</span></button>
                <div class="">

                    <video id="gossVideo" class="embed-responsive-item video-js video-modal" controls preload="video-js vjs-default-skin vjs-big-play-centered" poster="videos/poster.png" data-setup='{}'>
                        <source src="videos/mystical.mp4" type='video/mp4'>
                        <track kind="captions" src="videos/examples/shared/example-captions.vtt" srclang="en" label="English">
                            <track kind="subtitles" src="videos/examples/shared/example-captions.vtt" srclang="en" label="English">
                    </video>
                </div>
            </div>
        </div>
    </div>


      <div class="curve-lines">
        <img class="desk-line" src="../assets/curved-desk.png">
        <img class="mob-line" src="../assets/curved-mob.png">
    </div>

    <div class="movie-type">
        <h1>Mangrove</h1>
        <div class="date-time">
            <span class="date">2017</span>
            <span class="duration">90 Minute</span>
            <span class="category">Documentary</span>
            <span class="category">Amukan</span>
        </div>
 
    </div>

    <div class="col-md-12 col-sm-12 movie-summary">
        <div class="videopage-route">
            <p class="pages-route">Home > Category_name > <span class="video-name">Video_name</span></p>
        </div>
        <h1 class="summary">Synopsis</h1>
        <p class="synopsis">Together with Malaysian Nature Society (MNS) of Pahang , around 100 volunteers which comprised of our employees & their family members, MNS representatives and members of the community planted 1,500 mangrove saplings, cleaned the beach and released some baby turtles at Pantai Chendor, Cherating.</p>
    </div>

    <div class="categories">
        <div class="titles">
            <h3>Similar</h3>
        </div>
        <section class="regular slider">
            <div>
                <img src="../assets/classics/Poster Film-70.jpg">
            </div>
            <div>
                <img src="../assets/classics/Poster Film-72.jpg">
            </div>
            <div>
                <img src="../assets/classics/Poster Film-73.jpg">
            </div>
            <div>
                <img src="../assets/classics/Poster Film-80.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-11.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-12.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-13.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-14.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-15.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-16.jpg">
            </div>
        </section>
    </div>

    <div class="categories">
        <div class="titles">
            <h3>Popular</h3>
        </div>

        <section class="regular slider">
            <div>
                <img src="../assets/popular/pop1.png">
            </div>
            <div>
                <img src="../assets/popular/pop2.png">
            </div>
            <div>
                <img src="../assets/popular/pop3.png">
            </div>
            <div>
                <img src="../assets/popular/pop4.png">
            </div>
            <div>
                <img src="../assets/popular/pop5.png">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-44.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-45.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-59.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-76.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-79.jpg">
            </div>
        </section>
    </div>

    <div class="footer col-md-12">
        <div class="col-md-12">
            <i class="fa fa-facebook fa-2x footer-icons"></i>
            <i class="fa fa-instagram fa-2x footer-icons"></i>
            <i class="fa fa-twitter fa-2x footer-icons"></i>
            <i class="fa fa-youtube fa-2x footer-icons"></i>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Audio and Subtitles</a></li>
                <li><a href="#">Media Centre</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
            </div>
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Audio Description</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Legal Notices</a></li>
            </div>
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Cookies Preferences</a></li>
            </div>
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Corporate Information</a></li>
            </div>
        </div>
        <div class="col-md-12 copyright">
            <h4>A Collaborative Effort with</h4>
            <img class="rtm" src="../assets/rtm-finas.png">
            <p>© 2019 Insight Malaysia, All Right Reserved</p>
        </div>
    </div>

    <!-- this slide should inherit the sizes attr from the parent slider -->
    <img data-lazy="http://placehold.it/350x300?text=6-350w" data-srcset="http://placehold.it/650x300?text=6-650w 650w, http://placehold.it/960x300?text=6-960w 960w">
    </div>
    </section>
    <script>
    var vid = document.getElementById("gossVideo");

    function playVid() {
        vid.play();
    }

    function pauseVid() {
        vid.pause();
    }
</script>

    @include('partials.scripts')


</body>

</html>