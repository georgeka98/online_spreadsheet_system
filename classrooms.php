<!DOCTYPE html>
<html>
	<header>
		<title>Student Progress Tracker</title>
		<link rel="stylesheet" type="text/css" href="Stylesheets/Windows.css">
		<link rel="stylesheet" type="text/css" href="Stylesheets/sameParts.css">
		<script type="text/javascript" src="scripts/closingWindows.js"></script>
		<meta lang="en">
		<meta charset="UTF-8">
	</header>
	<body>
		<div class="window" id="classroomView">
			<div class="chooseView">
				<div class="closeWin">
					<div class="X">
						<div class="diagnonallyLeft"></div>
						<div class="diagnonallyRight"></div>		
					</div>
				</div>
				<div class="btns">
					<h3>View classroom as:</h3>
					<ul>
						<li class="firstli">
							<form action="ShowStudentsPR.php" method="POST" accept-charset="utf-8"> <!sow students in a spreadsheet format-->
								<button href="students.php"><p>Profiles</p></button>
							</form>
						</li>
						<li>
							<form action="ShowStudentsSP.php" method="POST" accept-charset="utf-8"> <!sow students as profiles-->
								<button href="students_spreadsheet_view.php"><p>Spreadsheet</p></button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
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
		<div class="window" id="Classroom">
			<div class="AddClassroom">
				<div class="closeWin">
					<div class="X">
						<div class="diagnonallyLeft"></div>
						<div class="diagnonallyRight"></div>
					</div>
				</div>
				<form action="AddClassroom.php" method="post" enctype="multipart/form-data">
				    <h3>Add Classroom:</h3>
				    <p>Name:</p><input type="text" name="fileToUpload" id="fileToUpload">
				    <br>
				    <input type="submit" name="fileToUpload" id="fileToUpload" value="Add Classroom">
				</form>
			</div>
		</div>
		<div class="content">
			<div class="top">
				<h1>Classrooms</h1>
			</div>
			<div class="mid profiles">
				<button onclick="ChooseView()"><p>Classroom 1</p></button>
				<button onclick="ChooseView()"><p>Classroom 2</p></button>
				<button onclick="ChooseView()"><p>Classroom 3</p></button>
				<button onclick="ChooseView()"><p>Classroom 4</p></button>
				<button onclick="ChooseView()"><p>Classroom 5</p></button>
				<button onclick="ChooseView()"><p>Classroom 6</p></button>
				<button onclick="ChooseView()"><p>Classroom 7</p></button>
				<button onclick="ChooseView()"><p>Classroom 8</p></button>
				<button onclick="ChooseView()"><p>Classroom 9</p></button>
				<button onclick="ChooseView()"><p>Classroom 10</p></button>
				<button onclick="ChooseView()"><p>Classroom 11</p></button>
				<button onclick="ChooseView()"><p>Classroom 12</p></button>
				<button onclick="ChooseView()"><p>Classroom 13</p></button>
				<button onclick="ChooseView()"><p>Classroom 14</p></button>
				<button onclick="ChooseView()"><p>Classroom 15</p></button>
				<button onclick="ChooseView()"><p>Classroom 16</p></button>
			</div>
			<div class="bot">
				<ul>
					<li><a href="main_menu.php">Exit</a></li>
					<li><a onclick="ImportCSVFileClassrooms()">Import .csv file</a></li>
					<li><a onclick="AddClassroom()">Add Classroom</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>