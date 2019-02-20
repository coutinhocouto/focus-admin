function limpa_formulário_cep() {
	// Limpa valores do formulário de cep.
	$("#nf-field-17").val("");
	$("#nf-field-22").val("");
	$("#nf-field-24").val("");
	$("#nf-field-25").val("");
}
jQuery(document).on('blur', "#cep1", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log1").val("...");
        jQuery("#bar1").val("...");
        jQuery("#loca1").val("...");
        jQuery("#uf1").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log1").val(dados.logradouro);
            jQuery("#bar1").val(dados.bairro);
           	jQuery("#loca1").val(dados.localidade);
            jQuery("#uf1").val(dados.uf);
          } //end if.
          else {
            //CEP pesquisado não foi encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        });
      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }

});
jQuery(document).on('blur', "#cep2", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log2").val("...");
        jQuery("#bar2").val("...");
        jQuery("#loca2").val("...");
        jQuery("#uf2").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log2").val(dados.logradouro);
            jQuery("#bar2").val(dados.bairro);
           	jQuery("#loca2").val(dados.localidade);
            jQuery("#uf2").val(dados.uf);
          } //end if.
          else {
            //CEP pesquisado não foi encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        });
      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }

});
jQuery(document).on('blur', "#cep3", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log3").val("...");
        jQuery("#bar3").val("...");
        jQuery("#loca3").val("...");
        jQuery("#uf3").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log3").val(dados.logradouro);
            jQuery("#bar3").val(dados.bairro);
           	jQuery("#loca3").val(dados.localidade);
            jQuery("#uf3").val(dados.uf);
          } //end if.
          else {
            //CEP pesquisado não foi encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        });
      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }

});
jQuery(document).on('blur', "#cep4", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log4").val("...");
        jQuery("#bar4").val("...");
        jQuery("#loca4").val("...");
        jQuery("#uf4").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log4").val(dados.logradouro);
            jQuery("#bar4").val(dados.bairro);
           	jQuery("#loca4").val(dados.localidade);
            jQuery("#uf4").val(dados.uf);
          } //end if.
          else {
            //CEP pesquisado não foi encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        });
      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }

});

jQuery(document).ready(function($){
 
	$('.cep').mask('00000-000');
	$('.cpf').mask('000.000.000-00', {reverse: true});
	$('.date').mask('00/00/0000');
	$('.telefone').mask('(00) 0000-00000');
	$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
	$('.money').mask("#.##0,00", {reverse: true});
	
	$('#listagem-table').DataTable({
		"language": {
			  "sEmptyTable": "Ainda não existe nada para ser exibido!",
			  "sInfo": "Exibindo _START_ de _END_ do total de _TOTAL_",
			  "sInfoEmpty": "0 de 0 do total de 0",
			  "sInfoFiltered": "(filtrado de um total de _MAX_)",
			  "sInfoPostFix": "",
			  "sInfoThousands": ".",
			  "sLengthMenu": "_MENU_ resultados",
			  "sLoadingRecords": "Carregando...",
			  "sProcessing": "Processando...",
			  "sSearch": "Pesquisar",
			  "sZeroRecords": "Nada encontrado.",
			  "oPaginate": {
				"sFirst": "Primeiro",
				"sPrevious": "Anterior",
				"sNext": "Próximo",
				"sLast": "Último"
			  }
		},
		responsive: true
	});
	
  
});