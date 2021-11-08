//image move for course
 var img_content2 =document.getElementById('box2');
var image2=['1c','2c','3c'];
var i=image2.length;

function nextimage()
{
	if(i<image2.length)
		{i=i+1;}
	else{i=1;}
	img_content2.innerHTML = "<img src=css/"+image2[i-1]+".jpg>";
}
function prewimage()
{
	if(i<image2.length+1 && i>1)
		{i=i-1;}
	else{i=image2.length;}
	img_content.innerHTML = "<img src=css/"+image2[i-1]+".jpg>";
}
  setInterval(nextimage,3000);
