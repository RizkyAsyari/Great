<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:36:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title>App Greeting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="fonts/feather-font/css/iconfont.css">
    <link media="all" type="text/css" rel="stylesheet" href="plugins/perfect-scrollbar/perfect-scrollbar.css">
    <!-- end plugin css -->

    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="css/app.css">
    <!-- end common css -->

</head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

<script src="js/spinner.js"></script>

<div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper" style="background-image: url(images/girl.jpg);">

                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">Kyas<span>DEV</span></a>
                                    <h3><p id="time" style="text-align: center"></p></h3>
                                    <div id="contentDiv" style="text-align: center; margin-top: 20px">
                                        <h3 class="text-primary">
                                            <?php
                                            date_default_timezone_set("Asia/Bangkok");
                                            /* This sets the $time variable to the current hour in the 24 hour clock format */
                                            $time = date("H");
                                            /* Set the $timezone variable to become the current timezone */
                                            //                                                    $timezone = date("Asia/Jakarta");
                                            /* If the time is less than 1200 hours, show good morning */
                                            if ($time < "12") {
                                                echo "Good Morning";
                                            } else
                                                /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                                                if ($time >= "12" && $time < "17") {
                                                    echo "Good Afternoon";
                                                } else
                                                    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                                                    if ($time >= "17" && $time < "19") {
                                                        echo "Good Evening";
                                                    } else
                                                        /* Finally, show good night if the time is greater than or equal to 1900 hours */
                                                        if ($time >= "19") {
                                                            echo "Good Night";
                                                        }?> Rizka Hafsari

                                                <h4 class="mb-3 mb-md-0"
                                                    style="color:black;margin-top: 30px;text-align: center">All Is Well</h4>
                                                <h4 class="mb-3 mb-md-0"
                                                    style="color:black;margin-top: 30px;text-align: center">Every Thing Will Be Fine</h4>
                                        </h3>

                                    </div>


                                    <p style="text-align: center">
                                        <button id="swal" type="button" class="btn btn-outline-primary"
                                                style="margin-top: 30px">Jangan Ditekan
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
<!-- base js -->
<script src="js/app.js"></script>
<script src="plugins/feather-icons/feather.min.js"></script>
<!-- end base js -->

<!-- plugin js -->
<!-- end plugin js -->

<!-- common js -->
<script src="js/template.js"></script>
<!-- end common js -->
<script type="text/javascript">
    function printSentence(id, sentence, speed) {
        var index = 0,
            timer = setInterval(function () {
                var char = sentence.charAt(index);
                if (char === '<') index = sentence.indexOf('>', index);
                document.getElementById(id).innerHTML = sentence.substr(0, index);
                if (++index === sentence.length) {
                    clearInterval(timer);
                }
            }, speed);
    } //printSentence

    printSentence(
        'contentDiv',
        document.getElementById('contentDiv').innerHTML,
        70
    );


    (function () {
        function checkTime(i) {
            return (i < 10) ? "0" + i : i;
        }

        function startTime() {
            var today = new Date(),
                // d = checkTime(today.getDay()),
                // M = checkTime(today.getMonth()),
                // Y = checkTime(today.getFullYear()),
                h = checkTime(today.getHours()),
                m = checkTime(today.getMinutes()),
                s = checkTime(today.getSeconds());
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function () {
                startTime()
            }, 500);
        }

        startTime();
    })()
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


<script>
    const tombol = document.querySelector('#swal');
    tombol.addEventListener('click', function () {
        Swal.fire({
            title: 'Love',
            text: 'Kan dibilang jangan ditekan',
            imageUrl: 'images/love.png',
            imageWidth: 400,
            imageHeight: 300,
            imageAlt: 'Custom image',
        })
    })

</script>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:36:05 GMT -->
</html>
