$(document).ready(function(){

	$( "#btn-nuevo-trabajador" ).click(function(event) {
		event.preventDefault();
		Swal.fire({
			// title: 'Se ha creado exitosamente el país',
			text: "Se ha creado nuevo trabajador con éxito",
			icon: 'success',
			showCancelButton: false,
			confirmButtonColor: '#3085d6',
		}).then((result) => {
			if (result.value) {
				$('#nuevo-trabajador').submit();
			}
		});
	});
	
});