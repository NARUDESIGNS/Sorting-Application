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
					<li><a id="navbar" href="Insertion Sort.php"><i id="font-awesome"></i>Insertion Sort</a></li>
					<li><a id="navbar" href="Quick Sort.php"><i id="font-awesome"> </i>Quick Sort</a></li>
					<li><a id="navbar" class="active" href="Selection Sort.php"><i id="font-awesome"></i>Selection Sort</a></li>
			</div>	
		</nav>
		<div class="welcome-box">
				<h1>Selection Sort</h1><br>
				<form method="POST" action="selection sort.php">
					<p> Please enter your values seperated with commas.</p>
					<input class="input-data" type="text" placeholder="Enter data" name="data" required>
					<input type="submit" value='SORT' name="sort" class="btn btn-primary"><br><br>
					<p><b>How it works </b><a href='#Process' data-toggle='modal' class='btn btn-primary'>VIEW</a></p>

					<div id="Process" class="modal fade">

				        <div class="modal-dialog">

				            <div class="modal-content">

				                <section class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    <h4 class="modal-title">Selection Sort Process</h4>
				                </section>

				                <div class="modal-body container col-sm-offset-2">
				                	<p>Coming soon....</p>
				                </div>

				            </div>

				        </div>

    				</div>
				</form>

				<?php
				
						function selection_sort($data)
						{
						for($i=0; $i<count($data)-1; $i++) {
							$min = $i;
							for($j=$i+1; $j<count($data); $j++) {
								if ($data[$j]<$data[$min]) {
									$min = $j;
								}
							}
						    $data = swap_positions($data, $i, $min);
						}
						return $data;
						}

						function swap_positions($data1, $left, $right) {
							$backup_old_data_right_value = $data1[$right];
							$data1[$right] = $data1[$left];
							$data1[$left] = $backup_old_data_right_value;
							return $data1;
						}

						if (isset($_POST['data'])) {

							$my_array = explode(',', $_POST['data']);
							echo "<b>Original Array :</b>";
							echo implode(', ',$my_array ), '<br>';
							echo "<b>Sorted Array :</b>";
							echo implode(', ',selection_sort($my_array)). PHP_EOL;
						}	
					

				?>
		</div>
	</body>
</html>