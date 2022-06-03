<!DOCTYPE html>
<html lang="en-ID">

    <head>
        <title>Ajax Demonstration</title>
        <meta charset="utf-8">
    </head>
    <style>
    .displaybox {
        display: table-cell;
        vertical-align: middle;
        width: 230px;
        height: 40px;
        background-color: #FFFFFF;
        border: 2px solid #000000;
        padding: 10px;
        font: 1.5em normal verdana, helvetica, arial, sans-serif;
    }
    </style>
    <script>
    var ajaxRequest;

    function ajaxResponse() {
        // check to see if we're done
        if (ajaxRequest.readyState != 4) {
            return;
        } else {
            // check to see if successful
            if (ajaxRequest.status == 200) {
                var plholder = document.getElementById("showtime");
                plholder.innerHTML = ajaxRequest.responseText;
            } else {
                alert("Request failed: " + ajaxRequest.statusText);
            }
        }
    }

    function getServerTime() {
        ajaxRequest = new XMLHttpRequest();
        var svcUrl = "telltime.php";
        ajaxRequest.onreadystatechange = ajaxResponse;
        ajaxRequest.open("GET", svcUrl, false);
        ajaxRequest.send(null);
    }

    function autoUpdateTime() {
        setInterval(() => {
            getServerTime();
            console.log("Time updated");
        }, 1000);

    }
    window.onload = autoUpdateTime();
    // Write a function to auto-update the time
    </script>

    <body onload="getServerTime()">
        <h1>Ajax Demonstration</h1>
        <h2>Getting the server time without refreshing the page</h2>
        <form>
            <input type="button" value="Get Server Time" onclick="getServerTime()" />
        </form><br />
        <div id="showtime" class="displaybox"></div>
    </body>

</html>