<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Smart Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <style>
        :root {
            --hue: 223;
            --fg: hsl(var(--hue), 10%, 10%);
            --trans-dur: 0.3s;
            --trans-timing: cubic-bezier(0.83, 0, 0.17, 1);
        }

        /* Light theme */
        .switch,
        .switch__input {
            display: block;
        }

        .switch {
            border-radius: 1.5em;
            box-shadow: 0 0.125em 0.25em hsla(0, 0%, 0%, 0.4);
            position: relative;
            width: 4.5em;
            height: 3em;
            perspective: 10em;
        }

        .switch span {
            display: block;
        }

        .switch>span {
            border-radius: inherit;
            z-index: 1;
        }

        .switch__surface-glare,
        .switch__inner,
        .switch__inner-glare,
        .switch__rocker-sides,
        .switch__rocker-sides-glare,
        .switch__rocker,
        .switch__rocker-glare,
        .switch__light {
            transition: transform var(--trans-dur) var(--trans-timing);
        }

        .switch__surface {
            background-color: hsl(var(--hue), 10%, 83%);
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        .switch>.switch__surface {
            z-index: 0;
        }

        .switch__surface-glare {
            background-image: radial-gradient(50% 50% at center, hsla(var(--hue), 10%, 90%, 1), hsla(var(--hue), 10%, 90%, 0));
            width: 3em;
            height: 3em;
            transform: translate(0, 0.125em);
        }

        .switch__input {
            background-color: hsl(var(--hue), 10%, 80%);
            border-radius: 1.5em;
            box-shadow: 0 0 0 0.125em hsla(var(--hue), 90%, 50%, 0);
            outline: transparent;
            position: absolute;
            top: 0.0625em;
            left: 0.0625em;
            width: calc(100% - 0.125em);
            height: calc(100% - 0.125em);
            transition: box-shadow 0.15s linear;
            z-index: 1;
            -webkit-appearance: none;
            appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .switch__input:focus-visible {
            box-shadow: 0 0 0 0.125em hsla(var(--hue), 90%, 50%, 1);
        }

        .switch__inner {
            background-color: hsl(var(--hue), 10%, 83%);
            overflow: hidden;
            position: absolute;
            inset: 0.5em;
            transform: translate(0.125em, 0);
        }

        .switch__inner-glare {
            background-image: radial-gradient(50% 50% at center, hsla(var(--hue), 10%, 90%, 1), hsla(var(--hue), 10%, 90%, 0));
            position: absolute;
            width: 2em;
            height: 2em;
            transform: translate(100%, -0.5em);
        }

        .switch__inner-shadow {
            box-shadow: 0 0.125em 0.25em hsla(0, 0%, 0%, 0.4);
            position: absolute;
            inset: 0.5em;
        }

        .switch__rocker-shadow {
            box-shadow: 0 0.125em 0.25em hsla(0, 0%, 0%, 0.15);
            position: absolute;
            top: 0.5625em;
            right: 0.5625em;
            bottom: 0.5625em;
            left: 0.75em;
        }

        .switch__rocker-sides {
            background-color: hsl(var(--hue), 10%, 80%);
            overflow: hidden;
            position: absolute;
            inset: 0.5em;
            transform: rotateY(-20deg) translateZ(0.5em);
            transform-style: preserve-3d;
        }

        .switch__rocker-sides-glare {
            background-image: linear-gradient(90deg, hsla(var(--hue), 10%, 85%, 0), hsla(var(--hue), 10%, 85%, 1), hsla(var(--hue), 10%, 85%, 0));
            position: absolute;
            width: 200%;
            height: 100%;
        }

        .switch__rocker {
            background-color: hsl(var(--hue), 10%, 80%);
            overflow: hidden;
            position: absolute;
            inset: 0.5625em;
            transform: rotateY(-20deg) translateZ(0.5em);
            transform-style: preserve-3d;
        }

        .switch__rocker-glare {
            background-image: linear-gradient(120deg, hsla(var(--hue), 10%, 85%, 0) 25%, hsla(var(--hue), 10%, 85%, 1) 50%, hsla(var(--hue), 10%, 85%, 0) 75%);
            position: absolute;
            width: 100%;
            height: 100%;
            transform: translateX(-33%);
        }

        .switch__light {
            background-image: linear-gradient(-45deg, hsl(var(--hue), 10%, 60%) 30%, hsl(var(--hue), 10%, 80%));
            box-shadow: 0 0 max(1px, 0.05em) hsla(var(--hue), 10%, 10%, 0.3) inset;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0.5em;
            height: 0.5em;
            transform: translate(-50%, -50%) rotateY(-20deg) translateX(1.125em) translateZ(0.51em);
        }

        .switch__light-inner {
            background-color: hsl(133, 90%, 50%);
            box-shadow:
                0 0 max(1px, 0.05em) hsla(var(--hue), 10%, 10%, 0.3) inset,
                0 0 0.25em hsl(133, 90%, 50%);
            border-radius: 50%;
            opacity: 0;
            width: 100%;
            height: 100%;
            transition: opacity var(--trans-dur) var(--trans-timing);
        }

        /* Dark theme */
        .col--dark {
            background-color: hsl(var(--hue), 10%, 10%);
            color: hsl(var(--hue), 10%, 90%);
        }

        .col--dark .switch__surface {
            background-color: hsl(var(--hue), 10%, 22%);
        }

        .col--dark .switch__surface-glare {
            background-image: radial-gradient(50% 50% at center, hsla(var(--hue), 10%, 45%, 1), hsla(var(--hue), 10%, 45%, 0));
        }

        .col--dark .switch__input {
            background-color: hsl(var(--hue), 10%, 20%);
        }

        .col--dark .switch__inner {
            background-color: hsl(var(--hue), 10%, 22%);
        }

        .col--dark .switch__inner-glare {
            background-image: radial-gradient(50% 50% at center, hsla(var(--hue), 10%, 45%, 1), hsla(var(--hue), 10%, 45%, 0));
        }

        .col--dark .switch__rocker-shadow {
            box-shadow: 0 0.125em 0.25em hsla(0, 0%, 0%, 0.5);
        }

        .col--dark .switch__rocker-sides {
            background-color: hsl(var(--hue), 10%, 20%);
        }

        .col--dark .switch__rocker-sides-glare {
            background-image: linear-gradient(90deg, hsla(var(--hue), 10%, 35%, 0), hsla(var(--hue), 10%, 35%, 1), hsla(var(--hue), 10%, 35%, 0));
        }

        .col--dark .switch__rocker {
            background-color: hsl(var(--hue), 10%, 20%);
        }

        .col--dark .switch__rocker-glare {
            background-image: linear-gradient(120deg, hsla(var(--hue), 10%, 25%, 0) 25%, hsla(var(--hue), 10%, 25%, 1) 50%, hsla(var(--hue), 10%, 25%, 0) 75%);
        }

        .col--dark .switch__light {
            background-image: linear-gradient(-45deg, hsl(var(--hue), 10%, 30%) 30%, hsl(var(--hue), 10%, 50%));
        }

        /* “On” state */
        .switch__input:checked~.switch__surface .switch__surface-glare {
            transform: translate(3em, 0.125em);
        }

        .switch__input:checked~.switch__inner {
            transform: translate(-0.125em, 0);
        }

        .switch__input:checked~.switch__inner .switch__inner-glare {
            transform: translate(0, -0.5em);
        }

        .switch__input:checked~.switch__rocker {
            transform: rotateY(20deg) translateZ(0.5em);
        }

        .switch__input:checked~.switch__rocker .switch__rocker-glare {
            transform: translateX(33%);
        }

        .switch__input:checked~.switch__rocker-sides {
            transform: rotateY(20deg) translateZ(0.5em);
        }

        .switch__input:checked~.switch__rocker-sides .switch__rocker-sides-glare {
            transform: translateX(-50%);
        }

        .switch__input:checked~.switch__light {
            transform: translate(-50%, -50%) rotateY(20deg) translateX(1.125em) translateZ(0.51em);
        }

        .switch__input:checked~.switch__light .switch__light-inner {
            opacity: 1;
        }
    </style>

    <!-- Favicon -->
    <link href="<?= base_url() ?>img/favicon.html" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="<?= base_url() ?>cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary">smart home</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Report</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Relay 1</a>
                        <a href="detail.html" class="dropdown-item">Relay 2</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Services Start -->
    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row gy-4 gx-3">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Relay 1</h3>
                        <?php
                        $kondisi1 = '';
                        foreach ($relay1 as $r1) : ?>
                            <?php if ($r1['kondisi'] == 'on') {
                                $kondisi1 = 'checked';
                            } ?>
                            <h3 class=""><?= $r1['kondisi'] ?> </h3>
                        <?php endforeach; ?>
                        <div class="col">
                            <label>
                                <span class="switch">
                                    <input id="relayCheckbox1" class="switch__input" type="checkbox" role="switch" <?= $kondisi1 ?>>
                                    <span class="switch__surface">
                                        <span class="switch__surface-glare"></span>
                                    </span>
                                    <span class="switch__inner-shadow"></span>
                                    <span class="switch__inner">
                                        <span class="switch__inner-glare"></span>
                                    </span>
                                    <span class="switch__rocker-shadow"></span>
                                    <span class="switch__rocker-sides">
                                        <span class="switch__rocker-sides-glare"></span>
                                    </span>
                                    <span class="switch__rocker">
                                        <span class="switch__rocker-glare"></span>
                                    </span>
                                    <span class="switch__light">
                                        <span class="switch__light-inner"></span>
                                    </span>
                                </span>
                                <!-- <span class="sr">Switch Relay 1</span> -->
                            </label>
                        </div>
                        <a class="btn shadow-none text-secondary" href="#">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Relay 2</h3>
                        <?php
                        $kondisi2 = '';
                        foreach ($relay2 as $r2) : ?>
                            <?php if ($r2['kondisi'] == 'on') {
                                $kondisi2 = 'checked';
                            } ?>
                            <h3 class=""><?= $r2['kondisi'] ?> </h3>
                        <?php endforeach; ?>
                        <div class="col">
                            <label>
                                <span class="switch">
                                    <input id="relayCheckbox2" class="switch__input" type="checkbox" role="switch" <?= $kondisi2 ?>>
                                    <span class="switch__surface">
                                        <span class="switch__surface-glare"></span>
                                    </span>
                                    <span class="switch__inner-shadow"></span>
                                    <span class="switch__inner">
                                        <span class="switch__inner-glare"></span>
                                    </span>
                                    <span class="switch__rocker-shadow"></span>
                                    <span class="switch__rocker-sides">
                                        <span class="switch__rocker-sides-glare"></span>
                                    </span>
                                    <span class="switch__rocker">
                                        <span class="switch__rocker-glare"></span>
                                    </span>
                                    <span class="switch__light">
                                        <span class="switch__light-inner"></span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <a class="btn shadow-none text-secondary" href="#">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h3 class="mt-5">Status</h3>
                        <?php
                        $kondisiStatus = '';
                        foreach ($status as $s) : ?>
                            <?php if ($s['kondisi'] == 'auto') {
                                $kondisiStatus = 'checked';
                            }  ?>
                            <h3 class=""><?= $s['kondisi'] ?> </h3>
                        <?php endforeach; ?>
                        <div class="col">
                            <label>
                                <span class="switch">
                                    <input id="statusCheckbox" class="switch__input" type="checkbox" role="switch" <?= $kondisiStatus ?>>
                                    <span class="switch__surface">
                                        <span class="switch__surface-glare"></span>
                                    </span>
                                    <span class="switch__inner-shadow"></span>
                                    <span class="switch__inner">
                                        <span class="switch__inner-glare"></span>
                                    </span>
                                    <span class="switch__rocker-shadow"></span>
                                    <span class="switch__rocker-sides">
                                        <span class="switch__rocker-sides-glare"></span>
                                    </span>
                                    <span class="switch__rocker">
                                        <span class="switch__rocker-glare"></span>
                                    </span>
                                    <span class="switch__light">
                                        <span class="switch__light-inner"></span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <a class="btn shadow-none text-secondary" href="#">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">We Bring Your Home To Be Smartest</h1>
                    <p class="fs-4 text-dark mb-4">Nonumy diam dolores est ipsum diam amet lorem clita clita sit eirmod duo clita dolore dolor ut diam diam justo sed est</p>
                    <div class="pt-2">
                        <a href="#" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mx-2">Get A Quote</a>
                        <a href="#" class="btn btn-outline-secondary rounded-pill py-md-3 px-md-5 mx-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-dark py-4">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">Copyright &copy; <a class="text-dark fw-bold" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-dark fw-bold" href="https://htmlcodex.com/">HTML Codex</a></p>
                    <p><br>Distributed By: <a class="border-bottom" href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="<?= base_url() ?>code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const relayCheckbox1 = document.getElementById('relayCheckbox1');

            relayCheckbox1.addEventListener('change', function() {
                const status = relayCheckbox1.checked ? 'on' : 'off';
                const apiUrl = `http://localhost:8080/Pages/insertrelay1?kondisi=${status}`;

                // Kirim permintaan ke API
                fetch(apiUrl, {
                        method: 'POST', // Atur metode yang sesuai (POST/GET) sesuai dengan kebutuhan Anda
                        // Tambahkan header jika diperlukan
                    })
                    .then(response => {
                        if (response.ok) {
                            console.log('Berhasil: Data berhasil dikirim ke API.');
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        } else {
                            console.log('Gagal: Terjadi kesalahan saat mengirim data ke API.');
                        }
                    })
                    .catch(error => {
                        console.error('Gagal: Terjadi kesalahan jaringan', error);
                    });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const relayCheckbox2 = document.getElementById('relayCheckbox2');

            relayCheckbox2.addEventListener('change', function() {
                const status = relayCheckbox2.checked ? 'on' : 'off';
                const apiUrl = `http://localhost:8080/Pages/insertrelay2?kondisi=${status}`;

                // Kirim permintaan ke API
                fetch(apiUrl, {
                        method: 'POST', // Atur metode yang sesuai (POST/GET) sesuai dengan kebutuhan Anda
                        // Tambahkan header jika diperlukan
                    })
                    .then(response => {
                        if (response.ok) {
                            console.log('Berhasil: Data berhasil dikirim ke API.');
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        } else {
                            console.log('Gagal: Terjadi kesalahan saat mengirim data ke API.');
                        }
                    })
                    .catch(error => {
                        console.error('Gagal: Terjadi kesalahan jaringan', error);
                    });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusCheckbox = document.getElementById('statusCheckbox');

            statusCheckbox.addEventListener('change', function() {
                const status = statusCheckbox.checked ? 'auto' : 'manual';
                const apiUrl = `http://localhost:8080/Pages/insertStatus?kondisi=${status}`;

                // Kirim permintaan ke API
                fetch(apiUrl, {
                        method: 'POST', // Atur metode yang sesuai (POST/GET) sesuai dengan kebutuhan Anda
                        // Tambahkan header jika diperlukan
                    })
                    .then(response => {
                        if (response.ok) {
                            console.log('Berhasil: Data berhasil dikirim ke API.');
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        } else {
                            console.log('Gagal: Terjadi kesalahan saat mengirim data ke API.');
                        }
                    })
                    .catch(error => {
                        console.error('Gagal: Terjadi kesalahan jaringan', error);
                    });
            });
        });
    </script>
</body>


<!-- Mirrored from themewagon.github.io/painter/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 07:24:47 GMT -->

</html>