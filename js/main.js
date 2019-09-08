
$("#formContato").on("submit", function(e){
    e.preventDefault();
		
	var erros = 0;
		
	// verifica se ha campos vazios
	$("#formContato .input").each(function(){
		// conta erros
		$(this).val() == "" ? erros++ : "";	
	});
		
	// verifica se ha erros
	if(erros > 0 ){	 
        $(".alert").addClass("alert-danger");
        $(".alert").text("Por favor, preencha todos os campos");
		setTimeout(function () {
            $(".alert").removeClass("alert-danger");
            $(".alert").text("");
        }, 3000);		
    }else{
		//return true;	
        $(".alert").addClass("alert-primary");
        $(".alert").text("Mensagem enviada com sucesso!");
        setTimeout(function () {
            $(".alert").removeClass("alert-sucess");
            $(".alert").text("");
        }, 3000);
	}		
		
});

