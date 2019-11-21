<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Tutors</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="override.css" >  
</head>

<header>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">Home<span class="sr-only">(current)</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="resources.php">Resources </a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="tutors.php">Tutors</a>
					</li>
					
					</li>
				  </ul>
				</div>
		</nav>

</header>		

	<body class="resources">
	
			<h1>Meet The Tutors</h1>

				<section>
				  	<img src="images/sjones.jpg" alt="tutor1">
				    <div>Sharie Jones</div>
				    <div>Office Loc. : Genesee Hall</div>
				    <div>Office Hours : Thurs 5-10pm</div>
				    <div>Major: <em>Film & Media Studies and Language, Media, & Communication</em></div>
					<p>Biography: My favorite writing is the kind that clarifies something, or makes it approachable. Tutoring has had a similar effect for me in my own experience, so to work as a writing tutor is a great extension of that.</p>
				</section>
				  </tr>

				<section>
				  	<img src="images/dobrien.png" alt="tutor2">
				  	<div>Danisha O'Brien</div>
				    <div>Office Loc. : Susan B. Anthony</div>
				    <div>Office Hours : Mon 9-12 & Sunday 9-12</div>
				    <div>Major: <em>Linguistics and English: Literature</em></div>
					<p>Biography: For me, the most important thing a college education can give is the ability to express my thoughts and memories in a way that will be valued. When every idea can be spoken in hundreds of different sentences, it's worth it to know how to find the best ones. That's why I'm in college.</p>
				</section>

				<section>
				  	<img src="images/bfelipe.jpeg" alt="tutor3">
				  	<div>Bryan Felipe</div>
				    <div>Office Loc. : Rush Rhees Library</div>
				    <div>Office Hours : Wednesday 5-7pm & Saturday 10-12pm</div>
				    <div>Major: <em>Political Science and Business</em></div>
					<p>Biography: My favorite thing about tutoring is getting to learn about topics outside my own field of study. There are so many different types of writers on our campus, so the job always stays interesting!</p>
				</section>

	<section class="resources1">
	

			<h1>Interested in Tutoring?</h1>

			<img src="images/tutor.jpg" alt="tutoring session">
			
			<p> Fellows represent many majors and have been trained by taking WRT 245/ENG 285: Advanced Writing and Peer Tutoring. The writer directs the session and may choose to focus on anything from brainstorming, to discussing organization and flow of an argument, to working on grammar. Essentially, the tutor helps students discover the writing strategies and techniques that work best for them with the goal of developing their skills.</p>

			<h2>Requirements</h2>

				<div>Applicants must:</div>

				<ul>

					  <li>Have a GPA of at least 3.0</li> 
				
					  <li>Be in good standing</li> 
				
					  <li>Have fulfilled their primary writing requirement (PWR)</li>
					
				</ul>  


			<h3>Applications are closed right now for Term 2019. Sign Up here to get notified when the application releases: </h3>
				<div id = "form-wrapper">
				<form method = "post" action ="" id="subscription-form" >
						<div class="form-group">
						  <label for="exampleInputEmail1">Email address</label>
						  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>

	</section>


<script>
$("#subscription-form").submit(function(e) {
	var formData = $("#subscription-form").serialize();
	$.ajax({
		type: 'POST',
		url: "new.php",
		data: formData,
		success: function(data){
			$("#form-wrapper").html("Thank you for signing up!");
		}
	});
	e.preventDefault();
});
</script>	

</body>
</html>