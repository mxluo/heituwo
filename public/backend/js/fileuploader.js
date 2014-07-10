// 图片上传demo
jQuery(function() {
    var $ = jQuery,
        $list = $('#fileList'),
        // 优化retina, 在retina下这个值是2
        ratio = window.devicePixelRatio || 1,

        // 缩略图大小
        thumbnailWidth = 200 * ratio,
        thumbnailHeight = 200 * ratio,

        // Web Uploader实例
        uploader;

    // 初始化Web Uploader
    uploader = WebUploader.create({

        // 自动上传。
        auto: true,

        // swf文件路径
        //swf: BASE_URL + '/js/Uploader.swf',

        // 文件接收服务端。
        server: UPLOAD_URL,

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',

        //file表单 name
        fileVal: 'image',

        // 只允许选择文件，可选。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });

    // 当有文件添加进来的时候
    uploader.on( 'fileQueued', function( file ) {
        var $li = $(
                '<li id="' + file.id + '" class="file-item thumbnail">' +
                    '<img>' +
                    '<input type="hidden" class="img-hidden" name="images[]" />'+
                '</li>'
                ),
            $img = $li.find('img');

        $list.append( $li );

        // 创建缩略图
        uploader.makeThumb( file, function( error, src ) {
            if ( error ) {
                $img.replaceWith('<span>不能预览</span>');
                return;
            }

            $img.attr( 'src', src );
        }, thumbnailWidth, thumbnailHeight );
    });

    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress .progress-bar');

        // 避免重复创建
        if ( !$percent.length ) {
          $percent = $('<div class="progress progress-striped active"><div class="progress-bar"  role="progressbar"></div></div>')
                    .appendTo( $li )
                    .find('.progress-bar');
        }

        $percent.css( 'width', percentage * 100 + '%' );
    });

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file, resp) {
      if (resp.status) {
        $( '#'+file.id ).find('input.img-hidden').val(resp.src);
        $( '#'+file.id ).addClass('upload-state-done').append('<div class="file-panel" style="height: 0px;"><span class="cancel">删除</span></div>');
      } else {
        var $li = $( '#'+file.id ),
            $error = $li.find('div.error');

        // 避免重复创建
        if ( !$error.length ) {
            $error = $('<div class="error"></div>').appendTo( $li );
        }

        $error.text('上传失败');
      }
    });

    // 文件上传失败，现实上传出错。
    uploader.on( 'uploadError', function( file ) {
        var $li = $( '#'+file.id ),
            $error = $li.find('div.error');

        // 避免重复创建
        if ( !$error.length ) {
            $error = $('<div class="error"></div>').appendTo( $li );
        }

        $error.text('上传失败');
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').remove();
    });

    $(document).on('mouseover', '.thumbnail', function(){
      $(this).find('.file-panel').animate({'height':'30px'}, 100);
    });
    $(document).on('mouseleave', '.thumbnail', function(){
      $(this).find('.file-panel').animate({'height':'0px'}, 100);
    });

    //删除
    $(document).on('click', '.file-panel .cancel', function(){
      $(this).closest('.file-item').remove();
    });
    
    $list.sortable({
      placeholder: "ui-state-highlight",
    }).disableSelection();

    //如果文件列表中已经有图片
    if ($list.find('img').length) {
        $list.find('img').each(function(){
            var parentHeight = $(this).parent().height();
            var parentWidth = $(this).parent().width();
            //如果高小于thumbnail框
            $(this).height(parentHeight).css({'width' : parentWidth, 'height':parentHeight});
        });
    };
});