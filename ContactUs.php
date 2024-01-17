<?php
include "./header.php";
?>

<section class="contact-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col py-5">
                <h5 style="font-size:x-large ;">Contact</h5>
            </div>
        </div>

        <div class="row">
            <div class="col pb-5">
                <h1 style="font-size: 3.5rem;">We’re here to help you <br>level up</h1>
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-md-4">
                <p class="font-EurostileEFRegular text-justify" style="font-size:larger ;">
                    We're just one click away to help you take you and your career to the next level. Fill in the
                    form to share more details about you. Or your favorite movie. Either way, we’d love to talk.
                </p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="p-5 rounded" style="background-color: #93f9f8;">
                    <form action="" class="contact-form">
                        <div class="mb-5 career-form-input">
                            <label for="name">What's your name?</label>
                            <input class="form-control mb-3" type="text" name="name">
                        </div>
                        <div class="mb-5 career-form-input">
                            <label for="email">Your email</label>
                            <input class="form-control mb-3" type="text" name="email">
                        </div>
                        <div class="mb-5 career-form-input">
                            <label for="help">What can we help you with?</label>
                            <textarea class="form-control mb-3" name="help" id="" cols="30" rows="3"></textarea>
                        </div>
                        <div class="position-relative overflow-hidden rounded-pill su_button_container">
                            <span class="su_button_circle">
                            </span>
                            <button class="btn btn-dark rounded-pill px-5 py-3 button_su_inner" type="submit"><span class="send-span">Send</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4">
                <h1 class="pt-5" style="font-size: 2.5rem;">We are located in Sydney</h1>
                <p class="font-EurostileEFRegular text-justify py-3" style="font-size: large ;">We like our home
                    like we
                    like our
                    designs; clean and minimal.
                    We're based in the heart of Sydney.
                </p>

                <!-- <address class="font-EurostileItalic">
                        <span class="font-EurostileBold" style="font-size: large;">Our address</span> <br>
                        <div class="pl-3 pt-2">
                            Jacob van Lennepkade 334H <br>
                            1053 NJ Amsterdam <br>
                            the Netherlands <br>
                        </div>
                    </address> -->
            </div>

            <div class="col-md-7 ml-auto">
                <img src="./assets/images/map.jpeg" alt="" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row mb-5 pb-4">
            <div class="col-md-6">
                <div class="row pb-5">
                    <div class="col-md-12">
                        <img src="./assets/images/sydney_1.jpg" alt="" class="shadow contact_images" style="width: 500px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="./assets/images/sydney_2.jpg" alt="" class="img-fluid shadow contact_images">
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-5">
                <img src="./assets/images/sydney_3.jpg" alt="" class="img-fluid mt-5 mb-5 shadow contact_images">
            </div>
            <!-- <div class="col h-100">
                    <img src="./assets/images/sydney_5.jpg" alt="" class="img-fluid h-100">
                </div> -->
        </div>
    </div>
</section>


<?php
include "./footer.php";
?>

<script>
    $(".button_su_inner").mouseenter(function(e) {
        // var parentOffset = $(this).offset();
        // var relX = e.pageX - parentOffset.left;
        // var relY = e.pageY - parentOffset.top;
        var relX = e.offsetX;
        var relY = e.offsetY;
        $(this).prev(".su_button_circle").css({
            "left": relX,
            "top": relY
        });
        $(this).prev(".su_button_circle").removeClass("desplode-circle");
        $(this).prev(".su_button_circle").addClass("explode-circle");

    });

    $(".button_su_inner").mouseleave(function(e) {

        var parentOffset = $(this).offset();

        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(this).prev(".su_button_circle").css({
            "left": relX,
            "top": relY
        });
        $(this).prev(".su_button_circle").removeClass("explode-circle");
        $(this).prev(".su_button_circle").addClass("desplode-circle");

    });
</script>