let time = 5;
let click_check = false;
let click_counter = 0;

var button_click = document.getElementById('clicker');
var restart_click = document.getElementById('restart');

const timer = document.getElementById('countdown');
const count = document.getElementById('counter');
const spd = document.getElementById('speed');

button_click.onclick = function(){
    if( time != 0){
        click_check = true;
        count.innerHTML = 'Clicks: ' + click_counter;
        spd.innerHTML = 'Speed: ' + click_counter / 5;
        click_counter++;
    }
}

restart_click.onclick = function(){
    location.reload();
}

setInterval(update, 1000);

function update(){
    timer.innerHTML = time;
    if(time > 0 && click_check == true){
        time--;
    }
    else{
        click_check = false;
    }
}
