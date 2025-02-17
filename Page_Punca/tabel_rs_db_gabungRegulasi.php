<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar Fasyankes</title>

    <!-- Favicon -->
    <link rel="icon" href="https://yankes.kemkes.go.id/faticon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://yankes.kemkes.go.id/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <Strict-Transport-Security: max-age=31536000; includeSubDomains>

        <style>
            .text-center {
                text-align: center;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: #FFFFF0;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Poppins', sans-serif;
            }

            p,
            span,
            button,
            ul,
            li {
                font-family: 'Poppins', sans-serif;
            }

            a,
            a:hover,
            a:focus {
                font-family: 'Poppins', sans-serif;
            }

            html {
                scroll-behavior: smooth;

            }

            .font-poppins {
                font-family: 'Poppins', sans-serif;
            }

            .custom-header {
                background-color: #f5f7f6;
                padding: 10px 20px;
                border-radius: 5px;
            }

            .card-body {
                padding: 30px;
            }

            .steam-cell-head {
                font-style: italic;
                color: black;
            }

            .nav-item :hover {
                color: #0E7478;
                font-weight: 500
            }

            .nav-link {
                padding: 0px 0px 0px 20px;

            }

            a:hover {
                color: #0E7478;

            }

            /* Mobile styles */
            @media screen and (max-width: 600px) {

                table,
                thead,
                tbody,
                th,
                td,
                tr {
                    display: block;
                }

                thead tr {
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                }

                tr {
                    margin-bottom: 15px;
                }

                td {
                    border: none;
                    position: relative;
                    padding-left: 50%;
                }

                td:before {
                    position: absolute;
                    top: 6px;
                    left: 6px;
                    width: 45%;
                    padding-right: 10px;
                    white-space: nowrap;
                    content: attr(data-label);
                    font-weight: bold;
                }
            }
        </style>


        </style>

        <!-- JS -->
        <script src="https://yankes.kemkes.go.id/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="https://yankes.kemkes.go.id/js/jquery/jquery-2.2.4.min.js"></script>
        <script src="https://yankes.kemkes.go.id/js/plugins/plugins.js"></script>
</head>



