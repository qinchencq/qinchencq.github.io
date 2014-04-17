    	<!--script start-->
		  <script src="js/vendor/jquery.js"></script>
		  <script src="js/foundation.min.js"></script>
			<script>
			  $(document).foundation();
			</script>
		  <script type="text/javascript" src="js/jqueryround.js"></script>
		  <script type="text/javascript" src="js/jquery.roundabout.min.js"></script>
		  <script type="text/javascript" src="js/jquery.roundabout-shapes.min.js"></script>
		  <script type="text/javascript" >
		   $(document).ready(function() {

		      $('ul#circle').roundabout({		      	
         			btnNext: ".next",
         			btnPrev: ".before",
         			shape: 'tearDrop',
         			responsive: true,
         			clickToFocus: true,
         			btnPrevCallback: function(){
         				
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
					                if (auido) {
					                var source = '<span>'+ audioName + ':</span><audio class="player1" src="./media/' + audio + '.mp3" preload="auto">';
					                source +=  '</audio>';
					                var player = $('.musicPlayer').html(source);
					                }
					                else if (audio2) {
					                	var source3 = '<span>'+ audioName2 + ':</span><audio class="player2" src="./media/' + audio2 + '.mp3" preload="auto">';
					                	source3 +=  '</audio>';
					                	player.append(source3);
					                }					                
					                else if (interview) {
					                	var source2 = '<span>'+ interviewName + ':</span><audio class="player2" src="./media/' + interview + '.mp3" preload="auto">';
					                	source2 +=  '</audio>';
					                	player.append(source2);
					                }
					                //load audio js
					                audiojs.events.ready(function() {
		    							var as = audiojs.createAll();
		  							});
					               
					            }
					        });
					    });//end each
         			},
         			btnNextCallback: function(){
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
					                
					                var source = '<span>'+ audioName + ':</span><audio class="player1" src="./media/' + audio + '.mp3" preload="auto">';
					                source +=  '</audio>';
					                var player = $('.musicPlayer').html(source);
					                
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
					                //load audio js
					                audiojs.events.ready(function() {
		    							var as = audiojs.createAll();
		  							});
					            }
					        });
					    });//end each
         			},         			         			
         			clickToFocusCallback: function(){
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
					                
					                var source = '<span>'+ audioName + ':</span><audio class="player1" src="./media/' + audio + '.mp3" preload="auto">';
					                source +=  '</audio>';
					                var player = $('.musicPlayer').html(source);
					                
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
					                //load audio js
					                audiojs.events.ready(function() {
		    							var as = audiojs.createAll();
		  							});
					            }
					        });
					    });//end each
         			}
         			
      		  });
		   });//end ready
		  </script>
		  <script type="text/javascript" src="js/jquery.ba-hashchange.js"></script>
		  <script type="text/javascript" src="js/jquery.fitvids.js"></script>		  
		  <script type="text/javascript" src="js/main.js"></script>		 
		  <script type="text/javascript" src="js/stories.js"></script>
		  <!--shadowbox-->
		  <script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
		  <script type="text/javascript" >
		  Shadowbox.init({ skipSetup: true });
	            Shadowbox.clearCache() 				
				Shadowbox.setup("a.slides", {
						continuous:false, 
	                    counterLimit:16, 
	                    counterType:"skip" 
	    		});//end shadow box setup
		  </script>
		  <script src="js/audiojs/audio.min.js"></script>
		  <script>
		  		audiojs.events.ready(function() {
		    		var as = audiojs.createAll();
		  		});
		  </script>

			  