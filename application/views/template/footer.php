    <!--====== FOOTER PART START ======-->
    
    <footer id="footer" class="footer-area pt-120">
        <div class="container" id="login-card">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <?php
                        if($this->session->userdata('penyihir')) {
                    ?>
                    <div class="col-md-12">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-info">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title ">Daftar Seluruh Tugas</h4>
                                                <p class="card-category"> Semua tugas yang dibuat ada disini</p>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="<?=base_url('schedule/form')?>" class="btn btn-primary pull-right">
                                                    <i class="fa fa-plustext-sm-13 text-light"></i>
                                                    Buat Tugas Baru
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="togglebutton">
                                                    <label>
                                                        <input id="toggle-button-active" type="checkbox">
                                                        <span class="toggle"></span>
                                                        <span id="toggle-text-active">Hanya tugas aktif</span>
                                                    </label>
                                                </div>
                                                <div class="togglebutton">
                                                    <label>
                                                        <input id="toggle-button-repeated" type="checkbox">
                                                        <span class="toggle"></span>
                                                        <span id="toggle-text-repeated">Hanya tugas berulang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-info">
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Platform</th>
                                                    <th class="text-center">Jenis Tugas</th>
                                                    <th class="text-center">Waktu</th>
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center"></th>
                                                </thead>
                                                <tbody id="data-table" class="text-sm-13">
                                                    <!-- <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">
                                                            <span class="badge badge-info">ragilmanggalaning42@gmail.com</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>
                                                                <i class="material-icons text-sm-13 text-info">mail</i>
                                                                Email
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>
                                                                <i class="material-icons text-sm-13 text-warning">repeat</i>
                                                                Berulang
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>senin, selasa, rabu, kamis, jum'at, sabtu, minggu</span>
                                                            <span class="badge badge-warning">12:30</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span>
                                                                <i class="material-icons text-sm-13 text-success">history</i>
                                                                Hari ini
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="togglebutton">
                                                                <label>
                                                                    <input type="checkbox" checked>
                                                                    <span class="toggle"></span>
                                                                    Aktif
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                            <ul class="pagination pagination-info" id="pagination">
                                                <!-- <li class="page-item"><a href="javascript:void(0);" class="page-link"> prev</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                <li class="active page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4<div class="ripple-container"></div></a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">next </a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }else {
                    ?>
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Masuk, <span>dan coba layanan ini sekarang</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <?=@$_SESSION['message']?>
                        <form action="<?=base_url('auth')?>" method="post">
                            <div class="subscribe-form mt-50">
                                <input type="email" name="email" placeholder="Alamat email">
                                <input type="password" class="mt-2" name="password" placeholder="Password anda">
                            </div>
                            <button class="main-btn mt-2">Masuk</button><br>
                        </form>
                        <a href="#"><small>Ingin daftar?</small></a>
                    </div>
                    <?php
                        }
                    ?>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="<?=base_url('user_template/')?>assets/images/logo.svg" alt="logo">
                            </a>
                            <p class="text">Merupakan layanan penjadwalan pesan dan pengingat yang bersifat gratis. Kami support pada layanan email dan pesan whatsapp.</p>
                            <ul class="social">
                                <li><a href="https://facebook.com/RagilManggalaningYudhanto/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="https://twitter.com/ragilyudhanto/" target="_blank"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="https://instagram.com/ragilyudhanto/" target="_blank"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/ragil-manggalaning-yudhanto-7a1172162/" target="_blank"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <!-- <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul> -->
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Hubungi Kami</h4>
                            </div>
                            <ul class="contact">
                                <li><a href="wa.me/6282311463010" class="text-light">+62 823 1146 3010</a></li>
                                <li>ragil000@codexv.id</li>
                                <li>CODEXV</li>
                                <li>Bambu Apus, kec. Cipayung <br> Jakarta Timur, Indonesia.</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Thanks to <a href="https://uideck.com" rel="nofollow">UIdeck</a> for a awesome template</p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->

    <!-- Classic Modal -->
    <div class="modal fade" id="modal-schedule" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Detail Pesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
                </div>
                <div class="modal-body" id="modal-schedule-detail">
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->


    <!--====== Jquery js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- <script src="<?=base_url('user_template/')?>assets/js/vendor/modernizr-3.7.1.min.js"></script> -->
    
    <!--====== Bootstrap js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/popper.min.js"></script>
    <script src="<?=base_url('user_template/')?>assets/js/bootstrap.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/plugins.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/slick.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/ajax-contact.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/waypoints.min.js"></script>
    <script src="<?=base_url('user_template/')?>assets/js/jquery.counterup.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/jquery.easing.min.js"></script>
    <script src="<?=base_url('user_template/')?>assets/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/particles.min.js"></script>

    <script>
        var BASE_URL_FRONT = '<?=base_url()?>'
        var BASE_URL = 'http://localhost:3000'
        var API_KEY = 'M@nG6a-m@N!s'
        var SESSION = '<?=$this->session->userdata('penyihir')['token']?>'
    </script>
    <?php if(!empty($js_plugins)) $this->load->view($js_plugins); ?>
        
    <!-- global custom setting -->
    <script src="<?=base_url('admin_template')?>/assets/js/app/global-setting.js"></script>

    <?php if(!empty($script)) $this->load->view($script); ?>

    <!--====== Main js ======-->
    <script src="<?=base_url('user_template/')?>assets/js/main.js"></script>
    
</body>

</html>