<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aplikasi Konsultasi Online Unit Perlindungan Perempuan dan Anak (PPA) Dit Reskrimum Polda Riau">
        <meta name="author" content="PPA DIT RESKRIMUM POLDA RIAU">

        <title>Unit Perlindungan Perempuan dan Anak (PPA) Dit Reskrimum Polda Riau</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/datepicker.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="assets/css/modern-business.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- datatables -->
        <link href="assets/js/dataTables/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- Fungsi untuk membatasi karakter yang diinputkan -->
        <script language="javascript">
        function getkey(e)
        {
            if (window.event)
              return window.event.keyCode;
            else if (e)
              return e.which;
            else
              return null;
        }

        function goodchars(e, goods, field)
        {
            var key, keychar;
            key = getkey(e);
            if (key == null) return true;
           
            keychar = String.fromCharCode(key);
            keychar = keychar.toLowerCase();
            goods = goods.toLowerCase();
           
            // check goodkeys
            if (goods.indexOf(keychar) != -1)
                return true;
            // control keys
            if ( key==null || key==0 || key==8 || key==9 || key==27 )
              return true;
              
            if (key == 13) {
                var i;
                for (i = 0; i < field.form.elements.length; i++)
                    if (field == field.form.elements[i])
                        break;
                i = (i + 1) % field.form.elements.length;
                field.form.elements[i].focus();
                return false;
                };
            // else return false
            return false;
        }
        </script>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?page=home">
                        <img style="margin-top:-5px" src="assets/img/logo_ditku.png" height="40">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <!-- panggil file "navbar-menu.php" untuk menampilkan menu -->
                    <?php include "navbar-menu.php" ?>
                    

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    
        <!-- Page Content -->
        <div style="min-height:520px" class="container">
            <?php  
            require_once "config/database.php";

            if (empty($_SESSION['id_klien'])) {
                $id_klien = '';
            } else {
                $id_klien = $_SESSION['id_klien'];
            }

            if ($_GET['page']!='form_konsultasi') {
                $query = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah FROM tbl_konsultasi 
                                        WHERE id_klien='$id_klien' AND status='n' AND jawaban!=''")
                                        or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

                $data = mysqli_fetch_assoc($query);

                $jawaban_baru = $data['jumlah'];

                if ($jawaban_baru > 0) { ?>
                    <div style="margin-top:45px;margin-bottom:-20px" class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <a href="?page=konsultasi">
                                    <i class="fa fa-info-circle"></i> Anda Mendapatkan <?php echo $jawaban_baru; ?> Jawaban Baru.
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

            <!-- panggil file "content.php" untuk menampilkan halaman konten-->
            <?php include "content.php"; ?>

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer style="margin-bottom:0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2026 - Unit Perlindungan Perempuan dan Anak (PPA) Dit Reskrimum Polda Riau<a href="?module=home">u </a></p>
                  </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>

        <!-- DataTables -->
        <script src="assets/js/dataTables/js/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/js/dataTables.bootstrap.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>

        <script type="text/javascript">
            $(function () {

                //datepicker plugin
                $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                });

                // toolip
                $('[data-toggle="tooltip"]').tooltip();

                $('#dataTables-example').dataTable( {
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
                } );
            })
        </script>

    </body>
</html>
