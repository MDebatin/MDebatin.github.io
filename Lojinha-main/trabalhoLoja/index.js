var contador1 = 1;
var valor1 = 7999.99
function mais1() {

    contador1 = contador1 + 1;
    if (contador1 > 4) {
        contador1 = 4
        alert("SEM ESTOQUE!");
    }
    document.getElementById('quantidade').innerHTML = contador1
    document.getElementById('preco').innerHTML = valor1 * contador1
}
var contador1 = 1;
var valor1 = 6999.99
function menos1() {
    contador1 = contador1 - 1;

    if (contador1 < 1) {
        contador1 = 1
    }
    document.getElementById('quantidade').innerHTML = contador1
    document.getElementById('preco').innerHTML = valor1 * contador1

}

var contador2 = 1;
var valor2 = 6999.99
function mais2() {

    contador2 = contador2 + 1;
    if (contador2 > 2) {
        contador2 = 2
        alert("SEM ESTOQUE!");
    }
    document.getElementById('quantidade2').innerHTML = contador2
    document.getElementById('preco2').innerHTML = valor2 * contador2
}
function menos2() {
    contador2 = contador2 - 1;

    if (contador2 < 1) {
        contador2 = 1
    }
    document.getElementById('quantidade2').innerHTML = contador2
    document.getElementById('preco2').innerHTML = valor2 * contador2

}

var contador3 = 1;
var valor3 = 3700.99
function mais3() {

    contador3 = contador3 + 1;
    if (contador3 > 6) {
        contador3 = 6
        alert("SEM ESTOQUE!");
    }
    document.getElementById('quantidade3').innerHTML = contador3
    document.getElementById('preco3').innerHTML = valor3 * contador3
}
function menos3() {
    contador3 = contador3 - 1;

    if (contador3 < 1) {
        contador3 = 1
    }
    document.getElementById('quantidade3').innerHTML = contador3
    document.getElementById('preco3').innerHTML = valor3 * contador3

}

var contador4 = 1;
var valor4 = 3199.99
function mais4() {

    contador4 = contador4 + 1;
    if (contador4 > 3) {
        contador4 = 3
        alert("SEM ESTOQUE!");
    }
    document.getElementById('quantidade4').innerHTML = contador4
    document.getElementById('preco4').innerHTML = valor4 * contador4
}
function menos4() {
    contador4 = contador4 - 1;

    if (contador4 < 1) {
        contador4 = 1
    }
    document.getElementById('quantidade4').innerHTML = contador4
    document.getElementById('preco4').innerHTML = valor4 * contador4

}

var contador5 = 1;
var valor5 = 3199.99

function mais5() {

    contador5 = contador5 + 1;
    if (contador5 > 1) {
        contador5 = 1
        alert("SEM ESTOQUE!");
    }
    document.getElementById('quantidade5').innerHTML = contador5
    document.getElementById('preco5').innerHTML = valor5 * contador5
}
function menos5() {
    contador5 = contador5 - 1;

    if (contador5 < 1) {
        contador5 = 1
    }
    document.getElementById('quantidade5').innerHTML = contador5
    document.getElementById('preco5').innerHTML = valor5 * contador5

}

function finaliza() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function (event) {
    if (!event.target.matches('.drop')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function finaliza() {
    alert('Compra Finalizada Com Sucesso!');
}
