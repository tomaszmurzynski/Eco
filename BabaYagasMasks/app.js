// window.addEventListener('load', function(){
// var linki  =  document.querySelectorAll('.menu ul > li > a');
// console.log(linki[i]);
// for(var i = 0; i < linki.length;i++){
//console.log(linki[i]);
// linki[i].addEventListener('click', function(e){
	// e.preventDefault();
	// this.style.color = 'red';
// });
// }	
// }); 
//funkcja anonimowa automatycznie wykonana  
//window.addEventListener('load', mojaFunkcja);   //funkcja nie anomimowa do której trzeba się odwołać  
//mojaFunkcja = function f(){};// odwoalnie do funcji 

$(document).ready(function(){
	var linki = $('.menu > li > a');
	console.log(linki);
	linki.click(function(e){
		
		$(this).fadeOut(1000).fadeIn(1000); //animacja zanikania i pokazywania w jednostce czasu ms
		//$(this).next(); // zwraca tablice jesli jest rodzeństwo
		if($(this).next().length > 0){
			e.preventDefault();
			if(this.opened === true){		//pierwsze klkniecie zawsze false bo instrukcja nie istnieje
				this.opened = false;		//trzecie klikniecie
				$(this).next().slideUp(); //zwinięcie menu
			}
			else {
				this.opened = true;			//utworzenie 
				$(this).next().show();	//rozwinięcie menu
			}
		}
	});
});




