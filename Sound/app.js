let interactable1 = document.getElementById("btn1")
let player1 = document.getElementById("audio1")

let interactable2= document.getElementById("btn2")
let player2= document.getElementById("audio2")

let interactable3 = document.getElementById("btn3")
let player3 = document.getElementById("audio3")

let interactable4 = document.getElementById("btn4")
let player4 = document.getElementById("audio4")

let interactable5 = document.getElementById("btn5")
let player5 = document.getElementById("audio5")

let interactable6 = document.getElementById("btn6")
let player6 = document.getElementById("audio6")



interactable1.addEventListener('click', () =>{
    btn2.style.display = "block";
    player1.play();
})

interactable1.addEventListener('dblclick', ()=>{
    player1.pause();
})


interactable2.addEventListener('click', () =>{
    btn3.style.display = "block";
    player2.play();
})

interactable2.addEventListener('dblclick', ()=>{
    player2.pause();
})


interactable3.addEventListener('click', () =>{
    btn4.style.display = "block";
    player3.play();
})

interactable3.addEventListener('dblclick', ()=>{
    player3.pause();
})


interactable4.addEventListener('click', () =>{
    btn5.style.display = "block";
    player4.play();
})

interactable4.addEventListener('dblclick', ()=>{
    player4.pause();
})


interactable5.addEventListener('click', () =>{
    btn6.style.display = "block";
    player5.play();
})

interactable5.addEventListener('dblclick', ()=>{
    player5.pause();
})


interactable6.addEventListener('click', () =>{
    player6.play();
})

interactable6.addEventListener('dblclick', ()=>{
    player6.pause();
})
