$().ready(() => {
    const RADIX = 36;
    const FROM_SYMBOL = 2;
    const LENGTH_WORD = 9;
    const KEY_CODE = 13;
    const makeId = () => `_${Math.random().toString(RADIX).substr(FROM_SYMBOL, LENGTH_WORD)}`;
    let arrayOfImages = [];
    let i = 1;
    while (i < 100) {
        arrayOfImages[i] = {id: makeId(), address: 'image' + i + ".jpg", height: 300, width: 200};
        i++;
    }


    $('.inputImage').on('change', () => {

        CreateImage();
        RenderImages(arrayOfImages);

    });

    const RenderImages = currentArray => {
        $('.content .row').empty();
        let str = ``;
        currentArray.forEach(image => {
            str += `<div id="${image.id}">
            <button type="button" id="${image.id}" class="btn-delete-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px">
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                    <path d="M0 0h24v24H0z" fill="none" />
                </svg>
            </button>
             <img id="${image.id}" class="box1" src="./css/Images/${image.adress}"  > 
        </div>`
        })
        $('.content .row').append(str);
        currentArray.forEach(image => {
            $(`.box1[id="${image.id}"]`).height(`${image.height}`)
                .width(`${image.width}`);
        })
    }
    RenderImages(arrayOfImages);

    const CreateImage = () => {
        let selectedFile = ('.row')
        const image = {
            id: makeId(),
            adress: selectedFile.name,
            height: 300,
            width: 200
        }
        arrayOfImages.push(image);
    }

    $(document).on('click', '.btn-delete-image', function () {

        let idElement = $(this).prop('id');
        arrayOfImages = arrayOfImages.filter(image => image.id != idElement);
        RenderImages(arrayOfImages);
        $('.information').empty();
    })

    $(document).on('click', '.box1', function () {
        $('.information').empty();
        let idElement = $(this).prop('id');
        let heightValue = 0;
        let widthValue = 0
        arrayOfImages.forEach(image => {
            if (image.id === idElement) {
                heightValue = image.height
                widthValue = image.width
            }
        });

        $('.information').append(`<div id="${idElement}"><p class ="edit-height"> Height: ${heightValue}</p><p class ="edit-width"> Width: ${widthValue}</p></div>`)
    })

    $(document).on('click', '.edit-height', function () {
        const idElement = $(this).parent().prop('id');

        $(this).remove();
        const indexOfImg = arrayOfImages.findIndex(image => image.id === idElement);


        $(`.information div[id="${idElement}"]`).append(`<input type="text" class="edit-height" value="${arrayOfImages[indexOfImg].height}">`);
        const $textEditArea = $('.edit-height');
        $textEditArea.focus();

        $($textEditArea.focus()).keyup(event => {

            if (event.keyCode === KEY_CODE) {
                if ($textEditArea.val() === ``) {
                    RenderImages(arrayOfImages);
                } else {

                    arrayOfImages[indexOfImg].height = Number(_.escape($textEditArea.val()).replace(/\s+/gu, ` `).trim());
                    RenderImages(arrayOfImages);

                }
            }
        });

        $textEditArea.blur(() => {
            if ($textEditArea.val() === ``) {
                RenderImages(arrayOfImages);
            } else {
                arrayOfImages[indexOfImg].width = Number(_.escape($textEditArea.val()).replace(/\s+/gu, ` `)
                    .trim());
                RenderImages(arrayOfImages);

            }
        });
    });

    $(document).on('click', '.edit-width', function () {
        const idElement = $(this).parent().prop('id');
        $(this).remove();
        const indexOfImg = arrayOfImages.findIndex(image => image.id === idElement);


        $(`.information div[id="${idElement}"]`).append(`<input type="text" class="edit-width" value="${arrayOfImages[indexOfImg].width}">`);
        const $textEditArea = $('.edit-width');
        $textEditArea.focus();

        $($textEditArea.focus()).keyup(event => {
            if (event.keyCode === KEY_CODE) {
                if ($textEditArea.val() === ``) {
                    RenderImages(arrayOfImages);
                } else {
                    arrayOfImages[indexOfImg].height = Number(_.escape($textEditArea.val()).replace(/\s+/gu, ` `)
                        .trim());
                    RenderImages(arrayOfImages);

                }
            }
        });

        $textEditArea.blur(() => {
            if ($textEditArea.val() === ``) {
                RenderImages(arrayOfImages);
            } else {
                arrayOfImages[indexOfImg].height = Number(_.escape($textEditArea.val()).replace(/\s+/gu, ` `)
                    .trim());
                RenderImages(arrayOfImages);

            }
        });
    });


})
