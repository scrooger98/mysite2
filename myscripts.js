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
var img2 = document.getElementById("image3");
if (img.src.includes("car1"))
{img.src="car2.png"; img2.src="FelgenMercedes1.png";}
else{
if (img.src.includes("car2"))
{img.src="car3.png";img2.src="FelgenPorsche1.png";}
else{
{img.src="car1.png";img2.src="FelgenSmart1.png";}
}
}
return false;
}
function changeImage2()
{
var img = document.getElementById("image2");
var img2 = document.getElementById("image3");
if (img.src.includes("car1"))
{if (img2.src.includes("FelgenSmart1"))
{img2.src="FelgenSmart2.png";}else{img2.src="FelgenSmart1.png";}}
    
else{
if (img.src.includes("car2"))
{if (img2.src.includes("FelgenMercedes1"))
{img2.src="FelgenMercedes2.png";}else{img2.src="FelgenMercedes1.png";}}
    
else{
{if (img2.src.includes("Porsche1"))
{img2.src="FelgenPorsche2.png";}else{img2.src="FelgenPorsche1.png";}}
}
}
return false;
}