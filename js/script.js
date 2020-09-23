function searchData() {
  $(".emptyBefore").empty();
  $("body").removeClass('blink-2');

  $.ajax({
    url: "https://cors-anywhere.herokuapp.com/https://data.covid19.go.id/public/api/prov.json",
    type: "get",
    dataType: "json",
    success: function (result) {
      y = $("#search-input").val().toUpperCase();
      const x = result.list_data;


      for (let j = 0; j <= x.length; j++) {
        if (x[j].key == y) {
          var finalResult = x[j];
          console.log(finalResult);
          $("#provinsiError").empty();
          break;
        } else {
          $("#provinsiError").text("Nama Provinsi Salah");
        }
      }
      $("#provinsi").text("Provinsi : " + finalResult.key);
      $("#lastUpdated").html(
        "Last update : <a style='color:blue; display=inline;'>" +
        result.last_date +
        "</a>"
      );
      $("#jumlahKasus").text(finalResult.jumlah_kasus);
      $("#jumlahSembuh").text(finalResult.jumlah_sembuh);
      $("#jumlahMeninggal").text(finalResult.jumlah_meninggal);
      $("#jumlahDirawat").text(finalResult.jumlah_dirawat);
      $("#meninggal").text(finalResult.penambahan.meninggal);
      $("#sembuh").text(finalResult.penambahan.sembuh);
      $("#positif").text(finalResult.penambahan.positif);
      $("#lakilaki").text(finalResult.jenis_kelamin[0].doc_count);
      $("#perempuan").text(finalResult.jenis_kelamin[1].doc_count);
      $("#umur1").html(finalResult.kelompok_umur[0].doc_count + `org`);
      $("#umur2").html(finalResult.kelompok_umur[1].doc_count + `org`);
      $("#umur3").html(finalResult.kelompok_umur[2].doc_count + `org`);
      $("#umur4").html(finalResult.kelompok_umur[3].doc_count + `org`);
      $("#umur5").html(finalResult.kelompok_umur[4].doc_count + `org`);
      $("#umur6").html(finalResult.kelompok_umur[5].doc_count + `org`);
      $("#search-input").empty();
      $("body").addClass('blink-2');


    }
  });
}

function emptyMain() {
  $("main").empty();
}
$("#search-button").on("click", function () {
  searchData();
});

$("#search-input").on("keyup", function (e) {
  if (e.which === 13) {
    searchData();
  }
});