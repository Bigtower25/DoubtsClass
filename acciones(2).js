
$(document).ready(
	function(){
		$('blockquote').hover(
			function(){
				$(this).hide(2000,
				function(){
				$(this).show(4000,
				function(){});
				}
				);
			});
			/*function(){
				$(this).show("slow"),
			});*/
	}

);