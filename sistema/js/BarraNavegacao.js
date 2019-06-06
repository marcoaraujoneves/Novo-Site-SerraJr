var LiGirassol = document.getElementById("AGirassol");
var Botao1 = document.getElementById("Botao1");
var Botao2 = document.getElementById("Botao2");
function ActiveBar(){
    if(LiGirassol.style.display=="none"){
        LiGirassol.style.display = "block";
        LiGirassol.classList.add("BoxGirassolA");
        Botao1.style.display = "block";
        Botao2.style.display = "block";
    }else{
        LiGirassol.style.display = "none";
        LiGirassol.classList.remove("BoxGirassolA");
    }
}
function ButtonGirassolMenu(){
    LiGirassol.style.display = "none";
    Botao1.style.display     = "none";
    Botao2.style.display     = "none";
}
function EfeitoBotao(){
    LiGirassol.style.display = "none";
}
function TiraMenu(){
    LiGirassol.style.display = "none";
}

function RedirectEditar(){
    window.location.href = "Editar.php";
}
function RedirectIndex(){
    window.location.href = "Index.php";
}
