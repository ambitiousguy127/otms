var sections 	= {},
		navLinks	=	{},
		navfixed = false,
		sectionMargins = {},
		header = {}
		submenu = $(".sub-menu");

$(function() {
  sections = $('.anchor');
	header = $('.header');
	sections.prevLink = {};
	sections.current = {};
	// //find nav links
	navLinks = $('.nav-links');
    $(".dropdown").hover(
        function(){ $(this).addClass('open') },
        function(){ $(this).removeClass('open') }
    );
		$('[data-toggle="popover1"]').popover({
		  html: true,
  		content: '<img src="/themes/otms/assets/img/qr-wechat.png" width="124" alt="" class="img-responsive">'
		});
		$('[data-toggle="popover2"]').popover({
		  html: true,
  		content: '<img src="/themes/otms/assets/img/qr-weibo.png" width="124" alt="" class="img-responsive">'
		});
		$('[data-toggle="popover3"]').popover({
		  html: true,
  		content: '<img src="/themes/otms/assets/img/qr-linkedin.png" width="124" alt="" class="img-responsive">'
		});


	$('.close-msg').on("click", function ( event ){
		event.preventDefault();
		$(this).parent().hide();
	});
});




$(window).on('scroll', function(){
	// sticky header
	scrollEvent();
  checkNavBar();
});


$('.sub-menu li a[href*=#]:not([href=#])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 800);
      return false;
    }
  }
});

var stickyNavTop;
if(submenu != null && submenu.offset()) {
	stickyNavTop = submenu.offset()['top'];
} else {
	stickyNavTop = Number.MAX_SAFE_INTEGER;
}

scrollEvent = function(){
	if ($(window).scrollTop()+submenu.height()*2 > stickyNavTop) {
		if(!submenu.hasClass('fixed')) {
			$('.sub-menu').addClass('fixed');
		}
	} else {
	    $('.sub-menu').removeClass('fixed');
	}
};

checkNavBar = function(){
	var found = false;
	if(sections == null || typeof sections.get !== 'function') return;
	$(sections.get().reverse()).each(function(index, value){
		if($(window).scrollTop() >= $(this)[0].offsetTop -10 && !found){
			var current = navLinks.eq(sections.index($(this)));
			found = true;

			if(sections.current[0] != current[0]){
				sections.current = current;

				current.addClass('active');
				if(sections.prevLink.length > 0){
					sections.prevLink.removeClass('active');
				}
				sections.prevLink = current;
			}
		}
	});
}

//# sourceMappingURL=main.js.map
