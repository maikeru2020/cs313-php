function alertClicked() {
    alert("Clicked!");
}

function changeColor(color) {
    document.getElementById("block1").style.color = color;
}
$(document).ready(function() {
    $("#backgroundButton").click(function() {
        newColor = $("#color").val();
        $("#block1").css("background-color", newColor);
    })

    $("#fade").click(function() {
        $("#block3").fadeToggle();
    })
})