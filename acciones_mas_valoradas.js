$(document).ready(
	function(){
		$('#panelRespuesta').hide(
			function(){
				$('#botonResponder').click(
					function(){
						$('#botonResponder').hide(
							function(){
								$('#panelRespuesta').show(
									function(){
										$('#botonOkRespuesta').click(
											function(){
												$('#botonOkRespuesta').remove();
													/*Hasta aqui funciona*//*Cuando le meto una funcion ya empieza a hacer cosas raras*/
													/*var adjuntarPanelRespuesta = $('<div/>',{
														'class' : 'jumbotron',
														'id' : 'botonResponder'							
													});
													function(){
														$('#panelRespuesta').append($adjuntarPanelRespuesta);
													}*/
													/*function(){
														$('#panelRespuesta').append('<div class ="jumbotron" id="botonResponder"><p><a class="btn btn-primary btn-lg" href="#" role="button">Responder</a></p></div>');
													}
													);*/
													/*Aquí se esta haciendo todo el lio*/
													
													/*function(){
														$('#principal').append(
															'<div class="panel-heading">
																<h3 class="panel-title">Respuesta de <a href="#">@paaaaaaaaaacoooooooo</a></h3>
															</div>
															<div class="panel-body">
																<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
																	<p>Esta es la respuestilla...</p>
															</div>
															'				
														);/*
														$('#principal').append(
															'<div class="jumbotron" id="botonResponder">
																<p><a class="btn btn-primary btn-lg" href="#" role="button">Responder</a></p>
															</div>
															'
														);			
													}*//*function despues de boton click*/
												/*);*//*boton hide OkRespuesta*/	
											}/*function despues de boton OKRespuesta*/	
										);/*boton click OkRespuesta*/		
									}/*function despues de botno show*/						
								);/*boton show*/
							}/*funcion despues de botonResponder*/	
						);/*botón hide*/
					}/*function despues de botonResponder*/		
				);/*boton responder click*/	
			}/*function despues de panelRespuesta*/		
		);/*panelRespuesta hide*/
	}
);