//image move for books
var img_content =document.getElementById('box');
var image=['1','2','3'];
var i=image.length;

function nextimage()
{
	if(i<image.length)
		{i=i+1;}
	else{i=1;}
	img_content.innerHTML = "<img src=css/"+image[i-1]+".jpg>";
}
function prewimage()
{
	if(i<image.length+1 && i>1)
		{i=i-1;}
	else{i=image.length;}
	img_content.innerHTML = "<img src=css/"+image[i-1]+".jpg>";
}
  setInterval(nextimage,3000);




 