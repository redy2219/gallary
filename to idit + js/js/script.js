$().ready(() => {
    const RADIX = 36;
    const FROM_SYMBOL = 2;
    const LENGTH_WORD = 9;
    const KEY_CODE = 13;
    const makeId = () => `_${Math.random().toString(RADIX).substr(FROM_SYMBOL, LENGTH_WORD)}`;
    let arrayOfImages = [{
        id: makeId(),
        adress: 'image1.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image2.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image3.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image4.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image5.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image6.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image7.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image8.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image65.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image9.jpg',
        height: 300,
        width: 200
    }
        ,
    {
        id: makeId(),
        adress: 'image10.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image11.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image12.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image13.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image14.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image15.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image16.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image17.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image18.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image19.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image20.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image21.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image22.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image23.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image24.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image25.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image26.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image27.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image28.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image29.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image30.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image31.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image32.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image33.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image34.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image35.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image35.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image36.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image37.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image38.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image39.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image40.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image41.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image42.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image43.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image44.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image45.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image46.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image47.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image48.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image49.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image50.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image51.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image52.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image53.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image54.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image55.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image56.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image57.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image58.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image59.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image60.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image61.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image62.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image63.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image64.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image65.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image66.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image67.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image68.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image69.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image70.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image71.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image72.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image73.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image74.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image75.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image76.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image77.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image78.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image79.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image80.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image81.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image82.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image83.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image84.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image85.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image86.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image87.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image88.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image89.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image90.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image91.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image92.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image93.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image94.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image95.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image96.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image97.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image98.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image99.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image100.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image101.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image102.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image103.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image104.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image105.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image106.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image107.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image108.jpg',
        height: 300,
        width: 200
    },
    {
        id: makeId(),
        adress: 'image109.jpg',
        height: 300,
        width: 200
    }];

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

    $(document).on('dblclick', '.box1', function () {
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

        $('.information').append(`<div id="${idElement}"><p class ="edit-height"> Высота: ${heightValue}</p><p class ="edit-width"> Ширина: ${widthValue}</p></div>`)
    })

    $(document).on('dblclick', '.edit-height', function () {
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

    $(document).on('dblclick', '.edit-width', function () {
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