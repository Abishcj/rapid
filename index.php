<?php
include "./header.php";
?>

<style>
    .section-grid {
        /* height: 100vh; */
        /* background-color: cornsilk; */
        background-color: floralwhite;
    }

    .grid-col {
        width: 100%;
        /* min-height: 150px; */
        background-color: #ccc;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 5px darkgoldenrod;
        border-radius: 20px;
        height: 100%;
        transition: all .4s ease-in-out;
    }

    .grid-col img {
        border-radius: 20px;
        object-fit: cover;
        height: 100%;
        width: 100%;
        transition: all .4s ease-in-out;
        border: none;
    }

    .grid-col.grid-1,
    .grid-col.grid-4 {
        height: 140px;

    }

    .grid-col.grid-2,
    .grid-col.grid-5 {
        height: 140px;

    }

    .grid-col.grid-14,
    .grid-col.grid-15,
    .grid-col.grid-16 {
        height: 178px;

    }

    .grid-col.grid-3 {
        height: 256px;

    }

    .grid-col.grid-6,
    .grid-col.grid-11,
    .grid-col.grid-12 {
        height: 100px;

    }

    .grid-col.grid-8,
    .grid-col.grid-13 {
        height: 140px;

    }

    .grid-col.grid-10 {
        height: 179px;
    }

    .grid-col:hover {
        transform: translateY(2px);
        box-shadow: 0 0 18px darkgoldenrod;
    }

    .grid-col img:hover {
        opacity: 1;
    }

    .grid-col img:hover+span {
        opacity: 1;
    }

    .grid-col.grid-15 img {
        object-position: -47px;
    }


    .grid-overlay {
        top: 0;
        left: 0;
        /* background-color: #007bff; 

        background-color: #ace8fbd9;*/
        background-color:none;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        border-radius: 20px;
        border: 0.25rem solid white;
        transition: all .4s ease-in-out;
        overflow: auto;
        
        


    }

   /* @keyframes mymove{
        from{
            opacity: 0;
            background-color:;
        }
        to{
            opacity: 1;
            


        }
    }*/

    /*.first{
        animation:mymove 3s 1s infinite ;
        
        animation-timing-function:linear;
        animation-iteration-count:infinite;

    }
    @keyframes mymove{
        from{
            opacity:0;
            

        }
        to{
            opacity:1;
            background-color:white;

            

        }
    }
    .second{
        animation:secondmove 3s 3.1s infinite ;
        animation-timing-function:linear;
        animation-iteration-count:1;
        

    }
    @keyframes secondmove{
        from{
            opacity:0;
            

        }
        to{
            opacity:1;
            background-color:white;

            

        }
    }
    .third{
        animation:secondmove 3s 6s infinite ;
        animation-timing-function:linear;
        animation-iteration-count:1;
        

    }
    @keyframes thirdmove{
        from{
            opacity:0;
            

        }
        to{
            opacity:1;
            background-color:white;

            

        }
    }*/



















    .grid-overlay .box-heading {
        font-size: 16px;
        text-align: center;
        padding: 10px;
        color: navy;
        ;
    }

    /*.item{
        width: 500px;
        height:600px;
        
    }
    .owl-carousel {
    display: flex;
    object-fit: cover;
    max-width: initial;
}*/
    .section-main-p {
        width: 480px;

    }
