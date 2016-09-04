<html>
    <head>
        <title>BlackBox '16'</title>
        <link href="../css/info.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <a href="../controllers/logout.php">Logout</a>
        <div class=box>
            <center><b>BlackBox submission portal</b></center>
            <center>
                <div class="content">

                    Insert data into the iitk database
                    <form method ="post" action="info.php">
                        <textarea class="inp-box" name="query" placeholder="Your code" autocomplete="off" cols="40" rows="20"></textarea>
                        <input class="button buttonBlue" name="submit" type="Submit" value="Submit"/>
                    </form>
                    <div class="message-box">
                        <?php include '../controllers/run-submit.php'?>
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>
