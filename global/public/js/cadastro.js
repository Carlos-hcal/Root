// HIDDEN/SHOW PERSONALIZADO

function inicia(){
    document.getElementById("personalizado").hidden=true;

document.getElementById("option1").addEventListener("click",esconder);
document.getElementById("option2").addEventListener("click",esconder);
document.getElementById("option3").addEventListener("click",mostrar);
};
window.addEventListener("load",inicia);

function mostrar(){
    document.getElementById("personalizado").hidden=false;
}

function esconder(){
    document.getElementById("personalizado").hidden=true;
}