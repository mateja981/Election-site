function addFunction() {
    let forma = document.querySelector('.w-form');
    let opstina = document.querySelector('#opstina');
    let izbornoMesto = document.querySelector('#broj_birackog_mesta');

    var novaForma = document.createElement("div");
    novaForma.innerHTML = forma.innerHTML;
    novaForma.className = "w-form";

    let forme = document.querySelectorAll('.w-form');
    let zastava = 0;

    for (let i = 0; i < forme.length; i++) {
        if (forme[i].querySelector('#broj_birackog_mesta').value === "") {
            zastava = 1;
            alert("Unesite izborno mesto");
            break;
        }
    }

    if (zastava == 0) {
        document.getElementById("forms").appendChild(novaForma);
    }
}
