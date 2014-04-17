<?php 
$title = 'Perspective';
$nav = 'Perspective';

?>
<div class="container wrap persWrap clearfix">

</div>
	<script type="text/javascript" src="http://20yearsonorg.tumblr.com/api/read/json"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	    // The variable "tumblr_api_read" is now set.
	    $.getScript("http://20yearsonorg.tumblr.com/api/read/json", function(script, textStatus, jqXHR) {
	    	for (var i=0;i<tumblr_api_read.posts.length;i++) {
	        var thisPost = tumblr_api_read.posts[i];
	        var type =thisPost["type"];
	        var title = thisPost.tags;
	        //photo post
	        var photo = thisPost["photo-url-500"];
	        var capPhoto = thisPost["photo-caption"];	        
	        //audio post
	        var audioPhoto = thisPost["audio-embed"]
	        var capAudio = thisPost["audio-caption"];
	        //video post
	        var video = thisPost["video-source"];
	        var capVideo = thisPost["video-caption"];
	        
	        //skeleton divs
	        var each = $('<div class="persEach"></div>'); 
	        var content = $('<div class="persCon"></div>');
	        var pad = $('<div class="large-12 columns persPad"><br/><br/></div>')
	       	var titleDiv = '<div class="title title-1">' + title + '</div>';
	       	//photo divs
	       	var photoDiv = '<div class="persMedia">' + '<img src=" ' + photo + ' "/>';
	       	var capPDiv = '<div class="persCap">' + capPhoto + '</div>';	       	
	       	//audio divs
	       	var audioPhotoDiv = '<div class="persMedia">' + audioPhoto + '</div>';
	       	var capADiv = '<div class="persCap">' + capAudio + '</div>';
	       	//video divs
	       	var videoDiv = '<div class="persMedia">' + video + '</div>';
	       	var capVDiv = '<div class="persCap">' + capVideo + '</div>';
				if (type === "photo") {
					var detailsPhoto = content.append(photoDiv).append(capPDiv);
					var innerWrapPhoto = each.append(titleDiv).append(detailsPhoto);
					$('.persWrap').append(innerWrapPhoto).append(pad); 
				/*}else if (type === "audio"){
					var detailsAudio = content.append(audioPhotoDiv).append(capADiv);
					var innerWrapAudio = each.append(titleDiv).append(detailsAudio);
					$('.persWrap').append(innerWrapAudio).append(pad); */
				}else if (type ==="video"){
					var detailsVideo = content.append(videoDiv).append(capVDiv);
					var innerWrapVideo = each.append(titleDiv).append(detailsVideo);
					$('.persWrap').append(innerWrapVideo).append(pad); 
					//$('.persWrap').append(titleDiv).append(videoDiv).append(capVDiv);
				}
	    	}  		
		});

	});
	</script>
<div class="container blogInfo aboutText">
	If you have similar work<br/>
	Please contact: whoever@whatever.com<br/>
	And visit : 20yearsonorg.tumblr.com<br/>

</div>