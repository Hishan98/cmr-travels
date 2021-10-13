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
