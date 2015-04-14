
$(document).ready(
	function(){
		$('blockquote').click(
			function(){
				if($(this).is(":hidden")){
					$(this).show(4000);				
				}
				else{
					$(this).slideUp();			
				}
			});
	
	}

);