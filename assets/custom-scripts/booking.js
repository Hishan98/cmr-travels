function cerateBooking() {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminBookingController.php",
    data: $("#createBookingForm").serialize() + "&adminCreateBooking=true",
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

function updateBooking() {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminBookingController.php",
    data: $("#updateBookingForm").serialize() + "&adminUpdateBooking=true",
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

function deleteBooking() {
  var id = document.getElementById("del_booking_id").value;
  $.ajax({
    type: "POST",
    url: "../../controllers/adminBookingController.php",
    data: {
      id: id,
      adminDeleteBooking: true,
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
