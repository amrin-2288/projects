const Imagefiles=[
    'https://raw.githubusercontent.com/bluefeversoft/html_invaders/master/ch4/assets/playerShip1_blue.png'
];


const Gamesettings ={
    keyPress:{
        left:37,
        up:38,
        right:39,
        down:40,
        space:32
    },
    playareaWidth:720,
    playareaHeight:600,
    playareaDiv:'#playarea',

    playerDivname:'playerSprite',
    playerStart:{x:340,y:490}

};
let GameManager={
    assets:{},
    player:undefined,

}
console.log(Gamesettings.keyPress);