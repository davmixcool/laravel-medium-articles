<script src='https://embed.mediumable.io/widget'></script>
@php

	$renderTo = !empty($renderTo)? $renderTo : config('medium.renderTo');

	$wid = !empty($wid)? $wid : config('medium.wid');

	$username = !empty($username)? $username : config('medium.username');



	$layout = !empty($layout['type'])? $layout['type'] : config('medium.layout.type');

	$limit = !empty($layout['limit'])? $layout['limit'] : config('medium.layout.limit');

	$postsPerLine = !empty($layout['column'])? $layout['column'] : config('medium.layout.column');

	$loadMore = !empty($layout['pagination'])? $layout['pagination'] : config('medium.layout.pagination');

	$loadMoreText = !empty($layout['pagination_text'])? $layout['pagination_text'] : config('medium.layout.pagination_text');

	$ratio = !empty($layout['ratio'])? $layout['ratio'] : config('medium.layout.ratio');

	$picture = !empty($layout['size'])? $layout['size'] : config('medium.layout.size');


	
	$title = !empty($elements['title'])? $elements['title'] : config('medium.elements.title');

	$description = !empty($elements['description'])? $elements['description'] : config('medium.elements.description');

	$author = !empty($elements['author'])? $elements['author'] : config('medium.elements.author');

	$claps = !empty($elements['claps'])? $elements['claps'] : config('medium.elements.claps');

	$fans = !empty($elements['fans'])? $elements['fans'] : config('medium.elements.fans');

	$read_duration = !empty($elements['read_duration'])? $elements['read_duration'] : config('medium.elements.read_duration');

	$pubDate = !empty($elements['pubDate'])? $elements['pubDate'] : config('medium.elements.pubDate');



	$postStyle = !empty($target['value'])? $target['value'] : config('medium.target.value');

	$capture_type = !empty($target['capture']['type'])? $target['capture']['type'] : config('medium.target.capture.type');

	$capture_style = !empty($target['capture']['style'])? $target['capture']['style'] : config('medium.target.capture.style');

	$capture_email = !empty($target['capture']['email'])? $target['capture']['email'] : config('medium.target.capture.email');

	$capture_name = !empty($target['capture']['name'])? $target['capture']['name'] : config('medium.target.capture.name');

	$capture_phone = !empty($target['capture']['phone'])? $target['capture']['phone'] : config('medium.target.capture.phone');

	$capture_message = !empty($target['capture']['message'])? $target['capture']['message'] : config('medium.target.capture.message');

	$capture_button_text = !empty($target['capture']['button_text'])? $target['capture']['button_text'] : config('medium.target.capture.button_text');

	$capture_webhook_url = !empty($target['capture']['webhook_url'])? $target['capture']['webhook_url'] : config('medium.target.capture.webhook_url');

	$capture_webhook_status = !empty($target['capture']['webhook_status'])? $target['capture']['webhook_status'] : config('medium.target.capture.webhook_status');


@endphp
<div id="laravel-medium-widget"></div>
<script>
	setTimeout(function() {
		Mediumable.Init({ 
		    renderTo: "#{{ $renderTo }}",
		    wid: "{{ $wid }}",
		    username: "{{ $username }}",
		    postsPerLine: "{{ $postsPerLine }}",
		    limit: "{{ $limit }}",
		    layout: "{{ $layout }}",
		    postStyle: "{{ $postStyle }}",
		    loadMore: "{{ $loadMore }}",
		    loadMoreText: "{{ $loadMoreText }}",
		    picture: "{{ $picture ?? '' }}",
		    ratio: "{{ $ratio }}",
		    elements: {
		    	"title":"{{ $title }}",
		    	"description":"{{ $description }}",
		    	"author":"{{ $author }}",
		    	"claps":"{{ $claps }}",
		    	"fans":"{{ $fans }}",
		    	"read_duration":"{{ $read_duration }}",
		    	"pubDate":"{{ $pubDate }}",
		    	"branding":"off"
		    },
		    capture: {
		    	"type":"{{ $capture_type }}",
		    	"style":"{{ $capture_style }}",
		    	"email":"{{ $capture_email }}",
		    	"name":"{{ $capture_name }}",
		    	"phone":"{{ $capture_phone }}",
		    	"message":"{{ $capture_message }}",
		    	"button_text":"{{ $capture_button_text }}",
		    	"webhook_url":"{{ $capture_webhook_url }}",
		    	"placeholder":"example@domain.com",
		    	"success_message":"Thank you!",
		    	"button_animation":"",
		    	"webhook_status": "{{ $capture_webhook_status }}"
		    }
		});
	}, 2000);
</script>