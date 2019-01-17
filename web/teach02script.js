function alertClicked() {
    alert("Clicked!");
}

function changeColor(color) {
    document.getElementById("block1").style.color = color;
}
$(document).ready(function() {
    $("backgroundButton").attr("background-color", $("color").val());
})