</style>
<section class="section-hero">
    <div class="container-lg container-fluid mx-auto text-center">
        <div class="row">
            <div class="col-md-3 position-relative p-0 my-auto text-left left-div">
                <img src="./assets/images/left_img_1.jpeg" alt="" class="img-fluid w-100 h-50 img-left-1">
                <br>
                <img src="./assets/images/left_img_2.jpeg" alt="" class="img-fluid w-100 h-50 img-left-2">
            </div>
            <div class="col px-0 center-div">
                <div class="container-fluid text-center px-0">
                    <div class="row mx-auto">
                        <div class="col-md-12 mx-auto">
                            <h1 class="h1-explore">Explore Multiple Careers
                            </h1>
                        </div>
                    </div>
                    <div class="row my-auto w-100 mx-auto">
                        <div class="col-md-5 mx-auto my-auto d-md-flex">
                            <img src="./assets/images/gif_img.gif" alt="" class="img-fluid gif-img" width="160">
                        </div>
                        <div
                            class="col-md-5 mx-auto my-auto d-flex justify-content-center align-items-center col-video">
                            <h4 class="heading-mute">HOW IT WORKS</h4>
                            <div class="bg-light rounded-lg p-0 video-play-btn">
                                <div class=" rounded-lg d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-play text-white"></i></span>
                                </div>
                            </div>

                            <div class="my-modal-container">
                                <div class="my-modal position-relative text-white">
                                    <span class="position-absolute close-btn">
                                        <i class="fa fa-close pr-2"></i><small>Close</small>
                                    </span>
                                    <iframe src="https://www.youtube.com/embed/ZUG9qYTJMsI" frameborder="0" width="100%"
                                        height="100%" class="rounded-lg" allowfullscreen></iframe>
                                </div>
                            </div>
                            <h4 class="heading-mute text-truncate"><small>Psss... Yea it's on mute</small></h4>
                        </div>
                    </div>
                    <div class="row py-5 mx-auto">
                        <div class="col px-0">
                            <p class="center-para">RapidUplifter lets you spend time with a proffessional of your
                                choice to see
                                your
                                future career in action live - Watch, feel, get the pros cons and then decide if
                                you
                                want to pursue that career</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 p-0 my-auto text-right right-div">
                <img src="./assets/images/right_img_1.jpg" alt="" class="img-fluid w-100 h-50 img-right-1">
                <br>
                <img src="./assets/images/right_img_2.jpeg" alt="" class="img-fluid w-100 h-50 img-right-2">
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container container-steps">
        <div class="row position-relative">
            <div class="col-auto mx-auto text-center" style="border-radius: 0 0 50% 50%;">
                <h3 class="alert mb-5 mt-3 alert-secondary rounded-pill border-0 steps-header">3 Easy Steps</h3>

            </div>
            <div class="my-arrow mt-4">
                <span class="border-warning"></span>
                <span class="border-warning"></span>
                <span class="border-warning"></span>
            </div>
        </div>
        <div class="row pt-2 mx-auto">
            <div class="col-md-4 text-center">
                <img src="./assets/images/step1.png" alt="" class="img-fluid img-steps">
                <div class="py-3">
                    <a href="" class="btn btn-warning">Step 1</a>
                </div>
                <p class="py-4">Select a career you want</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="./assets/images/step2.png" alt="" class="img-fluid img-steps">
                <div class="py-3">
                    <a href="" class="btn btn-warning">Step 2</a>
                </div>
                <p class="py-4 px-5">We setup a meeting with the professional who is currently working in that field
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="./assets/images/step3.png" alt="" class="img-fluid img-steps">
                <div class="py-3">
                    <a href="" class="btn btn-warning">Step 3</a>
                </div>
                <p class="py-4 px-5">Enjoy your tour, ask questions, get a feel for the job</p>
            </div>
        </div>
</section>

