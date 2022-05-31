<!DOCTYPE html>
<html >
    <head>
    <title >Giriş Yap / Kaydol</title>
    <meta name="viewport" content="width= device-width">
    <link href="login.css" rel="stylesheet" type="text/css" > 
    <link href="script.js" rel="script" >
    <meta charset="utf-8">
    </head>
    <body>
       
        
         <div class='container' id="login">
            <div class="forms">
               <div class="form login">
                   <a class="title">Giriş</a>

                   <form action="login-control.php" method="POST">
                       <div class="input-field">
                        <input type="text" name="email" placeholder="Email Giriniz" required>
                       </div>
                       <div class="input-field">
                        <input type="password" name="password" id="" placeholder="Şifre Giriniz" required>
                        </div>
                        <div class="input-field button" >
                            <input type="submit" value="Giriş Yap">
                       </div>
                      
                   </form>
                   <div class="register-text">
                           <a href="#" onclick="change_content();">Hesabın yok mu? Kaydol</a>
                       </div>
               </div>
            </div>
        </div>
        
        <div class='container' id="signup" hidden>
            <div class="forms">
               <div class="form login">
                   <a class="title">Kayıt Ol</a>

                   <form action="db-connect.php" method="POST" onsubmit="check_password()">
                       <div class="input-field">
                        <input type="text" name="email" placeholder="Email Giriniz" required>

                       </div>
                       <div class="input-field">
                        <input type="password" name="password" id="password2" placeholder="Şifre Giriniz" required>
                        </div>
                        <div class="input-field">
                        <input type="password" name="" id="password_again2" placeholder="Şifreyi Tekrar Giriniz" required>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Kayıt Ol" >
                       </div>
                      
                   </form>
                   
                   <div class="register-text">
                           <a href="#" onclick="change_content();">Zaten hesabın var mı? Giriş yap</a>
                       </div>
               </div>
            </div>
        </div>
    <script src="script.js"></script>
    <script>
        function check_password(){
        var pwd = document.getElementById("password2").value;
        var pwd2 = document.getElementById("password_again2").value;
        if ( pwd != pwd2){
            console.log ("Siflere ayni degil");
            alert("Şifreler uyuşmuyor");
            return false;
        } 
        
    }
    </script>
    </body>
</html>