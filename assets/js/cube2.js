window.onload = function() {
	let lastScrollLeft = 0;

	let cube = document.querySelector('#cubo');
	cube.style.transform = "rotateY(35deg) rotateX(50deg)";

	window.addEventListener('scroll', function() {
		let size;
		let srotatex ;
		let srotatey ;

		const sl = document.documentElement.scrollTop +100;
		//const st = document.documentElement.scrollLeft +70;

		if (sl > lastScrollLeft) {
			srotatey = "rotateY(" + sl/3 + "deg)";
			srotatex = "rotateX(" + sl/2 + "deg)";
			size = 100 + sl + "vw";
			// size = 50 + sl + "-50vw";
		}
		else if(sl === lastScrollLeft) {
			//do nothing
			//In IE this is an important condition because there seems to be some instances where the last scrollTop is equal to the new one
		}
		else {
			srotatey = "rotateY(" + sl / 3 + "deg)";
			srotatex = "rotateX(" + sl / 2 + "deg)";
			size = 100 + sl + "vw";
			// size = 50 + sl + "-50vw";
		}

		cube.style.transform = `${srotatey} ${srotatex}`;
		document.querySelector('#portaCubo').style.perspective = size;

		lastScrollLeft = sl;
	});
}




