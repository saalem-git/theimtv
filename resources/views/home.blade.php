@extends('layout.master') @section('content')

<div class="video-bg">
    <a href="video">
        <video class="main-video" src="assets/video-bg.mp4" autoplay="true" metadata muted="true" playsinline></video>
        <div class="col-md-12 video-desc">
            <div class="col-md-6 col-sm-6">
                <h1>Mangrove.</h1>
                <p>Together with Malaysian Nature Society (MNS) of Pahang , around 100 volunteers which comprised of our employees & their family members, MNS representatives and members of the community planted 1,500 mangrove saplings, cleaned the beach and released some baby turtles at Pantai Chendor, Cherating.</p>
                <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                <i class="fa fa-star fa-2x"></i>
            </div>
            <div class="col-md-6 col-sm-6"></div>
        </div>
    </a>

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

</div>
<div class="curve-lines">
    <img class="desk-line" src="assets/curved-desk.png">
    <img class="mob-line" src="assets/curved-mob.png">
</div>

<div class="categories">
    <div class="titles">
        <h3>IM Originals</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/originals/iM - Posters (Docu)-03.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-2-02.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-09.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-07.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-08.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-2-04.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-06.jpg">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-05.jpg">
        </div>
        <div>
            <img src="assets/originals/Film-Poster-Original1.png">
        </div>
        <div>
            <img src="assets/originals/iM - Posters (Docu)-02.jpg">
        </div>
        <div>
            <img src="assets/originals/iM - Posters (Docu)-01.jpg">
        </div>
        <div>
            <img src="assets/originals/Film-Poster-Original3.png">
        </div>
        <div>
            <img src="assets/originals/Film-Poster-Original4.png">
        </div>
        <div>
            <img src="assets/originals/IM-Magazine-poster-04.jpg">
        </div>
        <div>
            <img src="assets/popular/pop2.png">
        </div>
        <div>
            <img src="assets/popular/iM - Posters (Docu)-04.jpg">
        </div>
        <div>
            <img src="assets/popular/pop4.png">
        </div>
        <div>
            <img src="assets/originals/Film-Poster-Original5.png">
        </div>
        <div>
            <img src="assets/originals/Film-Poster-Original6.png">
        </div>
        <div>
            <img src="assets/originals/Film-Poster-Original7.png">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Continue Watching</h3>
    </div>

    <section class="regular slider">
        <div>
            <img class="continue" src="assets/continue/cont1.png">
        </div>
        <div>
            <img class="continue" src="assets/continue/cont2.png">
        </div>
        <div>
            <img class="continue" src="assets/continue/cont3.png">
        </div>
        <div>
            <img class="continue" src="assets/continue/cont4.png">
        </div>
        <div>
            <img class="continue" src="assets/continue/cont5.png">
        </div>
        <div>
            <img class="continue" src="assets/classics/Poster Film-70.jpg">
        </div>
        <div>
            <img class="continue" src="assets/classics/Poster Film-72.jpg">
        </div>
        <div>
            <img class="continue" src="assets/classics/Poster Film-73.jpg">
        </div>
        <div>
            <img class="continue" src="assets/classics/Poster Film-80.jpg">
        </div>
        <div>
            <img class="continue" src="assets/engaging/Poster Film-11.jpg">
        </div>
        <div>
            <img class="continue" src="assets/engaging/Poster Film-12.jpg">
        </div>
        <div>
            <img class="continue" src="assets/engaging/Poster Film-13.jpg">
        </div>
        <div>
            <img class="continue" src="assets/engaging/Poster Film-14.jpg">
        </div>
        <div>
            <img class="continue" src="assets/engaging/Poster Film-15.jpg">
        </div>
        <div>
            <img class="continue" src="assets/engaging/Poster Film-16.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Trending Now</h3>
    </div>

    <section class="regular slider">
        <div id="video-click">
            <img src="assets/trending/trend1.png">
        </div>
        <div>
            <img src="assets/trending/trend2.png">
        </div>
        <div>
            <img src="assets/trending/trend3.png">
        </div>
        <div>
            <img src="assets/trending/trend4.png">
        </div>
        <div>
            <img src="assets/trending/trend5.png">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-35.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-11.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-12.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-14.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-16.jpg">
        </div>
    </section>
