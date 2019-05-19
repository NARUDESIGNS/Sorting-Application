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
					<li><a id="navbar" class="active" href="Merge Sort.php"><i id="font-awesome"></i>Merge Sort</a></li>
					<li><a id="navbar" href="Insertion Sort.php"><i id="font-awesome"></i>Insertion Sort</a></li>
					<li><a id="navbar" href="Quick Sort.php"><i id="font-awesome"> </i>Quick Sort</a></li>
					<li><a id="navbar" href="Selection Sort.php"><i id="font-awesome"></i>Selection Sort</a></li>
			</div>	
		</nav>
		<div class="welcome-box">
				<h1>Merge Sort</h1><br>
				<form method="POST" action="merge sort.php">
					<p> Please enter your values seperated with commas.</p>
					<input class="input-data" type="text" placeholder="Enter data" name="data" required>
					<input type="submit" name="sort" value='SORT' class="btn btn-primary"><br><br>
					<p><b>How it works </b><a href='#Process' data-toggle='modal' class='btn btn-primary'>VIEW</a></p>

					<div id="Process" class="modal fade">

				        <div class="modal-dialog">

				            <div class="modal-content">

				                <section class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    <h4 class="modal-title">Merge Sort Process</h4>
				                </section>

				                <div class="modal-body container">
				                	<p>Merge sort is a sorting technique based on divide and conquer technique. Merge sort first divides 
				                		the array into equal halves and then combines them in a sorted manner. 
									</p>
				                </div>

				            </div>

				        </div>

    				</div>					
				</form>
								
				<?php
					function merge_sort($my_array){
						if(count($my_array) == 1 ) 
							return $my_array;
							$mid = count($my_array) / 2;
						    $left = array_slice($my_array, 0, $mid);
						    $right = array_slice($my_array, $mid);
							$left = merge_sort($left);
							$right = merge_sort($right);
							return merge($left, $right);
					}
					function merge($left, $right){
						$res = array();
						while (count($left) > 0 && count($right) > 0){
							if($left[0] > $right[0]){
								$res[] = $right[0];
								$right = array_slice($right , 1);
							}else{
								$res[] = $left[0];
								$left = array_slice($left, 1);
							}
						}
						while (count($left) > 0){
							$res[] = $left[0];
							$left = array_slice($left, 1);
						}
						while (count($right) > 0){
							$res[] = $right[0];
							$right = array_slice($right, 1);
						}
						return $res;
					}

					if (isset( $_POST['sort'])) {
						$test_array = explode(',', $_POST['data']);
						echo "<b>Original Array : </b>";
						echo implode(', ',$test_array ), '<br>';
						echo "<b>Sorted Array : </b>";
						echo implode(', ',merge_sort($test_array));
					}
				?>
				
		</div>
		
		
	</body>
</html>