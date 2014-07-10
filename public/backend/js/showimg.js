$(".url-image").change(function() {
    var v = $(this).val();
    var img = $(".img-div").find("img")
    img.attr("src",v)
    img.parent(".img-box").show();
});

/*$("#add-input").click(function() {

    var rnd = Math.floor(Math.random()*1000000);
    var prt = $(this).parent().parent();
    var img_div = $(".img-div:last").clone(true, true);
    img_div.find('img').attr({'src': ''});
    img_div.find('.img-box').css({'display': 'none'});
    img_div.find('.img-del').attr({'data-url': ''});
    img_div.find('input').val('').attr({'id': 'cover-img-url'+rnd});
    img_div.find('button').attr({'data-option': "{urlContainer:'#cover-img-url"+rnd+"', accept:{extensions: 'jpeg,jpg,png,gif,bmp', mimeTypes:'image/*'},maxSize:4096}",});
    img_div.insertBefore(prt);
});
*/
$(".img-del").click(function() {
    var url = $(this).attr('data-url');

    if (url != '') {
        $.post(url, function(data){
            //(data);
        });
    }
    
    var img_d = $(this).parents(".img-div");
    img_d.find('img').attr({'src': ''});
    img_d.find('.img-box').css({'display': 'none'});
    img_d.find('.img-del').attr({'data-url': ''});
    img_d.find('input').val('')
});    
