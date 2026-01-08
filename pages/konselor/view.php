<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="margin-top:55px" class="page-header">
                    <i style="margin-right:6px" class="fa fa-user"></i>
                    Konselor
                </h3>
                <ol class="breadcrumb">
                    <li><a href="?page=home">Beranda</a>
                    </li>
                    <li class="active">Konselor</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php  
                        if (empty($_GET['id'])) { ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Bidang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;

                                $query = mysqli_query($mysqli, "SELECT * FROM tbl_konselor ORDER BY nama_konselor ASC")
                                            or die('Ada kesalahan pada query tampil data konselor: '.mysqli_error($mysqli));

                                while ($data = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td width="40"><?php echo $no; ?></td>
                                        <td width="150">
                                            <a data-toggle="tooltip" data-placement="top" title="Detail" href="?page=konselor&id=<?php echo $data['id_konselor']; ?>">
                                                <?php echo $data['nama_konselor']; ?>
                                            </a>
                                        </td>
                                        <td width="180"><?php echo $data['bidang']; ?></td>
                                    </tr>
                                <?php
                                    $no++;
                                } 
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else { 
                            $query = mysqli_query($mysqli, "SELECT * FROM tbl_konselor WHERE id_konselor='$_GET[id]'")
                                            or die('Ada kesalahan pada query tampil data konselor: '.mysqli_error($mysqli));

                            $data = mysqli_fetch_assoc($query); 
                        ?>
                            <h4 style="font-size:25px;margin-left:13px;margin-bottom:15px">
                                <span><?php echo $data['nama_konselor']; ?></span>
                            </h4>

                            <div style="font-size:14px;" class="profile-user-info">

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Alamat </div>

                                    <div class="profile-info-value">
                                        <span><?php echo $data['alamat']; ?></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> No. Telepon </div>

                                    <div class="profile-info-value">
                                        <span><?php echo $data['telepon']; ?></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Email </div>

                                    <div class="profile-info-value">
                                        <span><?php echo $data['email']; ?></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Bidang </div>

                                    <div class="profile-info-value">
                                        <span><?php echo $data['bidang']; ?></span>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <a style="width:100px" class="btn btn-default" href="?page=konselor">
                                Kembali
                            </a>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
         
        <!-- panggil file "sidebar-kanan.php" untuk menampilkan menu -->
        <?php include "sidebar-kanan.php" ?>

    </div>
</div>
<!-- /.row -->
