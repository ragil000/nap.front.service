                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="https://github.com/ragil000" target="_blank">
                                        GitHub
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/ragilyudhanto" target="_blank">
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="http://facebook.com/RagilManggalaningYudhanto" target="_blank">
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="https://codexv.id" target="_blank">
                                        my Company
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, thanks to <i class="material-icons">favorite</i>
                            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a awesome template.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="<?=base_url('admin_template')?>/assets/js/core/jquery.min.js"></script>
        <script src="<?=base_url('admin_template')?>/assets/js/core/popper.min.js"></script>
        <script src="<?=base_url('admin_template')?>/assets/js/core/bootstrap-material-design.min.js"></script>
        <script src="<?=base_url('admin_template')?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
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
    </body>
</html>