<body>


    <!-- nav home/sel punca -->
    <div class="mag-breadcrumb" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="margin-bottom:20px ;">
                            <li class="breadcrumb-item"><a href="https://yankes.kemkes.go.id"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
                            <li class="breadcrumb-item"><a href="sel_punca.html"><i aria-hidden="true"></i> Sel Punca</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Daftar Fasyankes</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="mag-breadcrumb" style="margin-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="margin: 0px;">
                            <li class="nav-item">
                                <a class="nav-link" href="#rumahsakit">Rumah Sakit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#labolatorium">Labolatorium</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#banksel">Bank Sel</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Isi content -->
    <div class="container" style="margin-top: 0%;">
        <div class="card shadow-sm" style="border-radius: 5px">
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <img src="asset/gambar/logo_h.png" class="rounded float-left" alt="" style="width:20px;height:45px;">
                        <div class="custom-header ">
                            <div class="d-flex flex-row" style="margin-left: 30px;">
                                <div class="kotak-header">
                                    <h5 style="margin: 0%;">Daftar Fasyankes Sel Punca <span class="steam-cell-head">(STEM CELL)</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>


            <div id="rumahsakit" class="container" style="padding: 0px 30px;">
                <div class="card shadow-sm" style="border-top-left-radius: 0%; border-top-right-radius: 0%; border-bottom-right-radius: 0%; border-bottom-left-radius: 0%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="container">
                                <div>
                                    <div class="d-flex flex-row">
                                        <h5 style="margin:0%">RUMAH SAKIT PENYELENGGARA PENELITIAN BERBASIS PELAYANAN SEL PUNCA <span class="steam-cell-head">(Stem Cell)</span> DI INDONESIA : </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?php
            $localhost = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "db_yanmedik";


            $conn = new mysqli($localhost, $dbusername, $dbpassword, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            ?>

            <div class="container" style="padding: 0px 30px;">
                <table class="table tabel-hover table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" width="5%">No
                            </th>
                            <th scope="col" width="35%">Rumah Sakit
                            </th>
                            <th scope="col" width="15%">Provinsi</th>
                            <th scope="col" width="15%" class="text-center">Kota/Kabupaten</th>
                            <th scope="col" width="15%" class="text-center">File Regulasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT nama_rs, provinsi, kab_kota, no_regulasi, file_regulasi FROM daftarrs_selpunca";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td>" . $row['nama_rs'] . "</td>";
                                echo "<td>" . $row['provinsi'] . "</td>";
                                echo "<td>" . $row['kab_kota'] . "</td>";
                                echo "<td class='text-center'><a href='" . $row["file_regulasi"] . "' target='_blank'>" . $row["no_regulasi"] . "</a></td>";
                                echo "</tr>";
                                $no++;
                            }
                        } else {
                            echo "<tr><td colspan='6'>Data tidak ditemukan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>



            <div id="labolatorium" class="container" style="padding: 0px 30px; margin-top: 20px;">
                <div class="card shadow-sm" style="border-top-left-radius: 0%; border-top-right-radius: 0%; border-bottom-right-radius: 0%; border-bottom-left-radius: 0%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="container">
                                <div>
                                    <div class="d-flex flex-row">
                                        <h5 style="margin:0%">LABORATORIUM PENGOLAH SEL PUNCA <span class="steam-cell-head">(STEM CELL)</span> : </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="simrsgos">
                <div class="container" style="padding: 0px 30px;">



                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

                    <table class="table tabel-hover table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="5%">No
                                </th>
                                <th scope="col" width="35%">LABORATORIUM
                                </th>
                                <th scope="col" width="15%">Provinsi</th>
                                <th scope="col" width="15%" class="text-center">Kota/Kabupaten</th>
                                <th scope="col" width="15%" class="text-center">No Regulasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT nama_lab, provinsi, kab_kota, no_regulasi, file_regulasi FROM daftarklinik_selpunca";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $no = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row['nama_lab'] . "</td>";
                                    echo "<td>" . $row['provinsi'] . "</td>";
                                    echo "<td>" . $row['kab_kota'] . "</td>";
                                    echo "<td class='text-center'><a href='" . $row["file_regulasi"] . "' target='_blank'>" . $row["no_regulasi"] . "</a></td>";
                                    echo "</tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr><td colspan='6'>Data tidak ditemukan</td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </section>


            <div id="banksel" class="container" style="padding: 0px 30px; margin-top: 20px;">
                <div class="card shadow-sm" style="border-top-left-radius: 0%; border-top-right-radius: 0%; border-bottom-right-radius: 0%; border-bottom-left-radius: 0%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="container">
                                <div>
                                    <div class="d-flex flex-row">
                                        <h5 style="margin:0%">BANK SEL PUNCA <span class="steam-cell-head">(STEM CELL)</span> : </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="simrsgos">
                <div class="container" style="padding: 0px 30px;">



                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

                    <table class="table tabel-hover table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="5%">No
                                </th>
                                <th scope="col" width="35%">Bank Sel Punca
                                </th>
                                <th scope="col" width="15%">Provinsi</th>
                                <th scope="col" width="15%" class="text-center">Kota/Kabupaten</th>
                                <th scope="col" width="15%" class="text-center">No Regulasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT nama_banksel, provinsi, kota_kab, no_regulasi, file_regulasi FROM daftarbanksel_selpunca";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $no = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row['nama_banksel'] . "</td>";
                                    echo "<td>" . $row['provinsi'] . "</td>";
                                    echo "<td>" . $row['kota_kab'] . "</td>";
                                    echo "<td class='text-center'><a href='" . $row["file_regulasi"] . "' target='_blank'>" . $row["no_regulasi"]  . "</a></td>";
                                    echo "</tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr><td colspan='6'>Data tidak ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>

    <!-- footer -->
    <style>
        @media only screen and (max-width: 600px) {
            .hidden {
                display: none !important;
            }

            .logo {
                max-width: 137px;
            }
        }
    </style>


    <script>
        $(window).on('load', function() {
            $('#modalInfo').modal('show');
        });
    </script>
    <!-- ##### About Us Area End ##### -->

    <style>
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #1f2937;
        }

        .bg-green-600 {
            background-color: #61c3a2;
        }

        @media only screen and (max-width: 600px) {
            .hidden {
                display: none;
            }

            .logofooter {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }


        .btnInstagram {
            padding-top: 5px !important;
            padding-left: 8px !important;
            padding-right: 8px !important;
            padding-bottom: 5px !important;
            background-color: #C13584;
            color: white;
        }

        .btnFacebook {
            padding-top: 5px !important;
            padding-left: 8px !important;
            padding-right: 8px !important;
            padding-bottom: 5px !important;
            background-color: #4267B2;
            color: white;
        }

        .btnYoutube {
            padding-top: 5px !important;
            padding-left: 8px !important;
            padding-right: 8px !important;
            padding-bottom: 5px !important;
            background-color: #db4a39;
            color: white;
        }

        .btnTwitter {
            padding-top: 5px !important;
            padding-left: 8px !important;
            padding-right: 8px !important;
            padding-bottom: 5px !important;
            background-color: #1DA1F2;
            color: white;
        }
    </style>

    <!-- footer -->

    <div class="footer" style="margin-top: 30px;">
        <div class="container pt-5 pb-5">
            <div class="row">

                <div class="col-md-5 ">
                    <div class="logofooter" id="footer">
                        <img style="width: 240px" src="https://yankes.kemkes.go.id/img/logo putih.png" />
                    </div>

                    <div style="color: white; display: flex;" class="mt-3">
                        <i style="width:20px; height:20px; display: flex;" class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </i>
                        Jl. HR. Rasuna Said Blok X-5 Kav. 4 - 9, Kuningan, RT.1/RW.2, Kuningan, Kuningan Tim., Kota
                        Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950
                    </div>

                    <div style="color: white; display: flex;" class="mt-3">
                        <i style="width:20px; height:20px; display: flex;" class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </i>
                        humas.yankes@kemkes.go.id
                    </div>

                    <!--<div style="color: white; display: flex;" class="mt-3">
          <i style="width:20px; height:20px; display: flex;" class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
            </svg>
          </i>
          021-5222432
        </div>-->
                    </h5>

                    <div class=" mt-3">
                        <a href="https://www.instagram.com/ditjenyankes/" class="btn btnInstagram" target="_blank"><i
                                class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCj_NnsqEVURJycqjWzVpRSA" class="btn btnYoutube"
                            target="_blank"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a>
                        <a href="https://id-id.facebook.com/ditjen.yankes" class="btn btnFacebook" target="_blank"><i
                                class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/ditjenyankes" class="btn btnTwitter" target="_blank"><i
                                class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-md-5 hidden">
                    <h4 class="font-bold" style="color: white;">Satuan Kerja</h4>
                    <ul class="text-sm">
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/profil/satker/Sekretariat Direktorat Jenderal Pelayanan Kesehatan">Sekretariat
                                Direktorat Jenderal Pelayanan Kesehatan</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/profil/satker/Direktorat Pelayanan Kesehatan Rujukan">Direktorat
                                Pelayanan Kesehatan Rujukan</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/profil/satker/Direktorat Pelayanan Kesehatan Primer">Direktorat
                                Pelayanan Kesehatan Primer</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/profil/satker/Direktorat Tata Kelola Pelayanan Kesehatan">Direktorat
                                Tata Kelola Pelayanan Kesehatan</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/profil/satker/Direktorat Fasilitas Pelayanan Kesehatan">Direktorat
                                Fasilitas Pelayanan Kesehatan</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/profil/satker/Direktorat Mutu Pelayanan Kesehatan">Direktorat
                                Mutu Pelayanan Kesehatan</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white min-w-max"><a
                                style="color: white;font-size: 14px" href="https://yankes.kemkes.go.id/upt">Unit
                                Pelaksana Tugas Pelayanan Kesehatan</a></li>
                    </ul>
                </div>

                <div class="col-md-2 hidden">
                    <h4 class="font-bold" style="color: white;">Link Cepat</h4>
                    <ul class="text-sm">
                        <li class="text-gray-300 hover:text-white"><a style="color: white;font-size: 16px"
                                href="https://yankes.kemkes.go.id/">Beranda</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white"><a style="color: white;font-size: 14px"
                                href="#">Kebijakan</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white"><a style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/pusatbantuan">FAQ</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white"><a style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/sitemap">Peta Situs</a></li>
                        <li class="mt-2 text-gray-300 hover:text-white"><a style="color: white;font-size: 14px"
                                href="https://yankes.kemkes.go.id/contact">Hubungi Kami</a></li>

                    </ul>
                </div>

            </div>
        </div>
        <div class="px-5 lg:px-40 text-center w-full bg-green-600 text-white text-xs py-2"
            style="color: white; font-size: 13px">
            <i class="fa fa-copyright" aria-hidden="true"></i> 2011-2024 Direktorat Jenderal Pelayanan Kesehatan -
            Kementerian Kesehatan Republik Indonesia
        </div>
    </div>
    </div>
    </div>

    <!-- scroll button up -->
    <style>
        #scrollTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #18b2a2;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            display: none;
            transition: opacity 0.3s, transform 0.3s;
        }

        #scrollTopBtn:hover {
            background-color: #b8d154;
        }
    </style>

    <button id="scrollTopBtn" title="Kembali ke atas"><img src="asset/gambar/up.png" alt=""></button>

    <script>
        const scrollTopBtn = document.getElementById("scrollTopBtn");
        let lastScrollTop = 0;

        window.addEventListener("scroll", function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 200) {
                scrollTopBtn.style.display = "block";

                // Efek paralaks
                let paralaxOffset = (scrollTop - lastScrollTop) * 0.5;
                scrollTopBtn.style.transform = `translateY(${paralaxOffset}px)`;

                // Fade in/out berdasarkan posisi scroll
                let opacity = Math.min((scrollTop - 200) / 300, 1);
                scrollTopBtn.style.opacity = opacity;
            } else {
                scrollTopBtn.style.display = "none";
            }

            lastScrollTop = scrollTop;
        });

        scrollTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
    <!-- samape sini scrol -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
        integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
        crossorigin="anonymous"></script>
    <script src="https://yankes.kemkes.go.id/js/active.js"></script>
</body>

</html>