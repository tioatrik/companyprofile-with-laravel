
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company-profile</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<body>
    <div class="header">
    <nav>
        <h2 class="logo"><a href="">Bali Traveller</a> </h2>
        <div class="nav-link" id="navMain">
            <i class="fa-regular fa-circle-xmark" onclick="mark()"></i>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Tentang kami</a></li>
                <li><a href="">Produk</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
           <i class="fa-solid fa-bars" onclick="bars()"></i>
    </nav>

    <div class="info">
        <h1>Berkembang bersama Bali Traveller</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero blanditiis a adipisci quod.</p>
        <a href="" class="text-btn">Hubungi kami</a>
    </div>
    </div>
    
    <div class="about">
        <div class="img-about">
            <img src="../img/bali.jpg" alt="" srcset="">
        </div>
        <div class="main-about">
        <h1>Tentang kami</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet consequuntur illum architecto. Quis, perferendis eligendi exercitationem laudantium vero consectetur dolorem cupiditate consequuntur odit ab, 
            nesciunt deserunt deleniti molestiae non. Quo suscipit velit magni esse ipsam libero consequuntur  </p>
    </div>
    </div>

    <div class="clear"></div>
 <div class="course">
        <h1>Produk Kami</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum.</p>
        <div class="row">
            <div class="col">
                <a href="#">
                <h3>Dalam Negri</h3>
                <p>Keliling di dalam negri?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolore temporibus fugit quae quos! Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </a>
            </div>
            <div class="col">
                <a href="#">
                <h3>Luar Negri</h3>
                <p>Keliling di luar negri?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolore temporibus fugit quae quos! Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
            </a>
            </div>
            <div class="col">
                <a href="#">
                <h3>Haji dan umroh</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolore temporibus fugit quae quos! Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </a>
            </div>
        </div>
    </div>

    <div class="media">
        <h1>Destinasi Pilihan</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
 
        <div class="row">
            <div class="img-media">
                <img src="../img/bali.jpg" alt="">
                <div class="layer"> <h3>Bali</h3></div>
            </div>

            <div class="img-media">
                <img src="../img/danau-toba.jpg" alt="">
                <div class="layer"> <h3>Danau toba</h3></div>
            </div>
            
            <div class="img-media">
                <img src="../img/raja-ampat.jpg" alt="">
                <div class="layer"> <h3>Raja ampat</h3></div>
            </div>

            <div class="img-media">
                <img src="../img/labuan.jpg" alt="">
                <div class="layer"> <h3>Labuan bajo</h3> </div>
            </div>

            <div class="img-media">
                <img src="../img/borobudur1.jpg" alt="">
                <div class="layer"> <h3>Borobudur</h3></div>
            </div>
            </div>
        </div>
    </div>

            <div class="footer">
                <div class="content-footer">
                    <h3>Bali Treveller</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto non porro dolorem cum omnis.</p>
                    <ul class="socials">
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="main-footer">
                    <p>copyright &copy;2022 Bali Traveller. designed by <span>Tio atrik herdiansyah</span></p>
                </div>
            </div>

            </div>
        </div>
   </div>
    <script>
        var navMain = document.getElementById("navMain");
        function bars(){
            navMain.style.right = "0px";
        }
        function mark(){
            navMain.style.right = "-500px";
        }
    </script>
</body>
</html>