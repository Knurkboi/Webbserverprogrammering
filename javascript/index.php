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
                width: 50px;
                height: 50px;
            }
            
            #btn6 {
                width: 25px;
                height: 25px;
            }
            
            #uppgift7 {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                padding: 10px 10px;
            }
            
            #uppgift8 {
                display: block;
                margin-left: 5px;
                border: 1px solid black;
                width: 200px;
                height: 200px;
                position: absolute;
            }
            
        </style>
        
    </head>

    <body id="body" onLoad="updateValue()">

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
            } 
            else {
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
            } 
            else {
                x.style.display = "none";
            }
        }    
            
        function contentToggle() {
            var x = document.getElementById("content");
            if (x.style.display === "block") {
                x.style.display = "none";
            } 
            else {
                x.style.display = "block";
            }
        }   
            
        function uppgift6() {
            var x = document.getElementById("uppgift6");
            if(x.style.backgroundColor === "red") {
                x.style.backgroundColor = "green" 
            }
            else if(x.style.backgroundColor === "green") {
                x.style.backgroundColor = "blue" 
            }
            else if(x.style.backgroundColor === "blue") {
                x.style.backgroundColor = "red" 
            } 
        }
           
        var theValue = 0;   
            
        function increaseBy(amount) {
            theValue = theValue + amount;
            updateValue();
        }    
            
        function updateValue() {
            document.getElementById('value').innerHTML = "Value is: " + theValue;
        }      
            
        function resetValue() {
            theValue = 0;
            updateValue();
        }    
            
        function topLeft() {
            var x = document.getElementById("uppgift8");
            x.style.left = "0";
            x.style.top = "0";
            x.style.bottom = "";
            x.style.right = "";
        }    
            
        function topRight() {
            var x = document.getElementById("uppgift8");
            x.style.right = "0";
            x.style.top = "0";
            x.style.left = "";
            x.style.bottom = "";
        }
            
        function botLeft() {
            var x = document.getElementById("uppgift8");
            x.style.left = "0";
            x.style.bottom = "0";
            x.style.right = "";
            x.style.top = "";
        }
            
        function botRight() {
            var x = document.getElementById("uppgift8");
            x.style.right = "0";
            x.style.bottom = "0";
            x.style.top = "";
            x.style.left = "";
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
            
            <div id="uppgift6" style="background-color: red;">
            
                <button id="btn6" type="button" onclick="uppgift6()">6</button>
                
            </div>
            
            <div id="uppgift7">
            
                <div id='value'></div>
                
                <button onClick="increaseBy(1)">+1</button>
                <button onClick="increaseBy(10)">+10</button>
                <button onClick="increaseBy(100)">+100</button>
                <button onClick="resetValue()">Reset</button>
            
            </div>
            
            <div id="uppgift8">
                
                <button onClick="topLeft()">topLeft</button>
                <button onClick="topRight()">topRight</button>
                <button onClick="botLeft()">botLeft</button>
                <button onClick="botRight()">botRight</button>
            
            </div>
        
        </div>
        
        <button id="toggleBtnUppgift5" type="button" onclick="uppgift5()">Uppgift 5</button>

    </body>

</html>