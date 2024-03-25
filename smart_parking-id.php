<?php include("head.php"); ?>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                <?php include("navbar.php"); ?>
                    <!-- Page Header-->
                    <header class="page-header-ui page-header-ui-dark bg-head-green">
                        <div class="page-header-ui-content pt-10">
                            <div class="container px-5 text-center">
                                <div class="row gx-5 justify-content-center">
                                    <div class="col-lg-8">
                                        <h1 class="page-header-ui-title mb-3">Smart Parking Solution</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <!-- Rounded SVG Border-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </header>
                    <section class="bg-white py-10">
                        <div class="container px-3" style="max-width: 1000px; text-align: justify;">
                            <p>Dengan solusi smart parking berbasis IoT, stakeholder terkait dapat memanfaatkan perangkat sensor detector yang menggunakan modul transmisi nirkabel untuk berkomunikasi dengan LoRaWAN gateway dan server platform aplikasi mobile, yang dapat diakses melalui cloud. Solusi ini juga menyediakan platform aplikasi bagi Pengguna untuk memesan slot parkir dan melakukan pembayaran, aplikasi Jukir, Pengawas serta akses laporan operasional melalui dashboard.</p>
                            <img class="img-fluid my-2" src="img/smart-parking.png" alt="">
                        </div>
                    </section>
                    <hr>
                </main>
            </div>
            <?php include("footer.php"); ?>
        </div>
        <?php include("script.php"); ?>
    </body>
</html>
