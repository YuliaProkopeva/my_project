menu.onclick = function myFunction(){
	var x = document.getElementById('Top');
	if (x.className === "navigation"){
		x.className += " responsive";
	} else {
		x.className = "navigation";
	}
}

