// Getting IDs
let mando_txt = document.getElementById('mando_txt');
let mando = document.getElementById('mando');
let comic_txt = document.getElementById('comic_txt');
let comic = document.getElementById('comic');
let helmet_txt = document.getElementById('helmet_txt');
let helmet = document.getElementById('helmet');
let origami_txt = document.getElementById('origami_txt');
let origami = document.getElementById('origami');

//Event listeners for mouse hover for each of the icons
mando.addEventListener("mouseover", showMando);
helmet.addEventListener("mouseover", showHelmet);
comic.addEventListener("mouseover", showComic);
origami.addEventListener("mouseover", showOrigami);

//If the mouse hovers over an icon, play animation for displaying text.
function showMando(){
    mando_txt.style.animationPlayState = "running";
}

function showHelmet(){
    helmet_txt.style.animationPlayState = "running";
}

function showComic(){
    comic_txt.style.animationPlayState = "running";
}

function showOrigami(){
    origami_txt.style.animationPlayState = "running";
}
