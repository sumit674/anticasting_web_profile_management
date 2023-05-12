// vars
let result = document.querySelector('.result'),
    // img_result = document.querySelector('.img-result'),
    img_w = document.querySelector('.img-w'),
    img_h = document.querySelector('.img-h'),
    options = document.querySelector('.options'),
    save = document.querySelector('.save'),
    cropped = document.querySelector('.cropped'),
    dwn = document.querySelector('.download'),
    upload = document.querySelector('#picture'),
    cropper = '';
let img = document.createElement('img');
console.log("img = " + img);
// on change show image with crop options
upload.addEventListener('change', (e) => {

    if (e.target.files.length) {
        // start file reader
        const reader = new FileReader();

        reader.onload = (e) => {

            if (e.target.result) {
                // create new image
                let img = document.createElement('img');
                //console.log(img)
                img.id = 'image';
                img.src = e.target.result
                // clean result before
                result.innerHTML = '';
                // append new image
                result.appendChild(img);
                // show save btn and options
                save.classList.remove('hide');
                options.classList.remove('hide');
                // init cropper
                cropper = new Cropper(img, {
                    dragMode: 'move',
                    aspectRatio: 9 / 8,
                    autoCropArea: 0.65,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: true,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false,
                });
                cropper.getCroppedCanvas({
                    minWidth: 256,
                    minHeight: 256,
                    maxWidth: 4096,
                    maxHeight: 4096,
                  });
            }
        };
        reader.readAsDataURL(e.target.files[0]);
    }
});

// save on click
save.addEventListener('click', (e) => {
    e.preventDefault();
    // get result to data uri
    let imgSrc = cropper.getCroppedCanvas({
        width: img_w.value // input value
    }).toDataURL();

    // remove hide class of img
    //cropped.classList.remove('hide');
    // img_result.classList.remove('hide');
    // show image cropped
    //cropped.src = imgSrc;
    // dwn.classList.remove('hide');
    // dwn.download = 'imagename.png';
    // dwn.setAttribute('href', imgSrc);
    let imgId = $('#image_number').val();
    $("#default-img").attr('src', imgSrc);
    $('#upload-image-modal').modal('hide');
    $('#default-img').remove();
    if (imgId == 1) {

        $('#image1').css("background-image", 'url(' + imgSrc + ')');

        document.querySelector("#picture1").value = imgSrc;

    }
    if (imgId == 2) {


        // document.querySelector("#default-img").src = evt.target.result;

        // $("#default-img").attr('src', evt.target.result);

        // document.querySelector("#image1").style.backgroundImage = 'url(' + evt.target.result + ')';

        $('#image2').css("background-image", 'url(' + imgSrc + ')');

        document.querySelector("#picture2").value = imgSrc;

    }
    if (imgId == 3) {

        // document.querySelector("#default-img").src = evt.target.result;

        // $("#default-img").attr('src', evt.target.result);

        // document.querySelector("#image1").style.backgroundImage = 'url(' + evt.target.result + ')';

        $('#image3').css("background-image", 'url(' + imgSrc + ')');

        document.querySelector("#picture3").value = imgSrc;
    }

    // function readFile() {
    //     if (!this.files || !this.files[0]) return;

    //     const FR = new FileReader();
    //     FR.addEventListener("load", function (evt) {



    //         // alert($('#image_number').val());

    //         // document.querySelector("#img").src = evt.target.result;

    //         // document.querySelector("#b64").textContent = evt.target.result;



    //         // galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';

    //         //$('#upload-image-modal').modal('hide');
    //         $("#default-img").attr('src', evt.target.result);
    //         if (imgId == 1) {

    //             // document.querySelector("#default-img").src = evt.target.result;

    //             // $("#default-img").attr('src', evt.target.result);

    //             // document.querySelector("#image1").style.backgroundImage = 'url(' + evt.target.result + ')';

    //             $('#image1').css("background-image", 'url(' + evt.target.result + ')');

    //             document.querySelector("#picture1").value = evt.target.result;

    //         }

    //         if (imgId == 2) {
    //             // $('#default-img').remove();
    //             // $("#default-img").attr('src', evt.target.result);
    //             document.querySelector("#image2").style.backgroundImage = 'url(' + evt.target.result + ')';

    //             document.querySelector("#picture2").value = evt.target.result;

    //         }

    //         if (imgId == 3) {
    //             // $("#default-img").attr('src', evt.target.result);
    //             document.querySelector("#image3").style.backgroundImage = 'url(' + evt.target.result + ')';

    //             document.querySelector("#picture3").value = evt.target.result;

    //         }

    //         // document.querySelector("#picture").replace(/\\/g, "/").replace(/.*\//, "");

    //         document.getElementById("picture").value = "";
    //         // $('#default-img').remove();

    //     });

    //     FR.readAsDataURL(this.files[0]);
    // }

    document.querySelector("#picture").addEventListener("change");
});

