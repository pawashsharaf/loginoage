<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Form with Light Button</title>

</head>

<body>
    <div class="login-box">
        <h2>Login Form</h2>
        <form action="config.php" method="post" autocomplete="off">
            <div class="user-box">
                <input type="text" name="name" id="name" required>
                <label for="name">Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="dob" id="dob" required>
                <label for="dob">DOB</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <button class="b1" type="submit" name="Submit">
            <a href="">
                <span></span>
                <span></span><span></span>
                <span></span>
                <buttontype="submit" href="show_data.php" name="Submit">Submit</button>
                
            </a>
            </button>
        </form>
    </div>

    <div class="footer">
@<i class="fa fa-copyright" aria-hidden="true">Pawash Sharaf</i></div>
<style>
    .footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    background-color: #f2f2f2;
    padding: 10px;
    box-shadow: 0 -1px 5px rgba(0,0,0,0.1); 
}
</style>
</body>

</html>
