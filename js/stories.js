$(document).ready(function () {
    
    //load the specific when access with specific #value
    var store = window.location.hash.substr(1);
    if (store) {
      getstory(store);
    };

    //hashchange 
    $(window).hashchange( function(){
      // Alerts every time the hash changes!
        getstory(location.hash.substr(1));
    })
    // Trigger the event (useful on page load).
    $(window).hashchange();

    //set the content div   
    var expander = $('<div class="large-12 columns storyExpander"></div>');   

    $('a[href=' + window.location.hash + ']').parent('.storyEach').addClass('selected');
    
    $('.storyEach a').click(function () {      

      var hash = $(this).attr("title");
      //console.log(hash);      
      //var hashhistory = '#' + hash; 

      $('.storyEach').removeClass('selected');
      
      $(this).parent('.storyEach').addClass('selected');

      if ($(this).parent('.storyEach').next().hasClass('storyExpander')) {
          $('.storyExpander').toggle("slide");
      } else {
          expander.insertAfter($(this).parent('.storyEach')).css('display', 'block');
      }
      
      $('html, body').animate({
        scrollTop:expander.position().top - $('#nav').height()
      },400);

      getstory(hash);

      }); 
  
    
  function getstory(hash) {

    var data2 = 'story=' + hash;  
    //console.log(data2); 
    
    $.ajax({
      url: "php/load_story.php",  
      type: "GET",    
      data: data2,   
      cache: false,
      success: function (html) {                

        expander.insertAfter('.selected').css('display','block');

        $('html, body').animate({
          scrollTop:expander.position().top - $('#nav').height()
        },400);

        $('.storyExpander').html(html);
        //display the body with an slidedown effect 

        //close button
        $('.storyWrap').on('click', '.close', function() {
          $('.videoWrap').animate({opacity: 0}, 200, function() {
            $('.storyExpander').animate ({ 
              height:"hide",opacity:"hide" },1000,function(){
                $('html, body').animate({
                  scrollTop:0
                }, 400);
                window.location.hash = '';
                expander.remove();
                $('.storyEach').removeClass('selected');
              return false;
            });
          });//end animate
        });//end on 

        //load responsive video
        $(".videoWrap").fitVids();
    
      }//end success   
    });//end ajax
  }//end get story


});//end ready
