<header>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">Home<?php if($currentPage == 'home') {echo '<span class="sr-only">(current)</span>';} ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav">
				<li class="nav-item active">
				  <a class="nav-link" href="resources.php">Resources<?php if($currentPage == 'resources') {echo '<span class="sr-only">(current)</span>';} ?></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="tutors.php">Tutors<?php if($currentPage == 'tutors') {echo '<span class="sr-only">(current)</span>';} ?></a>
				</li>
			  </ul>
			</div>
		  </nav>
		
	</header>