<div id="home">
    <div class="wrap videoWrap">
       <iframe src="//player.vimeo.com/video/57732551"
       width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
       </iframe>
	    
		<div class="container homeText">
			<li class="active"><span>20 YEARS ON</span></li>
			<li><span>is a documentary multimedia partnership </span></li>
						
			<p>developed by the School of Communication at the <b>University of Miami</b>, the School of Journalism and Media Studies at <b>Rhodes University</b> and 
				students from around <b>South Africa</b> that focuses on life in the townships and informal settlements 
				as the country celebrates the 20th anniversary of the end of <b>Apartheid</b>. 
			</p>
			<p>The short-form first-person narratives cover issues related to housing, healthcare, poverty, employment, 
				and equality within these marginalized communities.
			</p>
		</div>		
    </div>
</div>  
<!--script>
    /*$('.homeText li').waypoint(function() {
        $(this).find('.active').removeClass('active');
        $(this).addClass('active');
    }, { offset: 100 });*/
    $('.homeText').waypoint(function() {
    	
  		console.log(videoH);
	}, {
  offset: function() {

    return -$(this).height();
  }
});
</script-->