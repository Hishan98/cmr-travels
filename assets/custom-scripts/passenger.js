function ceratePassenger() {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminPassengerController.php",
    data: $("#createPassengerForm").serialize() + "&adminCreatePassenger=true",
    dataType: "JSON",
    beforeSend: function () {},
    success: function (feedback) {
      if (feedback.status == 1) {
        toastr.success(feedback.msg);
        setTimeout(function () {
          location.reload();
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

function updatePassenger() {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminPassengerController.php",
    data: $("#updatePassengerForm").serialize() + "&adminUpdatePassenger=true",
    dataType: "JSON",
    beforeSend: function () {},
    success: function (feedback) {
      if (feedback.status == 1) {
        toastr.success(feedback.msg);
        setTimeout(function () {
          location.reload();
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

function deletePassenger() {
  var nic = document.getElementById("del_passenger_nic").value;
  $.ajax({
    type: "POST",
    url: "../../controllers/adminPassengerController.php",
    data: {
      nic: nic,
      adminDeletePassenger: true,
    },
    dataType: "JSON",
    beforeSend: function () {},
    success: function (feedback) {
      if (feedback.status == 1) {
        toastr.success(feedback.msg);
        setTimeout(function () {
          location.reload();
        }, 2000);
      } else {
        toastr.error(feedback.msg);
      }
    },
    error: function (error) {
      console.log(error);
      toastr.warning("Error occoured.");
    },
  });
}
