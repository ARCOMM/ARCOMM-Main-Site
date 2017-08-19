<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }} ">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARCOMM</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a> -->
            </div>
			

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#brief">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About us</a>
                    </li>
                    <li>
                        <a class="page-scroll hidden" href="#media" name="media">Media</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#join">Joining us</a>
                    </li>
                    <li>
                        <a class="page-scroll hidden" href="#after-join" name="after-join">What's next?</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
					<img class="header-logo" src="{{ asset('img/logo_red_a.png') }}" />
		        <div class="intro-heading"></div>
				<div class="hr-red"></div>
                <a href="#brief" class="page-scroll btn btn-xxl">Who are we?</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="brief" class="bg-arcomm-red">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Challenging Gameplay, Community Fun</h2>
                    <h3 class="section-subheading text-muted">We pride ourselves on the absence of ranks and strict military structure. Our players range from former mil-sim players to beginners of Arma. Our goal is to take advantage of what Arma does best and provide a great experience to all involved. Everyone is considered an equal member. No one holds the power to command anyone else outside of gameplay.</h3>
                </div>
            </div>
			<hr />
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                    </span>
                    <h2 class="section-heading">TEAM</h2>
                    <h3 class="section-subheading text-muted">There is no formal ranking. You will never have to call someone 'sir' or adhere to unnecessary requirements. Respect is earned, not given.</h3>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                    </span>
                    <h2 class="section-heading">GAMEPLAY</h2>
                    <h3 class="section-subheading text-muted">We enforce first person and non-magnified/thermal optics on our servers for added immersion and to make the gameplay more challenging and fair.</h3>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                    </span>
                    <h2 class="section-heading">MISSIONS</h2>
                    <h3 class="section-subheading text-muted">We play a wide range of scenarios, both cooperative and adversarial. We do not limit ourselves to a particular faction or style, each week is different in some way.</h3>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                    </span>
                    <h2 class="section-heading">COMMUNITY</h2>
                    <h3 class="section-subheading text-muted">Active Discord &amp; Teamspeak. Voice your suggestions and ideas, keep up-to-date with events and hang out with other members.</h3>
                </div>
            </div>
		<hr />
        </div>
        <div class="container">
            <div class="col-centered">
				<h3>Interested? If so, you can either...</h3>
				<div class="row">
					<div class="col-md-4">
						<a href="#about" class="page-scroll btn btn-xxl">Learn more</a>
					</div>
					<div class="col-md-4 text-centered">
						<h3>or</h3>
					</div>
					<div class="col-md-4">
						<a href="#join" class="page-scroll btn btn-xxl">Join us</a>
					</div>
				</div>
            </div>
        </div>
    </section>

	<section id="about" class="spacer-1">
		<div class="container">
				<h1 class="header">About us</h1>
				<div class="hr-red"></div>
		</div>
	</section>

	<section id="about" class="bg-arcomm-grey">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our community goal</h2>
                    <h3 class="section-subheading text-muted">ARCOMM's goal is to take full advantage of what Arma does best. All of our energy to put into making the best Arma experience, rather then bogging ourselfs down with ranks and paperwork to fill out. Our focus is to play missions that challenge us requiring the use of good tactics, organization, and teamwork to achieve victory. We want to play Arma in a way that we are satisfied and proud of what we accomplish as a team.</h3>
                </div>
            </div>
			<hr />
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Joining us</h2>
                    <h3 class="section-subheading text-muted">While we do take the game seriously, we love to get new people on-board with however much experience they have. New members attend a short orientation getting them familiar with some of our mods and particular community aspects. We also pair new members up with an experienced member of the community for their first couple of operations, giving them someone they can go to with any question and helping them get to know the community. We have an open slotting policy where members can switch their roles from mission to mission, as well as certification program that gives members the option to learn from some of our most experienced members on topics like leadership, piloting, and mortars.</h3>
                </div>
            </div>
			<hr />
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">community interaction</h2>
                    <h3 class="section-subheading text-muted">Good community and communication is a crucial part of the ARCOMM experience. Without all of our members we would be nothing. As such, we heavily encourage community feedback and support. All members can participate in discussions on Discord or Steam, contact any of the admins whenever they would like, and attend our monthly Town Hall meetings where the community gathers for future plans, feedback, and discussion. <br> <br>
