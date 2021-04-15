<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">
                            <div id="divjam" align="center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 mx-auto">
                        <div class="card pt-4">
                            <div class="card-body">
                                <div class="text-center mb-5">
                                    <!-- <img src="assets/images/favicon.svg" height="48" class='mb-4'> -->
                                    <h3>Log in</h3>
                                    <p>Masukan username dan password</p>
                                </div>
                                <form action="./dashboard/index.php">
                                    <div class="form-group position-relative has-icon-left">
                                        <label for="username">Username</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="username">
                                            <div class="form-control-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left">
                                        <div class="clearfix">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password">
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix">
                                        <button class="btn btn-primary float-end">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./assets/js/feather-icons/feather.min.js"></script>
        <script src="./assets/js/app.js"></script>

        <script src="./assets/js/main.js"></script>
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
</body>

</html>