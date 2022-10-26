document.getElementById("Sulinys").addEventListener("click", FormControl);
document.getElementById("Grezinys").addEventListener("click", FormControl);

function FormControl() {

var element1 = document.getElementById("greziniai")
var element2 = document.getElementById("greziniai2")


if (document.getElementById("Sulinys").checked) {
    element1.classList.add("d-none");
    element2.classList.add("d-none");
}
else if (document.getElementById("Grezinys").checked) {
    element1.classList.remove("d-none");
    element2.classList.remove("d-none");   
}
}
             