//SmartRollover
function smartRollover() {
    if(document.getElementsByTagName) {
        var images = document.getElementsByTagName("img");
        for(var i=0; i < images.length; i++) {
            if(images[i].getAttribute("src").match("_off."))
            {
                images[i].onmouseover = function() {
                    this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
                }
                images[i].onmouseout = function() {
                    this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
                }
            }
        }
    }
}
if(window.addEventListener) {
    window.addEventListener("load", smartRollover, false);
}
else if(window.attachEvent) {
    window.attachEvent("onload", smartRollover);
}

//pagetop
$(function() {
    var topBtn = $('#pagetop');
    topBtn.hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });

    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

//sidebar accordion
$(function(){
        $('.menu-item-has-children').each(function(){
            $(this).find('a').first().on('click', function() {
                $(this).next().slideToggle(100);
                return false;
            });
        });
    });

$(function(){
        $('#menu-sidebar > li > a').each(function(){
            var count = $(this).next('ul').find('li').length;
        if(count !== 0){
            $(this).append('(' + count + ')');
        }
        });
});

//フローティング　PC　CSS 　勝手に高さ合わせて固定
$(document).ready( function() {
    $( window ).scroll( function () {
        const d_width = window.innerWidth;
        if( d_width > 768 ) {
            var offset = $( '#gn' ).offset();
            if( $( window ).scrollTop() > offset.top ) {
                $( '#gn' ).addClass( 'fixed' );
                
            } else {
                $( '#gn' ).removeClass( 'fixed' );
            }
        }
    } );
    
} );

//accordion
$(function(){
  $("#ac_btn").on("click", function() {
    $("#ac_navi").slideToggle();
   });
 });
 $(function(){
    $(".ac").on("click", function() {
        $(this).next().slideToggle();
        if ($(this).children(".accordion_icon").hasClass('active')) {
            $(this).children(".accordion_icon").removeClass('active');
        }
        else {
            $(this).children(".accordion_icon").addClass('active');
        }
    });
 });
 $(function(){				
	$("#top .bl_trb1 h3, #top .bl_trb2 h3").on("click", function() {	
	
		$(this).next().slideToggle('fast');		
	});			
});



// マップを後から読み込み
$(window).on('load', function(){
  $('.ft_info .map_box').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.3119449918713!2d135.2570809152329!3d34.722530580428874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008c5774132edd%3A0x1f763543c2c722de!2z44CSNjU4LTAwNTEg5YW15bqr55yM56We5oi45biC5p2x54GY5Yy65L2P5ZCJ5pys55S677yS5LiB55uu77yS77yR4oiS77yS77yR!5e0!3m2!1sja!2sjp!4v1588477269025!5m2!1sja!2sjp" width="486" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>');
  $('#sidebar .bl04 .map').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.3119449918713!2d135.2570809152329!3d34.722530580428874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008c5774132edd%3A0x1f763543c2c722de!2z44CSNjU4LTAwNTEg5YW15bqr55yM56We5oi45biC5p2x54GY5Yy65L2P5ZCJ5pys55S677yS5LiB55uu77yS77yR4oiS77yS77yR!5e0!3m2!1sja!2sjp!4v1588477269025!5m2!1sja!2sjp" width="228" height="182" frameborder="0" style="border:0" allowfullscreen></iframe>');
});

//scrollfixed ajustアンカーリンクヘッダ分ずらすページ内

$(function () {
    var headerHight = 100; //ヘッダの高さ
    $('a[href*="#"]').click(function(){
        var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
           var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
        $("html, body").animate({scrollTop:position}, 100, "swing");
           return false;
      });
   });
   
   //scrollfixed ajustアンカーリンクヘッダ分ずらすページ外

$(window).on('load', function() {
    var url = $(location).attr('href');
    if(url.indexOf("#") != -1){
        var anchor = url.split("#");
        var target = $('#' + anchor[anchor.length - 1]);
        if(target.length){
            var pos = Math.floor(target.offset().top) - 100;
            $("html, body").animate({scrollTop:pos}, 100);
        }
    }
});

