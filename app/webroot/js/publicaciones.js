var Publicacion ={
	guardar: function(){
		var formulario = $("#frmPublicacion");
		var url = formulario.attr('action');
		$.post (url, formulario.serialize(),function(result){
			console.log(result);
		});
	}	
}
var Autor = {
	guardarAutor: function(){
		var formulario = $("#frmAutor");
		var url = formulario.attr('action');
		$.post (url, formulario.serialize(),function(result){
			console.log(result);
		});
	}
}