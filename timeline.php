<?php 
$title = "Timeline";
$nav = "timeline";
?>
<div class="container">
	<div id="timeline-embed">
	</div>
</div>

<!-- BEGIN TimelineJS -->
<script type="text/javascript" src="js/storyjs-embed.js"></script>
<script>
    $(document).ready(function() {
        createStoryJS({
            type:       'timeline',
            width:      '100%',
            height:     '650',
            source:     'example_json.json',
            embed_id:   'timeline-embed'
        });
    });
</script>
<!-- END TimelineJS -->