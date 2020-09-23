<?php 
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: GET, POST");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

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
      .penambahan-border {
        margin-right: 5px;
        margin-left: 5px;
        border-radius: 4px;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#"> </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a
            class="nav-item nav-link active text-center justify-content-center"
            href="#"
            >Ngetes API Covid</a
          >
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row mt-3">
        <div class="col text-center">
          <div class="input-group mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Masukkan Nama Provinsi"
              id="search-input"
            />
            <div class="input-group-append">
              <button class="btn btn-dark" type="button" id="search-button">
                Search
              </button>
            </div>
          </div>
          <h2 id="provinsiError" class="text-center emptyBefore"></h2>
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
                  <div class="col penambahan-border">
                    <h4>Meninggal</h4>
                    <p
                      id="meninggal"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>Sembuh</h4>
                    <p
                      id="sembuh"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>Positif</h4>
                    <p
                      id="positif"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
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
                    <p
                      id="lakilaki"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>Perempuan</h4>
                    <p
                      id="perempuan"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3 mb-5 justify-content-center text-center">
        <div class="col">
          <div class="card">
            <div class="card-header bg-umur">
              <h5 class="">Kategori Umur (dalam tahun)</h5>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col penambahan-border">
                    <h4>0 - 5</h4>
                    <p
                      id="umur1"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>6 - 18</h4>
                    <p
                      id="umur2"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>19 - 30</h4>
                    <p
                      id="umur3"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>31 - 45</h4>
                    <p
                      id="umur4"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>46 - 59</h4>
                    <p
                      id="umur5"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                  <div class="col penambahan-border">
                    <h4>≥60</h4>
                    <p
                      id="umur6"
                      class="emptyBefore"
                      style="margin-bottom: -10px"
                    ></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </body>
</html>
