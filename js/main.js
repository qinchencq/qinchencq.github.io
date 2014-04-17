$(document).ready(function(){
//load active navigation style when page gets called.  
  $('#nav-main a').each(function() {
    var navHref = $(this).attr('title');
    var url = $(location).attr('search').substring(6);
    if (navHref  ===  url) {
      $(this).addClass('active');
    }
  });//end each nav active load
  
    var greenColor = "rgb(118, 194, 187)";
    var darkColor = "rgb(56, 61, 63)";
    var grayColor = "rgb(205, 206, 207)"


    $("#nav-main a").hover(
        function(){
            $(this).animate({color: darkColor},100);
            $(this).animate({backgroundColor:greenColor}, 400);
            
        },function(){
            $(this).animate({color: grayColor},100);
            $(this).animate({backgroundColor:darkColor}, 400);
            
        });
    $("#social li").hover(
        function(){
            $(this).animate({backgroundColor:grayColor}, 400);
        },function(){
            $(this).animate({backgroundColor:greenColor}, 400);
        });

//nav-main css for Firefox
    var navAnchor = $('#nav-main li a');
    var FF = !(window.mozInnerScreenX == null);
    if (FF) {
        if ($(window).width()>1024){
            navAnchor.css({'padding-top' : 17 + 'px', 
                           'padding-bottom' : 12 + 'px'
                       });
        }
    }else {
          if ($(window).width() > 1320)  {
            navAnchor.css({'padding-top' : 15 + 'px', 
                           'padding-bottom' : 13 + 'px'
                       });
          }else if ($(window).width()>1024 & $(window).width()<=1319){
            navAnchor.css({'padding-top' : 15 + 'px', 
                           'padding-bottom' : 15 + 'px'
                       });
          }   
    }
    //for resizing 
    $(window).resize(function(){
        if (FF) {
          if ($(window).width()>1024){
            navAnchor.css({'padding-top' : 17 + 'px', 
                           'padding-bottom' : 12 + 'px'
                       });
            }
        }else {
          if ($(window).width()>1320)  {
            navAnchor.css({'padding-top' : 15 + 'px', 
                           'padding-bottom' : 13 + 'px'
                       });
          }else if ($(window).width()>1024 & $(window).width()<=1319){
            navAnchor.css({'padding-top' : 15 + 'px', 
                           'padding-bottom' : 15 + 'px'
                       });
          }
        }

    });//end resize
//responsive nav
      var pull = $('#pull');
      pull.text('menu');
      menu = $('#nav-main ul');
      menuBg = $('#nav-main')
      menuHeight = menu.height;
	$(function(){
  		$(pull).on('click',function(e){
  			e.preventDefault();
  			menu.slideToggle();
        menuBg.slideToggle();
  		});//end slideToggle
	  });//end function
  
  if (pull.is(':visible')) {
    var url = $(location).attr('search').substring(6); 
    url = url.replace('_',' '); 
      var menuText = pull.text();  
      if (url === "home") {
        menuText = pull.text('menu');
      }else {
        //menuText = pull.empty();
        menuText = pull.text(url);
      }
  }
  // one clicked a page, auto slide up the menu; 
    /*
      var w = $(window).width();
      var hashValue = ['stories','feature_artist','1020yearson','timeline','protest_music','perspectives','about'];
      var currentElem;
      var url = $(location).attr('search').substring(6);
      //function autoSlide() {
        if( w <= 640 && menu.is(':visible')){ 
          for (i=0, l=hashValue.length; i<l; i++) {
            currentElem = hashValue[i];
              if (url && url === currentElem) {
                setTimeout(function() {
                       menu.slideUp('slow');
                       menuBg.slideUp('slow');
                  }, 1500);          
              }//end if 
          }//end for loop
        }*/
      //};
	$(window).resize(function(){
		var w = $(window).width();
		if (w >780 && menu.is(':hidden')){
			menu.removeAttr('style');
		} 
    // autoSlide();
    /*else if( w <= 640 && menu.is(':visible')){ 
        for (i=0, l=hashValue.length; i<l; i++) {
          currentElem = hashValue[i];
            if (url && url === currentElem) {
              setTimeout(function() {
                     menu.slideUp(1000);
                     menuBg.slideUp(1000);
                }, 2000);          
            }//end if 
        }//end for loop
      }*/
	});// end romove hidden display upon resizing
    
//Protest Music 
   $('#circle').each(function(){
        $(this).find('li').each(function(){
            //console.log($(this));
            var title = $(this).data('title');
            var des = $(this).data('description');
            var audio = $(this).data('music');
            var audio2 = $(this).data('musictwo');
            var interview = $(this).data('interview');

            var audioName = $(this).data('musicname');
            var audioName2 = $(this).data('musicnametwo')
            var interviewName = $(this).data('interviewname');
            
            if($(this).hasClass('roundabout-in-focus')) {
                $('#musicText').find('.musicTitle').html(title);
                $('#musicText').find('.musicDes').html(des);
                
                var source = '<span>'+ audioName +'</span><audio class="player1" src="./media/' + audio + '.mp3" preload="auto" >';
                source +=  '</audio>';
                $('.musicPlayer').html(source);

                if (audio2) {
                  var source3 = '<span>'+ audioName2 + ':</span><audio class="player2" src="./media/' + audio2 + '.mp3" preload="auto">';
                  source3 +=  '</audio>';
                  player.append(source3);
                }                         
                else if (interview) {
                  var source2 = '<span>'+ interviewName + ':</span><audio class="player2" src="./media/' + interview + '.mp3" preload="auto">';
                  source2 +=  '</audio>';
                  player.append(source2);
                }
            }
        });
    });//end each

//footer
var copyright = new Date();
var update= copyright.getFullYear();

$('body').append($("<div class='container footer'>©" +'  '+ update + ", University of Miami. </div>"));//end append;

});//end ready