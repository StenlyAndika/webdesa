    </div>
    <div class="scroll-top-to">
        <i class="ti-home"></i>
    </div>
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                        <div class="block">
                        <?php if(count($instansi)<=0) : ?>
                            <a href="#"><img src="<?= base_url('./assets/img/tablogo.png') ?>" width="150px"></a>
                        <?php else: ?>
                            <?php if($instansi[0]['logo'] == null) : ?>
                                <a href="#"><img src="<?= base_url('./assets/img/tablogo.png') ?>" width="150px"></a>
                            <?php else: ?>
                                <a href="#"><img src="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>" width="150px"></a>
                            <?php endif; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-6 mt-5 mt-lg-0">
                        <div class="block-2">
                            <h6>Hubungi Kami</h6>
                            <ul>
                                <?php if(count($instansi)<=0) : ?>
                                    <li><i class="fa-solid text-white fa-building"></i> <a href="#">Nama Instansi</a></li>
                                    <li><i class="fa-solid text-white fa-flag"></i> <a href="#">Alamat Instansi</a></li>
                                    <li><i class="fa-solid text-white fa-envelope"></i> <a href="#">Email Instansi</a></li>
                                    <li><i class="fa-solid text-white fa-phone"></i> <a href="#">Nomor Whatsapp Instansi</a></li>
                                <?php else: ?>
                                    <?php if($instansi[0]['nama'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-building"></i> <a href="#">Nama Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-building"></i> <a href="#"><?= $instansi[0]['nama'] ?></a></li>
                                    <?php endif; ?>
                                    <?php if($instansi[0]['alamat'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-flag"></i> <a href="#">Alamat Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-flag"></i> <a href="#"><?= $instansi[0]['alamat'] ?></a></li>
                                    <?php endif; ?>
                                    <?php if($instansi[0]['email'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-envelope"></i> <a href="#">Email Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-envelope"></i> <a href="#"><?= $instansi[0]['email'] ?></a></li>
                                    <?php endif; ?>
                                    <?php if($instansi[0]['wa'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-phone"></i> <a href="#">Nomor Whatsapp Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-phone"></i> <a href="#"><?= $instansi[0]['wa'] ?></a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-6 mt-5 mt-lg-0">
                        <div class="block-2">
                            <h6>Link Terkait</h6>
                            <ul>
                                <li><a href="http://sungaipenuhkota.go.id/">Website Kota Sungai Penuh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center bg-dark py-4">
            <small class="text-secondary">Copyright <a href="<?= base_url() ?>login">&copy;</a> <script>document.write(new Date().getFullYear())</script>. Pemerintah Kota Sungai Penuh. All rigths reserved</small class="text-secondary">
        </div>
    </footer>

    <!-- JAVASCRIPTS -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/marquee/jquery.marquee.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/chart/chart.min.js"></script>
    <script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script>
        $(function () {
            $('.marquee').marquee({
                speed: 60
            });

            var ppc = document.getElementById("panelPieChart");
            var panelPieChart = new Chart(ppc, {
                type: 'doughnut',
                data: {
                    labels: [
                        <?php
                            foreach ($statistikjekel as $row) {
                                echo "'".$row['jekel']."',";
                            }
                        ?>
                    ],
                    datasets: [{
                        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                        data: [
                            <?php
                                foreach ($statistikjekel as $row) {
                                    echo "'".$row['jumlah']."',";
                                }
                            ?>
                        ],
                    }],
                },
            });
            
            $(".news-carousel").owlCarousel({
                autoplay:true,
                autoplayTimeout:5000,
                loop:true,
                margin:10,
                lazyLoad: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });

            $(".panel-carousel").owlCarousel({
                autoplay:true,
                autoplayTimeout:5000,
                loop:true,
                lazyLoad: true,
                items:1
            });

            $('.owl-dots').remove();

            $('#datatable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': true,
                "language":{
                    "url":"https://cdn.datatables.net/plug-ins/1.11.5/i18n/id.json",
                    "sEmptyTable":"Tidak ada data."
                }
            });
        });
    </script>
    <?php if($this->uri->segment(2) == 'jekel') : ?>
    <script>
        $(function () {
            var jpc = document.getElementById("jekelPieChart");
            var jekelPieChart = new Chart(jpc, {
                type: 'doughnut',
                data: {
                    labels: [
                        <?php
                            foreach ($statistikjekel as $row) {
                                echo "'".$row['jekel']."',";
                            }
                        ?>
                    ],
                    datasets: [{
                        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                        data: [
                            <?php
                                foreach ($statistikjekel as $row) {
                                    echo "'".$row['jumlah']."',";
                                }
                            ?>
                        ],
                    }],
                },
            });
        });
    </script>
    <?php endif; ?>
    <?php if($this->uri->segment(2) == 'umur') : ?>
    <script>
        $(function () {
            var upc = document.getElementById("umurPieChart");
            var umurPieChart = new Chart(upc, {
                type: 'doughnut',
                data: {
                    labels: [
                        <?php
                            foreach ($statistikumur as $row) {
                                echo "'".$row['umur']."',";
                            }
                        ?>
                    ],
                    datasets: [{
                        backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc", "#38E54D", "#D800A6", "#FF884B", "#D2001A"],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                        data: [
                            <?php
                                foreach ($statistikumur as $row) {
                                    echo "'".$row['jumlah']."',";
                                }
                            ?>
                        ],
                    }],
                },
            });
        });
    </script>
    <?php endif; ?>
    <?php if($this->uri->segment(2) == 'perkawinan') : ?>
    <script>
        $(function () {
            var upc = document.getElementById("kawinPieChart");
            var kawinPieChart = new Chart(upc, {
                type: 'doughnut',
                data: {
                    labels: [
                        <?php
                            foreach ($statistikperkawinan as $row) {
                                echo "'".$row['perkawinan']."',";
                            }
                        ?>
                    ],
                    datasets: [{
                        backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc", "#38E54D", "#D800A6", "#FF884B", "#D2001A"],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                        data: [
                            <?php
                                foreach ($statistikperkawinan as $row) {
                                    echo "'".$row['jumlah']."',";
                                }
                            ?>
                        ],
                    }],
                },
            });
        });
    </script>
    <?php endif; ?>
</body>

</html>