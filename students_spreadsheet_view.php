<!DOCTYPE html>
<html>
	<header>
		<title>Student Progress Tracker</title>
		<link rel="stylesheet" type="text/css" href="students_spreadsheet_view.css">
		<link rel="stylesheet" type="text/css" href="Stylesheets/sameParts.css">
		<script type="text/javascript" src="students_spreadsheet_view.js"></script>
		<meta lang="en">
		<meta charset="UTF-8">
	</header>
	<body>
		<div class="content">
			<div class="top">
				<h1>Classroom</h1>
			</div>
			<div class="mid">
				<div class="table">
					<table border="0" class="AllCells">
					<tr class="AllColumnNames">
						<td class="Name">
							<input type="text" name="name" value="Name" onkeypress="columnWidthManage(this)"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="FSM" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="SEN" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="PP" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="G&T" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="Grade" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="Current Grade" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="Target Grade" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="Attendence (%)" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="Teacher comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="Generated comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_1">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_2">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_3">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_4">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_5">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_6">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_7">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_8">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_9">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_10">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_11">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
					<tr class="Student_12">
						<td class="Name">
							<input type="text" name="name" value="Hannah Anderson" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="FSM">
							<input type="text" name="FSM" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="SEN">
							<input type="text" name="SEN" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="PP">
							<input type="text" name="PP" value="Y" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="G&T">
							<input type="text" name="G&T" value="N" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Grade">
							<input type="text" name="grade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Cgrade">
							<input type="text" name="Cgrade" value="C" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tgrade">
							<input type="text" name="Tgrade" value="D" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Attendence">
							<input type="text" name="attendence" value="92" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Tcomment">
							<input type="text" name="Tcomment" value="teachers comment typed in" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
						<td class="Gcomment">
							<input type="text" name="Gcomment" value="generatede student comment" onkeypress="this.style.width = ((this.value.length + 1) * 16) + 'px';"/>
						</td>
					</tr>
				</table>
				</div>
			</div>
			<div class="bot">
				<ul>
					<li><a href="main_menu.php">Exit</a></li>
					<li><a>Print</a></li>
					<li><a onclick="AddColumn()">Add column</a></li>
					<li><a onclick="RearrangeStudents()">Rearrange students in class</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>