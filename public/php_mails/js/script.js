$( document ).ready(function() {

    $('.video-logo').click(function(){
        $hidevideo= $('.video iframe').attr("src");
    });

    $('.fade.video').click(function(){
            $hidevideo= $('.video iframe').attr("src");
            $('.video iframe').attr("src");
            $('.video iframe').attr("src",$hidevideo);
    });
    $('.video-logo').click(function(){
        $hidevideo= $('.video iframe').attr("src");
    });

  $(".contact-logo-mobile").on("click", function(){
    /*var cm = $("#captcha").html();
    console.log("...", cm);
    $("#captcha-mobile").html(cm);*/
  });
          $("input[name='subscribe']").on('click', function(){
            var f = $(this).parent().parent(),
                n = $("input[name='FNAME']", f).val(),
                p = $("input[name='MMERGE2']", f).val(),
                e = $("input[name='EMAIL']", f).val(),
                c = $("input[name='correoenvio']", f).val(),
                data = {
                  FNAME: n,
                  MMERGE2: p,
                  EMAIL: e,
                  correoenvio: c,
                  captchaSelection: true
                };
            if(checked == true && n != "" && p != "" && e != ""){
              $.post("php_mail/send.php", data, function(res){
                //console.log("subscribe", data, res);
                swal({
                    title: "Message Sent!",
                    text: "We will get back to you shortly",
                    type: "success",
                    html: true,
                    timer: 3000,
                    showConfirmButton: false
                });
                $("form").trigger('reset');
              });

            }
          });
        $(".section").mouseover(function() {
            $(".mask").css("background-color", "#303030"),
            $(".block-msk").css("background-color", "rgba(48, 48, 48, 0.47)"),
                $("body").removeClass("twitter"),
                $("body").removeClass("instagram"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").removeClass("facebook")
                $("body").removeClass("snapcha")
        }),
        $(".facebook-logo, .facebook-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#3b5998"),
            $(".block-msk").css("background-color", "rgba(59, 89, 152, 0.73)"),
                $("body").removeClass("twitter"),
                $("body").removeClass("instagram"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").addClass("facebook"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")

        }),
        $(".twitter-logo, .twitter-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#4698FE"),
            $(".block-msk").css("background-color", "rgba(70, 152, 254, 0.57)"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").addClass("twitter"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        $(".instagram-logo, .instagram-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#c32aa3"),
            $(".block-msk").css("background-color", "rgba(195, 42, 163, 0.51)"),
                $("body").removeClass("facebook"),
                $("body").removeClass("linkedin"),
                $("body").addClass("instagram"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").removeClass("twitter"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        $(".linkedin-logo, .linkedin-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#007bb6"),
            $(".block-msk").css("background-color", "rgba(0, 123, 182, 0.53)"),
                $("body").addClass("linkedin"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("youtube"),
                $("body").removeClass("gplus"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        $(".gplus-logo, .gplus-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#df4a32"),
            $(".block-msk").css("background-color", "rgba(223, 74, 50, 0.63)"),
                $("body").addClass("gplus"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("youtube"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        $(".youtube-logo, .youtube-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#cd201f"),
            $(".block-msk").css("background-color", "rgba(205, 32, 31, 0.67)"),
                $("body").addClass("youtube"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("gplus"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        $(".callme-logo-mobile, .video-logo").mouseover(function() {
            $(".mask").css("background-color", "#28e270"),
            $(".block-msk").css("background-color", "rgba(40, 226, 112, 0.66)"),
                $("body").removeClass("youtube"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("gplus"),
                $("body").removeClass("linkedin"),
                $("body").addClass("callme"),
                $("body").removeClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        $(".contact-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#f9e440"),
            $(".block-msk").css("background-color", "rgba(249, 228, 64, 0.63)"),
                $("body").removeClass("youtube"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("gplus"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("callme"),
                $("body").addClass("contact-mobile")
                 $("body").removeClass("snapcha")
        }),
        // $(".fa-facebook-square")mouseover(function(){
        // 	$(this).animate({color:'black'},1000)
        // }),
        // $(".facebook-personal-page").mouseover(function(){
        // 	$(".fb-personal-arrow").css("display","inline-block")
        // }),
        // $(".facebook-personal-page").mouseout(function(){
        // 	$(".fb-personal-arrow").css("display","none")
        // }),
        // $(".facebook-company-page").mouseover(function(){
        // 	$(".fb-company-arrow").css("display","inline-block")
        // }),
        // $(".facebook-company-page").mouseout(function(){
        // 	$(".fb-company-arrow").css("display","none")
        // }),
        // $(".youtube-personal-page").mouseover(function(){
        // 	$(".yt-personal-arrow").css("display","inline-block")
        // }),
        // $(".youtube-personal-page").mouseout(function(){
        // 	$(".yt-personal-arrow").css("display","none")
        // }),
        // $(".youtube-company-page").mouseover(function(){
        // 	$(".yt-company-arrow").css("display","inline-block")
        // }),
        // $(".youtube-company-page").mouseout(function(){
        // 	$(".yt-company-arrow").css("display","none")
        // }),
       
        $(".mail-arrow").click(function() {
            $(".mail-arrow").css("rotate", "180deg")
        }),
        $(".img-logo").click(function() {
            window.open("http://", "_blank")
        })
});

// fullscreen modal
$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});
