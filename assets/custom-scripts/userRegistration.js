function userLogin() {
  $.ajax({
    type: "POST",
    url: "../../controllers/userRegistration.php",
    data: $("#userLogin").serialize() + "&userLogin=true",
    dataType: "JSON",
    beforeSend: function () {},
    success: function (feedback) {
      if (feedback.status == 1) {
        toastr.success(feedback.msg);
        setTimeout(function () {
          location.replace("booking.php");
        }, 2000);
      } else {
        console.log(feedback.msg);
        toastr.error(feedback.msg);
      }
    },
    error: function (error) {
      console.log(error);
      toastr.warning("Error ocoured.");
    },
  });
}

function userRegistration() {
  $.ajax({
    type: "POST",
    url: "../../controllers/userRegistration.php",
    data: $("#userRegistration").serialize() + "&userReg=true",
    dataType: "JSON",
    beforeSend: function () {},
    success: function (feedback) {
      if (feedback.status == 1) {
        toastr.success(feedback.msg);
        setTimeout(function () {
          location.replace("sign-in.php");
        }, 2000);
      } else {
        console.log(feedback.msg);
        toastr.error(feedback.msg);
      }
    },
    error: function (error) {
      console.log(error);
      toastr.warning("Error occoured.");
    },
  });
}
