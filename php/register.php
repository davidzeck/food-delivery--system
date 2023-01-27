<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/register.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset class="main">
            <h1 >REGISTERATION</h1>
            <legend></legend>

            <label for="user_Name">First Name :</label>
            <input type="text" id="user_Name" name="user_fName">
            <br>
            <br>
            <label for="user_Name">Last Name :</label>
            <input type="text" id="user_Name" name="user_lName">
            <br>
            <br>
            <label for="user_Name">location :</label>
            <input type="text" id="user_Name" name="user_Location">
            <br>
            <br>
            <label for="pwd">Pasword :</label>
            <input type="password" id="pwd" name="user_password">
            <br>
            <br>
            <label for="pwd">Confirm Pasword :</label>
            <input type="password" id="pwd" name="user_password">
            <br>
            <br>
            <label for="pwd">Preffered payment method:</label>
            <input type="password" id="pwd" name="user_payment">
            <br>
            <br>
            <label for="pwd">Preffered pick up location :</label>
            <label for="select_M">M-pesa</label>
            <input type="radio" id="select_M" name="user_pLocation" value="M-pesa">
            <label for="select_Card">Credit Card</label>
            <input type="radio" id="select_Card" name="user_pLocation" value="Credit card">
            <label for="select_Cash">Cash</label>
            <input type="radio" id="select" name="user_pLocation" value="Cash">
            <br>
            <br>
            <a href="login.html" name="login" id="login" value="Submit">Submit</a><br><br>
           
           
        </fieldset>
    </form>
</body>
</html>