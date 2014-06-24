var win,
	wrapper,
	body;

$(function() {

	win = $(window),
	wrapper = $("#wrapper"),
	body = $("body");

	if($("#main-nav-con").length > 0) {
		initMainNav();
	}
	
	if(wrapper.find("#sub-nav").length > 0) {
		initSubNav();
	}
	
	if($(".fullscreen").length > 0) {
		//setFullScreen();
	}
	
	if($(".bg").length > 0) {
		initBg();
	}

	if(wrapper.find(".popup").length > 0) {
		initPopup();
	}
	
	if(wrapper.find("#share").length > 0) {
		initShare();
	}
	
});

function initSubNav() {
	var subBtn = wrapper.find("#subBtn"),
		subMenu = wrapper.find("#sub-nav");
		
	subBtn.click(function() {
		subBtn.toggleClass("open", !subMenu.hasClass("open"));
		subMenu.toggleClass("open", !subMenu.hasClass("open"));
	})
}


function initMainNav() {
	var menu = $("#main-nav-con"),
		btn = menu.find("#menuBtn");
		
	btn.click(function() {
		btn.toggleClass("open", !btn.hasClass("open"));
		menu.toggleClass("open", !menu.hasClass("open"));
		body.toggleClass("menu-open", !body.hasClass("menu-open"));
	});
}

function initShare() {
	var shareCon = wrapper.find('#share'),
		curUrl = getUrl();
		
	shareCon.sharrre({
		share: {
			twitter: true,
			facebook: true,
			linkedin: true
		},
		url: curUrl,
		enableHover: false,
		template:'<h2>Share</h2><ul><li><a class="linkedin" href=""><i class="fa fa-linkedin-square"></i></a></li><li><a href="" class="facebook"><i class="fa fa-facebook-square"></i></a></li><li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li><li><a class="email-link" href=""><i class="fa fa-envelope"></i></a></li></ul><h2>Copy Link</h2><input class="copy-link" type="text" value="'+ curUrl +'">',
		render: function(api, options){
		  $(api.element).on('click', '.twitter', function() {
			api.openPopup('twitter');
		  });
		  $(api.element).on('click', '.facebook', function() {
			api.openPopup('facebook');
		  });
		  $(api.element).on('click', '.linkedin', function() {
			api.openPopup('linkedin');
		  });
		  $(api.element).on('click', '.mfp-close', function() {
			$.magnificPopup.close();
		  });
		  $(api.element).on('click', '.email-link', function() {
			window.location.href = "mailto:?body=" + curUrl + "&subject=Imalia - "+document.getElementsByTagName("title")[0].innerHTML;
		  });
		}
	});
	
	//Select text when user focuses on 'copy link'
	var focusedElement;
	$(document).on('focus', 'input.copy-link', function () {
		if (focusedElement == $(this)) return; //already focused, return so user can now place cursor at specific point in input.
		focusedElement = $(this);
		setTimeout(function () { focusedElement.select(); }, 50); //select all text in any field on focus for easy re-entry. Delay sightly to allow focus to "stick" before selecting.
	});
	
	function getUrl() {
		return window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
	}
}

function initBg() {
	$(".bg").bgStretcher({
		images: [bnr[0]],
		imageWidth: bnr[1],
		imageHeight: bnr[2],
		anchoringImg: bnr[3]
	})
}

function initPopup() {
	$('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	  closeMarkup: '<button title="%title%" class="mfp-close"></button>'
	});
	
	$('.open-popup-link-iframe').magnificPopup({
		type: 'ajax',
		closeMarkup: '<button title="%title%" class="mfp-close"></button>'
	});
}

function setFullScreen() {
	var fScreen = $("body"),
		offElems = wrapper.find(".offset-h"),
		offH;
	
	win.resize(function() {
		
		var winH = win.height();
		offH = offElems.height();
		console.log(offH);
		fScreen.css({
			height: winH-offH+"px",
		})
		
	}).resize();
}
