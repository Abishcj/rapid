<?php

include "./header.php";

?>

<style>
    .owl-carousel-tours .owl-stage-outer {
        border-radius: 12px;
    }

    .tour-carousal-image-hover {
        height: 88px;
        width: 150px;
        border-radius: 12px;
        opacity: .4;
    }

    .tour-carousal-image-hover:hover {
        opacity: 1;
    }

    a.active .tour-carousal-image-hover {
        opacity: 1;
    }

    .tour-carousal-main-img {
        height: 473px;
    }


    .owl-carousel-tours button.owl-prev span {
        position: absolute;
        font-weight: bold;
        font-size: 23px;
        color: black !important;
        left: 1%;
        top: 45%;
        background-color: white !important;
        border: 1px solid #ccc;
        width: 35px;
        opacity: .5;
        border-radius: 50%;
        text-shadow: none;
        box-shadow: none !important;
        transition: 0.9s all;
    }

    .owl-carousel-tours button.owl-prev span:hover {
        text-shadow: 0px 0px 5px white !important;
        /* background-color: #36393db0 !important; */
        opacity: 1;
    }

    .owl-carousel-tours button.owl-next span {
        position: absolute;
        font-weight: bold;
        font-size: 23px;
        color: black !important;
        right: 1%;
        top: 45%;
        background-color: white !important;
        border: 1px solid #ccc;
        width: 35px;
        opacity: .5;
        border-radius: 50%;
        text-shadow: none;
        box-shadow: none !important;
        transition: 0.9s all;
    }

    .owl-carousel-tours button.owl-next span:hover {
        text-shadow: 0px 0px 5px white !important;
        /* background-color: #36393db0 !important; */
        opacity: 1;
    }

    .owl-carousel-tours .owl-dots {
        display: none;
    }


    .tour-card-right {
        background-color: #f5f5f5;
        color: black;
    }

    .tour-card-right .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }


    .tours-overview-section p,
    .tours-overview-section ul li {
        font-size: 18px;
        line-height: 1.5;
        font-family: 'EurostileEFRegular';
    }

    #myAccordian .btn.focus,
    #myAccordian .btn:focus {
        box-shadow: none;
    }

    #myAccordian button[aria-expanded="true"] span.fa-chevron-down {
        display: none;
    }

    #myAccordian button[aria-expanded="false"] span.fa-chevron-up {
        display: none;
    }
</style>


