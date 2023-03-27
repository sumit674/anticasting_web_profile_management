var gallery = document.querySelector('.gallery');
var galleryItems = document.querySelectorAll('.gallery-item');
var numOfItems = gallery.children.length;
var itemWidth = 23; // percent: as set in css

var featured = document.querySelector('.featured-item');

var leftBtn = document.querySelector('.move-btn.left');
var rightBtn = document.querySelector('.move-btn.right');
var leftInterval;
var rightInterval;

var scrollRate = 0.2;
var left;

function selectItem(e) {
	if (e.target.classList.contains('active')) {
		// if (e.target.style.backgroundImage == 'url("undefined")') {
			e.target.addEventListener("click", function() {
				$('#old_image').val(e.target.getAttribute("data-fileurl"));
				$('#upload-image-modal').modal('show');
				$('#upload-image-modal').appendTo('body');
			});
		// }
	}
	// else if(e.target.style.backgroundImage != 'url("undefined")'){
		
	// 	e.target.addEventListener("click", function() {
	// 		$('#upload-image-modal-update').modal('show');
	// 		$('#upload-image-modal-update').appendTo('body');
	// 	});
	// 	featured.style.backgroundImage = e.target.style.backgroundImage;
	// 	for (var i = 0; i < galleryItems.length; i++) {
	// 		if (galleryItems[i].classList.contains('active'))
	// 			galleryItems[i].classList.remove('active');
	// 	}
	// 	e.target.classList.add('active');
	// }
	 else {
		featured.style.backgroundImage = e.target.style.backgroundImage;
		for (var i = 0; i < galleryItems.length; i++) {
			if (galleryItems[i].classList.contains('active'))
				galleryItems[i].classList.remove('active');
		}
		e.target.classList.add('active');
	}	
}

function galleryWrapLeft() {
	var first = gallery.children[0];
	gallery.removeChild(first);
	gallery.style.left = -itemWidth + '%';
	gallery.appendChild(first);
	gallery.style.left = '0%';
}

function galleryWrapRight() {
	var last = gallery.children[gallery.children.length - 1];
	gallery.removeChild(last);
	gallery.insertBefore(last, gallery.children[0]);
	gallery.style.left = '-23%';
}

function moveLeft() {
	left = left || 0;

	leftInterval = setInterval(function() {
		gallery.style.left = left + '%';

		if (left > -itemWidth) {
			left -= scrollRate;
		} else {
			left = 0;
			galleryWrapLeft();
		}
	}, 1);
}

function moveRight() {
	//Make sure there is element to the leftd
	if (left > -itemWidth && left < 0) {
		left = left  - itemWidth;
		
		var last = gallery.children[gallery.children.length - 1];
		gallery.removeChild(last);
		gallery.style.left = left + '%';
		gallery.insertBefore(last, gallery.children[0]);	
	}
	
	left = left || 0;

	leftInterval = setInterval(function() {
		gallery.style.left = left + '%';

		if (left < 0) {
			left += scrollRate;
		} else {
			left = -itemWidth;
			galleryWrapRight();
		}
	}, 1);
}

function stopMovement() {
	clearInterval(leftInterval);
	clearInterval(rightInterval);
}

// leftBtn.addEventListener('mouseenter', moveLeft);
// leftBtn.addEventListener('mouseleave', stopMovement);
// rightBtn.addEventListener('mouseenter', moveRight);
// rightBtn.addEventListener('mouseleave', stopMovement);


//Start this baby up
(function init() {
	// $("#upload-image-modal").modal('show');
	// var images = [
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/car.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/city.jpg',
	//     // 'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/deer.jpg'
	// ];
	//Set Initial Featured Image
	featured.style.backgroundImage = 'url(' + images[0] + ')';
	
	//Set Images for Gallery and Add Event Listeners
	for (var i = 0; i < galleryItems.length; i++) {
		galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
		galleryItems[i].setAttribute('data-fileurl', images[i]);
		galleryItems[i].addEventListener('click', selectItem);
		
		// galleryItems[i].addEventListener('click', function() {
		// 	if (images[i] === undefined) {
		// 		console.log('images[i]', images[i]);
		// 		$('#upload-image-modal').modal('show');
		// 		$('#upload-image-modal').appendTo('body');
		// 	} else {
		// 		galleryItems[i].addEventListener('click', selectItem);
		// 	}
		// });
		galleryItems[i].addEventListener('mouseover', selectItem);
	}
})();



