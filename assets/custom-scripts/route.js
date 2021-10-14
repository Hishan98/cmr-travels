function cerateRoute() {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminRouteController.php",
    data: $("#createRouteForm").serialize() + "&adminCreateRoute=true",
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

function updateRoute() {
  $.ajax({
    type: "POST",
    url: "../../controllers/adminRouteController.php",
    data: $("#updateRouteForm").serialize() + "&adminUpdateRoute=true",
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

function deleteRoute() {
  var id = document.getElementById("del_route_id").value;
  $.ajax({
    type: "POST",
    url: "../../controllers/adminRouteController.php",
    data: {
      id: id,
      adminDeleteRoute: true,
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
