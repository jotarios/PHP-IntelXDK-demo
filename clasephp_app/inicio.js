
	function inicio()
	{
		$.ajax({
			async: false,
			url: "http://oscar.capunay.com/clasephp/lista.php",
			type: "GET",
			data: {  },
			error: function (data) { alert(data) },
			success: function(datos){
				//var data = JSON.parse(datos);
				console.log(datos);
				$( '#contenido' ).html(datos);
			}
		});
	}