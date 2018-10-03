<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Создать пост</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="/store.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for=""><h2>Title</h2></label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label for=""><h2>Выбрать изображение</h2></label><br>
						<input name="file" type="file"/>
					</div>
					<div class="form-group">
						<button class="btn btn-success">Add posts</button>
					</div>
				</form>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>