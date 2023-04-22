function clearForm() {
    var inputs = document.getElementsByClassName('input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = '';
    }
    document.getElementById("echo").innerHTML = "";
}