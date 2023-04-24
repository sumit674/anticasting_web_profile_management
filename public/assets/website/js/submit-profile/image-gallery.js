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
		e.target.addEventListener("click", function () {
			$('#old_image').val(e.target.getAttribute("data-fileurl"));
			$('#upload-image-modal').modal('show');
			$('#upload-image-modal').appendTo('body');
			$('#image_number').val(e.target.dataset.value);
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

	leftInterval = setInterval(function () {
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
		left = left - itemWidth;

		var last = gallery.children[gallery.children.length - 1];
		gallery.removeChild(last);
		gallery.style.left = left + '%';
		gallery.insertBefore(last, gallery.children[0]);
	}

	left = left || 0;

	leftInterval = setInterval(function () {
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

const getBase64FromUrl = async (url) => {
	const data = await fetch(url);
	const blob = await data.blob();
	return new Promise((resolve) => {
	  const reader = new FileReader();
	  reader.readAsDataURL(blob); 
	  reader.onloadend = () => {
		const base64data = reader.result;   
		resolve(base64data);
	  }
	});
  }

//Start this baby up
(async function init() {
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
		// galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
		galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
		galleryItems[i].setAttribute('data-fileurl', images[i]);
		galleryItems[i].addEventListener('click', selectItem);

		// console.log('images', images);
		if (images[i] !=='' && images[i] !== undefined) {
			let img = await getBase64FromUrl(images[i]);
			// document.querySelector("#picture"+i).value = await getBase64FromUrl(images[i]);
			let index = parseInt(i) + 1;
			$("#picture"+ index).val(await getBase64FromUrl(images[i]));
		}
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

function readFile() {
	if (!this.files || !this.files[0]) return;
	const FR = new FileReader();
	FR.addEventListener("load", function (evt) {
		let imgId = $('#image_number').val();
		// alert($('#image_number').val());
		// document.querySelector("#img").src = evt.target.result;
		// document.querySelector("#b64").textContent = evt.target.result;

		// galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
		$('#upload-image-modal').modal('hide');
		if (imgId == 1) {
			// document.querySelector("#default-img").src = evt.target.result;
			$("#default-img").attr('src', evt.target.result);
			// document.querySelector("#image1").style.backgroundImage = 'url(' + evt.target.result + ')';
			$('#image1').css("background-image", 'url(' + evt.target.result + ')'); 
			document.querySelector("#picture1").value = evt.target.result;
		}
		if (imgId == 2) {
			document.querySelector("#image2").style.backgroundImage = 'url(' + evt.target.result + ')';
			document.querySelector("#picture2").value = evt.target.result;
		}
		if (imgId == 3) {
			document.querySelector("#image3").style.backgroundImage = 'url(' + evt.target.result + ')';
			document.querySelector("#picture3").value = evt.target.result;
		}
		// document.querySelector("#picture").replace(/\\/g, "/").replace(/.*\//, "");
		document.getElementById("picture").value = "";
	});
	FR.readAsDataURL(this.files[0]);
}

document.querySelector("#picture").addEventListener("change", readFile);