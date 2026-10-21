<html>
    <head>
        <title>Form Login</title>
   <style>
    body {
        background-image    : url('src/Cute Sky.jpg');
        background-size     : cover;
        background-position : center;
        background-repeat   : no-repeat; 
        margin              : 0;
        font-family         : Arial, sans-serif;
    }

    h1{
        font-family         : Georgia, serif;
        color               : white;
        margin-top          : 40px;
        border              : 3px solid white;
        border-radius       : 15px;
        width               : 350;
        margin              : 80px auto;
        background-image    : url('src/Flower.jpg');
    }

    fieldset{
        margin              : 80px auto;
        width               : 320px;
        height              : 400px;
        border              : 4px solid white;
        border-radius       : 15px;
        background-image    : url('src/Flower.jpg');
    }

    legend img{
        border-radius       : 50%;
    }

    p{
        color               : white;
        font-size           : 25px;
        font-family         : Georgia, serif;
    }

    input{
        margin              : 8px 5px;
        padding             : 10px;
        width               : 300px;
        height              : 40px;
        border              : 1px solid #ddd;
        border-radius       : 8px;
        font-size           : 14px;
    }

    select{
        position            : center;
        margin              : 5px;
        padding             : 10px;
        width               : 300px;
        height              : 40px;
        border              : 1px solid white;
        border-radius       : 10px;
    }

    #submit{
        font-family         : Georgia, serif;
        color               : white;
        background          : #428df5;
        border              : none;
        font-weight         : bold;
        cursor              : pointer;
        font-size           : 20px;
    }

    #submit:hover{
        background          : linear-gradient( #95D5FF, #007FFF);
    }

    #input
    {
        background-color    : #EFF6FF
    }

    #input:focus{
        background          : white;
        border-color        : #007FFF;
        outline             : none;
    }

</style>
    
    </head>

<body>
    <h1 align="center"> <b> ୨ৎ SPP </b> ONLINE ୨ৎ </h1>
    <form action="login_validasi.php" method="post">
    <fieldset>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
        <legend align="center"> <img src ="src/download (56).jpg" width="75" height="75"> </legend>
        <table>
          <p align="center"> <b>LOGIN</b>
                <tr> <td><input name="username" type="text" placeholder="Username" id="input"></td></tr>
                <tr> <td><input name="password" type="password" placeholder="Password" id="input"></td></tr>

            </td></tr>
                <tr></tr>
                <tr><td> <input name="login" type="submit" value="LOGIN" id="submit"></td></tr>
                <tr><td> </tr></td>
                <tr><td> </tr></td>
                <tr> <td align="center"> <a href = "bayar.php"> CEK PEMBAYARAN </a> </tr></td>
        </table>
    </fieldset>
    </form>
  </body>
</html>