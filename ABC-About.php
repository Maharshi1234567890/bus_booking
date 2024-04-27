<!DOCTYPE html>
<html>
<head>
	<title>ABC Buses</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="ABC-AboutCSS.css">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Paytone+One" rel="stylesheet">
</head>

<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="LOGO BUS.png" id="logo"> ABC Buses</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      </button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><strong>Home</strong></a></li>
					<li><a href="ABC-About.php"><strong>About</strong></a></li>
					<li><a href="ABC-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup"><strong>Sign up </strong><i class="fas fa-user-plus"></i></a></li>
					<li><a href="#" data-toggle="modal" data-target="#login"><strong>Login </strong><i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
  <!--NavBar End-->

  <!--SingUp Modal-->
	<div id="signup" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!--SingUp Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp</h4>
        </div>
        <div class="modal-body">
        	<label for="username">Username:</label>
          <input type="text" name="username" placeholder="Username" id="username">
          <br>
          <label for="email">Email ID:</label>
          <input type="email" name="emailid" placeholder="Email Id" id="email">
          <br>
          <label for="pass">Password:</label>
          <input type="password" name="password" id="pass">
          <br>
          <label for="confpass">Confirm Password:</label>
          <input type="password" name="confpassword" id="confpass">
          <br>
          <input type="Submit" name="submit">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!--SignUp Modal content End-->
    </div>
  </div>
  <!--SignUp Modal End-->

  <!--Login Modal-->
  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!--Login Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <label for="username">Username:</label>
          <input type="text" name="username" placeholder="Username" id="username">
          <br>
          <label for="pass">Password:</label>
          <input type="password" name="password" id="pass">
          <br>
          <input type="Submit" name="submit">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!--Login Modal content End-->
    </div>
  </div>
  <!--Login Modal End-->


  <h1>About</h1>
  <div class="container" id="cell">
  	<p>ABC Buses is India`s  brand for online bus ticket booking and offers an easy-to-use online bus ticket booking service  with over 36 million satisfied customers, 3500+ bus operators to choose from, and plenty of offers on bus ticket booking, ABC Buses makes road journeys super convenient for travellers.  </p>
  <br>
  <p>All of our efforts are focused around adding value: to our people, our communities and our Country. Our agenda is coordinated at the ABC , to ensure that we have a cohesive programme of initiatives that covers all aspects of our business and operations.</p>
  <br>
  <p>Booking a bus ticket online on the ABC Buses website is very simple. enter your source, destination & travel date to check the top-rated bus services available. You can then compare bus prices, user ratings & amenities, select your preferred seat, boarding & dropping points and pay using multiple payment options like UPI, debit or credit card, net banking and more..</p>
  <p>Greener together<br>
  Commitment to minimise our environmental impact.</p>
  <br>
  <p>Working together<br>
  The development and well-being of our diverse employees.</p>
  <br>
  <p>ABC Buses also offers other exclusive benefits on online bus tickets like flexible ticket rescheduling options, easy & friendly cancellation policies, and instant payment refunds. With a live bus tracking feature, you can plan travel and never miss the bus. You can get the cheapest bus tickets by availing the best discounts for new & existing customers. With red Deals, you can also get exclusive & additional discounts on your online bus ticket booking. You will get 24/7 customer support on call, chat & help to resolve all your queries in English & local languages.</p>
  <br>
  <p>Our Responsibility<br>
  More details about the ‘Together’ framework and initiatives are available in regular reports, published since 2010.</p>
  </div>
</body>
</html>