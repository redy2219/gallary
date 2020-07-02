$().ready(() => {
    const RenderImages = currentArray => {
        $('.block-gallery-images').empty();
        let str = ``;
        currentArray.forEach(image => {
            $('.block-gallery-images').append(`<div id="${image.id}" style="width:300px;height: 300px; background-size: cover; background-image: url('${image.address}') " class="clearfix m-1 box1">
            <button type="button" id="${image.id}" class="btn-delete-image  float-right btn">
            <i style="color:#fff; font-size: 25px;font-weight:bolder;" class="fas fa-times"></i></i>          
            </button></div>`);
        })
    }

    $(window).load(function () {
        RenderImages(arrayOfImages);
    });

    $(document).on('click', '.box1', function (event) {
        $('.current-border-gallery-img').toggleClass('current-border-gallery-img');
        $(event.target).addClass('current-border-gallery-img');
    })

    $(document).on('click', '.btn-delete-image', function (event) {
        $(event.target).closest('div').remove();
    })

    $(document).on('click', '#applyChanges', function () {
        let height = $('#imageHeight').val();
        $('.current-border-gallery-img').css('width', height);

    })
    $(document).on('click', '#applyChanges', function () {
        let width = $('#imageWidth').val();
        $('.current-border-gallery-img').css('height', width);
    })

    $(document).on('dblclick', '.box1', function () {
        $('#navbarsExampleDefault-1').collapse('toggle');

    })
    $(document).on('click', '.box1', function () {

    })

})
