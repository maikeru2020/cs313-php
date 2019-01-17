function alertClicked() {
    alert("Clicked!");
}

function changeColor(color) {
    document.getElementById("block1").style.color = color;
}
$(document).ready(function() {
    $("backgroundButton").click(function() {
        newColor = $("color").val;
        $("block1").attr("background-color", newColor);
    })
})