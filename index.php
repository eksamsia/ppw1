<!--
    Responsi UAS Praktikum Pemrograman Web 1
    | Eka Samsiati Putri
    20/457259/SV/17706

-->

<!DOCTYPE html>
<html>
    <head>
        <title>
            Responsi UAS
        </title>
        <link rel="stylesheet" href="style.css">
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />

        <!-- My CSS -->
        <link rel = "stylesheet" href="style.css" />
        
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(101, 136, 141)" shadow-sm>
      <div class="container">
        <a class="navbar-brand" href="#">Marketplace Kopma UGM </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#about">About</a> </li>
            <li class="nav-item">
              <a class="nav-link active" href="#divisiusaha">Divisi Usaha</a> </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contact">Contact</a> </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Jumbotron: menu home --> 
    <!-- jumbotron  --> 
    <section class="jumbotron text-center"> 
      <img src="aciko.png" alt="aciko" width="180" class="rounded-circle" />
      <h1 class="display-4">ACIKO</h1>
      <p class="lead">Official Mascot of Koperasi Kopma UGM </p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L20,229.3C40,235,80,245,120,256C160,267,200,277,240,256C280,235,320,181,360,149.3C400,117,440,107,480,122.7C520,139,560,181,600,208C640,235,680,245,720,224C760,203,800,149,840,133.3C880,117,920,139,960,154.7C1000,171,1040,181,1080,170.7C1120,160,1160,128,1200,144C1240,160,1280,224,1320,256C1360,288,1400,288,1420,288L1440,288L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,
      240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>  <!-- ini adalah fitur untuk membuat efek wave pd 
      jumbotronnya, yaitu di getwaves.io --> 
    </section>
   
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb"> <!--mb :margin bottom--> 
          <div class="col">
            <a name= 'about'><h2>About</h2></a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4 "> <!-- md disini adalah infix u/responsive-->
          <p>
          Berdiri sejak 1982, Koperasi “Kopma UGM” lahir dari keinginan untuk memenuhi kebutuhan mahasiswa melalui unit usaha yang dikelola oleh mahasiswa sendiri. Tercatat, momen terbentuknya Koperasi “Kopma UGM” sebagai koperasi di kalangan mahasiswa UGM pada 20 Maret 1982 turut dihadiri dua orang pejabat Departemen Koperasi.
           Selanjutnya, Kopma UGM resmi ber-Badan Hukum dengan Akte Pendirian No.1246/BH/XI didapat dari Departemen Perdagangan dan Koperasi dengan Klasifikasi Koperasi Serba Usaha pada 2 Agustus 1982.
          </p>
        </div>
        <div class="col-md-4">
          <p> Koperasi “Kopma UGM” merupakan organisasi yang berbadan hukum koperasi sekaligus Unit Kegiatan Mahasiswa (UKM) di lingkungan Universitas Gadjah Mada, beranggotakan
             orang-perorang yang telah terdaftar sebagai anggota. Sebagai organisasi yang berbadan hukum koperasi, Koperasi “Kopma UGM” memiliki tujuan untuk menyejahterakan anggota pada khususnya dan masyarakat pada umumnya dengan berasaskan kekeluargaan.
        </p>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#bae0e2" fill-opacity="1" d="M0,96L40,101.3C80,107,160,117,240,154.7C320,192,400,256,480,272C560,288,640,256,720,234.7C800,213,880,203,960,208C1040,213,1120,235,1200,234.7C1280,235,1360,213,1400,202.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,
      320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> 
    </section>
    <!--Akhir About-->

    <!-- divisi Usaha swalayan --> 
      <section id= "Usaha" style="background-color: #bae0e2">
        <div class="container">
          <div class ="row text-center mb" > <!-- mb = marginBottom-->
            <div class="cols"></div>
              <a name='divisiusaha'><h2> Divisi Usaha </h2></a>
                <h3>Swalayan Kopma UGM</h3>
                <br>
                <br>
              <table>
          <?php
                        include 'connection.php';    // import dari file PHP external
                        $data = mysqli_query($connection, "SELECT * FROM swalayan");  // mysqli_query() : meletakkan query pada database. Berisikan permintaan koneksi ke database dan query table. Disini, query melakkan pengambilan seluruh data (*) dari tabel menu_pizza_hut.
                        $numrows = mysqli_num_rows($data);  // mendapatkan banyak baris/row dari data tabel. Disini, output yang dihasilkan adalah 8.

                        // $data as $menu    : dapat diartikan nama array $data akan diubah menjadi variabel perantara $menu yang berisi data array pada perulangan
                        foreach ($data as $swalayan) {  // perulangan khusus untuk pembacaan nilai array.
                            if ($numrows == 4) {    // pengecekan kondisi (if statement).
                                echo "<tr>";        // melakukan output berupa tag awal <tr>.
                            }
                            // $menu['harga']    : dapat diartikan mendapatkan data dari nama kolom 'harga' dari database dengan variabel perantara $menu.
                            echo "
                                <td>
                                    <img src='".$swalayan['gambar']."' height='125px' alt='".$swalayan['nama']."'>
                                    <h4>".$swalayan['nama']."</h4>
                                    <p>Rp. ".$swalayan['harga']."</p>
                                    <button onclick='alert(`Pesanan: ".$swalayan['nama'].".\nHarga: Rp. ".$swalayan['harga']."`)'>Pesan</button>
                                </td>
                            ";
                            $numrows--;             // melakukan pengurangan value sebanyak 1 setiap terjadi perulangan di foreack.
                            if ($numrows == 4) {
                                echo "</tr>";
                            }
                        }
                    ?>
            </table>
            </div>
          </div>
        </div>
      </section>
    

      <!-- divisi usaha gamashirt -->
      <section id= "Usaha" style="background-color: #bae0e2">
        <div class="container">
          <div class ="row text-center mb" > <!-- mb = marginBottom-->
            <div class="cols"></div>
                <br>
                <br>
                <h3>Gamashirt</h3>
                <br>
                <br>
              <table>
          <?php
                        include 'connection.php';    // import/menambahkan dari file PHP external
                        $data = mysqli_query($connection, "SELECT * FROM gamashirt");  // mysqli_query() : melakkan query pada database. Berisikan permintaan koneksi ke database dan query table. Disini, query melakkan pengambilan seluruh data (*) dari tabel menu_pizza_hut.
                        $numrows = mysqli_num_rows($data);  // mendapatkan banyak baris/row dari data tabel. Disini, output yang dihasilkan adalah 8.

                        // $data as $menu    : dapat diartikan nama array $data akan diubah menjadi variabel perantara $menu yang berisi data array pada perulangan
                        foreach ($data as $gamashirt) {  // perulangan khusus untuk pembacaan nilai array.
                            if ($numrows == 4) {    // pengecekan kondisi (if statement).
                                echo "<tr>";        // melakukan output berupa tag awal <tr>.
                            }
                            // $menu['harga']    : dapat diartikan mendapatkan data dari nama kolom 'harga' dari database dengan variabel perantara $menu.
                            echo "
                                <td>
                                    <img src='".$gamashirt['gambar']."' height='125px' alt='".$gamashirt['nama']."'>
                                    <h4>".$gamashirt['nama']."</h4>
                                    <p>Rp. ".$gamashirt['harga']."</p>
                                    <button onclick='alert(`Pesanan: ".$gamashirt['nama'].".\nHarga: Rp. ".$gamashirt['harga']."`)'>Pesan</button>
                                </td>
                            ";
                            $numrows--;             // melakukan pengurangan value sebanyak 1 setiap terjadi perulangan di foreack.
                            if ($numrows == 4) {
                                echo "</tr>";
                            }
                        }
                    ?>
            </table>
            </div>
          </div>
        </div>
      </section>

      <!-- divisi usaha i see milk --> 
      <section id= "Usaha" style="background-color: #bae0e2" padding: 16px >
        <div class="container">
          <div class ="row text-center mb" > <!-- mb = marginBottom-->
            <div class="cols"></div>
            <br>
            <br>
                <h3>I See Milk</h3>
                <br>
                <br>
              <table>
          <?php
                        include 'connection.php';    // import/menambahkan dari file PHP external
                        $data = mysqli_query($connection, "SELECT * FROM iseemilk");  // mysqli_query() : melakkan query pada database. Berisikan permintaan koneksi ke database dan query table. Disini, query melakkan pengambilan seluruh data (*) dari tabel menu_pizza_hut.
                        $numrows = mysqli_num_rows($data);  // mendapatkan banyak baris/row dari data tabel. Disini, output yang dihasilkan adalah 8.

                        // $data as $menu    : dapat diartikan nama array $data akan diubah menjadi variabel perantara $menu yang berisi data array pada perulangan
                        foreach ($data as $iseemilk) {  // perulangan khusus untuk pembacaan nilai array.
                            if ($numrows == 4) {    // pengecekan kondisi (if statement).
                                echo "<tr>";        // melakukan output berupa tag awal <tr>.
                            }
                            // $menu['harga']    : dapat diartikan mendapatkan data dari nama kolom 'harga' dari database dengan variabel perantara $menu.
                            echo "
                                <td>
                                    <img src='".$iseemilk['gambar']."' height='125px' alt='".$iseemilk['nama']."'>
                                    <h4>".$iseemilk['nama']."</h4>
                                    <p>Rp. ".$iseemilk['harga']."</p>
                                    <button onclick='alert(`Pesanan: ".$iseemilk['nama'].".\nHarga: Rp. ".$iseemilk['harga']."`)'>Pesan</button>
                                </td>
                            ";
                            $numrows--;             // melakukan pengurangan value sebanyak 1 setiap terjadi perulangan di foreack.
                            if ($numrows == 4) {
                                echo "</tr>";
                            }
                        }
                    ?>
            </table>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#bae0e2" fill-opacity="1" d="M0,96L40,101.3C80,107,160,117,240,154.7C320,192,400,256,480,272C560,288,640,256,720,234.7C800,213,880,203,960,208C1040,213,1120,235,1200,234.7C1280,235,1360,213,1400,202.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,
      320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
      </section>

      <!-- contact / footer-->
    <footer class='footer' style="background-color: rgb(101, 136, 141);">
      <div class='container p-4'>
      <div class= "row text-center mb" > <!-- mb = marginBottom-->
        <div class="cols"></div>
        <a name='contact'><h3> Koperasi Kopma UGM </h3></a>
        <p>Front Office: Jalan Cik Ditiro No. 14. Terban, Gondokusuman, Kota Yogyakarta, DIY</p>
        <p> Divisi Usaha: Ruko UGM Jalan Agro Selokan, Caturtunggal, Depok, DIY</p>
        <section class="mb-4">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .fa {
                padding: 20px;
                font-size: 30px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                margin: 2px 5px;
                border-radius: 50%;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-google {
                background: #dd4b39;
                color: white;
            }

            .fa-linkedin {
                background: #007bb5;
                color: white;
            }

            .fa-instagram {
                background: #125688;
                color: white;
            }
        </style>
        <a href="https://kopma.ugm.ac.id/" class="fa fa-google"></a>
        <a href="https://www.linkedin.com/company/kopmaugm" class="fa fa-linkedin"></a>
        <a href="https://www.instagram.com/kopmaugm/" class="fa fa-instagram"></a>
        <div class='text-center p-3' style="background-color: rgb(101, 136, 141)"  shadow-sm >
          <h6 style="color: #fff;"> © 2021 Copyright: Eka Samsiati Putri</h6>
        </div>
      </div>
      </div>
    </footer> 
        <script>
            alert("Selamat datang di Market Kopma UGM, untuk melanjutkan pemesanan silahkan klik 'OK'.");
            var nama = prompt("Silahkan masukkan nama Anda untuk memesan.");</script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
 
  </body>
</html>
