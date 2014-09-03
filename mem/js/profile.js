var win,
	wrapper,
	body;

$(function() {
	
	win = $(window),
	wrapper = $("#wrapper");
	
	if(wrapper.find(".profile").length > 0) {
		initProfiles();
	}
	
});

function initProfiles() {
	var profiles = wrapper.find(".person"),
		btns = wrapper.find("button.profile"),
		con = wrapper.find(".profile.con");
				
	btns.click(function() {
		if($(this).hasClass("active")) return;
		
		var name = $(this).attr("data-person");
		btns.removeClass("active");
		$(this).addClass("active");
		nextProfile(name);
	});
	
	win.resize(function() {
		if(!con.hasClass("resized")) {
			con.addClass("resized");
		}
	});
	
	function nextProfile(name) {
		var cur = profiles.filter(".active");
		var next = profiles.filter("#" + name);
		
		next.css("display","block");
		TweenLite.to(cur, 0.4, {css:{autoAlpha:0}});
		con.removeClass("resized");
		TweenLite.to(con, 0.5, {css:{height:next.height()}, delay:0.4, onComplete:function() {
			cur.removeClass("active");
		}});
		TweenLite.to(next, 0.4, {css:{autoAlpha:1}, delay:0.9, onComplete:function() {
			next.addClass("active");
		}});
	}
}