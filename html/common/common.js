/**공통 스크립트**/

//IE 8 이하 html 5 태그생성 
document.createElement('header');
document.createElement('section');
document.createElement('nav');
document.createElement('article');
document.createElement('footer');

function moveScroll(obj){
	var nav = $('header nav');
	var menu = $('header .menu');
	var section = $('section.'+obj);
	var $top = section.offset().top;
	var emptyArea = $top + 20;
	nav.removeClass('open');
	nav.slideUp({
		duration:500,
		complete:function(){
			menu.removeClass('on');
			$('body,html').animate({
				scrollTop:emptyArea
			},{
				duration:1000,
				easing:'easeInOutExpo'
			});		
		}
	});
}

function moveTop(){
	$('body,html').animate({
		scrollTop:0
	},{
		duration:1000,
		easing:'easeInOutExpo'
	});	
}

function menuOn(){
	var nav = $('header nav');
	var menu = $('header .menu');
	if(nav.css('display') == 'block'){
		nav.slideUp({
			duration:500,
			complete:function(){
				menu.removeClass('on');
			}
		});
		nav.removeClass('open');
	}else{
		menu.addClass('on');
		nav.slideDown({
			duration:500,
			complete:function(){
				nav.addClass('open');
			}
		});
	}
}

//portfolio 상세보기
function detail_view(num){
	var List = $('.section03 .list li');	
	List.each(function(idx){
		var detailView = $('.section03 .detail > ul').eq(idx);
		var detailClose = $('.section03 .detail .btn_close');
		var bg_bk = $('.bg_black');
		var bk_h = bg_bk.height();
		if(num == idx){
			detailView.show();	
			bg_bk.fadeIn(300);
			detailClose.show();
			$('header').fadeOut(300);
			$('#layout').css({'height':bk_h,'overflow':'hidden'});
			detailView.stop().animate({scrollTop:0},10);
			detailView.children('.animated').removeClass('.ani-stop');
		}else{
			detailView.fadeOut(300);	
		}
	});
}

function detail_close(){
	$('.section03 .detail .detail_info').hide();	
	$('.bg_black').fadeOut(300);
	$('.section03 .detail .btn_close').hide();
	$('#layout').css({'height':'auto','overflow':'visible'});
	$('header').fadeIn(300);
	$('body,html').animate({scrollTop:$('.section03').offset().top},10);	
}

$(window).on('scroll',function(){
	var header =$('header');
	var footer =$('footer');
	var top =$('header .top');
	var $length = $('#wrapper section').length;
	var sect2 = $('.section02');
	var sect4 =$('.section04');
	var percent = sect4.find('.per span');

	if($(this).scrollTop() > 0){
		footer.css('display','block');
	}else{
		footer.css('display','none');	
	}

	if($(this).scrollTop() >= sect2.offset().top){
		header.addClass('fixed');
	}else{
		header.removeClass('fixed');
	}

	for(var i = 0 ; i < $length ; i++){
		var k = i + 1;
		var section = $('.section0'+k);
		var sectionTop = section.offset().top;
		if($(this).scrollTop() >= sectionTop){
			section.addClass('active');
			section.find('.animated').removeClass('ani-stop');
		}
	}

	if(sect4.hasClass('active') == true){
		TweenMax.to(percent.first(),2,{
			width:'80%',
			delay:1.4,
			ease: Power2.easeOut
		});
		TweenMax.to(percent.eq(1),2,{
			width:'80%',
			delay:1.5,
			ease: Power2.easeOut
		});	
		TweenMax.to(percent.eq(2),2,{
			width:'70%',
			delay:1.6,
			ease: Power2.easeOut
		});
		TweenMax.to(percent.eq(3),2,{
			width:'70%',
			delay:1.7,
			ease: Power2.easeOut
		});
		TweenMax.to(percent.eq(4),2,{
			width:'50%',
			delay:1.8,
			ease: Power2.easeOut
		});
	}
});