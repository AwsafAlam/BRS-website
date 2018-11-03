<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4th Executive Committee</title>

		<link rel="stylesheet" href="./assets/css/gallery/style.css">
		<link rel="stylesheet" href="./assets/css/gallery/main.css">
		<link rel="stylesheet" href="./assets/css/gallery/sim-prev-anim.css">
		<link rel="stylesheet" href="./assets/css/gallery/materialize.css">

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
                <li><a href="hall-of-fame.php">Hall of Fame</a></li>

                <!-- <li><a href="#">About</a></li> -->
                <!-- <li><a href="contact.html">Contacts</a></li> -->
            </nav>
	</header>

    <section class="cd-container" style="padding: 20px; margin: 20px auto">
        <h1 class="hall-title">4th Executive Committee</h1>
        <div class="row">
            <?php
            $cnt=0;
            for ($i=1;$i<=52;$i++) {

                if (file_exists("assets/img/brs_ex_comm/excomm_".$i.".jpg")==1) {
                    $cnt+=1;
                    ?>
                    <div class="col s6 m4 l3" <?php
                    if ($cnt%4==0)echo 'style= "padding-bottom: 15px"';
                    ?>>
                        <img class="responsive-img materialboxed"
                             src="assets/img/brs_ex_comm/excomm_<?php echo $i; ?>.jpg">
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <br>
        <br>
        <div class="row">
            <h4 style="color: white">List of the 4th Executive Committee</h4>
            <a href="assets/img/brs_ex_comm/4thexcom.pdf"><img src="assets/img/brs_ex_comm/pdf.png"></a>
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