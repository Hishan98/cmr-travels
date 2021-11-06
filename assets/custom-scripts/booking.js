function cerateBookingFun(modelId) {
  var data = $("#createBookingForm").serialize() + "&adminCreateBooking=true";
  scheduleAjaxPost(data, modelId);
}
function updateBookingFun(modelId) {
  var data = $("#updateBookingForm").serialize() + "&adminUpdateBooking=true";
  scheduleAjaxPost(data, modelId);
}
function deleteBookingFun(modelId) {
  var data = $("#modelBookingForm").serialize() + "&adminDeleteBooking=true";
  scheduleAjaxPost(data, modelId);
}

function scheduleAjaxPost(data, modelId) {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminBookingController.php",
    data: data,
    dataType: "JSON",
    beforeSend: function () {
      $("#" + modelId).modal("hide");
      pageLoaderToggle(true);
    },
    success: function (feedback) {
      if (feedback.status == 1) {
        toastr.success(feedback.msg);
        setTimeout(function () {
          location.reload();
        }, 2000);
      } else {
        toastr.warning(feedback.msg);
      }
      pageLoaderToggle(false);
    },
    error: function (error) {
      errorDisplay(error);
      pageLoaderToggle(false);
    },
  });
}

// function cerateBooking() {
//   $.ajax({
//     type: "POST",
//     url: "../../controllers/adminBookingController.php",
//     data: $("#createBookingForm").serialize() + "&adminCreateBooking=true",
//     dataType: "JSON",
//     beforeSend: function () {},
//     success: function (feedback) {
//       if (feedback.status == 1) {
//         toastr.success(feedback.msg);
//         setTimeout(function () {
//           location.reload();
//         }, 2000);
//       } else {
//         console.log(feedback.msg);
//         toastr.error(feedback.msg);
//       }
//     },
//     error: function (error) {
//       console.log(error);
//       toastr.warning("Error ocoured.");
//     },
//   });
// }

// function updateBooking() {
//   $.ajax({
//     type: "POST",
//     url: "../../controllers/adminBookingController.php",
//     data: $("#updateBookingForm").serialize() + "&adminUpdateBooking=true",
//     dataType: "JSON",
//     beforeSend: function () {},
//     success: function (feedback) {
//       if (feedback.status == 1) {
//         toastr.success(feedback.msg);
//         setTimeout(function () {
//           location.reload();
//         }, 2000);
//       } else {
//         console.log(feedback.msg);
//         toastr.error(feedback.msg);
//       }
//     },
//     error: function (error) {
//       console.log(error);
//       toastr.warning("Error occoured.");
//     },
//   });
// }

// function deleteBooking() {
//   var id = document.getElementById("del_booking_id").value;
//   $.ajax({
//     type: "POST",
//     url: "../../controllers/adminBookingController.php",
//     data: {
//       id: id,
//       adminDeleteBooking: true,
//     },
//     dataType: "JSON",
//     beforeSend: function () {},
//     success: function (feedback) {
//       if (feedback.status == 1) {
//         toastr.success(feedback.msg);
//         setTimeout(function () {
//           location.reload();
//         }, 2000);
//       } else {
//         toastr.error(feedback.msg);
//       }
//     },
//     error: function (error) {
//       console.log(error);
//       toastr.warning("Error occoured.");
//     },
//   });
// }
