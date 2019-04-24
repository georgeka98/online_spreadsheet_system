<!DOCTYPE html>
<html>
	<header>
		<title>Student Progress Tracker</title>
		<link rel="stylesheet" type="text/css" href="students.css">
		<link rel="stylesheet" type="text/css" href="Stylesheets/Windows.css">
		<link rel="stylesheet" type="text/css" href="Stylesheets/sameParts.css">
		<script type="text/javascript" src="scripts/closingWindows.js"></script>
		<meta lang="en">
		<meta charset="UTF-8">
	</header>
	<body>
		<div class="window" id="CSV">
			<div class="UploadCSvFile">
				<div class="closeWin">
					<div class="X">
						<div class="diagnonallyLeft"></div>
						<div class="diagnonallyRight"></div>
					</div>
				</div>
				<form action="upload.php" method="post" enctype="multipart/form-data">
				    <h3>Select file to upload:</h3>
				    <input type="file" name="fileToUpload" id="fileToUpload">
				    <br>
				    <input type="submit" value="Upload Image" name="Submit">
				</form>
			</div>
		</div>
		<div class="window"id="Student">
			<div class="AddStudent">
				<div class="closeWin">
					<div class="X">
						<div class="diagnonallyLeft"></div>
						<div class="diagnonallyRight"></div>
					</div>
				</div>
				<form action="AddStudent.php" method="post" enctype="multipart/form-data">
				    <h3>Add Student:</h3>
				    <p>Name:</p><input type="text" name="fileToUpload" id="fileToUpload">
				    <br>
				    <input type="submit" name="fileToUpload" id="fileToUpload" value="Add Student">
				</form>
			</div>
		</div>
		<div class="content">
			<div class="top">
				<h1>Classroom</h1>
			</div>
			<div class="mid profiles">
				<form action="GetStudentsFromDB.php" method="POST" accept-charset="utf-8">
					<button href="students_spreadsheet_view.php"><p>Student 1</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 2</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 3</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 4</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 5</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 6</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 7</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 8</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 9</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 10</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 11</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 12</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 13</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 14</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 15</p></button>
					<button href="students_spreadsheet_view.php"><p>Student 16</p></button>
				</form>
			</div>
			<div class="bot">
				<ul>
					<li><a href="main_menu.php">Exit</a></li>
					<li><a onclick="ImportCSVFileStudents()">Import .csv file</a></li>
					<li><a onclick="AddStudent()">Add Student</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>