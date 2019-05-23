var i = 0; /* Definir variável global i */
function increment(){
    i += 1; /* Função para incremento automático do atributo "Nome" do campo. */
    document.getElementById('quantidade').value = i;
}
/*
---------------------------------------------

função para remover elementos de formulário dinamicamente 
(*utilizada para retirar somente o ultimo formulário* )

---------------------------------------------

*/
function removeElement(parentDiv, childDiv){
    if (childDiv == parentDiv){
        alert("Esse campo não pode ser removido!");
    }
    else if (document.getElementById(childDiv)){
        var child = document.getElementById(childDiv);
        var parent = document.getElementById(parentDiv);
        parent.removeChild(child);
        i -= 1;
    }
    else{
        alert("Esse campo não pode ser removido!");
        return false;
    }
}
/*
----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome titulo 

----------------------------------------------------------------------------
*/
function nameFunction(){
    var r = document.createElement('span');
    var y = document.createElement("INPUT");
    y.setAttribute("type", "text");
    y.setAttribute("placeholder", "Título");
    var g = document.createElement("IMG");
    g.setAttribute("src", "delete.png");
    increment();
    y.setAttribute("Name", "textelement_" + i);
    r.appendChild(y);
    g.setAttribute("onclick", "removeElement('myForm','id" + i + "')");
    r.appendChild(g);
    r.setAttribute("id", "id" + i);
    document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome subtitulo 

------------------------------------------------------------------------------
*/
function emailFunction(){
    var r = document.createElement('span');
    var y = document.createElement("INPUT");
    y.setAttribute("type", "text");
    y.setAttribute("placeholder", "Subtítulo");
    var g = document.createElement("IMG");
    g.setAttribute("src", "delete.png");
    g.setAttribute("style", "lixo");
    increment();
    y.setAttribute("Name", "textelement_" + i);
    r.appendChild(y);
    g.setAttribute("onclick", "removeElement('myForm','id" + i + "')");
    r.appendChild(g);
    r.setAttribute("id", "id" + i);
    document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome texto

------------------------------------------------------------------------------
*/
function contactFunction(){
    increment();
    var r = document.createElement('div');
    var y = document.createElement("textarea");
    var g = document.createElement("IMG");
    y.setAttribute("maxlength", "720");
    y.setAttribute("class", "form-control");
    y.setAttribute("id", "id" + i);
    y.setAttribute("rows", "10");
    y.setAttribute("name", "id" + i);
    y.setAttribute("placeholder", "Digite seu texto aqui...(max 1000)");
    g.setAttribute("src", "tranp.png"); 
    g.setAttribute("class", "lixo");
    r.appendChild(y);
    g.setAttribute("onclick", "removeElement('myForm','id" + i + "')");
    r.appendChild(g);
    r.setAttribute("id", "id" + i);
    document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome imagem

------------------------------------------------------------------------------
*/
function textareaFunction(){
    increment();
    var r = document.createElement('div');
    var y = document.createElement("INPUT");
    y.setAttribute("type", "file");
    y.setAttribute("class", "form-control");
    y.setAttribute("id", "id" + i);
    y.setAttribute("name", "id" + i);
    var g = document.createElement("IMG");
    g.setAttribute("src", "tranp.png");
    g.setAttribute("class", "lixo");
    r.appendChild(y);
    g.setAttribute("onclick", "removeElement('myForm','id" + i + "')");
    r.appendChild(g);
    r.setAttribute("id", "id" + i);
    document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome apagar tudo 

------------------------------------------------------------------------------
*/
function resetElements(){
     i = 0;
    document.getElementById('myForm').innerHTML = '';
}