</div>

<div class="col-md-12 col-sm-12 videos-details">
    <!--    <img class="details-arrows" src="assets/arrow-down.png">
 -->
    <div class="col-md-6 col-sm-6">
        <img class="img-poster" src="assets/hentian.png">
        <span class="total-episodes">13 +</span>
    </div>
    <div class="col-md-6 col-sm-6">
        <h3>CIPTAASIA <span class="original">ORIGINAL</span></h3>
        <h1>HENTIAN</h1>
        <div class="play-mylist-btns">
            <a href="videos/mangrove.html" class="play-mylist"><i class="fa fa-play"></i> PLAY</a>
            <a href="videos/1.html" class="play-mylist"><i class="fa fa-plus"></i> MY LIST</a>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    </div>
</div>

<div class="categories">
    <div class="titles">
        <h3>Popular</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/popular/pop1.png">
        </div>
        <div>
            <img src="assets/popular/pop2.png">
        </div>
        <div>
            <img src="assets/popular/pop3.png">
        </div>
        <div>
            <img src="assets/popular/pop4.png">
        </div>
        <div>
            <img src="assets/popular/pop5.png">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-59.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-76.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-79.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Classics</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/classics/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-05.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-16.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-23.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-30.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-58.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-68.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-70.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-72.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-73.jpg">
        </div>
        <div>
            <img src="assets/classics/Poster Film-80.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Engaging</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/engaging/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-02.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/engaging/iM - Posters (Docu)-02.jpg">
        </div>
        <div>
            <img src="assets/engaging/IM-Magazine-poster-2-04.jpg">
        </div>
        <div>
            <img src="assets/engaging/iM - Posters (Docu)-01.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-04.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-05.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-06.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-08.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-09.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-10.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-11.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-12.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-14.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-16.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-17.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-18.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-19.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-20.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-21.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-22.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-23.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-24.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-25.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-28.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-30.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-31.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-32.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-33.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-34.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-35.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-36.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-38.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-39.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-40.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-42.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-43.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-46.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-47.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-48.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-49.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-50.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-51.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-53.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-59.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-61.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-63.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-66.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-69.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-74.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-75.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-76.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-79.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-80.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-82.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-83.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-84.jpg">
        </div>
        <div>
            <img src="assets/engaging/Poster Film-86.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Innovative</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/innovative/Poster Film-02.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-09.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-11.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-28.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-35.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/innovative/Poster Film-80.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Magical</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/magical/IM-Magazine-poster-2-04.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-02.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-09.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-11.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-17.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-20.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-22.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-25.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-28.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-39.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-40.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-43.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-46.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-49.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-50.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-59.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-79.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-80.jpg">
        </div>
        <div>
            <img src="assets/magical/Poster Film-83.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Mesmerising</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/mesmerizing/iM - Posters (Docu)-02.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/IM-Magazine-poster-10.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/IM-Magazine-poster-2-04.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/iM - Posters (Docu)-01.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-02.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-04.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-06.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-08.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-10.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-16.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-21.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-23.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-25.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-28.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-30.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-31.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-32.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-33.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-46.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-47.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-48.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-50.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-59.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-63.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-69.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-80.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-82.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-83.jpg">
        </div>
        <div>
            <img src="assets/mesmerizing/Poster Film-84.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Moments</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/moments/IM-Magazine-poster-10.jpg">
        </div>
        <div>
            <img src="assets/moments/IM-Magazine-poster-2-04.jpg">
        </div>
        <div>
            <img src="assets/moments/IM-Magazine-poster-05.jpg">
        </div>
        <div>
            <img src="assets/moments/IM-Magazine-poster-06.jpg">
        </div>
        <div>
            <img src="assets/moments/iM - Posters (Docu)-03.jpg">
        </div>
        <div>
            <img src="assets/moments/IM-Magazine-poster-09.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-04.jpg">
        </div>
        <div>
            <img src="assets/moments/iM - Posters (Docu)-02.jpg">
        </div>
        <div>
            <img src="assets/moments/iM - Posters (Docu)-01.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-02.jpg">
        </div>
        <div>
            <img src="assets/moments/iM - Posters (Docu)-04.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-04.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-05.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-06.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-08.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-11.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-12.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-14.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-16.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-18.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-19.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-20.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-21.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-22.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-23.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-25.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-28.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-30.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-31.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-32.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-33.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-34.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-35.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-36.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-38.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-39.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-43.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-46.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-47.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-48.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-51.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-53.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-61.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-63.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-66.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-69.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-74.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-75.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-76.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-80.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-82.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-83.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-84.jpg">
        </div>
        <div>
            <img src="assets/moments/Poster Film-86.jpg">
        </div>

    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Mystical</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/mystical/Poster Film-04.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-09.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-10.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-17.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-24.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-40.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-42.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-43.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-46.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-49.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-50.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-51.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-75.jpg">
        </div>
        <div>
            <img src="assets/mystical/Poster Film-79.jpg">
        </div>

    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Spectacular</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/spectacular/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-02.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-04.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-06.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-08.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-09.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-11.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-12.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-14.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-17.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-20.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-22.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-28.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-30.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-31.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-35.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-38.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-39.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-40.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-41.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-44.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-45.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-59.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-76.jpg">
        </div>
        <div>
            <img src="assets/spectacular/Poster Film-79.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Splendour</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/splendour/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/splendour/IM-Magazine-poster-2-04.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-18.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-33.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-34.jpg">
        </div>
        <div>
            <img src="assets/splendour/Poster Film-59.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Trove</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/trove/iM - Posters (Docu)-04.jpg">
        </div>
        <div>
            <img src="assets/trove/IM-Magazine-poster-10.jpg">
        </div>
        <div>
            <img src="assets/trove/IM-Magazine-poster-05.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-01.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-03.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-05.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-07.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-13.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-15.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-16.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-21.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-22.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-26.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-27.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-29.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-33.jpg">
        </div>
        <div>
            <img src="assets/trove/Poster Film-59.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Enriching</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/enriching/iM - Posters (Docu)-03.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-2-02.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-04.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-06.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-07.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-08.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-09.jpg">
        </div>
        <div>
            <img src="assets/enriching/IM-Magazine-poster-10.jpg">
        </div>
    </section>
