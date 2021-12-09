$(document).ready(function () {

    // show images
    $("input[type=file]").change(function ($event) {
        const imgId = this.getAttribute('img-id');
        if($event.target.files[0]) {
            const cccdBeforeSrc = URL.createObjectURL($event.target.files[0]);
            if(imgId) {
                $(`#${imgId}`).attr('src', cccdBeforeSrc);
            }
        }
    });
});