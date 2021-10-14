function sort_dives(input_id, class_name) {
  var value = document.getElementsByClassName(class_name);
  var input = document.getElementById(input_id);

  filter = input.value.toUpperCase();

  for (let index = 0; index < value.length; index++) {
    txtValue = value[index].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      value[index].classList.remove("cs-hide");
    } else {
      value[index].classList.add("cs-hide");
    }
  }
}

function setValueToDiv(inp_data, div_id) {
  document.getElementById(div_id).value = inp_data;
}
function setValueToDiv2(inp_busNum, inp_busName, inp_busType) {
  document.getElementById("up_bus_num").value = inp_busNum;
  document.getElementById("up_bus_name").value = inp_busName;
  if (inp_busType == "Normal") {
    document.getElementById("up_bus_type").value = "1";
  } else if (inp_busType == "Semi Luxury") {
    document.getElementById("up_bus_type").value = "2";
  } else if (inp_busType == "Luxury") {
    document.getElementById("up_bus_type").value = "3";
  }
}
function signOut() {
  $.ajax({
    type: "POST",
    url: "../../controllers/logoutController.php",
    data: {},
    dataType: "JSON",
    beforeSend: function () {},
    success: function (feedback) {
      toastr.success(feedback.msg);
      setTimeout(function () {
        location.replace("sign-in.php");
      }, 2000);
    },
    error: function (error) {
      console.log(error);
      toastr.warning("Error occoured.");
    },
  });
}
