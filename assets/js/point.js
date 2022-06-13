// sweetalert 2
$("#ambil_point").click(function (e) {
  console.log("clicked");
  e.preventDefault();
  const isValid = $(this).attr("data-validKah");
  const href = $(this).attr("href");

  if (isValid == "true") {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Kupon berhasil diambil",
      showConfirmButton: false,
      timer: 1500,
    }).then((_) => (document.location.href = href));
  } else {
    Swal.fire({
      position: "center",
      icon: "error",
      title: "Point anda tidak cukup",
      showConfirmButton: false,
      timer: 1500,
    });
  }
});
