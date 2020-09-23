function searchData() {
  $(".emptyBefore").empty();

  $.ajax({
    url: "https://data.covid19.go.id/public/api/prov.json",
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
      $("#umur1").text(finalResult.kelompok_umur[0].doc_count);
      $("#umur2").text(finalResult.kelompok_umur[1].doc_count);
      $("#umur3").text(finalResult.kelompok_umur[2].doc_count);
      $("#umur4").text(finalResult.kelompok_umur[3].doc_count);
      $("#umur5").text(finalResult.kelompok_umur[4].doc_count);
      $("#umur6").text(finalResult.kelompok_umur[5].doc_count);
      $("#search-input").empty();


    }
  });
}

$("#search-button").on("click", function () {
  searchData();
});

$("#search-input").on("keyup", function (e) {
  if (e.which === 13) {
    searchData();
  }
});