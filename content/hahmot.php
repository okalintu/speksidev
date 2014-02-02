<div id="framecontainer">
<canvas id="gallery" width="460" height="660"></canvas>
<script>
    var canvas = document.getElementById('gallery');
    var context = canvas.getContext('2d');
    var frame= new Image();
    var character = new Image();
    var xoffset=30;
    var yoffset=30; 
    frame.onload = function(){context.drawImage(frame,0,0);}; 
    character.onload = function(){context.drawImage(character,xoffset,yoffset);};
    frame.src = 'img/frame.png'
    character.src = 'img/kardinaali.jpg';
</script>
</div>
