var i = 0; /* Set Global Variable i */
function increment(){
i += 1; /* Function for automatic increment of field's "Name" attribute. */
}
/*
---------------------------------------------

Function to Remove Form Elements Dynamically
---------------------------------------------

*/
function removeElement(parentDiv, childDiv){
if (childDiv == parentDiv){
alert("The parent div cannot be removed.");
}
else if (document.getElementById(childDiv)){
var child = document.getElementById(childDiv);
var parent = document.getElementById(parentDiv);
parent.removeChild(child);
}
else{
alert("Child div has already been removed or does not exist.");
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
g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
r.appendChild(g);
r.setAttribute("id", "id_" + i);
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
increment();
y.setAttribute("Name", "textelement_" + i);
r.appendChild(y);
g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
r.appendChild(g);
r.setAttribute("id", "id_" + i);
document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome texto

------------------------------------------------------------------------------
*/
function contactFunction(){
var r = document.createElement('span');
var y = document.createElement("TEXTAREA");
var g = document.createElement("IMG");
y.setAttribute("cols", "70");
y.setAttribute("placeholder", "Digite seu texto aqui...");
g.setAttribute("src", "delete.png");
increment();
y.setAttribute("Name", "textelement_" + i);
r.appendChild(y);
g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
r.appendChild(g);
r.setAttribute("id", "id_" + i);
document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome imagem

------------------------------------------------------------------------------
*/
function textareaFunction(){
    var r = document.createElement('span');
    var y = document.createElement("INPUT");
    y.setAttribute("type", "file");
    var g = document.createElement("IMG");
    g.setAttribute("src", "delete.png");
    increment();
    y.setAttribute("Name", "textelement_" + i);
    r.appendChild(y);
    g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
    r.appendChild(g);
    r.setAttribute("id", "id_" + i);
    document.getElementById("myForm").appendChild(r);
}
/*
-----------------------------------------------------------------------------

Funções que serão chamadas quando o usuário clicar no campo de nome apagar tudo 

------------------------------------------------------------------------------
*/
function resetElements(){
document.getElementById('myForm').innerHTML = '';
}














// function contactFunction(){
//     var r = document.createElement('span');
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "text");
//     y.setAttribute("placeholder", "Contact");
//     var g = document.createElement("IMG");
//     g.setAttribute("src", "delete.png");
//     increment();
//     y.setAttribute("Name", "textelement_" + i);
//     r.appendChild(y);
//     g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
//     r.appendChild(g);
//     r.setAttribute("id", "id_" + i);
//     document.getElementById("myForm").appendChild(r);
//     }