Members can also get involved in helping the community by becoming mission makers, media creators, new member buddies, and much more. Our member's support is what has allowed us to become who we are today and will continue to help us grow and improve in the future. </h3>
                </div>
            </div>
			<hr />
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">some final words</h2>
                    <h3 class="section-subheading text-muted">While Arma can be a serious game and we believe the best experience is found by playing it seriously, you are here to have a good time, meet great people, and be a part of some truly unique gameplay. While we believe we've found the right balance you will decide if it right for yourself, and if you do join us we hope it is.</h3>
                </div>
            </div>
        <div class="container">
            <div class="col-centered">
				<h3>Still interested? If so, you can either...</h3>
				<div class="row">
					<div class="col-md-4">
						<a href="#media" class="section-reveal btn btn-xl">See our media</a>
					</div>
					<div class="col-md-4 text-centered">
						<h3>or</h3>
					</div>
					<div class="col-md-4">
						<a href="#join" class="page-scroll btn btn-xl">Join us</a>
					</div>
				</div>
            </div>
        </div>
		</div>
	</section>

	<section id="media" class="spacer-4 hidden">
		<div class="container">
			<h1 class="header">Media</h1>
			<div class="hr-red"></div>
		</div>
	</section>

	<section id="media" class="bg-arcomm-grey hidden">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="media-tiles" src="{{ URL::asset('img/screen_1.jpg') }}">
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-12">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-nFu6WXHiAY" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-12">
					<img class="media-tiles" src="{{ URL::asset('img/screen_2.png') }}">
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-12">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/C8iVrC0mJnI" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="join" class="spacer-2">
		<div class="container">
				<h1 class="header">Joining us</h1>
				<div class="hr-red"></div>
		</div>
	</section>

	<section id="join" class="bg-arcomm-red">
        <div class="container">
			<div class="row">
				<div class="col-centered">
					<h3>If you feel like you want to be with us, fill out and send the application below.</h3>
				</div>
				<hr />
			</div>
			<div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
									<p>Your Name (Should be the same across Arma, Steam, TS, and Discord)</p>
                                    <input type="text" class="form-control" placeholder="" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="radio-group" class="form-group">
									<p>How did you find out about us?</p>
                                    <input type="radio" name="find-out" value="r/findaunit">r/findaunit</input>
                                    <input type="radio" name="find-out" value="Arma Units">Arma Units</input>
                                    <input type="radio" name="find-out" value="Youtube">Youtube</input>
                                    <input type="radio" name="find-out" value="A Friend">A Friend</input>
                                    <input type="radio" name="find-out" value="Other:">Other: 
										<input type="text" name="find-out-other-text" style="margin: 0;">
									</input>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
									<p>Your Age</p>
                                    <input type="number" class="form-control" placeholder="" id="age" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
									<p>Your Location (Be as specific as you like)</p>
                                    <input type="text" class="form-control" placeholder="" id="location" required data-validation-required-message="Please enter your location.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
									<p>Your Email Address (This is how we will contact you about the status of your application)</p>
                                    <input type="email" class="form-control" placeholder="" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
									<p>Your Steam Account (Please provide a link to your Steam account. You can do this by going to Steam &gt; Your Name &gt; Right-Click &gt; Copy Page URL)</p>
                                    <input type="text" class="form-control" placeholder="" id="steam" required data-validation-required-message="Please enter your steam profile url.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="radio-group" class="form-group">
									<p>Are you available Saturdays at 1700 Zulu time?</p>
                                    <input type="radio" name="time" value="yes">Yes</input>
                                    <input type="radio" name="time" value="no">No</input>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="radio-group" class="form-group">
									<p>Do you own the Apex expansion (This is required)</p>
                                    <input type="radio" name="apex" value="yes">Yes</input>
                                    <input type="radio" name="apex" value="no">No</input>
                                    <input type="radio" name="apex" value="will get if accepted">Will purchase if accepted</input>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
									<p>Why are you interested in joining ARCOMM?</p>
                                    <textarea class="form-control" placeholder="" id="reason" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="application-submit" href="#after-join" class="btn btn-xxl section-reveal">Send Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
			
        </div>
	</section>

	<section id="after-join" class="spacer-3 hidden">
		<div class="container">
				<h1 class="header">What's next?</h1>
				<div class="hr-red"></div>
		</div>
	</section>

	<section id="after-join" class="bg-arcomm-grey hidden">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading text-muted">You have succesfully applied to ARCOMM. But what comes now?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">getting to know each other</h2>
                    <h3 class="section-subheading text-muted">After getting your application accepted you will want to look out for a Steam friend request from one of the admins listed on your acceptance email. One of the first things we will do is schedule a time for a chat. There we will go over some more information about the group, take any questions you have, and find out more about you. If all goes well you can move on to downloading our modset.</h3>
                </div>
            </div>
			<hr />
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">downloading our modset</h2>
                    <h3 class="section-subheading text-muted">ARCOMM uses Arma3Sync to distribute our custom modpack to it's members. For help download from our respository follow the guide in <a href="https://drive.google.com/file/d/0B-RUza9uvV0fVGx0TUFLM3BHeXc/view?usp=sharing">this link</a>.  <br> <br>
If you have any questions or run into any trouble feel free to ask your admin of contact.</h3>
                </div>
            </div>
			<hr />
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Preparing for orientation and your first operation with us</h2>
                    <h3 class="section-subheading text-muted">Our new members run through a short orientation that focuses on getting you familiar with our modset and foundational tactics. This is usually held one hour before our operation starts on Saturdays, however, if that time does not work for you then be sure to talk to your admin of contact and we would be happy to find a time that works for you. <br> <br>
For your first couple of operations you will be slotting with your full member buddy, so keep an ear out for them and they will make sure you are slotted together. After your first few operations you will be able to slot in any fireteam member role you would like, changing from mission to mission if you desire.</h3>
                </div>
            </div>
			<hr />
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Your future with us</h2>
                    <h3 class="section-subheading text-muted">If all goes well after your first couple of operations you will quickly be assigned as a full member. This is the standard role of all of our members and will be considered fully a part of the community. From there on you could look into the certifications program, learning from some of our most experienced members, get involved with the community in a variety of ways such as media creation, mission, development, or just being a great member adding to the ARCOMM experience.</h3>
                </div>
            </div>
		</div>
	</section>


    <!-- jQuery -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::asset('js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>
