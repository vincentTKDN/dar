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
                                        <h1 class="page-header-ui-title mb-3">Account-Based Ticketing</h1>
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
                        <div class="container px-5 d-flex flex-column justify-content-center align-items-center" style="max-width: 1400px; text-align: justify;">
                            <p>Account-Based Ticketing (ABT) merupakan sistem pembayaran tiket elektronik terintegrasi untuk berbagai moda transportasi. Sistem ini memungkinkan pembayaran tiket elektronik untuk berbagai moda transportasi, seperti bus, kereta api, dan MRT, dengan berbagai metode pembayaran non-tunai melalui kartu berbasis e-Wallet, QRIS, dan NFC yang dapat memberikan pengguna memilih tarif sesuai kebutuhan.</p>

                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-6">
                                    <img class="img-fluid my-2" src="img/abt1.png" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-size-title text-center my-2" style="color: #A3195B;">
                                        Keunggulan ABT
                                    </div>
                                    <ul style="list-style-type:circle;">
                                        <li>Memberikan subsidi untuk pengguna tertentu (Pelajar/ Pensiunan/ PNS/ POLRI dsb)</li><br>
                                        <li>Mampu mengidentifikasi profil pengguna (Pelajar/ Pensiunan/ PNS/ TNI/ dsb)</li><br>
                                        <li>Saldo berada di server dan tidak bisa hilang meskipun kartu non tunai hilang.</li><br>
                                        <li>Multi media pembayaran (Kartu, Smartphone, Biometric, dll)</li><br>
                                        <li>Multiple user (satu kartu dapat digunakan untuk satu keluarga)</li><br>
                                        <li>Kemudahan rekonsiliasi, portioning, dan settlement multi operator (H+1)</li><br>
                                        <li>Tingkat kegagalan dan selisih transaksi sangat rendah (server base)</li><br>
                                    </ul>
                                </div>
                            </div>
                            <img src="img/abt2.png" alt="" class="img-fluid my-3" >
                            <img src="img/abt3.png" alt="" class="img-fluid my-3" >
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
