<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <title>Test Covid</title>

  <style>

    h6 {
      background-color: aqua;
      color: black;
      padding: 2px;
    }

    p {
      font-size: 22px;
    }

    @-webkit-keyframes blink-1 {

      0%,
      50%,
      100% {
        opacity: 1;
      }

      25%,
      75% {
        opacity: 0;
      }
    }

    @-webkit-keyframes blink-2 {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.2;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes blink-2 {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.2;
      }

      100% {
        opacity: 1;
      }
    }

    .blink-2 {
      -webkit-animation: blink-2 1.2s both;
      animation: blink-2 1.2s both;
    }

    .card {
      box-shadow: 3px 3px;
    }

    .bg-sembuh {
      background-color: aqua;
    }

    .bg-meninggal {
      background-color: rgb(156, 156, 156);
    }

    .bg-kasus {
      background-color: rgb(255, 30, 30);
    }

    .bg-dirawat {
      background-color: rgb(231, 255, 20);
    }

    .bg-penambahan {
      background-color: rgb(238, 189, 155);
    }

    .bg-kelamin {
      background-color: rgb(55, 255, 105);
    }

    .bg-umur {
      background-color: rgb(70, 187, 255);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active text-center justify-content-center" href="#">Ngetes API Covid</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3">
      <div class="col text-center">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Nama Provinsi" id="search-input" />
          <div class="input-group-append">
            <button class="btn btn-dark" type="button" id="search-button">
              Search
            </button>
          </div>
        </div>

        <div class="accordion" id="accordionExample">

          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left text-muted" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <a href="#">Daftar Provinsi ↓</a> (tekan jika butuh)  
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row text-left">
                    <div class="col-md-3 col-sm-12">
                      1. DKI Jakarta
                      <br>
                      2. Aceh
                      <br>
                      3. Sumatera Utara
                      <br>
                      4. Sumatera Barat
                      <br>
                      5. Riau
                      <br>
                      6. Kepulauan Riau
                      <br>
                      7. Jambi
                      <br>
                      8. Bengkulu
                    </div>
                    <div class="col-md-3 col-sm-12">
                      9. Sumatera Selatan
                      <br>
                      10. Kepulauan Bangka Belitung
                      <br>
                      11. Lampung
                      <br>
                      12. Banten
                      <br>
                      13. DKI Jakarta
                      <br>
                      14. Jawa Barat
                      <br>
                      15. Jawa Tengah
                      <br>
                      16. Jawa Timur
                    </div>
                    <div class="col-md-3 col-sm-12">
                      17. Daerah Istimewa Yogyakarta
                      <br>
                      18. Bali
                      <br>
                      19. Nusa Tenggara Barat
                      <br>
                      20. Nusa Tenggara Timur
                      <br>
                      21. Kalimantan Barat
                      <br>
                      22. Kalimantan Selatan
                      <br>
                      23. Kalimantan Tengah
                      <br>
                      24. Kalimantan Timur
                    </div>
                    <div class="col-md-3 col-sm-12">
                      25. Gorontalo
                      <br>
                      26. Sulawesi Barat
                      <br>
                      27. Sulawesi Selatan
                      <br>
                      28. Sulawesi Tenggara
                      <br>
                      29. Sulawesi Tengah
                      <br>
                      30. Sulawesi Utara
                      <br>
                      31. Maluku
                      <br>
                      32. Maluku Utara
                      <br>
                      33. Papua
                      <br>
                      34. Papua Barat
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h2 id="provinsiError" style="color:red;" class="text-center emptyBefore mt-3"></h2>
        <hr style="margin-right: -70px; margin-left: -70px" />


        <h2 id="provinsi" class="text-left ml-3 emptyBefore"></h2>
        <h5 id="lastUpdated" class="text-left ml-3 emptyBefore"></h5>
      </div>
    </div>

    <div class="row mt-3 text-center">
      <div class="col mb-4">
        <div class="card">
          <div class="card-header bg-sembuh">
            <h4>Jumlah Sembuh</h4>
          </div>
          <div class="card-body">
            <p id="jumlahSembuh" class="card-text emptyBefore"></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-header bg-meninggal">
            <h4 class="">Jumlah Meninggal</h4>
          </div>
          <div class="card-body">
            <p id="jumlahMeninggal" class="card-text emptyBefore"></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-header bg-kasus">
            <h4 class="">Jumlah Kasus</h4>
          </div>
          <div class="card-body">
            <p id="jumlahKasus" class="card-text emptyBefore"></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-header bg-dirawat">
            <h4 class="">Jumlah Dirawat</h4>
          </div>
          <div class="card-body">
            <p id="jumlahDirawat" class="card-text emptyBefore"></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3 mb-5 text-center">
      <div class="col">
        <div class="card">
          <div class="card-header bg-penambahan">
            <h5 class="">Jumlah Penambahan Sehari Terakhir</h5>
          </div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class=" col-md-4 col-sm-12 penambahan-border">
                  <h4>Meninggal</h4>
                  <p id="meninggal" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class=" col-md-4 col-sm-12 ">
                  <h4>Sembuh</h4>
                  <p id="sembuh" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class=" col-md-4 col-sm-12 ">
                  <h4>Positif</h4>
                  <p id="positif" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3 mb-5 justify-content-center text-center">
      <div class="col-8">
        <div class="card">
          <div class="card-header bg-kelamin">
            <h5 class="">Jenis Kelamin</h5>
          </div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col penambahan-border">
                  <h4>Laki - Laki</h4>
                  <p id="lakilaki" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class="col penambahan-border">
                  <h4>Perempuan</h4>
                  <p id="perempuan" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3 mb-3 justify-content-center text-center">
      <div class="col">
        <div class="card">
          <div class="card-header bg-umur">
            <h5 class="">Kategori Umur (dalam tahun)</h5>
          </div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-2 col-sm-6 penambahan-border">
                  <h4>0 - 5</h4>
                  <p id="umur1" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class="col-md-2 col-sm-6 penambahan-border">
                  <h4>6 - 18</h4>
                  <p id="umur2" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class="col-md-2 col-sm-6 penambahan-border">
                  <h4>19 - 30</h4>
                  <p id="umur3" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class="col-md-2 col-sm-6 penambahan-border">
                  <h4>31 - 45</h4>
                  <p id="umur4" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class="col-md-2 col-sm-6 penambahan-border">
                  <h4>46 - 59</h4>
                  <p id="umur5" class="emptyBefore mb-3" style="margin-bottom: -10px"></p>
                </div>
                <div class="col penambahan-border">
                  <h4>≥60</h4>
                  <p id="umur6" class="emptyBefore mb-1" style="margin-bottom: -10px"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col">
            <h6 style="background-color:transparent;">API From : https://data.covid19.go.id/public/api/prov.json ||
              Follow <b>@subordinatif</b></h6>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="js/script.js"></script>
</body>

</html>