jQuery(document).ready(function($) {
    //filter
    $('.filter > ul > li > a').on('click', function(){
        $('.filter > ul > li > a').not($(this)).removeClass('active').next('ul').addClass('hidden');
        $(this).addClass('active').next('ul').removeClass('hidden');
    });

    $('.case-list .case-item .case-item-box:first').css('margin-left', '0');

    $('.jobs-list .job').each(function(){
        if(($(this).index() + 1) % 3 == 0) {
            $(this).css('border-right', 'none');
        }
        $(this).height($(this).parent().height() - 1); 
    });

    $(document).scroll(function() {
      var nav = $($('.nav')[0]);
      var cloneNav = nav.clone();
          cloneNav.addClass('clone-nav').css({'position':'fixed', 'top':'0','background':'#fff','z-index':999999999, width:nav.width()});
      if ($(document).scrollTop() > nav.offset().top) {
        $('.clone-nav').length || $('nav').after(cloneNav);
      } else {
        $('.clone-nav').remove();
      }
    });

    var autoSizeCaseBox = function(){
        $('.case-list .case-item').each(function(){
            var caseBoxWidth = caseBoxHeight = $(this).width();
            var caseImgWrapper = $(this).find('.case-img');
            var caseImg = caseImgWrapper.find('img');

            //等高
            $(this).height(caseBoxWidth);

            //案例图片处理
            //1.高大于宽，按宽100%
            if (caseImg.height() > caseImg .width()) {
                caseImg.width(caseBoxWidth);
            } else {
                caseImg.height(caseBoxHeight);
            }
            (caseImg.css('width'));
            if (caseImg.height() > caseBoxHeight) {
                caseImg.css('margin-top', (caseBoxHeight - caseImg.height()) / 2 + 'px');
            };
            if (caseImg.width() > caseBoxWidth) {
                caseImg.css('margin-left', (caseBoxWidth - caseImg.width()) / 2 + 'px');
            };
        });
    };
    
    setTimeout(autoSizeCaseBox, 70);
    setInterval(autoSizeCaseBox, 2000);
    
});
