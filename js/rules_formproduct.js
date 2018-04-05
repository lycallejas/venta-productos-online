
	$( document ).ready( function () {
         $.validator.addMethod("alfanumOespacio", function(value, element) {
          return /^[ a-z0-9áéíóúüñ]*$/i.test(value);
        }, "Ingrese sólo letras, números o espacios.");


			$( "#register_product" ).validate({
		rules: {
			"referencia": {
				required: true,
				alfanumOespacio: true
			},
			"nombre": {
				required: true,
				lettersonly: true
			},
			 "descripcion": {
				required: true,
				lettersonly: true,
				alfanumOespacio: true
			},
			 "tipo": {
				required: true,
				lettersonly: true,
				 alfanumOespacio: true
			}, 
			"material": {
				required: true,
				lettersonly: true,
				 alfanumOespacio: true
			},
			"dimension": {
				required: true
			},
			"color": {
				required: true,
				lettersonly: true,
			},
			"peso": {
				required: true,
				number:true,
			},
			"foto": {
				required: true,
				accept: "image/jpg,image/jpeg,image/png,image/gif"
			},
			"empresa": {
				required: true,
				lettersonly: true,
				alfanumOespacio: true
			},
			"precio": {
				required: true,
				number:true,
				maxlength:10
			},
			"unidades": {
				required: true,
				number:true,
				maxlength:4
			},
	
		},
		messages: {
			"referencia": {
				required: "Introduce una referencia.",
				lettersonly:"Ingrese solo letras"
		},
			"nombre": {
				required: "Introduce un nombre.",
				lettersonly:"Ingrese solo letras"
		},
			"descripcion": {
				required: "Introduce una descripcion.",
				lettersonly:"Ingrese solo letras",
				accept:"no utilice caracteres especiales"
		},
			"tipo" : {
				required: "Introduce un tipo de producto.",
				lettersonly:"Ingrese solo letras"
		},
		"material" : {
				required: "Introduce tipo de material.",
				lettersonly:"Ingrese solo letras"
		},
		"dimension" : {
				required: "Introduce  dimension del producto en cm."
		},
		"color" : {
				required: "Introduce un color del producto.",
				lettersonly:"Introduce solo letras"
		},
		"peso" : {
				required: "Introduce un peso en gramos del producto.",
				number:"Ingrese solo numeros"
		},
		"foto" : {
				required: "Introduce una imagen.",
				accept:"seleccione una imagen"
		},
		"empresa" : {
				required: "Introduce tipo de material.",
				lettersonly:"Ingrese solo letras"
		},
		"precio" : {
				required: "Introduce un precio.",
				number:"Ingrese solo numeros",
				maxlength:"no puede ser mas de 10 caracteres"
		},
		"unidades" : {
				required: "Introduce un precio.",
				number:"Ingrese solo numeros",
				maxlength:"no puede ser mas de 4 caracteres"
		}   
			
		}, 
		errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}	
			});


    	$( "#register_client" ).validate({
		rules: {
			"n_documento": {
				required: true,
				number:true,
				maxlength:10
			},
			"nombre": {
				required: true,
				alfanumOespacio: true
			},
			 "mobile": {
				required: true,
				number:true,
				maxlength:10
			},
			"direccion": {
				required: true
			},
			"ciudad": {
				required: true,
				lettersonly:true
			},
			"departamento": {
				required: true,
				lettersonly: true
			},
			"pais": {
				required: true,
				lettersonly:true
			},
			"profesion": {
				required: true,
				lettersonly:true
			},
			"email": {
				required: true,
				email:true
			},
	
		},
		messages: {
			"n_documento": {
				required: "Introduce un documento valido.",
				maxlength:"el documento no puede ser mas de 10 caracteres",
				number:"Ingrese solo numeros"
		},
			"nombre": {
				required: "Introduce un nombre."
		},
			"mobile": {
				required: "Introduce un numero movil.",
				number:"Ingrese solo numeros",
				maxlength:"no puede ser mas de 10 caracteres"
		},
		"direccion" : {
				required: "Introduce una direccion."
				
		},
		"ciudad" : {
				required: "Introduce  un nombre de una ciudad",
				lettersonly:"Ingrese solo letras"

		},
		"departamento" : {
				required: "Introduce un departamento.",
				lettersonly:"Introduce solo letras"
		},
		"pais" : {
				required: "Introduce un pais.",
				lettersonly:"Introduce solo letras"
		},
		"profesion" : {
				required: "Introduce un departamento.",
				lettersonly:"Introduce solo letras"
		},
		"email" : {
				required: "Introduce un email.",
				email:"Introduce un email valido"
		},
		

           
			
		}, 
		errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}	
			});









	});// cierra documento
	
