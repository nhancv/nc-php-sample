<?php
/**
 * Created by IntelliJ IDEA.
 * User: nhancao
 * Date: 10/30/16
 * Time: 5:52 PM
 */


$ip = getRealIp();

$details = json_decode(file_get_contents("http://ipinfo.io/$ip/json"));

function getRealIp()
{

    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        return $_SERVER["HTTP_CLIENT_IP"];
    } else if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else if (isset($_SERVER["HTTP_X_FORWARDED"])) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } else if (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } else if (isset($_SERVER["HTTP_FORWARDED"])) {
        return $_SERVER["HTTP_FORWARDED"];
    } else {
        return $_SERVER["REMOTE_ADDR"];
    }
}

?>
<html>
<head>
    <meta name="keywords" content="ip address, public ip, your ip, my ip">
    <meta name="description" content="get information of current public ip">
    <title>My ip</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet"
          type="text/css">
</head>
<body>
<style>
    body {
        color: #76FF03 !important;
        background: #1e1e1e !important;
        font-family: 'Courier New', monospace;
    }
</style>
<div class="cover">
    <div class="cover-image"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-left"
                    style="font-family: 'Courier New', monospace; font-weight: bold;"><?php echo $ip ?></h1>
                <hr>
                <br>
                <p class="text-left">
                    City: <?php echo $details->city ?> <br>
                    Region: <?php echo $details->region ?> <br>
                    Country: <?php echo $details->country ?> <br>
                    Location: <?php echo $details->loc ?> <br>
                    Postal code: <?php echo $details->postal ?> <br>
                </p><br><br></div>
        </div>
    </div>
</div>
</body>
</html>