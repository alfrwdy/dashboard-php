<html>

<head>
    <link rel="stylesheet" href="main.css" type="text/css" />
    <script language="javascript">
        var XMLHttpRequestObject = false;
        if (window.XMLHttpRequest) {
            XMLHttpRequestObject = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
        }

        function getJam(sumberdata, divID) {
            if (XMLHttpRequestObject) {
                var obj = document.getElementById(divID);
                XMLHttpRequestObject.open("GET", sumberdata);
                XMLHttpRequestObject.onreadystatechange = function() {
                    if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
                        obj.innerHTML = XMLHttpRequestObject.responseText;
                        setTimeout("getJam('jam.php','divjam')", 1000);
                    }
                }
                XMLHttpRequestObject.send(null);
            }
        }

        window.onload = function() {
            setTimeout("getJam('jam.php','divjam')", 1000);
        }
    </script>
</head>

<body>
    <div class="demo" style="width: 250px;" align="center">
        <div id="divjam"></div>
    </div>
</body>

</html>