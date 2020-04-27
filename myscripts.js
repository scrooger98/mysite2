function changeImage()
{
var img = document.getElementById("image");
if (img.src.includes("blau"))
{img.src="rot.jpg";}
else{
if (img.src.includes("rot"))
{img.src="schwarz.jpg";}
else{
if (img.src.includes("schwarz"))
{img.src="grau.jpg";}
else{
{img.src="blau.jpg";}    
}
}
}
return false;
}

function changeImage1()
{
var img = document.getElementById("image2");
if (img.src.includes("1"))
{img.src="car2.png";}
else{img.src="car1.png";

}
return false;
}