//0 empty, 1 coin, 2 wall 3 cherry
var world=[
    [2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2],
    [2,3,3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2],
    [2,1,1,0,0,1,1,1,0,0,1,1,1,0,0,1,1,1,0,1,1,0,1,1,0,0,1,1,1,0,0,1,1,1,1,1,1,2],
    [2,1,2,1,1,2,1,1,2,1,0,1,2,1,1,2,0,1,2,1,1,0,2,0,1,2,0,1,2,1,1,1,1,1,1,1,1,2],
    [2,1,2,1,1,2,1,1,2,1,0,1,2,1,1,2,1,1,2,1,1,0,2,0,1,2,0,1,2,0,3,0,1,1,1,1,1,2],
    [3,1,2,1,1,2,1,1,2,0,0,1,2,1,1,2,1,1,2,0,1,0,2,0,1,2,0,1,2,1,1,0,1,1,1,1,1,1],
    [1,1,2,3,1,2,1,1,2,1,0,1,2,0,1,2,1,1,2,0,1,0,2,0,1,2,1,1,2,1,1,1,1,1,1,3,1,1],
    [2,1,2,3,1,2,1,1,2,0,1,1,2,1,1,2,1,1,2,0,1,0,2,0,1,2,1,1,2,1,1,1,1,1,1,1,1,2],
    [2,1,2,1,1,2,1,1,2,1,0,1,2,1,1,2,1,1,2,1,1,0,2,0,1,2,0,1,2,1,1,3,1,1,1,1,1,2],
    [2,1,1,2,2,1,2,2,1,1,0,1,0,2,2,0,2,2,1,0,0,1,1,2,2,1,2,2,1,1,1,1,2,1,1,1,1,2],
    [2,1,3,0,1,1,1,1,1,1,1,1,1,1,3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2],
    [1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
    [2,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2],
    [2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2],
    [2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3,1,1,1,1,1,0,1,1,1,1,1,1,2],
    [2,1,1,3,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,1,1,1,3,1,1,3,1,0,0,1,1,1,2],
    [2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2]

    ];
    function displayWorld(){
    var output = '';

    for(var i=0; i<world.length; i++){
        output += "\n<div class='row'>\n";
        for(var j=0; j<world[i].length; j++){
            if(world[i][j] == 2)
                output += "<div class='brick'></div>";
            else if(world[i][j] == 1)
                output += "<div class='coin'></div>";
            else if(world[i][j] == 3)
                output += "<div class='cherry'></div>";
            else if(world[i][j] == 0)
                output += "<div class='empty'></div>";
        }
        output += "\n</div>";
    }
    // console.log(output);
    document.getElementById('world').innerHTML = output;
}

var score = 0;

var pacman = {
    x: 1,
    y: 1
}

function displayPacman(){
    document.getElementById('pacman').style.top = pacman.y*24.5+"px";
    document.getElementById('pacman').style.left = pacman.x*20+"px";
}

function displayScore(){
    document.getElementById('score').innerHTML = score;
    if(score==4800){
        alert("You Won!");
        document.location.reload();
    }
}

displayWorld();
displayPacman();
displayScore();

document.onkeydown = function(e){
    if(e.keyCode == 37 && world[pacman.y][pacman.x-1] != 2 && pacman.x == 0){
        document.getElementById('pacman').style.transform = "rotate(-180deg)";
        pacman.x = world[0].length-1;
    }
    else if(e.keyCode == 37 && world[pacman.y][pacman.x-1] != 2 && pacman.x > 0){
        document.getElementById('pacman').style.transform = "rotate(-180deg)";
        pacman.x--;
    }
    else if(e.keyCode == 39 && world[pacman.y][pacman.x+1] != 2 && pacman.x == world[0].length-1){
        document.getElementById('pacman').style.transform = "none";
        pacman.x = 0;
    }
    else if(e.keyCode == 39 && world[pacman.y][pacman.x+1] != 2){
        document.getElementById('pacman').style.transform = "none";
        pacman.x++;
    }
    else if(e.keyCode == 38 && world[pacman.y-1][pacman.x] != 2 && pacman.y > 0){
        document.getElementById('pacman').style.transform = "rotate(-90deg)";
        pacman.y--;
    }
    else if(e.keyCode == 40 && world[pacman.y+1][pacman.x] != 2){
        document.getElementById('pacman').style.transform = "rotate(90deg)";
        pacman.y++;
    }

    if (world[pacman.y][pacman.x] == 1) {
        world[pacman.y][pacman.x] = 0;
        score+=10;
        displayWorld();
        displayScore();
    }
    else if (world[pacman.y][pacman.x] == 3) {
        world[pacman.y][pacman.x] = 0;
        score+=50;
        displayWorld();
        displayScore();
    }
    displayPacman();
}

