<!doctype html>
<html>

    <head>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <style>
        
            #content {
                display: block;
            }
            
            #uppgift1 {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                padding: 10px 10px;
            }
            
            #oof {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                padding: 10px 10px;
            }
            
            #bild {
                width: 128px;
                height: 128px;
            }
            
            #uppgift3 {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                padding: 10px 10px;
            }
            
            #uppgift4 {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                padding: 10px 10px;
            }
            
            #text {
                display: none;
            }
            
            #toggleBtnUppgift5 {
                margin: 10px 5px;
            }
            
            #uppgift6 {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                padding: 10px 10px;
            }
            
        </style>
        
    </head>

    <body id="body">

        <script>

        function alertClick() {
            alert("bigEmon");
        }

        function picHover(x) {
            x.style.height = "256px";
            x.style.width = "256px";
        }

        function picNoHover(x) {
            x.style.height = "128px";
            x.style.width = "128px";
        }
            
        function picToggle() {
            var x = document.getElementById("oof");
            if (x.style.display === "none") {
                x.style.display = "inline";
            } else {
                x.style.display = "none";
            }
        }

        function bgColorChange() {
            var x = document.getElementById("body");
            x.style.backgroundColor = "pink";
        }
            
        function uppgift5() {
            textToggle();
            contentToggle();
        }
            
        function textToggle() {
            var x = document.getElementById("text");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }    
            
        function contentToggle() {
            var x = document.getElementById("content");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }   
            
        function uppgift6() {
            
        }    

        </script>

        <div id="text"><h1>STOR ENAK LITEN beniz</h1></div>
        
        <div id="content">
        
            <div id="uppgift1">

                <button id="alertBtn" type="button" onclick="alertClick()">Uppgift 1</button>

            </div>

            <div id="oof">

                <img id="bild" onmouseover="picHover(this)" onmouseout="picNoHover(this)" src="emon.jpg">

                <p>Uppgift 2</p>
                
            </div>

            <div id="uppgift3">

                <button id="bildBtn" type="button" onclick="picToggle(this)">Uppgift 3</button>

            </div>

            <div id="uppgift4">

                <button id="colorBtn" type="button" onclick="bgColorChange(this)">Uppgift 4</button>

            </div>
            
            <div id="uppgift6">
            
                <button id="btn6" type="button" onclick="uppgift6">Uppgift 6</button>
                
            </div>
        
        </div>
        
        <button id="toggleBtnUppgift5" type="button" onclick="uppgift5()">Uppgift5</button>

    </body>

</html>