<html>
	<head>
		<title>Sorting Algorithms</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="homepage.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar" id="navigation-bar" role="navigation">
			<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<i id="font-awesome" class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" id="navbrand" href="homepage.php">Sorting Algorithms</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav" id="nav-items">
					<li><a id="navbar" href="homepage.php"><i id="font-awesome"></i>Home</a></li>
					<li><a id="navbar" class="active" href="bubble sort.php"><i id="font-awesome"></i>Bubble Sort</a></li>
					<li><a id="navbar" href="Merge Sort.php"><i id="font-awesome"></i>Merge Sort</a></li>
					<li><a id="navbar" href="Insertion Sort.php"><i id="font-awesome"></i>Insertion Sort</a></li>
					<li><a id="navbar" href="Quick Sort.php"><i id="font-awesome"> </i>Quick Sort</a></li>
					<li><a id="navbar" href="Selection Sort.php"><i id="font-awesome"></i>Selection Sort</a></li>
			</div>	
		</nav>
		<div class="welcome-box">
				<h1>Bubble Sort</h1><br>
				<form method="POST" action="bubble sort.php">
					<p> Please enter your values seperated with commas.</p>
					<input class="input-data" type="text" placeholder="Enter data" name="data" required>
					<input type="submit" value='SORT' name="sort" class="btn btn-primary"><br><br>
					<p><b>How it works </b><a href='#Process' data-toggle='modal' class='btn btn-primary'>VIEW</a></p>

					<div id="Process" class="modal fade">

				        <div class="modal-dialog">

				            <div class="modal-content">

				                <section class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    <h4 class="modal-title">Bubble Sort Process</h4>
				                </section>

				                <div class="modal-body container">
				                	<p>Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps 
				                		through the list to be sorted, compares each pair of adjacent items and swaps them if they are in the wrong order. 
				                		The pass through the list is repeated until no swaps are required, which indicates that the list is sorted. </p>
				                </div><hr >

				            </div>

				        </div>

    				</div>
				</form>

				<?php

						function bubble_Sort($my_array) {

							do {

								$swapped = false;

									for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ ) {

										if( $my_array[$i] > $my_array[$i + 1] ) {

											list( $my_array[$i + 1],

											$my_array[$i] ) = array( $my_array[$i], $my_array[$i + 1] );

											$swapped = true;
										}
									}
							}
									while($swapped);
									return $my_array;
						}

								if (isset( $_POST['sort'])) {
									$test_array = explode(',', $_POST['data']);
									echo "<b>Original Array : </b>";
									echo implode(', ',$test_array ), '<br>';
									echo "<b>Sorted Array : </b>";
									echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
								} 						
				?>
		</div>
	</body>
</html>