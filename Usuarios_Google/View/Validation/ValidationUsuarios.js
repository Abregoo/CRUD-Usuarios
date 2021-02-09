$(".btnEliminar").click(function() {
	var i = 0;
	var lista = new Array();
	var idusuarios = $(this).data("idusuarios");

	$(this).parents("tr").find("td").each(function() {
		lista[i] = $(this).html();
		console.log(lista[i]);
		i++;
	});

	$("#idUsuarios_e").val(idusuarios);
	$("#usuarios_nombres_e").val(lista[1]);
	$("#usuarios_apellidos_e").val(lista[2]);
	$("#usuarios_fecha_nacimiento_e").val(lista[3]);
});

$(".btnModificar").click(function() {
	var i = 0;
	var lista = new Array();
	var idusuarios = $(this).data("idusuarios");

	$(this).parents("tr").find("td").each(function() {
		lista[i] = $(this).html();
		console.log(lista[i]);
		i++;
	});

	$("#idUsuarios_m").val(idusuarios);
	$("#usuarios_nombres_m").val(lista[1]);
	$("#usuarios_apellidos_m").val(lista[2]);
	$("#usuarios_fecha_nacimiento_m").val(lista[3]);
});