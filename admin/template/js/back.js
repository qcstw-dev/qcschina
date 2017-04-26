$(function () {
    $(document).on('change', ':file', function () {
        var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready(function () {
        $(':file').on('fileselect', function (event, numFiles, label) {
            $('.file-name-'+$(this).data('id')).text(label);
        });
    });
    $('.select-website').on('change', function () {
        var data = {};
        data['action'] = 'selectwebsite';
        data['select'] = $(this).is(':checked') ? 1 : 0;
        data['id_product'] = $(this).data('id-product');
        data['id_website'] = $(this).data('id-website');
        $.ajax({
            type: 'POST',
            url: baseUrlAdmin + 'ajax',
            data: data,
            dataType: 'json',
            async: false,
            beforeSend: function () {
                loading('Saving...');
            },
            success: function (json) {
                loading_hide();
                if (json.success === true) {
                    // append PICTURE
                    confirm();

                } else {
                    if (json.error) {
                        popupError(json.error);
                    }
                }
            }
        });
    });
//    var options = [];
//
//    $('.dropdown-menu a').on('click', function (event) {
//        var $target = $(event.currentTarget),
//                val = $target.attr('data-value'),
//                $inp = $target.find('input'),
//                idx;
//
//        if ((idx = options.indexOf(val)) > -1) {
//            options.splice(idx, 1);
//            setTimeout(function () {
//                $inp.prop('checked', false)
//            }, 0);
//        } else {
//            options.push(val);
//            setTimeout(function () {
//                $inp.prop('checked', true)
//            }, 0);
//        }
//
//        $(event.target).blur();
//
//        return false;
//    });
//    $(document).on('click', '.btn-upload', function (e) {
//        $('.fileupload').trigger('click');
//    });
    /* limit = 1;
     $('.fileupload').fileupload({
     dataType: 'json',
     autoUpload: false,
     acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
     previewMinWidth: 300,
     previewMinHeight: 300,
     previewMaxWidth: 100000,
     previewMaxHeight: 100000,
     previewThumbnail: false,
     previewCrop: false,
     imageCrop: false,
     singleFileUploads: false,
     limitMultiFileUploads: limit
     }).on('fileuploadadd', function (e, data) {
     // loading GIF
     //        loading('Uploading...');
     $('.file-name').text(data.files[0]['name']);
     }).on('fileuploadprocessalways', function (e, data) {
     var index = data.index,
     file = data.files[index],
     node = $(data.context);
     var error = [];
     
     if (file.preview && !file.error) {
     //            loading_hide();
     
     //            var formData = new FormData();
     //            formData.append(file.name, file);
     //            formData.append('action', 'uploadpicture');
     //            if (id_product) {
     //                formData.append('id_product', id_product);
     //            }
     //            $.ajax({
     //                type: 'POST',
     //                url: baseUrlAdmin + 'ajax',
     //                data: formData,
     //                cache: false,
     //                dataType: 'json',
     //                processData: false, // Don't process the files
     //                contentType: false,
     //                async: false,
     //                success: function (json) {
     //                    if (json.success === true) {
     //                        // append PICTURE
     //                        loading_hide();
     //                        confirm();
     //                        if (!$('.id_product').val()) {
     //                            $('.id_product').val(json.id_product);
     //                        }
     //                    } else {
     //                        if (json.error) {
     //                            popupError(json.error);
     //                        }
     //                    }
     //                }
     //            });
     }
     if (file.error) {
     error.push(file.error);
     }
     if (error.length) {
     var popup_content = '\
     <div class="white-popup">' +
     '<div class="text-center">File error:</div>';
     $.each(error, function (index, message) {
     popup_content += '<li>' + message + '</li>';
     });
     popup_content += '</div>';
     
     popupError(popup_content);
     }
     });*/
});