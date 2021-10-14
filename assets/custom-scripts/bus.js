function modelCreateBus() {
  var busNumber = document.getElementById("input_bus_number").value;
  var busName = document.getElementById("input_bus_name").value;
  var busType = document.getElementById("input_bus_type").value;

  $.ajax({
    type: "POST",
    url: "../../controllers/busController.php",
    data: {
      busNumber: busNumber,
      busName: busName,
      busType: busType,
      createBus: true,
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
function modelDelBus() {
  var busNumber = document.getElementById("del_bus_num").value;
  $.ajax({
    type: "POST",
    url: "../../controllers/busController.php",
    data: {
      busNumber: busNumber,
      deleteBus: true,
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
function modelUpBus() {
  var busNumber = document.getElementById("up_bus_num").value;
  var busName = document.getElementById("up_bus_name").value;
  var busType = document.getElementById("up_bus_type").value;

  $.ajax({
    type: "POST",
    url: "../../controllers/busController.php",
    data: {
      busNumber: busNumber,
      busName: busName,
      busType: busType,
      updateBus: true,
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
