<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.menu')

    <div class="container">
        <div class="video-bg">
            {{-- <video class="main-video" src="videos/mystical.mp4" autoplay="true" metadata muted="true" playsinline></video> --}}
            <img src="../assets/homeposters/amukan.jpg" class="video-posters">
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

                        <video id="gossVideo" class="embed-responsive-item video-js video-modal" controls preload="video-js vjs-default-skin vjs-big-play-centered" poster="" data-setup='{}'>
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
            <h1>Amukan</h1>
            <div class="date-time">
                <span class="date">2017</span>
                <span class="duration">90 Minute</span>
                <span class="category">Documentary</span>
                <span class="category">Amukan</span>
            </div>
            <div class="cast-director">
                <p class="cast">Cast: {Maximum 3 people}</p>
                <p class="director">Director: {Maximum 2 people}</p>
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
    </div>

    @include('partials.footer')

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