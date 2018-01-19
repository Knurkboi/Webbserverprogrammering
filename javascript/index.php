<!doctype html>
<html>

    <head>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <style>
        
            div {
                display: inline;
                margin-left: 20px;
            }
            
        </style>
        
    </head>

    <body>

        <button id="alertBtn" type="button" onclick="alertClick()">Alert</button>

        <script>

        function alertClick() {
            alert("bigEmon");
        }

        function picHover(x) {
            x.style.height = "128px";
            x.style.width = "128px";
        }

        function picNoHover(x) {
            x.style.height = "64px";
            x.style.width = "64px";
        }
            
        function picToggle() {
            var x = document.getElementById("oof");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }



        </script>

        <div id="oof">
            
            <img onmouseover="picHover(this)" onmouseout="picNoHover(this)" src="emon.jpg">
            
        </div>
            
        <div id="toggleImgBtn">
                
            <button id="bildBtn" type="button" onclick="picToggle(this)">bigBenizBoiz</button>
            
        </div>

    </body>

</html>