<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUET Robotics Society</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <?php
    session_start();
    $_SESSION['message']='';?>


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


	<section class="hero">
		<div class="background-image" style="background: url(assets/img/hero.png) fixed;"></div>
        <div class="wow slideInLeft heroContent">
            <h2 class="title visible-xs">Sign Up Now!</h2>
            <!-- <p class="tagline visible-xs">
                Always loved robots and wanted to learn how to build them? Be part of BUET's
                robotics community and find out how. Hurry and sign up!
            </p> -->
        </div>

        <div class="heroContent" style="text-align: center">
            <img class="wow slideInDown" id="arrow" src="assets/img/arrow.png" alt="arrow" />
        </div>


        <div class="heroContent">
            <div class="wow slideInRight" style="visibility: hidden">
                <h2 class="title">WELCOME TO BUET ROBOTICS SOCIETY!</h2>
                <p class="tagline hidden-xs">
                    Always loved robots and wanted to learn how to build them? Be part of BUET's
                    robotics community and find out how. Hurry and sign up!
                </p>
            </div>

        </div>



        <svg version="1.1" id="roboarm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 width="430.775px" height="385.496px" viewBox="0 0 430.775 385.496" enable-background="new 0 0 430.775 385.496"
        	 xml:space="preserve" preserveAspectRatio="xMinYMin meet" class="svg-content">
        <rect x="8.624" y="268.641" fill="#6E6F72" width="19.508" height="13.229"/>
        <path fill="#3A9EA2" d="M56.293,325.77c0-8.358-3.671-15.857-9.485-21H9.488C3.67,309.911,0,317.41,0,325.77
        	c0,8.383,3.694,15.904,9.543,21.047h37.208C52.599,341.674,56.293,334.152,56.293,325.77z"/>
        <rect x="3.367" y="353.839" fill="#40ADB2" width="87.568" height="31.657"/>
        <rect x="53.299" y="357.568" fill="#F2F4EF" width="33.146" height="13.431"/>
        <rect x="32.716" y="357.729" fill="#C7CB35" width="5.132" height="5.117"/>
        <rect x="41.376" y="357.729" fill="#C7CB35" width="5.133" height="5.117"/>
        <rect x="32.716" y="366.045" fill="#C7CB35" width="5.132" height="5.115"/>
        <g id="arm">
        	<a href="#" data-toggle="modal" data-target="#myModal"><g>
        		<polygon fill="#414042" stroke="#FFFFFF" stroke-width="0.8304" stroke-miterlimit="10" points="319.903,150.009 87.653,202.316
        			53.88,53.31 286.134,1 		"/>
        		<polygon fill="#414042" stroke="#FFFFFF" stroke-width="0.8023" stroke-miterlimit="10" points="316.259,147.648 90.283,198.543
        			57.885,55.595 283.858,4.696 		"/>
        		<g>
        			<path fill="#FFFFFF" d="M107.469,107.643c0.632,2.786-0.45,4.493-3.244,5.123l-18.322,4.127L75.537,71.157l18.205-4.1
        				c2.717-0.612,4.393,0.484,5.029,3.29l2.669,11.777c0.353,1.559,0.138,2.876-0.645,3.954c-0.111,0.148-1.133,1.167-3.066,3.056
        				c2.647,0.898,4.056,1.401,4.224,1.507c1.263,0.677,2.075,1.815,2.437,3.413L107.469,107.643z M94.801,84.51l-2.51-11.076
        				l-8.589,1.935l3.04,13.414l5.276-1.188L94.801,84.51z M100.223,107.616l-2.954-13.034l-3.875-1.461L88,94.336l3.457,15.255
        				L100.223,107.616z"/>
        			<path fill="#FFFFFF" d="M132.837,106.321l-19.025,4.286l-10.366-45.735l18.85-4.246l1.371,6.049l-11.989,2.7l3.026,13.355
        				l10.319-2.324l1.345,5.933l-10.319,2.324l3.252,14.349l12.166-2.74L132.837,106.321z"/>
        			<path fill="#FFFFFF" d="M159.152,96.002c0.632,2.786-0.45,4.493-3.244,5.123l-14.307,3.222c-2.716,0.612-4.39-0.475-5.021-3.261
        				l-8.465-37.349c-0.636-2.806,0.405-4.514,3.121-5.126l14.306-3.222c2.794-0.629,4.51,0.458,5.146,3.264l2.424,10.696l-6.83,1.538
        				l-2.047-9.031l-8.882,2.001l7.703,33.988l8.882-2.001l-2.179-9.615l6.83-1.538L159.152,96.002z"/>
        			<path fill="#FFFFFF" d="M187.676,89.577c0.632,2.786-0.44,4.491-3.215,5.116l-14.893,3.354c-2.717,0.612-4.391-0.475-5.022-3.261
        				l-8.464-37.349c-0.636-2.806,0.404-4.514,3.121-5.126l14.893-3.354c2.775-0.625,4.48,0.465,5.117,3.271L187.676,89.577z
        				 M180.433,89.427l-7.704-33.988l-9.41,2.12l7.703,33.988L180.433,89.427z"/>
        			<path fill="#FFFFFF" d="M221.868,86.269l-6.596,1.485l-5.114-22.561c-0.27-1.188-0.509-2.875-0.716-5.061l-0.63,24.684
        				l-3.488,0.786l-11.243-22.01c0.764,2.101,1.275,3.727,1.536,4.876l5.113,22.561l-6.596,1.486L183.769,46.78l6.479-1.459
        				l12.94,23.654c0.14,0.256,0.355,0.933,0.646,2.036c-0.111-0.487-0.209-1.192-0.294-2.115l1.481-26.902l6.479-1.459
        				L221.868,86.269z"/>
        			<path fill="#FFFFFF" d="M246.376,80.749l-19.025,4.285l-10.367-45.736l18.852-4.246l1.369,6.049l-11.988,2.7l3.025,13.355
        				l10.32-2.324l1.344,5.933l-10.318,2.324l3.252,14.349l12.166-2.74L246.376,80.749z"/>
        			<path fill="#FFFFFF" d="M286.685,71.67l-6.803,1.532l-3.346-8.368l-8.588,1.935l0.588,8.989l-6.771,1.525l-0.025-0.117
        				l-1.471-47.679l7.213-1.624L286.685,71.67z M274.239,59.176l-8.018-19.879l1.305,21.391L274.239,59.176z"/>
        		</g>
        		<g>
        			<path fill="#FFFFFF" d="M133.789,171.827l-8.007,1.804l-6.208-27.389c-0.327-1.443-0.616-3.492-0.868-6.146l-0.765,29.967
        				l-4.235,0.954l-13.65-26.72c0.927,2.551,1.549,4.524,1.865,5.92l6.208,27.389l-8.008,1.804l-12.584-55.524l7.865-1.771
        				l15.711,28.717c0.169,0.311,0.431,1.134,0.784,2.472c-0.134-0.592-0.253-1.447-0.357-2.567l1.8-32.662l7.864-1.771
        				L133.789,171.827z"/>
        			<path fill="#FFFFFF" d="M163.543,165.125l-23.098,5.203l-12.584-55.524l22.884-5.154l1.664,7.345l-14.556,3.279l3.675,16.213
        				l12.527-2.822l1.632,7.202l-12.527,2.822l3.948,17.421l14.77-3.327L163.543,165.125z"/>
        			<path fill="#FFFFFF" d="M202.903,156.26l-8.007,1.804l-6.208-27.389c-0.327-1.443-0.616-3.492-0.868-6.145l-0.765,29.967
        				l-4.235,0.954l-13.649-26.721c0.927,2.551,1.549,4.524,1.865,5.92l6.208,27.389l-8.008,1.804l-12.584-55.524l7.865-1.771
        				l15.711,28.718c0.169,0.312,0.431,1.133,0.784,2.471c-0.134-0.592-0.253-1.447-0.357-2.567l1.8-32.662l7.864-1.771
        				L202.903,156.26z"/>
        			<path fill="#FFFFFF" d="M235.741,143.531c0.768,3.383-0.547,5.456-3.938,6.22l-22.244,5.01l-12.584-55.524l22.102-4.978
        				c3.299-0.743,5.332,0.59,6.105,3.996l3.24,14.297c0.428,1.893,0.168,3.493-0.783,4.8c-0.135,0.179-1.375,1.417-3.723,3.71
        				c3.215,1.091,4.924,1.701,5.127,1.828c1.533,0.823,2.52,2.205,2.959,4.144L235.741,143.531z M220.362,115.448l-3.047-13.446
        				l-10.429,2.349l3.69,16.284l6.407-1.443L220.362,115.448z M226.944,143.499l-3.586-15.823l-4.705-1.774l-6.547,1.475l4.197,18.52
        				L226.944,143.499z"/>
        			<path fill="#FFFFFF" d="M266.538,141.927l-23.098,5.203l-12.584-55.524l22.883-5.154l1.666,7.345l-14.557,3.278l3.674,16.213
        				l12.527-2.821l1.633,7.202l-12.527,2.821l3.947,17.421l14.771-3.327L266.538,141.927z"/>
        			<path fill="#FFFFFF" d="M300.739,134.224l-8.684,1.956l-15.029-23.725l-1.133-5.002l8.186-1.844l-3.988-17.598l-10.498,2.365
        				l10.967,48.393l-8.326,1.876l-12.584-55.524l22.102-4.978c3.346-0.753,5.402,0.574,6.176,3.98l4.574,20.187
        				c0.531,2.342,0.078,4.035-1.355,5.078c-0.773,0.547-2.537,1.132-5.289,1.751L300.739,134.224z"/>
        		</g>
        	</g></a>
        	<polygon fill="#3A9EA2" points="71.222,191.221 63.762,177.067 32.608,193.878 12.212,260.262 27.548,264.945 45.985,204.934 	"/>
        	<g>
        		<ellipse fill="#40ADB2" cx="41.068" cy="200.482" rx="12.479" ry="12.438"/>
        		<path fill="#6E6F72" d="M47.443,200.482c0,3.512-2.854,6.354-6.376,6.354c-3.519,0-6.374-2.842-6.374-6.354
        			s2.854-6.354,6.374-6.354C44.589,194.128,47.443,196.971,47.443,200.482z"/>
        		<ellipse fill="#EFEFEF" cx="41.067" cy="200.482" rx="3.118" ry="3.107"/>
        	</g>
        	<g>
        		<g>
        			<polygon fill="#6E6F72" points="82.156,189.185 79.584,184.287 95.236,177.128 96.106,178.784 			"/>
        			<polygon fill="#6E6F72" points="71.078,168.092 73.647,172.986 88.468,164.242 87.6,162.587 			"/>
        			<polygon fill="#6E6F72" points="75.943,176.31 78.514,181.207 92.883,171.599 92.013,169.941 			"/>
        		</g>
        		<polygon fill="#40ADB2" points="69.774,165.607 83.459,191.669 76.863,195.107 63.174,169.052 		"/>
        		<polygon fill="#595A5C" points="71.718,166.333 83.968,189.66 81.368,191.014 69.124,167.69 		"/>
        		<polygon fill="#6E6F72" points="63.186,167.854 77.858,195.783 76.081,196.712 61.412,168.779 		"/>
        		<polygon fill="#40ADB2" points="57.939,172.333 71.174,197.527 75.362,195.343 62.127,170.147 		"/>
        	</g>
        </g>
        <rect x="41.376" y="366.045" fill="#C7CB35" width="5.133" height="5.115"/>
        <g>
        	<rect x="7.536" y="357.568" fill="#F2F4EF" width="4.812" height="13.592"/>
        	<rect x="15.797" y="357.568" fill="#F2F4EF" width="4.811" height="13.592"/>
        	<rect x="24.056" y="357.568" fill="#F2F4EF" width="4.812" height="13.592"/>
        </g>
        <rect x="7.536" y="349.076" fill="#595A5C" width="40.897" height="4.763"/>
        <g>
        	<path fill="#40ADB2" d="M31.039,264.58c0,6.975-5.67,12.621-12.661,12.621c-6.991,0-12.66-5.646-12.66-12.621
        		c0-6.969,5.668-12.619,12.66-12.619C25.37,251.961,31.039,257.611,31.039,264.58z"/>
        	<ellipse fill="#6E6F72" cx="18.378" cy="264.58" rx="6.468" ry="6.449"/>
        	<path fill="#EFEFEF" d="M21.543,264.58c0,1.746-1.417,3.154-3.166,3.154c-1.747,0-3.165-1.408-3.165-3.154
        		c0-1.741,1.417-3.153,3.165-3.153C20.126,261.427,21.543,262.839,21.543,264.58z"/>
        </g>
        <g>
        	<polygon fill="#40ADB2" points="21.06,343.784 10.337,332.85 34.821,307.801 45.957,318.398 	"/>
        	<g>
        		<ellipse fill="#40ADB2" cx="40.389" cy="313.101" rx="7.673" ry="7.649"/>
        		<ellipse fill="#6E6F72" cx="40.389" cy="313.101" rx="3.921" ry="3.907"/>
        		<ellipse fill="#EFEFEF" cx="40.389" cy="313.101" rx="1.918" ry="1.911"/>
        	</g>
        	<g>
        		<ellipse fill="#40ADB2" cx="15.796" cy="338.223" rx="7.673" ry="7.646"/>
        		<path fill="#6E6F72" d="M19.716,338.223c0,2.157-1.755,3.906-3.919,3.906c-2.166,0-3.92-1.749-3.92-3.906
        			c0-2.16,1.754-3.908,3.92-3.908C17.961,334.313,19.716,336.063,19.716,338.223z"/>
        		<path fill="#EFEFEF" d="M17.714,338.223c0,1.053-0.859,1.91-1.917,1.91c-1.06,0-1.919-0.857-1.919-1.91
        			c0-1.059,0.859-1.914,1.919-1.914C16.855,336.309,17.714,337.164,17.714,338.223z"/>
        	</g>
        </g>
        <rect x="9.942" y="346.378" fill="#40ADB2" width="36.567" height="2.698"/>
        <rect x="9.942" y="288.395" fill="#6E6F72" width="36.866" height="16.375"/>
        <g>
        	<rect x="7.751" y="290.846" fill="#595A5C" width="41.164" height="2.344"/>
        	<rect x="7.792" y="294.877" fill="#595A5C" width="41.166" height="2.344"/>
        	<rect x="7.835" y="298.908" fill="#595A5C" width="41.165" height="2.345"/>
        </g>
        <rect x="6.468" y="279.76" fill="#3A9EA2" width="43.838" height="8.635"/>
    </svg>

	</section>


	<section class="our-work">
        <svg id="BB8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 width="333.989px" height="381.34px" viewBox="12.091 13.594 333.989 381.34"
        	 enable-background="new 12.091 13.594 333.989 381.34" xml:space="preserve">
        <g id="roller">
        	<path fill="#FFFFFF" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M96.064,345.105
        		c0.076-4.989,2.303-9.44,5.787-12.489c-3.67-14.81-14.623-26.789-28.893-31.843c-3.038,4.866-8.478,8.067-14.632,7.976
        		c-6.157-0.092-11.494-3.461-14.382-8.422c-14.37,4.603-25.656,16.18-29.813,30.799c3.484,3.156,5.647,7.74,5.569,12.813
        		c-0.076,4.854-2.195,9.205-5.521,12.241c4.012,13.895,14.495,25.078,28.019,30.027c2.932-5.289,8.606-8.83,15.073-8.73
        		c6.468,0.1,12.032,3.813,14.8,9.188c13.721-4.547,24.57-15.473,28.976-29.306C97.908,354.229,95.991,349.887,96.064,345.105"/>
        	<path fill="#FBAC3E" d="M19.7,343.939c0.078-5.073-2.085-9.657-5.569-12.813c-1.063,3.736-1.662,7.676-1.727,11.746
        		c-0.069,4.621,0.554,9.092,1.774,13.31C17.505,353.145,19.624,348.795,19.7,343.939"/>
        	<path fill="#FBAC3E" d="M101.851,332.616c-3.482,3.049-5.71,7.5-5.787,12.489c-0.073,4.78,1.845,9.124,4.982,12.254
        		c1.317-4.137,2.062-8.532,2.131-13.097C103.239,340.247,102.774,336.342,101.851,332.616"/>
        	<path fill="#FBAC3E" d="M58.326,308.749c6.155,0.094,11.594-3.108,14.632-7.976c-4.533-1.606-9.397-2.513-14.47-2.591
        		c-5.074-0.077-9.966,0.677-14.544,2.145C46.832,305.288,52.169,308.657,58.326,308.749"/>
        	<path fill="#FBAC3E" d="M57.271,377.478c-6.467-0.101-12.142,3.44-15.073,8.729c4.654,1.699,9.664,2.666,14.897,2.744
        		c5.234,0.084,10.272-0.729,14.976-2.287C69.303,381.29,63.739,377.577,57.271,377.478"/>

        		<line fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" x1="58.326" y1="308.749" x2="57.271" y2="377.478"/>

        		<line fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" x1="96.051" y1="345.823" x2="19.687" y2="344.653"/>
        	<path fill="#FBAC3E" d="M83.273,345.708c-0.216,14.123-11.842,25.399-25.966,25.183c-14.125-0.216-25.4-11.843-25.183-25.97
        		c0.216-14.125,11.841-25.396,25.966-25.18S83.49,331.581,83.273,345.708"/>
        	<circle fill="#FFFFFF" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" cx="57.764" cy="345.315" r="14.596"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M77.865,345.622
        		c-0.169,11.104-9.309,19.963-20.408,19.793c-11.102-0.168-19.964-9.308-19.794-20.404c0.17-11.105,9.308-19.965,20.409-19.797
        		C69.174,325.385,78.036,334.523,77.865,345.622z"/>
        	<path fill="#A2AEAA" d="M59.062,334.831c-0.012,0.613-0.517,1.106-1.135,1.096c-0.615-0.008-1.108-0.516-1.099-1.131
        		c0.009-0.615,0.519-1.107,1.134-1.101C58.579,333.706,59.071,334.215,59.062,334.831"/>
        	<path fill="#A2AEAA" d="M58.723,356.913c-0.01,0.611-0.517,1.107-1.133,1.096c-0.616-0.008-1.108-0.516-1.099-1.131
        		c0.009-0.619,0.517-1.108,1.133-1.1C58.241,355.786,58.732,356.295,58.723,356.913"/>
        	<path fill="#A2AEAA" d="M70.046,345.922c-0.008,0.611-0.517,1.106-1.134,1.096c-0.615-0.007-1.107-0.518-1.097-1.13
        		c0.008-0.619,0.517-1.109,1.132-1.103C69.564,344.797,70.056,345.305,70.046,345.922"/>
        	<path fill="#A2AEAA" d="M47.692,345.579c-0.009,0.614-0.515,1.104-1.131,1.096c-0.615-0.008-1.108-0.516-1.098-1.129
        		c0.009-0.616,0.517-1.111,1.132-1.102C47.211,344.456,47.703,344.961,47.692,345.579"/>
        	<path fill="#A2AEAA" d="M45.389,350.313l4.404-2.003c0,0,0.491,3.25,4.795,4.396l-1.612,5.203
        		C52.977,357.907,46.341,355.461,45.389,350.313"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.2049" stroke-miterlimit="10" d="M67.111,338.559
        		c-0.02,1.288-1.083,2.314-2.374,2.296s-2.323-1.079-2.302-2.371c0.019-1.292,1.083-2.321,2.373-2.305
        		C66.101,336.202,67.13,337.263,67.111,338.559z"/>
        	<path fill="#A2AEAA" d="M58.391,339.681l-0.174,11.288c0.184-0.018,0.366-0.041,0.543-0.069l0.169-11.133
        		C58.754,339.729,58.575,339.704,58.391,339.681"/>
        	<path fill="#A2AEAA" d="M55.382,340.179l-0.156,10.202c0.533,0.268,1.116,0.455,1.731,0.541l0.173-11.238
        		C56.511,339.754,55.923,339.924,55.382,340.179"/>
        	<path fill="#A2AEAA" d="M63.435,345.401c0.035-2.293-1.3-4.287-3.248-5.211l-0.159,10.32
        		C62.002,349.651,63.399,347.697,63.435,345.401"/>
        	<path fill="#A2AEAA" d="M52.095,345.227c-0.029,1.793,0.78,3.398,2.06,4.459l0.136-8.85
        		C52.978,341.857,52.122,343.438,52.095,345.227"/>
        	<path fill="#FFFFFF" d="M54.291,340.836l-0.136,8.85c0.328,0.27,0.687,0.503,1.071,0.695l0.156-10.202
        		C54.993,340.356,54.625,340.579,54.291,340.836"/>
        	<path fill="#FFFFFF" d="M57.851,339.646c-0.243-0.006-0.485,0.011-0.721,0.037l-0.173,11.239c0.237,0.031,0.478,0.061,0.721,0.063
        		c0.182,0.003,0.361-0.004,0.539-0.018l0.174-11.287C58.213,339.661,58.032,339.647,57.851,339.646"/>
        	<path fill="#FFFFFF" d="M58.93,339.767L58.761,350.9c0.443-0.08,0.867-0.214,1.267-0.39l0.159-10.317
        		C59.789,340.004,59.37,339.86,58.93,339.767"/>
        	<path fill="#A2AEAA" d="M72.677,319.963c-0.011,0.617-0.518,1.106-1.135,1.1c-0.615-0.012-1.106-0.516-1.096-1.13
        		c0.009-0.619,0.515-1.111,1.132-1.103C72.194,318.838,72.685,319.348,72.677,319.963"/>
        	<path fill="#A2AEAA" d="M71.893,371.111c-0.009,0.618-0.517,1.109-1.133,1.103c-0.617-0.014-1.108-0.519-1.098-1.135
        		c0.008-0.617,0.515-1.107,1.131-1.099C71.41,369.989,71.902,370.499,71.893,371.111"/>
        	<path fill="#A2AEAA" d="M86.629,333.139c-0.009,0.619-0.515,1.109-1.133,1.1c-0.616-0.008-1.107-0.516-1.097-1.131
        		c0.009-0.619,0.515-1.107,1.133-1.098C86.147,332.018,86.639,332.524,86.629,333.139"/>
        	<path fill="#A2AEAA" d="M86.242,358.447c-0.008,0.618-0.516,1.109-1.134,1.103c-0.616-0.01-1.106-0.519-1.098-1.133
        		c0.011-0.617,0.517-1.109,1.134-1.1C85.758,357.325,86.252,357.833,86.242,358.447"/>
        	<path fill="#A2AEAA" d="M43.629,319.521c-0.009,0.614,0.483,1.12,1.098,1.13c0.617,0.01,1.125-0.48,1.134-1.096
        		c0.008-0.619-0.482-1.127-1.099-1.137C44.146,318.411,43.64,318.903,43.629,319.521"/>
        	<path fill="#A2AEAA" d="M42.845,370.667c-0.01,0.617,0.482,1.127,1.097,1.133c0.618,0.012,1.123-0.481,1.133-1.098
        		c0.009-0.617-0.482-1.123-1.1-1.132C43.361,369.56,42.855,370.051,42.845,370.667"/>
        	<path fill="#A2AEAA" d="M29.279,332.263c-0.01,0.616,0.482,1.124,1.099,1.132c0.614,0.007,1.123-0.479,1.132-1.102
        		c0.008-0.612-0.482-1.121-1.098-1.131C29.795,331.154,29.287,331.642,29.279,332.263"/>
        	<path fill="#A2AEAA" d="M28.891,357.568c-0.01,0.616,0.481,1.126,1.098,1.134c0.616,0.012,1.122-0.482,1.133-1.099
        		c0.009-0.615-0.483-1.121-1.098-1.133C29.407,356.463,28.899,356.954,28.891,357.568"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M19.7,343.939
        		c0.078-5.073-2.085-9.657-5.569-12.813c-1.063,3.736-1.662,7.676-1.727,11.746c-0.069,4.621,0.554,9.092,1.774,13.31
        		C17.505,353.145,19.624,348.795,19.7,343.939"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M101.851,332.616
        		c-3.482,3.049-5.71,7.5-5.787,12.489c-0.073,4.78,1.845,9.124,4.982,12.254c1.317-4.137,2.062-8.532,2.131-13.097
        		C103.239,340.247,102.774,336.342,101.851,332.616"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M58.326,308.749
        		c6.155,0.094,11.594-3.108,14.632-7.976c-4.533-1.606-9.397-2.513-14.47-2.591c-5.074-0.077-9.966,0.677-14.544,2.145
        		C46.832,305.288,52.169,308.657,58.326,308.749"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M57.271,377.478
        		c-6.467-0.101-12.142,3.44-15.073,8.729c4.654,1.699,9.664,2.666,14.897,2.744c5.234,0.084,10.272-0.729,14.976-2.287
        		C69.303,381.29,63.739,377.577,57.271,377.478"/>

        </g>
        <g id="head">
        	<polygon fill="#FFFFFF" points="63.155,243.099 62.083,243.195 63.888,263.138 64.964,263.098 	"/>
        	<polygon fill="#F2B147" points="64.999,263.486 64.964,263.098 63.888,263.138 63.922,263.526 63.946,263.784 64.952,274.911
        		66.023,274.814 	"/>

        		<rect x="61.222" y="252.115" transform="matrix(-0.9958 0.0916 -0.0916 -0.9958 147.8035 529.2967)" fill="#A3ABA8" width="1.077" height="31.848"/>
        	<path fill="#FFFFFF" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M52.248,270.936
        		c-18.242,0.76-32.415,16.168-31.652,34.406c0.042,1.072,0.141,2.123,0.284,3.164l65.497-9.029
        		C84.108,282.765,69.438,270.217,52.248,270.936z"/>
        	<path fill="#F2B147" d="M49.771,281.575c8.532-1.123,15.711-3.91,19.129-7.072c-0.342-0.178-0.689-0.351-1.039-0.517
        		c-3.356,3.054-10.112,5.705-18.126,6.759c-7.442,0.979-14.198,0.346-18.35-1.418c-0.304,0.272-0.604,0.553-0.898,0.838
        		C34.783,281.975,41.899,282.606,49.771,281.575"/>
        	<path fill="#F2B147" d="M49.699,279.85c7.457-0.982,13.78-3.448,17.116-6.348c-0.284-0.121-0.572-0.233-0.861-0.351
        		c-3.348,2.613-9.202,4.806-16.043,5.702c-6.587,0.863-12.607,0.339-16.533-1.184c-0.352,0.271-0.698,0.549-1.038,0.834
        		C36.383,280.165,42.728,280.765,49.699,279.85"/>
        	<path d="M58.903,288.527c0.152,3.683-2.708,6.793-6.392,6.942c-3.685,0.154-6.794-2.704-6.949-6.389
        		c-0.152-3.684,2.708-6.797,6.393-6.949C55.638,281.979,58.748,284.838,58.903,288.527"/>
        	<path fill="#FFFFFF" d="M55.735,286.04c0.042,1-0.732,1.844-1.73,1.881c-0.997,0.045-1.84-0.731-1.881-1.729
        		c-0.042-0.999,0.733-1.839,1.73-1.881C54.852,284.27,55.695,285.045,55.735,286.04"/>
        	<path d="M70.922,291.454c0.077,1.853-1.362,3.414-3.213,3.49c-1.85,0.079-3.416-1.357-3.491-3.212
        		c-0.078-1.853,1.362-3.413,3.213-3.491C69.281,288.163,70.845,289.603,70.922,291.454"/>
        	<circle fill="none" stroke="#A3ABA8" stroke-width="0.2049" stroke-miterlimit="10" cx="67.553" cy="291.593" r="4.806"/>
        	<path fill="none" stroke="#A3ABA8" stroke-width="0.1025" stroke-miterlimit="10" d="M46.389,301.055
        		c0.047,1.107-0.814,2.043-1.922,2.091c-1.109,0.045-2.043-0.817-2.091-1.922c-0.045-1.11,0.816-2.046,1.923-2.095
        		C45.408,299.083,46.342,299.945,46.389,301.055z"/>

        		<rect x="31.191" y="294.907" transform="matrix(-0.9888 0.149 -0.149 -0.9888 115.5018 584.8372)" fill="none" stroke="#A3ABA8" stroke-width="0.4099" stroke-miterlimit="10" width="9.291" height="3.68"/>

        		<rect x="23.508" y="302.806" transform="matrix(-0.9908 0.1354 -0.1354 -0.9908 94.0657 602.4276)" fill="#F2B146" width="6.089" height="3.211"/>

        		<rect x="23.508" y="302.806" transform="matrix(-0.9908 0.1354 -0.1354 -0.9908 94.0657 602.4276)" fill="none" stroke="#FFFFFF" stroke-width="0.2049" stroke-miterlimit="10" width="6.089" height="3.211"/>

        		<rect x="29.911" y="301.936" transform="matrix(-0.9908 0.1355 -0.1355 -0.9908 106.7494 599.8147)" fill="#F2B146" width="6.088" height="3.21"/>

        		<rect x="29.911" y="301.936" transform="matrix(-0.9908 0.1355 -0.1355 -0.9908 106.7494 599.8147)" fill="none" stroke="#FFFFFF" stroke-width="0.2049" stroke-miterlimit="10" width="6.088" height="3.21"/>

        		<rect x="32.169" y="301.096" transform="matrix(-0.9906 0.1371 -0.1371 -0.9906 107.7213 596.7064)" fill="#FFFFFF" width="2.294" height="1.932"/>

        		<rect x="37.8" y="301.002" transform="matrix(-0.9909 0.1349 -0.1349 -0.9909 118.6623 597.2079)" fill="#F2B146" width="2.607" height="3.242"/>

        		<rect x="37.8" y="301.002" transform="matrix(-0.9909 0.1349 -0.1349 -0.9909 118.6623 597.2079)" fill="none" stroke="#A3ABA8" stroke-width="0.2049" stroke-miterlimit="10" width="2.607" height="3.242"/>

        		<rect x="71.612" y="297.036" transform="matrix(-0.9916 0.1297 -0.1297 -0.9916 183.7945 584.8417)" fill="#F2B146" width="2.485" height="2.739"/>

        		<rect x="76.688" y="296.008" transform="matrix(-0.9915 0.1304 -0.1304 -0.9915 197.5943 581.8207)" fill="#F2B146" width="6.109" height="2.746"/>

        		<rect x="78.48" y="295.738" transform="matrix(-0.9923 0.124 -0.124 -0.9923 196.1182 580.3185)" fill="#FFFFFF" width="3.04" height="1.049"/>
        	<path fill="none" stroke="#A2AEAA" stroke-width="0.6148" stroke-miterlimit="10" d="M52.248,270.936
        		c-18.242,0.76-32.415,16.168-31.652,34.406c0.042,1.072,0.141,2.123,0.284,3.164l65.497-9.029
        		C84.108,282.765,69.438,270.217,52.248,270.936z"/>
        </g>
        <radialGradient class="head" id="SVGID_1_" cx="108.0767" cy="85.3555" r="259.0078" gradientTransform="matrix(0.928 0.3727 0.3727 -0.928 -98.5375 322.8071)" gradientUnits="userSpaceOnUse">
        	<stop  offset="0" style="stop-color:#FFFFFF"/>
        	<stop  offset="0.0592" style="stop-color:#F6F6F7;stop-opacity:0.918"/>
        	<stop  offset="0.1461" style="stop-color:#E5E6E7;stop-opacity:0.7976"/>
        	<stop  offset="0.2502" style="stop-color:#CACCCE;stop-opacity:0.6534"/>
        	<stop  offset="0.3675" style="stop-color:#A5A7AA;stop-opacity:0.491"/>
        	<stop  offset="0.4941" style="stop-color:#7A7C7F;stop-opacity:0.3155"/>
        	<stop  offset="0.586" style="stop-color:#555658;stop-opacity:0.1882"/>
        	<stop  offset="1" style="stop-color:#000000;stop-opacity:0"/>
        </radialGradient>
        <path fill="url(#SVGID_1_)" d="M346.08,330.499L144.258,13.594c0,0-77.627,276.602-77.783,277.267
        	c-0.273,1.156,0.371,2.306,1.454,2.706v0.004L346.08,330.499z"/>
        </svg>
		<h3 class="title">What We Work On</h3>
		<p>BUET Robotics Society arranges regular workshops and hands-on training sessions for members
        of various skill levels. Currently we have the following courses in our catalouge with more to
        follow soon!</p>
		<hr class="regular">

		<ul class="grid">
			<li class="small hover-tile-outer" style="background-image: url(assets/img/Arduino.jpg);">
                <div class="hover-tile-container">
                    <div class="hover-tile hover-tile-visible"></div>
                    <div class="hover-tile hover-tile-hidden">
                      <h2>Introduction to Arduino!</h2>
                      <!-- <p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p> -->
                    </div>
                 </div>
			</li>
			<li class="large hover-tile-outer" style="background-image: url(assets/img/pi.jpg);">
                <div class="hover-tile-container">
                    <div class="hover-tile hover-tile-visible"></div>
                    <div class="hover-tile hover-tile-hidden">
                      <h2>Raspberri Pi 101!</h2>
                      <!-- <p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p> -->
                    </div>
                 </div>
			</li>
			<li class="large hover-tile-outer" style="background-image: url(assets/img/mechanical.jpg);">
                <div class="hover-tile-container">
                    <div class="hover-tile hover-tile-visible"></div>
                    <div class="hover-tile hover-tile-hidden">
                      <h2>Mechanical Structure Fabrication!</h2>
                      <!-- <p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p> -->
                    </div>
                 </div>
			</li>
			<li class="small hover-tile-outer" style="background-image: url(assets/img/Cad.jpg);">
                <div class="hover-tile-container">
                    <div class="hover-tile hover-tile-visible"></div>
                    <div class="hover-tile hover-tile-hidden">
                      <h2>Computer Aided design</h2>
                      <!-- <p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p> -->
                    </div>
                 </div>
			</li>
		</ul>
	</section>


	<section class="features">
		<h3 class="title">What You'll Be A Part Of</h3>
		<p>A group of robot enthusiastic students. If you love embedded system, automation or love to build robots, you are cordially invited to begin the journey together.</p>
		<hr class="regular">

		<ul class="grid">
			<li>
				<i class="fa fa-users"></i>
				<h4>Large community</h4>
				<p>More than 19000 members to help you with all your problems.</p>
			</li>
			<li>
				<i class="fa fa-trophy"></i>
				<h4>Regular Contests</h4>
				<p>Participate in our annual robotics competitions to win exciting prizes.</p>
			</li>
			<li>
				<i class="fa fa-wrench"></i>
				<h4>Hands-On Training Sessions</h4>
				<p>Regular workshops are organized for all kinds of robotics enthusiasts to learn new things.</p>
			</li>
		</ul>
	</section>




	<section class="contact" >
        <h3 class="title">Join our newsletter</h3>
		<p>Leave your Email here!</p>
		<hr class="regular">

        <p class="newsletter-message"></p>

        <form method="post" action="newsletter.php" id="news-form" class="news-form">

            <input type="email" id="newsletter-email" placeholder="Email" name="email">
            <input type="submit" class="btn"  value="Subscribe now!" >
        </form>
	</section>

    <footer class="footer" role="contentinfo">
      <div class="footer-logo">
        <img src="assets/img/logo-icon.png" alt="Logo image">
      </div>
      <div class="footer-links">
        <ul>
          <li><h3>Contact</h3></li>
          <li><a href="javascript:void(0)">+88-01521437717</a></li>
          <li><a href="javascript:void(0)">buetroboticssociety@gmail.com</a></li>
        
        </ul>
        <ul>
          <li><h3>Follow Us</h3></li>
          <li class="social-icons"><a href="https://www.facebook.com/BUETRoboticsSociety/"><i class="fa fa-facebook-square"></i></a></li>
          <li class="social-icons"><a href="javascript:void(0)"><i class="fa fa-twitter-square"></i></a></li>
          <li class="social-icons"><a href="https://www.youtube.com/channel/UCFdEkQ1LXhjargaJmewpT9A"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
        <ul>
          <li><h3>Legal</h3></li>
          <li><a href="javascript:void(0)">Terms and Conditions</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
        </ul>
      </div>

      <hr>

      <p>All rights reserved by BUET Robotics Society (BRS) &reg;</p>
    </footer>

    <!-- MODAL
		========================================== -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;<span class="sr-only">Close</span></span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Submit your details to BRS HQ</h4>
                </div>
                <!-- modal header -->

                <div class="modal-body">
                    <p id="form-message-top">Simply enter your information! We will get back to you shortly!</p>
                    <p class="form-message"></p>
                    <form class="form-inline" role="form" method="post" action="register.php" id="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">
                            Your Name
                        </label>
                            <input type="text" name="name" class="form-control" id="subscribe-name" placeholder="Your Name">
                        </div>
                        <!-- form-group-->

                        <div class="form-group">
                            <label class="sr-only" for="subscribe-id">
                            Your Student ID
                        </label>
                            <input type="text" name="id" class="form-control" id="subscribe-id" placeholder="Your Student ID">
                        </div>
                        <!-- form-group-->

                        <div class="form-group">
                            <label class="sr-only" for="subscribe-dept">
                            Your Department
                        </label>
                            <input type="text" name="dept" class="form-control" id="subscribe-dept" placeholder="Your Department">
                        </div>
                        <!-- form-group-->

                        <div class="form-group">
                            <label class="sr-only" for="subscribe-batch">
                            Your Department
                        </label>
                            <input type="text" name="dept" class="form-control" id="subscribe-batch" placeholder="Your Batch">
                        </div>
                        <!-- form-group-->

                        <div class="form-group">
                            <label class="sr-only" for="subscribe-phone">
                            Your Phone Number
                        </label>
                            <input type="text" class="form-control" id="subscribe-phone" placeholder="Your Phone Number">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">
                            Your Email Address
                        </label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="Your Email">
                        </div>
                        <!-- form-group-->
                        <br>
                        <input type="submit" class="register-button btn btn-danger"  value="Sign Up!" >

                    </form>


                    <hr>

                    <p><small>All BRS memberships are subject to a one-time &amp; non-refundable fee <br>All rights reserved by Buet Robotics Society &reg; &amp; BUET </small></p>

                </div>



                <!-- modal-body -->
                <img src="assets/img/logo-icon.png" alt="BRS logo" />
            </div>
            <!-- modal content-->
        </div>
        <!-- modal dialog -->

    </div>
    <!-- modal -->

<script src="assets/js/tweenmax.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script  type="text/javascript">
    </script>

</body>



</html>