</div>

<div class="categories">
    <div class="titles">
        <h3>Inspiring</h3>
    </div>

    <section class="regular slider">
        <div>
            <img src="assets/inspiring/iM - Posters (Docu)-01.jpg">
        </div>
        <div>
            <img src="assets/inspiring/IM-Magazine-poster-2-02.jpg">
        </div>
        <div>
            <img src="assets/inspiring/iM - Posters (Docu)-02.jpg">
        </div>
        <div>
            <img src="assets/inspiring/iM - Posters (Docu)-03.jpg">
        </div>
        <div>
            <img src="assets/inspiring/iM - Posters (Docu)-04.jpg">
        </div>
        <div>
            <img src="assets/inspiring/IM-Magazine-poster-04.jpg">
        </div>
        <div>
            <img src="assets/inspiring/IM-Magazine-poster-06.jpg">
        </div>
        <div>
            <img src="assets/inspiring/IM-Magazine-poster-07.jpg">
        </div>
        <div>
            <img src="assets/inspiring/IM-Magazine-poster-08.jpg">
        </div>
        <div>
            <img src="assets/inspiring/IM-Magazine-poster-10.jpg">
        </div>
    </section>
</div>
<script>
    var vid = document.getElementById("gossVideo");

    function playVid() {
        vid.play();
    }

    function pauseVid() {
        vid.pause();
    }
</script>
@endsection