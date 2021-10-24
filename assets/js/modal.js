window.onload = function(){

  // Get the button that opens the modal
  var btn = document.querySelectorAll(".myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close");
  var modal;
  var i;

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  // When the user clicks anywhere outside of the modal, close it
  
  // When the user clicks the button, open the modal 
  for (i=0; i< btn.length; i++) {
    // span[i].addEventListener("click", machin)
    span[i].onclick = function() {
      modal.style.display = "none";
    }
    btn[i].addEventListener('click', function() {
      // Get the modal
      let id = this.dataset.id;
      modal = document.getElementById("modal-"+ id);
      modal.style.display = "block";
    });
    
  }
    /**
   * Scroll horizontal  
	 */
	const scrollContainer = document.querySelectorAll(".slide");

	scrollContainer.forEach(item => {
    item.addEventListener("wheel", (evt) => {
      evt.preventDefault();
      item.scrollLeft += evt.deltaY;
    });
  });

// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
// 	var element = document.getElementById("cardLeft");
// 	if (document.body.scrollTop > 100 ) 
// 	{
//     // element.classList.add("scroll");
//     element.style.display = "none";
// 	} 

// }
// window.addEventListener("scroll", function() {displayText()});

// function displayText() {
//     if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
//       document.getElementById("cardLeft").style.display = "none";
//     } else {
//       document.getElementById("cardLeft").style.display = "block";
//     }
// }


}