<section class="bg-light ">
    <div class="container-lg mx-auto pb-4">
        <div class="row">
            <div class="col text-center text-warning alert m-0 pb-0">
                <h3 class="m-0">WHY GO WITH RAPID</h3>
            </div>
        </div>
        <div class="row text-justify">
            <div class="col-md-3 d-flex py-3 px-2">
                <div
                    class="d-flex align-items-center justify-content-center my-auto shadow h-100 rounded-lg p-3 w-100 bg-white">
                    <img src="./assets/images/business_img.png" alt="" class="img-fluid p-2 support-img">
                    <p class="my-auto mx-auto" style="font-size: 13px !important;">We have personally met and
                        verified every business</p>
                </div>
            </div>
            <div class="col-md-3 d-flex py-3 px-2">
                <div
                    class="d-flex align-items-center justify-content-center my-auto shadow h-100 rounded-lg p-3 w-100 bg-white">
                    <img src="./assets/images/personalised_img.png" alt="" class="img-fluid p-2 support-img">
                    <p class="my-auto mx-auto support-p">One to one personalised sessions
                        only</p>
                </div>
            </div>
            <div class="col-md-3 d-flex py-3 px-2">
                <div
                    class="d-flex align-items-center justify-content-center my-auto shadow h-100 rounded-lg p-3 w-100 bg-white">
                    <img src="./assets/images/education_img.png" alt="" class="img-fluid p-2 support-img">
                    <p class="my-auto mx-auto support-p">Education support - let the pros
                        tell you what you need to study</p>
                </div>
            </div>
            <div class="col-md-3 d-flex py-3 px-2">
                <div
                    class="d-flex align-items-center justify-content-center my-auto shadow h-100 rounded-lg p-3 w-100 bg-white">
                    <img src="./assets/images/mentorship_img.png" alt="" class="img-fluid p-2 support-img">
                    <p class="my-auto mx-auto support-p">Mentorship - you will have a mentor even before
                        you start your career</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-main">
    <div class="container ">
        <div class="row">
            <div class="col-md-5 mx-auto  p-0">
                <!-- <img src="./assets/img/accountant.jpg" alt="" class="img-fluid"> 
                <div class="owl-carousel owl-theme owl-carousel-main">
                    <div class="item">
                        <img src="./assets/images/Image 1 for Change 2 Steve Jobs.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/Stressed man Image 2 change 2.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/Student Image 3 change 2.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                </div>-->

                <div class="owl-carousel owl-theme owl-carousel-main pt-5">
                    <div class="item">
                        <img src="./assets/images/carousel_img_1.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/carousel_img_2.JPG" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/carousel_img_3.png" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                </div>

                <!-- Slider main container -->
                <!-- <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="./assets/img/accountant.jpg" alt="" class=""></div>
                            <div class="swiper-slide"><img src="./assets/img/What-Does-An-Auto-Mechanic-Do.png" alt=""
                                    class="">
                            </div>
                            <div class="swiper-slide"><img src="./assets/img/chef.JPG" alt="" class=""></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>


                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="./assets/img/accountant.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="./assets/img/What-Does-An-Auto-Mechanic-Do.png" alt="">
                            </div>
                            <div class="swiper-slide"><img src="./assets/img/chef.JPG" alt=""></div>
                        </div>
                    </div> -->
            </div>
            <div class="col text-justify ml-0 ml-md-5 main-carousel-col py-3">
                <!--<h5 class="text-left">Take a tour of your future career - watch it live in action.</h5>
                <p class="section-main-p"><b>Steve jobs said </b> <small>“The only way to do great work is to love what
                        you do. If you haven't found it yet, keep looking. Don't settle.”
                        But how do you find what you love without experiencing it ? That is exactly what we are here to
                        solve.
                        Meet, see, hear and feel your future career. Ask questions - how many hours do you work? Does it
                        include weekends? What about the pay? What kind of career growth am I looking at?</small>
                </p>
                <ul type="disc">
                    <li>Thinking of changing your career but not sure what to do ?</li>
                    <li>Just left school and dont know what to do next?</li>
                    <li>Want to start a side hustle for some extra cash? But how do I market, get clients, bill them?
                    </li>
                </ul>-->
                <h5 class="text-left">Take a tour of your future career - watch it live in action.</h5>
                <p class="section-main-p"><small>Career tours replicate a real-life 9 to 5 job so that you get to know
                        the
                        pros and cons
                        beforehand. Learn what the job entails. Never again get stuck on a job you hate or spend
                        thousands on a course to realize you won't fit into that career.</small></p>


                <div class="d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center tour-lock-open-span">
                        <i class="fa fa-lock-open fa-2x text-orange"></i>
                    </span>
                    <p class="my-auto" data-para-index="0">No applications or experience required</p>
                </div>

                <div class="d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center tour-circle-check-span">
                        <i class="fa fa-circle-check fa-regular fa-2x text-orange"></i>
                    </span>
                    <p class="my-auto" data-para-index="1"> Verified Australian Businesses</p>
                </div>

                <div class="d-flex align-items-center ">
                    <span class="d-flex align-items-center justify-content-center tour-eye-span">
                        <i class="fa fa-eye fa-2x fa-regular text-orange"></i>
                    </span>
                    <p class="my-auto" data-para-index="2">Watch and decide if this career is really for you</p>
                </div>

                <div class="d-flex mt-3">
                    <a href="" class="btn-warning btn-view-tours align-items-center d-flex justify-content-center">
                        View Tours
                        <i class="fa fa-arrow-right-long pl-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="second-carousel">
    <div class="container">
        <div class="row">
        
        <div class="col text-justify  md-6 main-carousel-col py-5 pl-md-0">
        <!--<h5 class="text-left">Take a tour of your future career - watch it live in action.</h5>-->
                <p class="section-main-p"><b>Steve jobs said  “The only way to do great work is to love what
                        you do. If you haven't found it yet, keep looking. Don't settle.”</b>
                        <small>But how do you find what you love without experiencing it ? That is exactly what we are here to
                        solve.
                        Meet, see, hear and feel your future career. Ask questions - how many hours do you work? Does it
                        include weekends? What about the pay? What kind of career growth am I looking at?</small>
                </p>
                <!--<ul type="disc" class="pl-md-3 py-2">
                    <li>Thinking of changing your career but not sure what to do ?</li>
                    <li>Just left school and dont know what to do next?</li>
                    <li>Want to start a side hustle for some extra cash? But how do I market, get clients, bill them?
                    </li>
                </ul>-->
                <div class="d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center tour-eye-span  ">
                    <i class="fa-2x text-orange fa-sharp fa-solid fa-face-meh"></i>
                   
                    </span>
                    <p  class="my-auto " data-para-index="0" > Thinking of changing your career but not sure what to do ? </p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center tour-eye-span" >
                    <i class="fa-solid fa-2x fa-school-lock text-orange"></i>
                   
                    </span>
                    <p class="my-auto"data-para-index="1" > Just left school and dont know what to do next? </p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center tour-eye-span" >
                    <i class=" fa-2x text-orange fa-solid fa-sack-dollar"></i>
                    </span>
                    <p class="my-auto" data-para-index="2" > Want to start a side hustle for some extra cash? But how do I market, get clients, bill them? </p>

                </div>

        </div>
        <div class="col-md-5   p-0 py-5">
       
        <div class="owl-carousel owl-theme owl-carousel-main ">
                    <div class="item">
                        <img src="./assets/images/Image 1 for Change 2 Steve Jobs.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/Stressed man Image 2 change 2.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/Student Image 3 change 2.jpg" alt=""
                            class="h-100 w-100 img-fluid carousel-image">
                    </div>
                </div>


        </div>

        </div>
    </div>
