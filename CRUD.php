<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
    <link rel="shortcut icon" type="image/png/jpg" href="images/INI_LOGO_2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    

    <style>
      .navbar-bran {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap;
        font-weight: 700;
        line-height: 1;
        font-size: 20px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.9); }

      .navbar-bran:hover {
      color: rgba(0, 0, 0, 0.9); }

      
    </style>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-bran nav-link" href="index.php">Project SIJA</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item2"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item2">
              <a class="nav-link" style="cursor: pointer;">Project <i class="fas fa-caret-down"></i></a>
              <ul class="dropdown nav-link">
               <li><a href="smarthome.php">▶ Smarthome</a></li>
               <li><a href="smartcity.php">▶ SIJA CITY</a></li>
               <li><a href="project2.php">▶ Suhu</a></li>
             </ul>
            </li> 
	          <li class="nav-item2"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item2"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item2"><a href="CRUD.php" class="nav-link">CRUD</a></li>
	          <li class="nav-item cta" style="margin-bottom: 10px;"><a href="register.php" class="nav-link"> <span>Daftar</span></a></li>
              <li class="nav-item cta"><a href="logout.php" class="nav-link"> <span>LogOut</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Edit Data</h1>
                    <h2>Registered Web User Information</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="images/CRUD.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->
    
    <!-- Table Edit Data -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>User Information</h2>
            </div>

            <?php
            // Tampilkan pesan notifikasi jika ada
            if (isset($_SESSION['notification'])) {
                if ($_SESSION['notification'] == "1") {
                    $message = "Data berhasil diupdate!";
                    $class = "alert-success";
                } elseif ($_SESSION['notification'] == "2") {
                    $message = "Terjadi kesalahan saat memperbarui data!";
                    $class = "alert-danger";
                }

                // Hapus variabel sesi notifikasi setelah menampilkannya
                unset($_SESSION['notification']);
            ?>
                <div id="notification" class="alert <?php echo $class; ?>" role="alert">
                    <?php echo $message; ?>
                </div>
                <script>
                    // Sembunyikan notifikasi setelah 5 detik
                    setTimeout(function() {
                        var notification = document.getElementById("notification");
                        if (notification) {
                            notification.style.display = "none";
                        }
                    }, 5000);
                </script>
            <?php
            }
            ?>


            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box clearfix">
                            <div class="table-responsive">
                                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                    <table class="table user-list" style="width:100%" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><span>User</span></th>
                                                <th><span>Created</span></th>
                                                <th><span>Email</span></th>
                                                <th><span>Password</span></th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Koneksi ke database
                                            $koneksi = mysqli_connect("localhost", "root", "28", "admin_sija");
                                            if (mysqli_connect_errno()) {
                                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                                exit();
                                            }

                                            // Query untuk mendapatkan data
                                            $query = "SELECT * FROM logs";
                                            $result = mysqli_query($koneksi, $query);

                                            // Menampilkan data
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $modal_id = 'myModal' . $row['id']; // Gunakan ID unik untuk setiap modal
                                            ?>
                                                <tr>
                                                    <td>
                                                        <img src="images/org.png" alt="" class="small-img">
                                                        <a href="#" class="user-link"><?php echo $row['name']; ?></a> <br>
                                                        <span class="user-subhead"><?php echo $row['user_type']; ?></span>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['created']; ?>
                                                    </td>
                                                    <td>
                                                        <a href="#"><?php echo $row['email']; ?></a>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['password']; ?>
                                                    </td>
                                                    <td class="tabel-edit">
                                                        <!-- Tambahkan data-target dengan ID modal yang unik -->
                                                        <a href="#" id="edit" class="table-link" data-toggle="modal" data-target="#<?php echo $modal_id; ?>">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" id="delete" class="table-link danger">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa-solid fa-trash delete-button fa-stack-1x fa-inverse" style="color:white;" data-id="<?php echo $row['id']; ?>"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            mysqli_close($koneksi);
                                            ?>
                                </div>
                                </tbody>
                                </table>
                                <!-- End Table Edit Data-->

                                <!-- Modal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="modal-box">
                                                <!-- Button trigger modal -->
                                                <?php
                                                // Koneksi ke database
                                                error_reporting(E_ALL);
                                                ini_set('display_errors', 1);
                                                $koneksi = mysqli_connect("localhost", "nivor", "caesar17", "admin_sija");
                                                if (mysqli_connect_errno()) {
                                                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                                    exit();
                                                }

                                                // Query untuk mendapatkan data
                                                $query = "SELECT * FROM logs";
                                                $result = mysqli_query($koneksi, $query);

                                                // Menampilkan data
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $modal_id = 'myModal' . $row['id']; // Gunakan ID unik untuk setiap modal
                                                ?>
                                                    <i data-toggle="modal" data-target="#<?php echo $modal_id; ?>">
                                                    </i>
                                                <?php
                                                }
                                                mysqli_close($koneksi);
                                                ?>

                                                <!-- Modal -->
                                                <?php
                                                error_reporting(E_ALL);
                                                ini_set('display_errors', 1);
                                                // Koneksi ke database (diperlukan untuk mengambil data untuk setiap modal)
                                                $koneksi = mysqli_connect("localhost", "nivor", "caesar17", "admin_sija");
                                                if (mysqli_connect_errno()) {
                                                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                                    exit();
                                                }

                                                // Query untuk mendapatkan data
                                                $query = "SELECT * FROM logs";
                                                $result = mysqli_query($koneksi, $query);

                                                // Menampilkan data
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $modal_id = 'myModal' . $row['id']; // Gunakan ID unik untuk setiap modal
                                                ?>
                                                    <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="myModal">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <div class="modal-body">
                                                                    <div class="icon">
                                                                        <img src="images/CROoo" alt=" " class="icon-img">
                                                                    </div>
                                                                    <h3 class="title">- Edit Data -</h3>
                                                                    <p class="description">
                                                                        Isilah kolom yang sesuai dengan <br>
                                                                        data baru yang ingin dimasukkan
                                                                    </p>
                                                                    <form action="update_data.php" method="post">
                                                                        <div class="form-container" id="modall" style="max-height: 200px; overflow-y: auto;">
                                                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                                            <div class="form-group">
                                                                                <input class="form-control name" type="text" placeholder="Name" name="name" value="<?php echo $row['name']; ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input class="form-control name" type="text" placeholder="Password" name="password" value="<?php echo $row['password']; ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input class="form-control name" type="text" placeholder="Email" name="email" value="<?php echo $row['email']; ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input class="form-control name" type="text" placeholder="User_Type" name="user_type" value="<?php echo $row['user_type']; ?>">
                                                                            </div>
                                                                            <button class="subscribe" id="send" name="send">Edit Data</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                                }
                                                mysqli_close($koneksi);
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                    
                                            

                        <!-- // Ambil semua tombol delete -->
                        <script>
                            var deleteButtons = document.querySelectorAll('.delete-button');

                            // Tambahkan event listener untuk setiap tombol delete
                            deleteButtons.forEach(function(button) {
                                button.addEventListener('click', function() {
                                    // Konfirmasi penghapusan data
                                    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                                        // Ambil ID data yang akan dihapus
                                        var id = button.getAttribute('data-id');

                                        // Kirim permintaan penghapusan data ke delete_data.php
                                        fetch('delete_data.php?id=' + id, {
                                                method: 'DELETE'
                                            })
                                            .then(response => {
                                                // Periksa apakah penghapusan berhasil
                                                if (response.ok) {
                                                    // Muat ulang halaman setelah penghapusan berhasil
                                                    window.location.reload();
                                                } else {
                                                    // Tampilkan pesan kesalahan jika penghapusan gagal
                                                    alert('Gagal menghapus data.');
                                                }
                                            })
                                            .catch(error => {
                                                // Tampilkan pesan kesalahan jika terjadi kesalahan pada koneksi
                                                console.error('Error:', error);
                                                alert('Terjadi kesalahan pada koneksi.');
                                            });
                                    }
                                });
                            });
                        </script>
                </section>
                <!-- End Modal -->

    <footer class="ftco-footer ftco-bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">SMK Negeri 6 Malang</h2>
                        <p>Terwujudnya lulusan yang unggul dalam iman dan taqwa , ilmu dan teknologi, karakter, wirausaha, mampu melestarikan lingkungan, dan siap bersaing di era global.</p>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                        <li class="ftco-animate"><a href="https://x.com/smkn6malang?t=Tzpp6mOyTCYSbZrlb2WaZQ&s=09"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/share/h2cSw3SQbUPru25Z/?mibextid=qi2Omg"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/smkn6malang_official/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="about.php" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Features</a></li>
                            <li><a href="#" class="py-2 d-block">Projects</a></li>
                            <li><a href="#" class="py-2 d-block">Blog</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Info</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="https://maps.app.goo.gl/ub8Ena9QZUkWKoeW9"><span class="icon icon-map-marker"></span><span class="text">Jl. Ki Ageng Gribig No.28, Madyopuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139</span></a></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text"> (0341) 722216</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@smkn6malang.sch.id
                                        </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright SIJA SMKN 6 &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> | All rights reserved </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <!--Template maun js file-->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
</body>

</html>