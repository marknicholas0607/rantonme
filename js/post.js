function createPost() {
	var modal = document.getElementById('modal');

	if (modal.style.display === "block") {
		modal.style.display = "none";
	}
	else{
		modal.style.display = "block";
	}
}


function showComments() {
	var modal = document.getElementById('comments');

	if (modal.style.display === "block") {
		modal.style.display = "none";
	}
	else{
		modal.style.display = "block";
	}
}