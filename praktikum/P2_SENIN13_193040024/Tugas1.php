<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <canvas width="400" Height="400" id="kanvas" style="background-color:salmon;border:10px black solid">
    Canvas tidak dapat ditampilkan
  </canvas>
  <script>
    var kanvas, x, y, ct;
    var jpetak=5;
    kanvas=document.getElementById("kanvas");
    ct=kanvas.getContext("2d");
    ct.fillStyle="skyblue";
    ct.beginPath();
    for(y=0;y<jpetak;y++){
        for(x=0;x<jpetak;x++){
            if((x+y)%2==0)ct.rect(x*80, y*80, 80, 80);
        }
    }
    ct.fill();
  </script>
</body>
</html>