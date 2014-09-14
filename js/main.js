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
		setFullScreen();
	}
	
	if($(".bg").length > 0) {
		initBg();
	}
	
	if(wrapper.find("#home .headline").length > 0) {
		setHomeHeadline();
	}

	if(wrapper.find(".popup").length > 0) {
		initPopup();
	}
	
	if(wrapper.find("#share").length > 0) {
		initShare();
	}
	
	if(body.find('input, textarea').length > 0) {
		initPlaceholderFallback();
	}
});

function initDatePicker() {
	wrapper.find(".date-pick").pickadate();
}

//Adjust padding of headline so that it does not sit over bg image
function setHomeHeadline() {
	var headline = wrapper.find("#home .headline");
	
	var w, h, 
		ratio = 2,
		limit = 1500;
	
	win.resize(function() {
		w = win.width();
		h = win.outerHeight(true);
		
		if(w/h >= ratio && w < limit) {
			headline.addClass("no-pad");
			return;
		}
		headline.removeClass("no-pad");
		
	}).resize();
}


//Init mobile sub menu button
function initSubNav() {
	var subBtn = wrapper.find("#subBtn"),
		subMenu = wrapper.find("#sub-nav");
		
	subBtn.click(function() {
		subBtn.toggleClass("open", !subMenu.hasClass("open"));
		subMenu.toggleClass("open", !subMenu.hasClass("open"));
	})
}

//Init main menu button
function initMainNav() {
	var menu = $("#main-nav-con"),
		btn = menu.find("#menuBtn");
		
	if(wrapper.find("#home .home-click").length > 0) {
		var homeTitle = wrapper.find("#home .home-click");
		
		homeTitle.css('cursor', 'pointer');
		homeTitle.click(function() {btn.trigger('click');});
	}
		
	btn.click(function() {
		btn.toggleClass("open", !btn.hasClass("open"));
		menu.toggleClass("open", !menu.hasClass("open"));
		body.toggleClass("menu-open", !body.hasClass("menu-open"));
	});
}

//Init share interface
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
		  $(api.element).on('click', '.email-link', function() {
			window.location.href = "mailto:?body=" + curUrl + "&subject=Imalia - "+document.getElementsByTagName("title")[0].innerHTML;
		  });
		  $(api.element).on('click', '.mfp-close', function() {
			$.magnificPopup.close();
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

//Init BG Stretcher
function initBg() {
	$(".bg").bgStretcher({
		images: [bnr[0]],
		imageWidth: bnr[1],
		imageHeight: bnr[2],
		anchoringImg: bnr[3]
	})
}

//Init Magnific Popup
function initPopup() {
	$('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true, //Allow opening popup on middle mouse click.
	  closeMarkup: '<button title="%title%" class="mfp-close"></button>'
	});
	
	$('.open-popup-link-iframe').magnificPopup({
		type: 'ajax',
		closeMarkup: '<button title="%title%" class="mfp-close"></button>',
		callbacks: {
			open: function() {
				
			}
		}
	});
}

//Offset full screen bg image container by the height of any adjacent elementa
function setFullScreen() {
	var fScreen = wrapper.find(".bg.fullscreen"),
		offElems = wrapper.find(".offset-h"),
		offH;
	
	win.resize(function() {
		
		var winH = win.height();
		offH = offElems.height();
		fScreen.css({
			height: winH-offH+"px",
		})
		
	}).resize();
}

function initPlaceholderFallback() {
	if ( !("placeholder" in document.createElement("input")) ) {
		$("input[placeholder], textarea[placeholder]").each(function() {
			var val = $(this).attr("placeholder");
			if ( this.value == "" ) {
				this.value = val;
			}
			$(this).focus(function() {
				if ( this.value == val ) {
					this.value = "";
				}
			}).blur(function() {
				if ( $.trim(this.value) == "" ) {
					this.value = val;
				}
			})
		});

		// Clear default placeholder values on form submit
		$('form').submit(function() {
			$(this).find("input[placeholder], textarea[placeholder]").each(function() {
				if ( this.value == $(this).attr("placeholder") ) {
					this.value = "";
				}
			});
		});
	}
}