</section>


<section class="pb-5 card-section">
    <div class="container">
        <div class="row pt-3 mx-auto">
            <div class="col-auto mx-auto text-center">
                <h2 class="alert card-section-header">Let's Explore - Pick a career tour
                    to start
                </h2>
                <div class="my-arrow mt-0" style="margin-top: 40px !important;">
                    <span class="border-warning"></span>
                    <span class="border-warning"></span>
                    <span class="border-warning"></span>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 mx-auto mb-3 p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/chef.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>CHEF SAMUEL JACKSON</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>2
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>250</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto mb-3 p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/carpenter.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>CARPENTER PETER JONES</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <span class="d-flex align-items-center hour-span">
                                <i class="fa fa-clock-rotate-left pr-2"></i>2.5 Hours</span>
                            <span class="d-flex align-items-center dollar-span">
                                <i class="fa fa-sack-dollar pr-2"></i>200</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto mb-3 p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/influencer.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>INFLUENCER SARAH DAVIES</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>1
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto mb-3 p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/model.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>MODEL CLARAH JANE</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>1.5
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mx-auto p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/youtuber.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>YOUTUBE REVIEWER JASON DUB</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>1.5
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>150</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/Electrician.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>ELECTRICIAN MARK ZOCA</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between mt-md-4 mt-auto">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>3
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>300</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/plumber.webp" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>PLUMBER DARYL SEED</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between mt-md-4 mt-auto">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>3
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>200</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto p-2">
                <div class="card h-100 my-card mx-auto">
                    <div class="card-body p-0">
                        <img src="./assets/images/photographer.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer d-flex flex-column bg-white">
                        <div class="text-center">
                            <p>PHOTOGRAPHER MELISSA DOUGLAS</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <span class="d-flex align-items-center hour-span"><i
                                    class="fa fa-clock-rotate-left pr-2"></i>2
                                Hours</span>
                            <span class="d-flex align-items-center dollar-span"><i
                                    class="fa fa-sack-dollar pr-2"></i>250</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="grid-col grid-1 position-relative">
                            <img src="./assets/images/grid-1.jpg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay">
                                <h4 class="box-heading">4.7 million Aussies willing to switch jobs</h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="grid-col grid-2">
                            <img src="./assets/images/grid-2.jpg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay ">
                                <h4 class="box-heading">On an average 857,000 people have two or more jobs (ABS)</h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="grid-col grid-3">
                            <img src="./assets/images/1/grid-3.jpeg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay ">
                                <h4 class="box-heading">The broader the range of workplace experiences,
                                    the more options appear to open up for young people. </h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-3 pl-md-0">
                <div class="row my-0 my-md-3">
                    <div class="col-md-12">
                        <div class="grid-col grid-4">
                            <img src="./assets/images/1/grid-4.jpeg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay ">
                                <h4 class="box-heading">72% Australians unhappy with their current jobs</h4>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-4 pr-3 pr-md-0">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="grid-col grid-5">
                                    <img src="./assets/images/grid-5.jpeg" alt="" class="img-fluid img-thumbnail">
                                    <span class="position-absolute grid-overlay ">
                                        <h4 class="box-heading">What to do and how to do it? </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mb-md-0">
                            <div class="col-md-12">
                                <div class="grid-col grid-6">
                                    <img src="./assets/images/grid-6.jpg" alt="" class="img-fluid img-thumbnail">
                                    <span class="position-absolute grid-overlay">
                                        <h4 class="box-heading">You decide what career you want. Try before you buy
                                        </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="grid-col grid-7">
                            <img src="./assets/images/grid-7.jpg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay ">
                                <h4 class="box-heading">Almost one-third of businesses are having difficulties finding
                                    suitable staff,
                                    according to the Australian Bureau of Statistics </h4>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-8 pr-3 pr-md-0 mb-3 mb-md-0">
                        <div class="grid-col grid-8">
                            <img src="./assets/images/grid-8.jpg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay">
                                <h4 class="box-heading">Almost one-third of businesses are having difficulties finding
                                    suitable staff,
                                    according to the Australian Bureau of Statistics </h4>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid-col grid-9">
                            <img src="./assets/images/grid-9.jpg" alt="" class="img-fluid img-thumbnail">
                            <span class="position-absolute grid-overlay">
                                <h4 class="box-heading">Now is the time to change - lets make it happen. </h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 pl-3 pl-md-0"">
                <div class=" row my-0 my-md-3">
                <div class="col-md-12">
                    <div class="grid-col grid-10">
                        <img src="./assets/images/grid-10.jpeg" alt="" class="img-fluid img-thumbnail">
                        <span class="position-absolute grid-overlay">
                            <h4 class="box-heading">Never again get stuck in a career you hate. </h4>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <div class="grid-col grid-11">
                        <img src="./assets/images/1/grid-11.jpeg" alt="" class="img-fluid img-thumbnail">
                        <span class="position-absolute grid-overlay">
                            <h4 class="box-heading">Just passed out of school not sure what to do next? </h4>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <div class="grid-col grid-12">
                        <img src="./assets/images/1/grid-12.jpeg" alt="" class="img-fluid img-thumbnail">
                        <span class="position-absolute grid-overlay">
                            <h4 class="box-heading">You decide what career you want. Try before you buy </h4>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <div class="grid-col grid-13">
                        <img src="./assets/images/1/grid-13.jpeg" alt="" class="img-fluid img-thumbnail">
                        <span class="position-absolute grid-overlay">
                            <h4 class="box-heading">Never again get stuck in a career you hate. </h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 pl-3 pl-md-0"">
                <div class=" row my-0 my-md-3">
            <div class="col-md-12">
                <div class="grid-col grid-14">
                    <img src="./assets/images/grid-14.jpg" alt="" class="img-fluid img-thumbnail">
                    <span class="position-absolute grid-overlay ">
                        <h4 class="box-heading">Now is the time to change - lets make it happen. </h4>
                    </span>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="grid-col grid-15">
                    <img src="./assets/images/grid-15.jpg" alt="" class="img-fluid img-thumbnail">
                    <span class="position-absolute grid-overlay">
                        <h4 class="box-heading">Nearly half (47%) of business leaders believe the
                            pandemic has increased the skills shortage in Australia </h4>
                    </span>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="grid-col grid-16">
                    <img src="./assets/images/grid-16.jpeg" alt="" class="img-fluid img-thumbnail">
                    <span class="position-absolute grid-overlay ">
                        <h4 class="box-heading">You decide what career you want. Try before you buy </h4>
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- 
    <span class="text-warning" style="
    font-size: x-large;