<section class="tours-section">
    <div class="container">
        <div class="row">
            <div class="col pt-3">
                <h1>Try out being a plumber to experience it</h1>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-12">
                <div class="d-flex text-warning">
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span class="pr-2"><i class="fa fa-star-half-stroke"></i></span>

                    <div>
                        <a href="#" class="text-muted">107 Reviews</a>
                        <span class="text-dark">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <span class="text-muted">Sydney, Australia</span>
                    </div>


                    <div class="ml-auto d-flex align-items-center">
                        <div>
                            <a href="" class="nav-link">

                                <span class="text-muted"><i class="fa fa-arrow-up-from-bracket pr-1 "></i>share</span>
                                <span class="text-muted"><i class="fa fa-angle-down"></i></span>
                            </a>
                        </div>

                        <div>
                            <a href="" class="px-0 my-auto">
                                <span class="text-muted">
                                    <i class="fa-heart fa-regular"></i>
                                    Save to Wishlist
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="col mb-2">
                        <a href="" class="active">
                            <img class="img-fluid tour-carousal-image tour-carousal-image-hover mx-auto shadow" data-carousel-index="0" src="https://a0.muscache.com/im/pictures/88773996/1e7d82d6_original.jpg?im_w=720" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <a href="">
                            <img class="img-fluid tour-carousal-image tour-carousal-image-hover mx-auto shadow" data-carousel-index="1" src="https://a0.muscache.com/im/pictures/b2d12706-f40f-45ea-8cf6-835ae6970ae1.jpg?im_w=720" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <a href="">
                            <img class="img-fluid tour-carousal-image tour-carousal-image-hover mx-auto shadow" data-carousel-index="2" src="https://a0.muscache.com/im/pictures/27c95d43-36de-4079-b566-acace8f4ade2.jpg?im_w=720" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <a href="">
                            <img class="img-fluid tour-carousal-image tour-carousal-image-hover mx-auto shadow" data-carousel-index="3" src="https://a0.muscache.com/im/pictures/f4eff759-0b5d-4097-8809-6b464090c442.jpg?im_w=720" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <a href="">
                            <img class="img-fluid tour-carousal-image tour-carousal-image-hover mx-auto shadow" data-carousel-index="4" src="https://a0.muscache.com/im/pictures/92aa1461-acd5-487f-9598-09c58a43494e.jpg?im_w=720" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="owl-carousel owl-theme owl-carousel-tours">
                    <div class="item">
                        <img class="img-fluid tour-carousal-main-img mx-auto shadow" src="https://a0.muscache.com/im/pictures/88773996/1e7d82d6_original.jpg?im_w=720" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid tour-carousal-main-img mx-auto shadow" src="https://a0.muscache.com/im/pictures/b2d12706-f40f-45ea-8cf6-835ae6970ae1.jpg?im_w=720" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid tour-carousal-main-img mx-auto shadow" src="https://a0.muscache.com/im/pictures/27c95d43-36de-4079-b566-acace8f4ade2.jpg?im_w=720" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid tour-carousal-main-img mx-auto shadow" src="https://a0.muscache.com/im/pictures/f4eff759-0b5d-4097-8809-6b464090c442.jpg?im_w=720" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid tour-carousal-main-img mx-auto shadow" src="https://a0.muscache.com/im/pictures/92aa1461-acd5-487f-9598-09c58a43494e.jpg?im_w=720" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 w-100 pb-2">
                <div class="card tour-card-right h-100 border-0">
                    <div class="card-body">
                        <h3 class="">DURATION: 2 HOURS</h3>
                        <h3>COST : 200$</h3>
                        <h3>Pre-requisite: NONE</h3>
                        <h3>Language: English</h3>
                        <h3>Tourer experience : 12 Years</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tours-overview-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-4">
                <div class="accordion" id="myAccordian">
                    <div class="border-top pb-3"></div>
                    <div class="card border-0">
                        <div class="card-header p-0 bg-white border-0" id="headingOne">
                            <h2 class="m-0">
                                <button class="btn btn-block text-left d-flex justify-content-between align-items-center my-collapsable-btn pl-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <a href="#" class="text-dark">Sydney Tours</a>
                                    <span class="fa fa-chevron-up"></span>
                                    <span class="fa fa-chevron-down"></span>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#myAccordian">
                            <div class="card-body pl-0">
                                <a href="#" class="pl-0 text-muted">All Sydney Tours</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pt-4">
                <div class="border-top pb-3"></div>
                <h2 class="py-3">Overview</h2>

                <p class="text-left">So, you want to be a plumber or see how it works? You have decided on the right tour. James has 12 years of experience in this field, and he will take you on a career tour. The journey starts with you meeting James at the designated place. Sit down for a coffee and relax while he talks about his journey and how he started. </p>
                <p>Ask questions such as </p>
                <ul class="pl-5">
                    <li>how he gets his customers, </li>
                    <li>Courses? is a TAFE ok or do you need a Uni? </li>
                    <li>What licenses do you need to apply? Cost yearly/monthly?</li>
                    <li>career growth?</li>
                    <li>average margins? </li>
                    <li>What software’s does he use. </li>
                    <li>Do you need to work on public holidays? </li>
                    <li>Long hours or cozy life? </li>
                </ul>

                <p>Once the coffee session has ended, he will take you to a real job. Here you will see him interact with a customer, do his work, and do post work things such as billing etc. You get to see his tools, average cost of acquiring them etc. </p>
                <p>All done. You can now decide if you want to pursue being a plumber or not. You still have access to James in case you have further questions. And a future mentor as well. </p>
                <div class="border-top py-2"></div>
                <h2>What's Included</h2>
                <div class="row py-3">
                    <div class="col">
                        <ul>
                            <li class="mb-2">Discussion about average pays per job and average yearly earnings</li>
                            <li class="mb-2">Course details</li>
                            <li class="mb-2">Actual job tour</li>
                        </ul>
                    </div>

                    <div class="col">
                        <ul>
                            <li class="mb-2">Actual customer details </li>
                            <li class="mb-2">Payslips </li>
                            <li class="mb-2">Touching or helping your tourer. </li>
                        </ul>
                    </div>
                </div>

                <div class="class border-bottom mb-4"></div>

                <h2 class="py-3">Meeting And Pickup</h2>

                <p>James is based in Ryde, Sydney, NSW. Once our team gets in touch with you a time and place to meet will be decided. </p>

                <div class="border-top mb-3"></div>

                <h2 class="py-3">What To Expect – Sample tour based on 9 am start</h2>

                <h4 class="py-3">Meeting point – 20 min</h4>

                <p>Meet at the agreed meeting point. James will take you on a short drive to a coffee place to discuss his journey. He will talk about his history and the pros and cons of being in his role. </p>

                <h4 class="py-3">Tool tour – 20 min</h4>

                <p>Head on to James’s workshop or pick up truck will discuss about common issues they face, tools they use, how much it costs and where they generally get it from. This will tell you how much it would cost if you wanted to start his journey with a basic tool setup.</p>

                <h4 class="py-3">Service discussion – 20 min</h4>

                <p>Tax invoicing, software’s used, warrantee guarantee and all those discussions that makes people cringe – see what he uses and how he got the training for it. </p>

                <h4 class="py-3">Education & licence – 15 min</h4>

                <p>Do you need a degree or a TAFE or just an online course? How much does the licensing and insurance cost? </p>

                <h4 class="py-3">Customer tour – 45 min</h4>

                <p>Finally visit a customer site and see how James handles a real customer. This is not just about a job but its more about how he communicates, how he does his billing after. How he charges extra if its needed etc. </p>

                <h2 class="py-3">Cancellation Policy </h2>

                <p>You can cancel up to 72 hours in advance of the experience for a full refund. For a full refund, you must cancel at least 72 hours before the experience’s start time. If you cancel less than 72 hours before the experience’s start time, the amount you paid will not be refunded. Any changes made less than 72 hours before the experience’s start time will not be accepted. Cut-off times are based on the experience’s local time.
                </p>
                <ul>
                    <li>This experience requires a minimum number of travelers. If it’s cancelled because the minimum isn’t met, you’ll be offered a different date/experience or a full refund. </li>
                </ul>
                <p>
                    <small><a href="" class="text-success font-EurostileBold">Learn more</a></small> about cancellations.
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
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq1" type="button" data-target="#faq1">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Are all businesses legit?</p>
                                    <a href="#faq1" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq1">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq1">
                                <div class="card-body rounded-pill">
                                    <p class="font-EurostileLTStdMedium"><small>Definitely! Our professional writers
                                            apply
                                            effective keywords, formatting,
                                            automation, and innovative ATS optimization techniques to ensure your
                                            resume
                                            gets
                                            noticed by the recruiter!</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq3" type="button" data-target="#faq3">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What happens if I dont like the tour?
                                    </p>
                                    <a href="#faq3" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq3">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq3">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        <p class="font-EurostileLTStdMedium">We offer 4 weeks of free revisions
                                            for all
                                            individuals and a 60-day money-back guarantee!</p>
                                        <p class="border-0 pt-0">If you are unsatisfied, here are 2
                                            solutions:
                                        </p>
                                        <ul>
                                            <li>
                                                <span class="font-EurostileExtraBold">Ask your writer for a
                                                    revision:</span>
                                                Simply tell them what must be
                                                corrected, its in
                                                their occupations to oblige.
                                            </li>

                                            <li>
                                                <span class="font-EurostileExtraBold">Contact our 24/7 support
                                                    team:</span> You
                                                may request us to contact your existing
                                                writer, to assign a future writer, or for a refund.
                                            </li>
                                        </ul>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq5" type="button" data-target="#faq5">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What if I cant make it on that date? </p>
                                    <a href="#faq5" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq5">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq5">
                                <div class="card-body rounded-pill">
                                    <p class="font-EurostileLTStdMedium"><small>Our service is secure and
                                            confidential. We
                                            protect your data with advanced 256bit encryption and, we never share
                                            your
                                            information with 3rd parties.</small></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq7" type="button" data-target="#faq7">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What happens after the tour?
                                    </p>
                                    <a href="#faq7" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq7">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq7">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        <p>Placing an order is easy!
                                        </p>
                                        <p class="border-0 pt-0">Here's how it works:</p>
                                        <ol>
                                            <li>
                                                Click ""Place Order"" & fill out an order form.
                                            </li>
                                            <li>
                                                Receive bids and hire the writer that best matches your needs,
                                                career,
                                                and
                                                budget.
                                            </li>
                                            <li>
                                                Add funds for the contract total, and it is securely stored on our
                                                service until
                                                you are fully satisfied with the results.
                                            </li>
                                            <li>
                                                Chat with your writer while the job is in progress.
                                            </li>
                                            <li>
                                                Download your completed order, confirm your acceptance and release
                                                the
                                                writer's
                                                full payment.
                                            </li>
                                        </ol>
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
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq2" type="button" data-target="#faq2">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What Is Your Refund Policy?</p>
                                    <a href="#faq2" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq2">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq2">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        <p>We offer 4 weeks of free revisions and a 60-day money-back guarantee!
                                            <br>
                                            If you are for any reason unsatisfied with your resume, here are 2
                                            solutions:
                                        </p>
                                        <ul>
                                            <li><span class="font-EurostileExtraBold"><b>Engage
                                                        with your writer and ask for a revision:</b></span> Simply
                                                tell them
                                                what must be corrected.</li>
                                            <li><span class="font-EurostileExtraBold">Contact our 24/7 support
                                                    team:</span>
                                                You may request us to contact your existing
                                                writer, to assign a different writer in your career field, or for a
                                                refund.
                                            </li>
                                        </ul>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq4" type="button" data-target="#faq4">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">Do I need any prior learning or experience?
                                    </p>
                                    <a href="#faq4" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq4">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq4">
                                <div class="card-body rounded-pill">
                                    <p class="font-EurostileLTStdMedium"><small>Absolutely, we offer 4 weeks of free
                                            revisions - we're determined to help you get the positions and salary
                                            that you
                                            want, whatever it takes.

                                            If you are unsatisfied, its in the writers' jobs and duties to revise
                                            the order
                                            according to your comments.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq6" type="button" data-target="#faq6">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What tools or clothing do I requrie?</p>
                                    <a href="#faq6" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq6">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq6">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">
                                    <small>
                                        <ul class="border-top pt-3">
                                            <li>
                                                A resume is a 1-2 page summary of your skills, achievements,
                                                education,
                                                and
                                                experience.
                                            </li>
                                            <li>
                                                A CV is a 3-4 page detailed view of your professional and academic
                                                life
                                                and
                                                growth.
                                            </li>
                                        </ul>
                                        <p class="font-EurostileLTStdMedium border-0 pt-0">
                                            We employ a population of
                                            writers
                                            who are
                                            highly skilled in writing both CVs and Resumes, having undergone
                                            rigorous
                                            training, and having offered a high school diploma and a college
                                            diploma
                                            to
                                            prove their expertise. We can help each applicant with both CV and
                                            Resume so
                                            that you can confidently surf the job market to find your personal
                                            dream
                                            job.
                                        </p>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 p-0">
                        <div class="card faq-card">
                            <div class="card-header" data-toggle="collapse" aria-expanded="false" aria-controls="faq8" type="button" data-target="#faq8">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="my-auto col p-0">What Is Included in the Price?</p>
                                    <a href="#faq8" class="my-auto float-right border border-warning text-warning rounded-circle position-relative d-flex align-items-center justify-content-center" style="width: 40px; height:40px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="faq8">
                                        <i class="fa fa-arrow-down position-absolute"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse multi-collapse" id="faq8">
                                <div class="card-body rounded-pill font-EurostileLTStdMedium">

                                    <small>
                                        <p>Every order includes:
                                        </p>
                                        <ul>
                                            <li>
                                                A professionally written resume (or other requested type of product)
                                                based on
                                                your demands in both PDF and DOC formats.
                                            </li>
                                            <li>
                                                1-on-1 communication and interview with your writer.
                                            </li>
                                            <li>
                                                4 weeks of free revisions.
                                            </li>

                                            <li>
                                                A 60 day money-back guarantee.
                                            </li>
                                        </ul>
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

