$(document).ready(function(){
	$( "#btn-nueva-ot" ).click(function(event) {
		event.preventDefault();
		Swal.fire({
			// title: 'Se ha creado exitosamente el país',
			text: "Se ha creado nueva orden de trabajo con éxito",
			icon: 'success',
			showCancelButton: false,
			confirmButtonColor: '#3085d6',
		}).then((result) => {
			if (result.value) {
				$('#nueva-ot').submit();
			}
		});
	});
});