"><i class="fa-solid fa-star-half-stroke"></i></span>
 -->
<section class="review-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center d-flex justify-content-center align-items-center star-div">
                <span class="text-warning star-span-1">
                    <i class="fa-solid fa-star-half-stroke"></i>
                </span>
                <span class="text-warning star-span-2">
                    <i class="fa-solid fa-star-half-stroke"></i>
                </span>
                <span class="text-warning star-span-3">
                    <i class="fa-solid fa-star-half-stroke"></i>
                </span>

                <h1 class="alert text-warning mb-0">Customer Stories</h1>

                <span class="text-warning star-span-3">
                    <i class="fa-solid fa-star-half-stroke"></i>
                </span>
                <span class="text-warning star-span-2">
                    <i class="fa-solid fa-star-half-stroke"></i>
                </span>
                <span class="text-warning star-span-1">
                    <i class="fa-solid fa-star-half-stroke"></i>
                </span>
            </div>
        </div>
        <div class="row text-white pt-3 mx-auto">
            <div class="col-md-4 mx-auto w-100 h-100">
                <div class="position-relative">
                    <img src="./assets/images/customer_1.jpg" alt=""
                        class="img-fluid mx-auto w-100 h-100 customer-img-1">
                    <span class="position-absolute img-overlay">
                        <h4 class="btn btn-warning">Cliff</h4>
                    </span>
                </div>
                <h4 class="text-warning alert mb-0">Cliff</h4>
                <p class="alert">After finishing school I was not sure what to do. I didnt want to spend thousands
                    on a university
                    degree only to realise I didnt like it. Nor did I want to end up with a dead end job. Rapid
                    Uplifter helped me try different careers and I picked what I liked. </p>
            </div>
            <div class="col-md-4 mx-auto w-100 h-100">
                <div class="position-relative">
                    <img src="./assets/images/customer_2.jpg" alt=""
                        class="img-fluid mx-auto w-100 h-100 customer-img-2">
                    <span class="position-absolute img-overlay">
                        <h4 class="btn btn-warning">Amanda</h4>
                    </span>
                </div>
                <h4 class="text-warning alert mb-0">Amanda</h4>
                <p class="alert">I love my job but I still wanted to make some extra money. I was not sure how to go
                    about it. I was good at pottery can I use that? Where do I start? Rapid Uplifter introduced me
                    to someone who had been doing this and a quick tour is all I needed to get started.</p>
            </div>
            <div class="col-md-4 mx-auto w-100 h-100">
                <div class="position-relative">
                    <img src="./assets/images/customer_3.jpg" alt=""
                        class="img-fluid mx-auto w-100 h-100 customer-img-3">
                    <span class="position-absolute img-overlay">
                        <h4 class="btn btn-warning">Marzebo</h4>
                    </span>
                </div>
                <h4 class="text-warning alert mb-0">Marzebo</h4>
                <p class="alert">I was tired of working and wanted to start my own thing. I tried calling a few
                    businesses in my field but they were all busy. I just wanted to know how much money was needed
                    and the legal stuff. Rapid UPlifter helped me out and now my business is already 6 months old.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light pb-3">
    <div class="container">
        <div class="row mx-auto py-4">
            <div class="col-md-12 mx-auto text-center text-warning">
                <h1 class="faq-header">Frequently Asked Questions</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container-fluid p-0 m-0">
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq1"
                                type="button" data-target="#faq1">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Are all businesses legit?</p>
                                    <a href="#faq1"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq1">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq1">
                                <div class="card-body rounded-pill">
                                    <p class="font-EurostileLTStdMedium"><small>Rapid team has painstakingly handpicked
                                            businesses that have high standards in
                                            terms of service, user experience and customer relationship. We have also
                                            ensured they meet all government requirements such as ABN, licenses etc. in
                                            their relevant fields.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq3"
                                type="button" data-target="#faq3">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What about privacy?
                                    </p>
                                    <a href="#faq3"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq3">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq3">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        We respect your privacy and your data. We do not sell your information to any
                                        advertisers or educational institutes. In fact, we have gone to the point of not
                                        even storing it. If you don’t want it we will delete all your personal info
                                        (except for
                                        the ones that are legally required) from our servers.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq5"
                                type="button" data-target="#faq5">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Can I land a job? </p>
                                    <a href="#faq5"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq5">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq5">
                                <div class="card-body rounded-pill">
                                    <p class="font-EurostileLTStdMedium"><small>Even though our tours are geared towards
                                            providing career insights there are
                                            chances you might end up with an apprenticeship or who knows even a job.
                                            This
                                            depends on the tour provider thought but if you can get one then go right
                                            ahead.</small></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq7"
                                type="button" data-target="#faq7">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What happens after the tour?
                                    </p>
                                    <a href="#faq7"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq7">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq7">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        You will stay in touch with your tour provider via email. During the tour you
                                        would
                                        have been provided with a pack which contains what courses to learn for the
                                        future and any other licenses that you need. Anything extra just contact us and
                                        we will get it done.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-fluid p-0 m-0">
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq2"
                                type="button" data-target="#faq2">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What Is The Refund Policy?</p>
                                    <a href="#faq2"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq2">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq2">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        We are happy to refund full payments if the tour is cancelled a week in advance.
                                        However, after that we can only move the appointment or refund 50%. This is
                                        because our career tour providers have already booked in the slot.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq4"
                                type="button" data-target="#faq4">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Do I need any prior learning or experience?
                                    </p>
                                    <a href="#faq4"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq4">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq4">
                                <div class="card-body rounded-pill">
                                    <p class="font-EurostileLTStdMedium"><small>Nope you don’t. That’s the whole point
                                            of having the Rapid Uplifter experience.
                                            You don’t need to have any experience. In fact, our career tour provider
                                            will tell
                                            you what is needed for the future.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq6"
                                type="button" data-target="#faq6">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Are any special clothing/tools needed?</p>
                                    <a href="#faq6"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq6">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq6">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        Nope again. There might be some rare occasions where you might need special
                                        shoes etc for OH&amp;S but generally no you don’t need any special clothes or
                                        equipment.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq8"
                                type="button" data-target="#faq8">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Can I book multiple tours?</p>
                                    <a href="#faq8"
                                        class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center"
                                        style="width: 40px; height:40px;" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="faq8">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq8">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">

                                    <small>
                                        Of course, you can. Our tours are bite sized and let you experience your future
                                        career. Think of it as a career date. If you don’t like it move on.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


<?php
include "./footer.php";
?>