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

	<body >
		    <section class="resources1">
	
			<h1>Meet The Tutors</h1>
 
			<div class="parent">
				<div class="div1">	<img class="tutors" src="images/sjones.jpg" alt="tutor1"> </div>
				<div class="div2">  <h2> Sharie Jones</h2>
				<p> Office Loc. : Genesee Hall</p>
			    <p>Office Hours : Thurs 5-10pm</p>
				<div>Major: <em>Film & Media Studies and Language, Media, & Communication</em></div></div>
				<div class="div3"> <p>Biography: My favorite writing is the kind that clarifies something, or makes it approachable. Tutoring has had a similar effect for me in my own experience, so to work as a writing tutor is a great extension of that.</p> </div>
				<div class="div4"> 	<img class="tutors"src="images/dobrien.png" alt="tutor2"></div>
				<div class="div5"> 	<h2>Danisha O'Brien</h2>
				<p> Office Loc. : Susan B. Anthony</p>
				<p> Office Hours : Mon 9-12 & Sunday 9-12</p>
				<div>Major: <em>Linguistics and English: Literature</em></div></div>
				<div class="div6"> <p>Biography: For me, the most important thing a college education can give is the ability to express my thoughts and memories in a way that will be valued. When every idea can be spoken in hundreds of different sentences, it's worth it to know how to find the best ones. That's why I'm in college.</p> </div>
				<div class="div7"> <img class="tutors"src="images/bfelipe.jpeg" alt="tutor3"></div>
				<div class="div8"> 	<h2> Bryan Felipe</h2>
				<p> Office Loc. : Rush Rhees Library</p>
			    <p> Office Hours : Wednesday 5-7pm & Saturday 10-12pm</p>
				<div>Major: <em>Political Science and Business</em></div></div>
				<div class="div9"> <p>Biography: My favorite thing about tutoring is getting to learn about topics outside my own field of study. There are so many different types of writers on our campus, so the job always stays interesting!</p> </div>
				</div>


			</section>

			<section class="resources2">
	

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