$(document).ready(function() {
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
        data = {
          FNAME: n,
          MMERGE2: p,
          EMAIL: e,
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
                $("body").removeClass("twitter"),
                $("body").removeClass("instagram"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").removeClass("facebook")
        }),
        $(".facebook-logo, .facebook-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#3b5998"),
                $("body").removeClass("twitter"),
                $("body").removeClass("instagram"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").addClass("facebook"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".twitter-logo, .twitter-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#4698FE"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").addClass("twitter"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".instagram-logo, .instagram-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#c32aa3"),
                $("body").removeClass("facebook"),
                $("body").removeClass("linkedin"),
                $("body").addClass("instagram"),
                $("body").removeClass("gplus"),
                $("body").removeClass("youtube"),
                $("body").removeClass("twitter"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".linkedin-logo, .linkedin-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#007bb6"),
                $("body").addClass("linkedin"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("youtube"),
                $("body").removeClass("gplus"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".gplus-logo, .gplus-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#df4a32"),
                $("body").addClass("gplus"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("youtube"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".youtube-logo, .youtube-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#cd201f"),
                $("body").addClass("youtube"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("gplus"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".callme-logo-mobile, .video-logo").mouseover(function() {
            $(".mask").css("background-color", "#28e270"),
                $("body").removeClass("youtube"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("gplus"),
                $("body").removeClass("linkedin"),
                $("body").addClass("callme"),
                $("body").removeClass("contact-mobile")
        }),
        $(".contact-logo-mobile").mouseover(function() {
            $(".mask").css("background-color", "#f9e440"),
                $("body").removeClass("youtube"),
                $("body").removeClass("facebook"),
                $("body").removeClass("instagram"),
                $("body").removeClass("twitter"),
                $("body").removeClass("gplus"),
                $("body").removeClass("linkedin"),
                $("body").removeClass("callme"),
                $("body").addClass("contact-mobile")
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
        $(".facebook-personal-page").click(function() {
            window.open("https://www.facebook.com/luis.izquierdo1", "_blank")
        }),
        $(".facebook-company-page").click(function() {
            window.open("https://", "_blank")
        }),
        $(".go-twitter").click(function() {
            window.open("https://twitter.com/luis08091968", "_blank")
        }),
        $(".go-instagram").click(function() {
            window.open("https://www.instagram.com/izbroker24", "_blank")
        }),
        $(".go-linkedin").click(function() {
              window.open("https://www.linkedin.com/in/luis-izquierdo-792a47b/", "_blank")
        }),
        $(".go-googleplus").click(function() {
            window.open("https://plus.google.com/u/0/100145083418951160733", "_blank")
        }),
        $(".youtube-personal-page").click(function() {
            window.open("https://", "_blank")
        }),
        $(".youtube-company-page").click(function() {
            window.open("https://www.youtube.com/channel/UChJbTbVy5HCxUyUHKRMlSPw", "_blank")
        }),
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
