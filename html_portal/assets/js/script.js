var slideItem = 0;

window.onload=function() {
	setInterval(passarSlide, 2000);

	var slideWidth=document.getElementById("slideshow").offsetWidth;
	var objs=document.getElementsByClassName("slide");
	//alert(slideWidth);
	//for(var i in objs) {
	for(i=0; i<objs.length; i++){
		objs[i].style.width=slideWidth+'px';
	}
}
function passarSlide(){
	var slideWidth = document.getElementById("slideshow").offsetWidth;
	if(slideItem >= 3){
		slideItem = 0;
	}else{
		slideItem++;
	}

	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-"+(slideWidth * slideItem)+"px";
}

function mudarSlide(pos){
	slideItem =pos;
	var slideWidth = document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-"+(slideWidth * slideItem)+"px";

}

//Função para o menu responsivo mostrar ou esconder o menu ao clicar no ícone.
function toggleMenu() {
	
	var menu = document.getElementById("menu");

	if (menu.style.display == 'none') {
		menu.style.display = "block";
	} else {
		menu.style.display = "none";
	}

}

//Script para atualizar a página para o problema do menu
//window.addEventListener('risize', function()){
//	"user strict";
//	window.location.reload();
//}