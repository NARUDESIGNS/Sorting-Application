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
					<li><a id="navbar" href="Bubble Sort.php"><i id="font-awesome"></i>Bubble Sort</a></li>
					<li><a id="navbar" href="Merge Sort.php"><i id="font-awesome"></i>Merge Sort</a></li>
					<li><a id="navbar" class="active" href="Insertion Sort.php"><i id="font-awesome"></i>Insertion Sort</a></li>
					<li><a id="navbar" href="Quick Sort.php"><i id="font-awesome"> </i>Quick Sort</a></li>
					<li><a id="navbar" href="Selection Sort.php"><i id="font-awesome"></i>Selection Sort</a></li>
			</div>	
		</nav>
		<div class="welcome-box">
				<h1>Insertion Sort</h1><br>
				<form method="POST" action="insertion sort.php">
					<p> Please enter your values seperated with commas.</p>
					<input class="input-data" type="text" placeholder="Enter data" name="data" required>
					<input type="submit" name="sort" value='SORT' class="btn btn-primary"><br><br>
					<p><b>How it works </b><a href='#Process' data-toggle='modal' class='btn btn-primary'>VIEW</a></p>

					<div id="Process" class="modal fade">

				        <div class="modal-dialog">

				            <div class="modal-content">

				                <section class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    <h4 class="modal-title">Insertion Sort Process</h4>
				                </section>

				                <div class="modal-body container">
				                	<p>In an insertion sort, the first element in the array is considered as sorted, even if it is an unsorted array. 
				                		In an insertion sort, each element in the array is checked with the previous elements, 
				                		resulting in a growing sorted output list. With each iteration, the sorting algorithm removes one element 
				                		at a time and finds the appropriate location 
				                		within the sorted array and inserts it there. The iteration continues until the whole list is sorted.</p>
				                </div>

				            </div>

				        </div>

    				</div>					
				</form>

					<?php
						 function insertion_Sort($my_array){
						
							for($i=0;$i<count($my_array);$i++){

								$val = $my_array[$i];

								$j = $i-1;

								while($j>=0 && $my_array[$j] > $val){

									$my_array[$j+1] = $my_array[$j];

									$j--;
								}

								$my_array[$j+1] = $val;
							}

							return $my_array;
						}

						if (isset( $_POST['sort'])) {

							$test_array = explode(',', $_POST['data']);
							echo "<b>Original Array : </b>";
							echo implode(', ',$test_array ),'<br>';
							echo "<b>Sorted Array : </b>";
							echo implode(', ',insertion_Sort($test_array));
						}
					?>
		</div>
	</body>
</html>