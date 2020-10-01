let time = 5;                                                 //Countdown time is 5 seconds
let click_check = false;                                      //Start without mouse being clicked
let click_counter = 0;                                        //Counter starts with 0 clicks

var button_click = document.getElementById('clicker');        //Getting click button and restart button
var restart_click = document.getElementById('restart');

const timer = document.getElementById('countdown');           //Connecting to countdown, counter, and speed in game page
const count = document.getElementById('counter');
const spd = document.getElementById('speed');

button_click.onclick = function(){                            //When Click Me! button is clicked. If the time has not ran out show how many clicks
    if( time != 0){                                           //divide them by 5 to show clicks per second and increase number of clicks by one
        click_check = true;
        count.innerHTML = 'Clicks: ' + click_counter;
        spd.innerHTML = 'Speed: ' + click_counter / 5;
        click_counter++;
    }
}

restart_click.onclick = function(){                           //If the restart button is clicked then refresh the webpage.
    location.reload();
}

setInterval(update, 1000);                                    //Updating funcion every 1000ms = 1 second

function update(){
    timer.innerHTML = time;                                   //Show time left, if time is bigger than 0 and the click check is true(one click necissary)
    if(time > 0 && click_check == true){                      //start the timer and decrease it for 1 each second
        time--;
    }
    else{                                                     //If time has ran out dismiss the clicked check and stop counting.
        click_check = false;
    }
}
