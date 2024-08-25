<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body bgcolor="black" style="color: aliceblue;" >
    <center>
    <h1>Begineers Guide📖</h1>
    <h5>Training|Tech News|Freshers Guide</h5>
    <p>Empowering young Develpoers to level up their Skills</p>
    </center>
    <hr>
    <center>
        <div id="form">
        <h1>Student Registeration Form </h1>
        <form action="connection.php" method="post">
            <table width="480px">
               <tr>
                <td>First Name:</td> 
                <td> <input type="text" id="firstName" name="firstName" placeholder="Enter Your First Name"> </td>
               </tr>
               <tr>
                <td>Last Name:</td> 
                <td> <input type="text" id="lastName" name="lastName" placeholder="Enter Your Sure Name"> </td>
               </tr>
               <tr>
                <td>Gender:</td> 
                <td> <input type="radio" name="gender" value="m" id="male" >Male</td>
                <td> <input type="radio" name="gender" value="f" id="female">Female</td>
               </tr>
               <tr>
                <td>Email:</td> 
                <td><input type="text" id="email" name="email" placeholder="Enter your Email address"></td>
               </tr>
               <tr>
                <td>Password:</td> 
                <td><input type="password" id="password" name="password" placeholder="Enter your Password"></td>
               </tr>
               <tr>
                <td>Phone Number:</td> 
                <td><input type="number" id="number" name="number" placeholder="Enter your phone number"></td>
               </tr>
               <tr>
                <td> <input type="submit"> </td>
              </tr>
            </table>
        </form>
        </div>
    </center>
    <hr>
    <center>
        <p>
            <a href="index.html">Home</a> <a href="https://www.instagram.com/data_engineering_notes/">Instagram</a> <a href="https://www.youtube.com/@ErrorMakesClever">Youtube</a>
        </p>
        </center>

</body>
</html>