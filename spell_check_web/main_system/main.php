
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <a href="http://localhost/spell_check_web/login_system/web_home.php" class="logo-text">AISpelling</a>
        <!--<h2 class="logo-text">AISpelling</h2>-->
        <nav class="navigation">
            <a class= href="http://localhost/spell_check_web/login_system/web_home.php">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            </a>
            <a href="#">
                <span class="icon"><ion-icon name="share-social-outline"></ion-icon></span>
            </a>
            <a href="http://localhost/spell_check_web/login_system/web_home.php">
                <button class ="btnLogin-popup">Login</button>
            </a>
            
        </nav>
    </header>

    <div class="input-container">
        <textarea name="content" placeholder="Nhập nội dung cần kiểm tra chính tả" class="input-field"></textarea>
         <button class="check">
            <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
            Kiểm tra
        </button>
        
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>