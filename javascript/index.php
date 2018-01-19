<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <button id="alertBtn" type="button" onclick="alertClick()">Alert</button>

        <script>

        function alertClick() {
            alert("ayyyyLMAO");
        }

        function picHover(x) {
            x.style.height = "128px";
            x.style.width = "128px";
        }

        function picNoHover(x) {
            x.style.height = "64px";
            x.style.width = "64px";
        }



        </script>

        <div id="eksde">
            <img onmouseover="picHover(this)" onmouseout="picNoHover(this)" src="084.png">
        </div>

    </body>

</html>