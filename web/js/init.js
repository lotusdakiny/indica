$(function() {
	
	$("#form_p14_0").change(function() {
		$("#form_p14_0").each(function() {
			if($(this).is(":checked")){
				$("#p14texto").removeAttr('disabled');
			}	
		});
	});
	
	$("#form_p14_1").change(function() {
		$("#form_p14_1").each(function() {
			if($(this).is(":checked")){
				$("#p14texto").attr('disabled', 'true');
			}	
		});
	});

    var ano = (new Date).getFullYear();
    $("#fecha").text(ano);

    $('[data-toggle="tooltip"]').tooltip();

    $("button[type=reset]").click(function(event) {
        if (confirm('¿está seguro de que quiere borrar el formulario?')) {
            inputDisabled();
        }
    });

	/*$("div.form-group input[type=radio]").change(function(e, name) {
		var miname = $(this).prop('name');     
		$("input[name=" + miname + "]").each(function() {
			if($(this).is(":checked")){
				$(this).parent().siblings('input[type=text]').removeAttr('disabled');
				// console.log("checked");
			}else{
				$(this).parent().siblings('input[type=text]').attr('disabled', 'true').val('');
				// console.log("No checked");
			}
		});

	});*/
	
});

$(window).scroll(function() {

    var navbarColor = "255,255,255"; //color attr for rgba
    var smallLogoHeight = $('.small-logo').height();
    var bigLogoHeight = $('.big-logo').height();
    var navbarHeight = $('.navbar').height();
    if (navbarHeight > 50) {
        navbarHeight = 50;
    }

    var smallLogoEndPos = 0;
    var smallSpeed = (smallLogoHeight / bigLogoHeight);

    var ySmall = ($(window).scrollTop() * smallSpeed);
    var smallPadding = navbarHeight - ySmall;
    if (smallPadding > navbarHeight) {
        smallPadding = navbarHeight;
    }
    if (smallPadding < smallLogoEndPos) {
        smallPadding = smallLogoEndPos;
    }
    if (smallPadding < 0) {
        smallPadding = 0;
    }

    $('.small-logo-container ').css({
        "padding-top": smallPadding
    });

    var navOpacity = ySmall / smallLogoHeight;
    if (navOpacity > 1) {
        navOpacity = 1;
    }
    if (navOpacity < 0) {
        navOpacity = 0;
    }
    var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
    $('.navbar-fixed-top').css({
        "background-color": navBackColor
    });

    var shadowOpacity = navOpacity * 0.4;
    if (ySmall > 1) {
        $('.navbar-fixed-top').css({
            "box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"
        });
    } else {
        $('.navbar-fixed-top').css({
            "box-shadow": "none"
        });
    }

    var navbarBottomHeight = $('.footerWrapper').height();
    var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
    var fixedBottom = scrollBottom - navbarBottomHeight;
    if (fixedBottom <= 0) {
        $(".navbar-fixed-bottom").addClass('navbar-nofixed-bottom');
        $(".navbar-fixed-bottom > div").removeClass('container');
    } else {
        $(".navbar-fixed-bottom").removeClass('navbar-nofixed-bottom');
        $(".navbar-fixed-bottom > div").addClass('container');
    }

});
