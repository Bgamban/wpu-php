// // Ambil elemen yang dibutuhkan
// var keyword = document.getElementById("#keyword");
// var tombolCari = document.getElementById("tombol-cari");
// var container = document.getElementById("container");
// // tambhakan event ketikakeyword ditulis
// keyword.addEventListener("keyup", function () {
//   // buat object ajax
//   var xhr = new XMLHttpRequest();
//   // cek kesiapan ajax
//   xhr.onreadystatechange = function () {
//     if ((xhr.readyState = 4 && xhr.status == 200)) {
//       container.innerHTML = xhr.responseText;
//     }
//   };
//   // eksekusi ajax
//   xhr.open("GET", "../ajax/buku.php?keyword=" + keyword.value, true);
//   xhr.send();
// });
// // ini adalah event
// // tombolCari.addEventListener('click', function(){
// // })

$(document).ready(function () {
  // Hilangkan tombol cari
  $("#tombol-cari").hide();
  // munculkan item
  $("#keyword").on("keyup", function () {
    $(".loader").show();
    // ajax menggunakan load
    // $("#container").load("ajax/buku.php?keyword" + $("keyword").val());
    // $.get
    $.get("ajax/buku.php?keyword=" + $("#keyword").val(), function (data) {
      $("container").html(data);
      $(".loader").hide();
    });
    // event ketika keyword ditulis
    // $("#container").load("ajax/buku.php?keyword=" + $("#keyword").val());
  });
});
