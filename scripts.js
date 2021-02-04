var n = Number(document.getElementById("pnum").innerHTML);
var ncs = document.getElementsByClassName("nc");
update();

function update() {
	for (i = 0; i < ncs.length; i++) {
		if (i < n) {
			ncs[i].style.display = 'block';
		}else {
			ncs[i].style.display = 'none';
		}
	}
}

function subpnum() {
	if (n > 2) {
		document.getElementById("pnum").innerHTML = n-1;
		n--;
		update();
	}
}

function addpnum() {
	if (n < 6) {
		document.getElementById("pnum").innerHTML = n+1;
		n++;
		update();
	}
}