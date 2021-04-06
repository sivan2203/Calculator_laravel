function galleryClose() {
    alert('Галерея закрыта');
}

$('[data-fancybox="gallery"]').fancybox({
    afterClose: function() {
        setTimeout(function() {
            galleryClose();
        }, 0);
    },
    loop: true,
    infobar: false,
    toolbar: false,
});
