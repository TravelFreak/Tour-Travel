
var count = 1;
var total = 10;

function slide(a){
	alert("Hello");
	var image =document.getElementById('img');
	count += a;
	if(count>total){
		count = 1;
	}
	if(count < 1){
		count = 10;
	}
	image.src = "images/z" + count + ".jpg";

}