<script>
    // var owl4 = $(".owl-carousel-tours");
    // owl4.owlCarousel({
    //     loop: true,
    //     nav: true,
    //     margin: 0,
    //     // autoplayTimeout: 2000,
    //     URLhashListener: true,
    //     animateOut: 'fadeOut',
    //     stagePadding: 0,
    //     singleItem: true,
    //     responsive: {
    //         0: {
    //             items: 1,
    //         },
    //     },
    // });
    // owl4.on("mousewheel", ".owl-stage", function(e) {
    //     if (e.deltaY > 0) {
    //         owl4.trigger("next.owl");
    //     } else {
    //         owl4.trigger("prev.owl");
    //     }
    //     e.preventDefault();
    // });

    // owl4.on('changed.owl.carousel', function(event) {
    //     carousel_index = event.page.index;
    //     var a = $(".question-col").find('[data-para-index');

    //     // $(a).each(function(i, e) {
    //     //     // console.log($(this).attr('data-para-index'));
    //     //     if (carousel_index == $(this).attr('data-para-index')) {
    //     //         $(this).css('color', 'orange')
    //     //         $(this).prev().find('i').addClass('text-warning')
    //     //         $(this).addClass('font-EurostileBold')
    //     //     } else {
    //     //         $(this).css('color', '')
    //     //         $(this).prev().find('i').removeClass('text-warning')
    //     //         $(this).removeClass('font-EurostileBold')
    //     //     }
    //     // })
    // })



    // --------


    var owl4 = $(".owl-carousel-tours");
    owl4.owlCarousel({
        loop: true,
        nav: true,
        margin: 0,
        // URLhashListener: true,
        // startPosition: 'URLHash',
        // dots: false,
        responsive: {
            0: {
                items: 1,
            },
        },
    });
    owl4.on("mousewheel", ".owl-stage", function(e) {
        if (e.deltaY > 0) {
            owl4.trigger("next.owl");
        } else {
            owl4.trigger("prev.owl");
        }
        e.preventDefault();
    });

    $('.tour-carousal-image').click(function(e) {
        e.preventDefault();
        var index = $(this).attr('data-carousel-index');
        owl4.trigger('to.owl.carousel', index);
    })
</script>


<script>
    $('.tours-section a').on('click', function() {

        if ($('.tours-section a').not($(this)).hasClass('active')) {
            $('.tours-section a').not($(this)).removeClass('active')
        }

        $(this).addClass('active');
    })
</script>

<script>
    owl4.on('changed.owl.carousel', function(event) {
        var carousel_index = event.page.index;
        var a = $.find('[data-carousel-index]');

        $(a).each(function(i, e) {
            if (carousel_index == $(this).attr('data-carousel-index')) {
                var b = $(this).parent().click()
            } else {

            }
        })
    })
</script>