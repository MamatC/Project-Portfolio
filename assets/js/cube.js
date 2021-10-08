window.onload = function(){

$('document').ready(function() {
	
	var lastScrollLeft = 0;

	$('window').scroll(function trucenscroll(event) {

	   var sl = $(this).scrollTop();
	   var st = $(this).scrollLeft();

	   if (sl > lastScrollLeft) {
	       

	    	var srotatey = "rotateY(" + sl/3 + "deg)";
	    	var srotatex = "rotateX(" + sl/2 + "deg)";
	    	var size = 100 + sl + "vw";

			$("#cubo").css({"-moz-transform" : srotatey + srotatex , "-webkit-transform" : srotatey + srotatex});
			$("#portaCubo").css({"perspective" : size});



	   }
	   else if(sl == lastScrollLeft) {
	     //do nothing 
	     //In IE this is an important condition because there seems to be some instances where the last scrollTop is equal to the new one
	   }
	   else {

	   		
	    	var srotatey = "rotateY(" + sl/3 + "deg)";
	    	var srotatex = "rotateX(" + sl/2 + "deg)";
	    	var size = 100 + sl + "vw";
			$("#cubo").css({"-moz-transform" : srotatey + srotatex, "-webkit-transform" : srotatey + srotatex});
			$("#portaCubo").css({"perspective" : size});



	   }
	   lastScrollLeft = sl;
	});

});

}
