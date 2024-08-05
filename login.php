<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .log-in {
            position: relative;
            height: 100vh; /* make the container full height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* move the video behind the form */
        }

        form {
            z-index: 1; /* move the form in front of the video */
            background-color: transparent;/* black transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-left: 70vh;
        }
    </style>
</head>
<body>
    <div class="log-in">
        <video autoplay loop muted plays-inline class="background-video" src="vegeta.mp4"></video>
        <form action="login.php" method="post">
            <div>
                <h4 style="color:rgb(206, 170, 234) ;">Log In Interface</h4>
            </div>
            <div style="z-index: 1; color: white;"> Username</div>
            <input type="text" name="uname" placeholder="Username"> <br><br><br>
            <div style="z-index: 1; color: white;"> Password: </div> 
            <input type="password" name="pass" id="password" placeholder="Enter your password"><br>
            <input type="submit" value="Log in" style="margin-top: 40px;height: 50px; width: 70px; color:rgb(132, 22, 215) ;">
            <div style="margin-top: 40px;">
                <p>Don't have an account? <a href="signUp.html" style="color: rgb(206, 170, 234);">Click here.</a></p>
            </div>
            <div>
                <a href="menu.php" style="color:  rgb(206, 170, 234);">Home</a>
            </div>
        </form>
    </div>
</body>
</html>
