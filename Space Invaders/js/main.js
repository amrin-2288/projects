function init()
{
    console.log('Main Game init()');
}
function processAssets(indexNum)
{
     var img=new Image();
     var fileName=Imagefiles[indexNum];
     img.src=fileName;
     img.onload= function()
     {
        GameManager.assests[Imagefiles[indexNum]]={
            width:this.width,
            height:this.height,
            fileName:fileName
            
        };

        indexNum++;

        if(indexNum<Imagefiles.length)
        {
        processAssets(indexNum);
        }
        else
        {
        console.log('Assets done : ', GameManager.assets);
        init();
        }
     }

}


$(function()
{   
    processAssets(0);
    $(document).keydown(
        function(e)
        {
            switch(e.which)
            {
             case Gamesettings.keyPress.left:
                console.log('left');
                break;
            case Gamesettings.keyPress.up:
                console.log('up');
                break;
            case Gamesettings.keyPress.right:
                console.log('right');
                break;
            case Gamesettings.keyPress.down:
                console.log('down');
                break;
            case Gamesettings.keyPress.space:
                console.log('space');
                break;
            }
        }
    );
    
});
