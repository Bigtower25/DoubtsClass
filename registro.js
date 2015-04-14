<!--script para la validación del formulario-->
		var nombreU,nombre,apellido1,apellido2,email;
		var emailR, contrasenia, ciudad, fechaDN;
		<!--aceptarTyC;
		function iniciar(){
			nombreU = document.getElementById("nombreU");
			nombre = document.getElementById("nombre");
			apellido1 = document.getElementById("apellido1");
			apellido2 = document.getElementById("apellido2");
			email = document.getElementById("email");
			emailR = document.getElementById("emailR");
			contrasenia = document.getElementById("contrasenia");
			ciudad = document.getElementById("ciudad");
			fechaDN = document.getElementById("fechaDN");
			aceptarTyC = document.getElementByID("aceptarTyC");
			<!--Esto creo que no lo deberia de meter aqui-->
			<!--Esta constantemente comprobando si es correcto o no-->
			nombreU.addEventListener("change",validacion);
			nombre.addEventListener("change",validacion);
			apellido1.addEventListener("change",validacion);
			apellido2.addEventListener("change",validacion);
			email.addEventListener("change",validacion);
			emailR.addEventListener("change",validacion);
			contrasenia.addEventListener("change",validacion);
			ciudad.addEventListener("change",validacion);
			fechaDN.addEventListener("change",validacion);
			aceptarTyC.addEventListener("click",validacion);
			<!--validacion();-->
		}
		function validacion(){
			if(nombreU.value == ''){
				nombreU.setCustomValidity('Ingrese un nombre de usuario');
				nombreU.style.background = '#FFDDDD';
			}
			if(nombreU.value[0] != '@'){
				nombreU.setCustomValidity('Ingrese un nombre de usuario comenzando por @');
				nombreU.style.background = '#FFDDDD';
				
			}
			if(apellido1.value == ''){
				apellido1.setCustomValidity('Ingrese el primer apellido');
				apellido1.style.background = '#FFDDDD';	
			}
			if(apellido2.value == ''){
				apellido1.setCustomValidity('Ingrese el segundo apellido');
				apellido1.style.background = '#FFDDDD';	
			}
			if(email.value == ''){
				email.setCustomValidity('Ingrese una dirección de correo electrónico');
				email.style.background = '#FFDDDD';
				alert('Ingrese una direccion de correo electrónico');		
			}
			if(email.validity.typeMismatch){
				alert('El formato de la dirección de correo es incorrecta');
			}
			if(emailR.value == ''){
				emailR.setCustomValidity('Repita su correo electrónico');
				emailR.style.background = '#FFDDDD';
				alert('Repita su correo electrónico');		
			}
			if(contrasenia.value == ''){
				contrasenia.setCustomValidity('Ingrese una contrasenia');
				contrasenia.style.background = '#FFDDDD';
				alert('Ingrese una contrasenia');		
			}
			if(contrasenia.length < 8){
				alert('La contrasenia tiene que medir mas de 8 caracteres');
			}
			if(ciudad.value == ''){
				ciudad.setCustomValidity('Ingrese su ciudad de residencia');
				ciudad.style.background = '#FFDDDD';
				alert('Ingrese su ciudad de residencia');		
			}
			if(fechaDN.value == ''){
				fechaDN.setCustomValidity('Ingrese su fecha de nacimiento');
				fechaDN.style.background = '#FFDDDD';
				alert('Ingrese la fecha de nacimiento');		
			}
			if(!aceptarTyC.checked){
				aceptarTyC.setCustomValidity('Acepte los terminos y condiciones');
				aceptarTyC.style.background = '#FFDDDD';
				alert('Es necesario que acepte los términos y condiciones');
				return false;
			}			
		}
		addEventListener("load",iniciar);
		addEventListener("change",validacion);
		<!--document.getElementById("pinchable").onclick = validacion;-->