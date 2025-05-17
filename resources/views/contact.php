<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nqad Lik</title>

    <script>
            function redirectToPage(event) {
                 event.preventDefault(); 
                 window.location.href = "formulaire.html"; 
            }
             function redirectToPage2(event) {
                 event.preventDefault(); 
                 window.location.href = "login.php"; 
            }

    </script>

    <link rel="stylesheet" href="style.css">

</head>
<body>
   <header class ="header"> 
    <h1 class="logo">Nqad Lik</h1>
    <nav class="navigation">
        <ul>
            <li><a href="Acceuil.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="login.php" id="sg3">SIGN IN</a></li>
        </ul>
        <div class="left">
         <div class="toggle-switch" id="theme-toggle">
            <div class="icon sun">☀</div>
             <div class="icon moon">🌑</div>
             <div class="circle"> </div>
        </div>
        </div>
    </nav>
    </header>
    <main class="content">
        <div class="container">
            <h1>Contact Us</h1> 
                    
           <table class="t1">
            <tr><td>
            <h2>START A NEW CASE</h2>
            <p>Submit your questions or concerns by opening a new case,
               and our team will provide the support you need.
            </p>
               <form onsubmit="redirectToPage(event)">
                <input type="submit" value="START HERE">
               </form>
                    </td></tr>
           </table>
           <table class="t2">
            <tr><td>
            <h2 >BY PHONE</h2>
               <p>To access our dedicated telephone support service,
                please log into your account using your registered credentials. </p>
              <form onsubmit="redirectToPage2(event)">
                <input type="submit" value="LOG IN">
               </form>              
                    </td></tr>
           </table>
        </div>            
    </main>
    <footer class="footer">
        <div class="container">
            <p>&copy;Nqad Lik. All rights reserved.</p>
            <div class="footer-links">
                <a href="privacy.php">Privacy Policy |</a>
                <a href="terms.php">Terms of Service |</a>
                <a href="contact.php">Contact Us</a>

            </div>
        </div> 
    </footer>   
    
</body>
</html>
