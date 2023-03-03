<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background-image: linear-gradient(rgba(50, 50, 62, 0.6),rgba(50, 50, 62, 0.6)), url(5708829.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .block{
        box-sizing: border-box;
        position: absolute;
        top: 13%;
        left: 10%;
        border: 4px solid black;
        width: 27%;
        height: 82%;
        border-radius: 8px;
        
    }
    .block img{
        position: absolute;
        left: 27%;
        width: 44%;
        border-radius: 100%; 
    }
    form input{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    .input{
        margin-left: -3%;
        width : 80%;
        padding : 10%;
        padding-top: 0;
        position: absolute;
        top: 32% 
    }
     #A input{
        border-radius: 6px;
        font-size: 17px;
        padding: 14px 16px;
        width: 146%;
    }
    #B input{
        margin-top: 10px;
        border-radius: 6px;
        font-size: 17px;
        padding: 14px 16px;
        width: 146%
    }
    #C input{
        margin-top: 10px;
        border-radius: 6px;
        font-size: 17px;
        padding: 14px 16px;
        width: 146%
    }
   
    .btn{
        text-align: center;
        background-color: #a6bdcd;
        border: 2px solid black;
        border-radius: 6px;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px;
        width: 146%;
        margin-top: 20px;
    }
   /*  .btn a{
        text-decoration: none;
        color:black;
    } */
    .btn:hover{
    cursor: pointer;
}
   
    nav{
        color: white;
       cursor: pointer;
       background-color: #8395a25a;
       margin-bottom: 10px;
       border-radius: 20px;
    }
    nav ul{
        display: inline-block;
        width: 70%;
        font-size: 29px;
    }
    nav ul li{
        display: inline-block;
        margin-left: 15%;
        padding:5px
    }
    nav #btnn{
        position: absolute;
        right: 7%;
        top: 9px;
        font-weight: bold;
        font-size: 25px;
    }
    a{
        text-decoration: none;
        color: white;
    }
    #W{
        font-size: 25px;
        font-weight: bold;
        margin-left: 20px;
    }
    
     #btnn a:hover{
        background-color: rgb(168, 165, 171);
        border-radius: 1rem;
        color: black;
        
    }
    nav ul li:hover{
        background-color: rgb(168, 165, 171);
        border-radius: 1rem;
        color: black;
    }
    #W:hover{
        background-color: rgb(168, 165, 171);
        color: black;
        border-radius: 1rem;
    }
    p{
        font-weight: bold;
        font-size: 20px;
        color: black;
    }
</style>
<body>
    <nav>
        <span id="W">Welcome</span>
        <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Contact</li>
            <li>More</li>
        </ul>
       <span id="btnn"><a href="login.php">Log In</a></span>
    </nav>
    <div class="block">
            <div class="img">
                            <img src="891d00a6c5d8651cdf6d6eb5f3703a60--bleach-tattoo-ideas-scarf-ideas.jpg" alt="photo">
                         </div>
                         <form action="signup.php" method="POST">
                                <div class="input">
                                    <div id="A">
                                        <label for="name">Name</label>
                                        <input type="text" placeholder="Enter your full name"  name="name" required>
                                            </div>
                                    <div id="B">
                                        <label for="DOB">DOB</label>
                                        <input type="date" name="DOB" required>
                                            </div>
                                    <div id="B">
                                        <label for="email">Email</label>
                                        <input type="email"  name="email"   required>
                                            </div>
                                    <div id="C">
                                        <label for="password">Password</label>
                                        <input type="password"  name="password" required>
                                            </div>
                                
                                <button class="btn" type="submit" name="submit">Register</button>
    </div>
</form>


</body>
</html>

