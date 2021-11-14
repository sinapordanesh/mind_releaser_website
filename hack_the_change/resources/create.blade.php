<!DOCTYPE html>
<html lang="en">
<head>
    <title>Speak My Mind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--<link href="style.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<style>
    /*body{
        background-image: url('notebook.jpg');
        background-repeat: no-repeat;
        
        background-size: 100% 100%;
    }*/
    .search-container {
        float: left;
        margin-top: -20px;
    }
    .search-container input[type=text] {
        padding: 0px;
        
        margin-left: 450px;
        font-size: 17px;
        
        border-radius: 15px;
        width: 350px;
        height: auto;
    }
    .search-container button {
        float: right;
        padding: 0px;
       
        margin-left: 0px;
        margin-right: 16px;
        margin-top:-3px;

        background: #ddd;
        font-size: 17px;
        border-radius: 15px;
        cursor: pointer;
        width: 80px;
        
    }

    .search-container button:hover {
        background: #ccc;
    }

    </style>
<body>
    <style>
        #gradient{
            background-image: linear-gradient(purple, blue);
        }
        .big-text {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -30%);
            font-family: Ubuntu;
            font-size: 2rem;
            color: #fff;
        }

        .big-text2 {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -30%);
            font-family: Ubuntu;
            font-size: 2rem;
            color: #fff;
        }
        .nav_links {
            list-style: none;
            background-color: white;
        }
    </style>
    <div >
        <header>
            <nav>
                <div>
                    <ul class="nav_links">
                        
                            <a href="home.blade.php">
                                <img src="NewLogo2.svg" alt="Logo" style="width:13%; margin-top: -10px;
                                margin-right: 120px; padding-top: -20px;" >
                            </a>
                        
                        
                        
                    </ul>
                </div>
            </nav>
        </header>
    </div>

                <style>
                    .form {
                        background-color: #f5f5f5;
                        padding: 20px;
                        margin: 20px;
                    }

                    .form-button {
                        background-color: #73AD21;
                        border: none;
                        border-radius: 12px;
                        color: white;
                        padding: 10px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 10px -18px;
                        width: 120px;
                        cursor: pointer;
                    }

                    .form-button:hover {
                        background-color: DodgerBlue;
                        color: white;
                    }
                    h1 {
                        font-family: Helvetica, sans-serif;
                        font-weight: 500;
                        font-size: 30px;
                        color: #edf0f1;
                        background-color: #282828;
                        text-decoration: none;
                        text-align: center;
                    }


                </style>

                <div>
                    <div>
                        <h1> Work Issues </h1>
                    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
                <div>
                   <div class="search-container"  id="rcorners">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Send a comment" name="comment" style = "font-size:15px; padding-left:10px;">
                            <button type="submit" class="search-container button">Send</button>
                        </form>

                    </div>
                </div>



     <!-- <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>   sticky header javascript-->




    

    <div>
        

        

        

        </div><br>





            

              

              

            
          </div>


    </div>


    




    <div class="intro">
      <div class="intro-text">
        <h4 class="hide">
          <span class="text"></span>
        </h4>
        <p class="hide">
          <span class="text"></span>
        </p>


      </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="app.js"></script>-->

</body>

<footer style="background-color:white">
    <img src="Footer.svg" style="width:5%;margin-top:5px;margin-bottom:-50px; margin-left: 10px;">
    <p style="font-size:12px;font-family:Ubuntu;text-align:center;">Copyright (c) SpeakMyMind </p>


</footer>
</html>
