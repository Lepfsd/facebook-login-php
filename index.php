<?php
	session_start();
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>log in facebook</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<div class="container" style="margin-top: 100px;">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>" alt="" class="img-thumbnail">
				</div>
				<div class="col-md-9">
					<table class="table table-hover table-bordered">
						<tbody>
							<tr>
								<td>id</td>
								<td><?php echo $_SESSION['userData']['id'] ?></td>
							</tr>
							<tr>
								<td>first name</td>
								<td><?php echo $_SESSION['userData']['first_name'] ?></td>
							</tr>
							<tr>
								<td> last name</td>
								<td><?php echo $_SESSION['userData']['last_name'] ?></td>
							</tr>
							<tr>
								<td>email</td>
								<td><?php echo $_SESSION['userData']['email'] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
