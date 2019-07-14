function limpa_formulário_cep() {
	// Limpa valores do formulário de cep.
	$("#nf-field-17").val("");
	$("#nf-field-22").val("");
	$("#nf-field-24").val("");
	$("#nf-field-25").val("");
}
jQuery(document).on('blur', "#cep1 input", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log1 input").val("...");
        jQuery("#bar1 input").val("...");
        jQuery("#loca1 input1").val("...");
        jQuery("#uf1 select").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log1 input").val(dados.logradouro);
            jQuery("#bar1 input").val(dados.bairro);
           	jQuery("#loca1 input").val(dados.localidade);
            jQuery("#uf1 select").val(dados.uf);
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
jQuery(document).on('blur', "#cep2 input", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log2 input").val("...");
        jQuery("#bar2 input").val("...");
        jQuery("#loca2 input").val("...");
        jQuery("#uf2 select").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log2 input").val(dados.logradouro);
            jQuery("#bar2 input").val(dados.bairro);
           	jQuery("#loca2 input").val(dados.localidade);
            jQuery("#uf2 select").val(dados.uf);
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
jQuery(document).on('blur', "#cep3 input", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log3 input").val("...");
        jQuery("#bar3 input").val("...");
        jQuery("#loca3 input").val("...");
        jQuery("#uf3 select").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log3 input").val(dados.logradouro);
            jQuery("#bar3 input").val(dados.bairro);
           	jQuery("#loca3 input").val(dados.localidade);
            jQuery("#uf3 select").val(dados.uf);
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
jQuery(document).on('blur', "#cep4 input", function () {

	//Nova variável "cep" somente com dígitos.
    var cep = jQuery(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        jQuery("#log4 input").val("...");
        jQuery("#bar4 input").val("...");
        jQuery("#loca4 input").val("...");
        jQuery("#uf4 select").val("...");

        //Consulta o webservice viacep.com.br/
        jQuery.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            jQuery("#log4 input").val(dados.logradouro);
            jQuery("#bar4 input").val(dados.bairro);
           	jQuery("#loca4 input").val(dados.localidade);
            jQuery("#uf4 select").val(dados.uf);
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
 	
	$('#listagem-table').DataTable({
		
		responsive: true,
		
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
	});
	
	$('#sub-anuncio option').hide();
	
	$('#sub-anuncio select option').each(function(){
      if (
        $(this).val() == 'Apartamento Padrão' || 
        $(this).val() == 'Cobertura' ||
        $(this).val() == 'Kitchenette/Conjugados' ||
        $(this).val() == 'Loft'
      ) {
          $(this).addClass('apartamento');
	  } else if (
        $(this).val() == 'Casa de Condomínio' || 
        $(this).val() == 'Casa de Vila' || 
        $(this).val() == 'Casa Padrão'
      ) {
          $(this).addClass('casa');
	  } else if (
        $(this).val() == 'Loteamento/Condomínio' ||
        $(this).val() == 'Terreno Padrão'
      ) {
          $(this).addClass('terreno');
	  } else if (
        $(this).val() == 'Flat/ApartHotel'
      ) {
          $(this).addClass('flat');
	  } else if (
        $(this).val() == 'Rural'
      ) {
          $(this).addClass('rural');
	  } else if (
        $(this).val() == 'Box/Garagem' || 
        $(this).val() == 'Casa Comercial' || 
        $(this).val() == 'Conjunto Comercial/Sala' || 
        $(this).val() == 'Galpão/Depósito/Armazém' || 
        $(this).val() == 'Hotel' || 
        $(this).val() == 'Indústria' || 
        $(this).val() == 'Loja Shopping/ Ct Comercial' || 
        $(this).val() == 'Loja/Salão' || 
        $(this).val() == 'Motel' || 
        $(this).val() == 'Pousada/Chalé' || 
        $(this).val() == 'Prédio Inteiro' || 
        $(this).val() == 'Studio')
      {
      	 $(this).addClass('comercial');
      }
	});
	
	$("#tipo-anuncio select").change(function(){			
		$("#sub-anuncio option").hide();
		
		console.log($(this).val());
		if ( $(this).val() === "Apartamento" ) { 
			$("#sub-anuncio .apartamento").show();
        } else if ( $(this).val() === "Casa" )  {
			$("#sub-anuncio .casa").show();
		} else if ( $(this).val() === "Terreno" )  {
			$("#sub-anuncio .terreno").show();
		} else if ( $(this).val() === "Flat/ApartHotel" )  {
			$("#sub-anuncio .flat").show();
		} else if ( $(this).val() === "Rural" )  {
			$("#sub-anuncio .rural").show();
		} else if ( $(this).val() === "Comercial/Industrial" )  {
			$("#sub-anuncio .comercial").show();
		}
		
	});

	$('.acf-tab-group').addClass('nav nav-tabs nav-justified');
	$('.acf-form-submit input, .acf-button').addClass('btn btn-primary');
	$('.acf-field--post-title label').html('Nome Completo <span class="acf-required">*</span><strong></strong>');
	
	$('#anuncio-status-change span').click(function() {
        $("#anuncio-status-change").submit();
    });


});

jQuery(window).load(function(){
  
  if(jQuery('#tipo-anuncio select option:checked').text() === "Apartamento" ) { 
    jQuery("#sub-anuncio .apartamento").show();
  } if(jQuery('#tipo-anuncio select option:checked').text() === "Casa" )  {
    jQuery("#sub-anuncio .casa").show();
  } if(jQuery('#tipo-anuncio select option:checked').text() === "Terreno" )  {
    jQuery("#sub-anuncio .terreno").show();
  } if(jQuery('#tipo-anuncio select option:checked').text() === "Flat/ApartHotel" )  {
    jQuery("#sub-anuncio .flat").show();
  } if(jQuery('#tipo-anuncio select option:checked').text() === "Comercial/Industrial" )  {
    jQuery("#sub-anuncio .comercial").show();
  }
	
});