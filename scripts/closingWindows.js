addEventListener('click', function (el) {
	if(el.target.className == "X" || el.target.className == "diagnonallyLeft" || el.target.className == "diagnonallyRight"){
		parent = el.target.parentElement;
		while (parent.className.search("window") < 0){
			parent = parent.parentElement;
		}
		if (parent.className.search("window") >= 0){
			parent.style.display = "none";
		}
	}
});

function ImportCSVFileClassrooms(){
	CSVDiv = document.getElementById("CSV");
	CSVDiv.style.display = "block";
}

function AddClassroom(){
	AddClassroomDiv = document.getElementById("Classroom");
	AddClassroomDiv.style.display = "block";
}

function ImportCSVFileStudents(){
	CSVDiv = document.getElementById("CSV");
	CSVDiv.style.display = "block";
}

function AddStudent(){
	AddClassroomDiv = document.getElementById("Student");
	AddClassroomDiv.style.display = "block";
}

function ChooseView(){
	chooseViewWindow = document.getElementById("classroomView");
	chooseViewWindow.style.display = "block";
}