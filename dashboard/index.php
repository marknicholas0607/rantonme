<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="rant on me, rant, rantonme,  RantOnme, mark nicholas razon, creator of rant on me, cheapdevsph, cheapdevs">
    <meta name="Description" content="Rant and communicate with people all around the world. RantOnMe connects everyone to deliver and receive random messages from users all around the world.">
    <meta property="og:image" content="../img/og-image.webp">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="436">
    <meta property="og:image:height" content="228">
    <meta property="og:description" content="Rant and communicate with people all around the world. RantOnMe connects everyone to deliver and receive random messages from users all around the world.">
    <title>Dashboard - RantOnMe</title>
    <link rel="icon" href="../img/og-image.webp" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Dancing+Script&family=Gideon+Roman&family=Lobster&family=Montserrat:wght@100;200;300;400;600&family=Moo+Lah+Lah&family=Mukta:wght@800&family=Neonderthaw&family=Open+Sans:wght@300;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@100&family=Roboto:wght@100;300;400;500&family=Shizuru&family=Space+Mono&family=Spline+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="../css/aos.css" />
    <script src="../js/aos.js"></script>
</head>
<body>

    <!--- navigation bar --->
    <div id="shrink">
        <div class="nav-left">
            <a href="profile.php"><img src="../img/num78.webp" class="profile-picture"></a>
            <a href="profile.php">
                mark nicholas razon
            </a>
        </div>
        <div class="nav-right">
            <a href="search.php" class="exit-pg">
                <img src="svg/search-rantonme.svg" class="search-ico">
            </a>&nbsp;
            <a href="#" class="exit-pg" onclick="createPost();">
                +
            </a>&nbsp;
            <a href="../" class="exit-pg">
                <img src="svg/logout-rantonme.svg" class="search-ico">
            </a>
        </div>
    </div>

    <!--- modals --->
    <form method="post" action="" id="modal" >
        <div class="modal-bx">
            <a href="#" onclick="createPost();"><img src="svg/return-rantonme.svg" class="return-to-pg"></a><br>
            <textarea rows="5" class="description-area" name="" placeholder="Write a description..."></textarea>
            <label>
                <img src="svg/upload-rantonme.svg" class="up-img">&nbsp;&nbsp;&nbsp;Upload Image
                <input type="file" name="file" id="file-input" multiple="">
            </label>
            <div id="preview"></div>
            <button type="submit" name="" class="create-post">Post</button>
        </div>
    </form>

    <div id="preloader">
        <div class="txt-loader"><p>Logging you in...</p><br>
            <img src="../img/num78.webp" class="num78">
        </div>
    </div>

    <!--- navigation bar --->
    <nav>
        <div class="nav-left">
            <a href="profile.php"><img src="../img/num78.webp" class="profile-picture"></a>
            <a href="profile.php">
                mark nicholas razon
            </a>
        </div>
        <div class="nav-right">
            <a href="search.php" class="exit-pg">
                <img src="svg/search-rantonme.svg" class="search-ico">
            </a>&nbsp;
            <a href="#" class="exit-pg" onclick="createPost();">
                +
            </a>&nbsp;
            <a href="../" class="exit-pg">
                <img src="svg/logout-rantonme.svg" class="search-ico">
            </a>
        </div>
    </nav><br>






    <!--- Posting --->
    <div class="post-box">
        <a href="vp.php"><img src="../img/og-image.webp" class="upload-image"></a>
        <div class="nav-post">
            <a href="" class="bk">
                <div class="nav-post-left">
                    <img src="../img/num78.webp" class="profile-picture ln">
                    mark nicholas razon
                </div>
            </a>
            <div class="nav-post-right"></div>
            <div class="post-text-desc">
                afsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviuafsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviu
            </div>
            <a href="#" class="bk">
                <div class="reaction-to-pt">
                    <img src="svg/heart-nc-rantonme.svg" class="react-ico">&nbsp;0 Likes
                    &nbsp;&nbsp;&nbsp;
                    <img src="svg/comment-rantonme.svg" class="react-ico">&nbsp;0 Comments
                </div>
            </a>
        </div>
    </div>


    <!--- Posting --->
    <div class="post-box">
        <div class="nav-post rm pb">
            <a href="" class="bk">
                <div class="nav-post-left">
                    <img src="../img/num78.webp" class="profile-picture ln">
                    mark nicholas razon
                </div>
            </a>
            <div class="nav-post-right"></div>
            <div class="post-text-desc">
                afsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviuafsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviu
            </div>
            <a href="#" class="bk">
                <div class="reaction-to-pt">
                    <img src="svg/heart-nc-rantonme.svg" class="react-ico">&nbsp;0 Likes
                    &nbsp;&nbsp;&nbsp;
                    <img src="svg/comment-rantonme.svg" class="react-ico">&nbsp;0 Comments
                </div>
            </a>
        </div>
    </div>


    <!--- Posting --->
    <div class="post-box">
        <div class="nav-post rm pb">
            <a href="" class="bk">
                <div class="nav-post-left">
                    <img src="../img/num78.webp" class="profile-picture ln">
                    mark nicholas razon
                </div>
            </a>
            <div class="nav-post-right"></div>
            <div class="post-text-desc">
                afsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviuafsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviu
            </div>
            <a href="#" class="bk">
                <div class="reaction-to-pt">
                    <img src="svg/heart-nc-rantonme.svg" class="react-ico">&nbsp;0 Likes
                    &nbsp;&nbsp;&nbsp;
                    <img src="svg/comment-rantonme.svg" class="react-ico">&nbsp;0 Comments
                </div>
            </a>
        </div>
    </div>


    <!--- Posting --->
    <div class="post-box">
        <a href=""><img src="../img/og-image.webp" class="upload-image"></a>
        <div class="nav-post">
            <a href="" class="bk">
                <div class="nav-post-left">
                    <img src="../img/num78.webp" class="profile-picture ln">
                    mark nicholas razon
                </div>
            </a>
            <div class="nav-post-right"></div>
            <div class="post-text-desc">
                afsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviuafsafafsafafafsbvaifsaiusafsavifsafsaiuvfsafsavfiuaviu
            </div>
            <a href="#" class="bk">
                <div class="reaction-to-pt">
                    <img src="svg/heart-c-rantonme.svg" class="react-ico">&nbsp;0 Likes
                    &nbsp;&nbsp;&nbsp;
                    <img src="svg/comment-rantonme.svg" class="react-ico">&nbsp;0 Comments
                </div>
            </a>
        </div>
    </div><br><br><br>







    

<script src="../js/preloader.js"></script>
<script src="../js/preview.js"></script>
<script src="../js/post.js"></script>
<script src="../js/shrink.js"></script>
</body>
</html>