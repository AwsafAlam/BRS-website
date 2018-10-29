<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

		<link rel="stylesheet" href="./assets/css/gallery/style.css">
		<link rel="stylesheet" href="./assets/css/gallery/main.css">
		<link rel="stylesheet" href="./assets/css/gallery/sim-prev-anim.css">
		<link rel="stylesheet" href="./assets/css/gallery/materialize.css">

		<?php
		    if (!isset($_GET["img"])){
		      $img=0;
		    }
		    else{
            $folder=$_GET["link"];
            $img=$_GET["img"];
            }
		?>


</head>
<body>
		<header>
		<a href="#"><img src="assets/img/logo.png" alt="logo"></a>
            <nav>
                <li><a href="index.php">Home</a></li>
                <li class="drop"><a>Gallery</a>
                    <div class="dropdown">
                        <a href="photo-gallery.html">Photo Gallery</a>
                        <a href="video-gallery.html">Video Gallery</a>
                    </div>
                </li>
                <li><a href="blog.php">Blog</a></li>

                <!-- <li><a href="#">About</a></li> -->
                <!-- <li><a href="contact.html">Contacts</a></li> -->
            </nav>
	</header>

    <section id="cd-timeline" class="cd-container">
        <div class="row">
            <?php for ($i=1;$i<=$img;$i++){
                ?>
            <div class="col s6" style="padding-bottom: 30px">
                <img class="responsive-img materialboxed" src="assets/img/gallery/<?php echo $folder.'/'.$i?>.jpg">
            </div>
            <?php
            }
            ?>
        </div>
	</section> <!-- cd-timeline -->


    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems, {});
    });
</script>
</body>
</html>