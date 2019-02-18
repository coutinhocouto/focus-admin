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

(function($, d) {
  jQuery.ajaxForm = function(options) {
    var form = {
      options: $.extend({
        formSelector: 'form[data-ajax="true"]',
        formRegion: 'main',
        headerSelector: '.site-header',
        errorMessage: "<strong>Error:</strong> We're sorry, but there has been a problem submitting your request. Please confirm all information and try again.",
        successMessage: '<strong>Success:</strong> Your request has been successfully submitted.',
        scrollPadding: 40
      }, options),
      
      $form: function() {
        return jQuery(form.options.formSelector, form.options.formRegion);
      },
      
      $invalid: function() {
        //console.log('getting invalid', $('input:invalid', form.$form()));
        return jQuery('input:invalid', form.$form());
      },

      init: function() {

        var $form = form.$form();
        jQuery('input[required]', $form).each(function(el) {
          form.setFieldWarning(this);
        }).on('keyup blur change', function(el){
          form.validateField(this);
        });
        
        form.toggleSubmitButtons();

        $form.on('click', '[type="submit"]', function(e) {
          e.preventDefault();

          form.toggleSubmitButtons();
          form.submit($(e.target).parents('form'));
          //form.validate($(e.target).parents('form'));
        });
      },

      submit: function(target) {
        var $form = jQuery(target), $alert = jQuery('.alert', $form), successMessage, errorMessage;
        
        successMessage = $alert.data('success-message') !== undefined ? $alert.data('success-message') : form.options.successMessage;
        errorMessage = $alert.data('error-message') !== undefined ? $alert.data('error-message') : form.options.errorMessage;
        
        $alert.addClass('alert-warning').removeClass('alert-success alert-danger hidden').attr('aria-hidden', 'false').attr('role', 'alert').html('<p><span class="glyphicon glyphicon-refresh spin-icon"></span> Submitting the form...</p>');
        
        jQuery.post($form.data('ajax-url'), $form.serialize(), function(result) {}, 'json')
          .done(function() {
            //console.log('form finished');
            $alert.addClass('alert-success').removeClass('alert-warning').html(successMessage);
          })
          .fail(function() {
            //console.log('form failed');
            $alert.addClass('alert-danger').removeClass('alert-warning').html(errorMessage);
            form.toggleSubmitButtons(true);
          });
      },

      /*validate: function(target) {
        var invalid = $('input:invalid', $(target));

        if (invalid.length < 0) {
          form.submit(target);
        } else {

          invalid.each(function() {
            form.setFieldInvalid(this);
          });

          var HeaderHeight = $(form.options.headerSelector).outerHeight();
          $('html body').scrollTop($(invalid[0]).offset().top - HeaderHeight - form.options.scrollPadding);
          $(invalid[0]).focus();
        }
      },*/
      
      validateField: function(target) {
        var $target = $(target), $invalid = form.$invalid();
        
        if ($target.is(':valid')) {
          form.setFieldValid(target);
        } else {
          form.setFieldInvalid(target);
        }
        
        //console.log($invalid);
        if ($invalid.length <= 0) {
          //console.log('toggle submit true');
          form.toggleSubmitButtons(true);
        } else {
          form.toggleSubmitButtons();
        }
      },

      setFieldValid: function(target) {
        //console.log('setting field valid', target);
        var $target = jQuery(target),
          $parent = $target.parents('.form-group'),
            $status = jQuery('span.sr-only', $parent),
            $icon = jQuery('span.glyphicon', $parent);
          //$status = $('<span class="sr-only">(success)</span>').attr('id', $target.attr('id') + '-status'),
          //$icon = $('<span class="glyphicon glyphicon-ok form-control-feedback aria-hidden="true"></span>');

        $parent
          .addClass('has-feedback has-success')
        .removeClass('has-error has-warning');
          //.append($icon)
          //.append($status);
        
        $status.html('(success)');
        $icon
          .addClass('glyphicon-ok')
        .removeClass('glyphicon-remove glyphicon-warning-sign');

        $target
          .attr('describedBy', $target.attr('id') + '-status');
      },

      setFieldWarning: function(target) {
        var $target = jQuery(target),
          $parent = $target.parents('.form-group'),
          $status = jQuery('<span class="sr-only">(warning)</span>').attr('id', $target.attr('id') + '-status'),
          $icon = jQuery('<span class="glyphicon glyphicon-warning-sign form-control-feedback aria-hidden="true"></span>');

        $parent
          .addClass('has-feedback has-warning')
          .append($icon)
          .append($status);

        $target
          .attr('describedBy', $target.attr('id') + '-status');
      },

      setFieldInvalid: function(target) {
        var $target = jQuery(target),
          $parent = $target.parents('.form-group'),
            $status = jQuery('span.sr-only', $parent),
            $icon = jQuery('span.glyphicon', $parent);
          //$status = $('<span class="sr-only">(error)</span>').attr('id', $target.attr('id') + '-status'),
          //$icon = $('<span class="glyphicon glyphicon-remove form-control-feedback aria-hidden="true"></span>');

        $parent
          .addClass('has-feedback has-error')
        .removeClass('has-warning has-success');
          //.append($icon)
          //.append($status);

        $status.html('(error)');
        $icon
        .addClass('glyphicon-remove')
        .removeClass('glyphicon-ok glyphicon-warning-sign');
        
        $target
          .attr('describedBy', $target.attr('id') + '-status');
      },
      
      toggleSubmitButtons: function(enable) {
        if (enable === undefined) {
          enable = false;
        }
        
        var $form = form.$form();
        
        if (enable) {
          jQuery('[type="submit"]', form.options.formSelector).removeAttr('disabled');
        } else {
          jQuery('[type="submit"]', form.options.formSelector).attr('disabled', 'disabled');
        }
      }
    };

    return {
      init: form.init()
    };
  };

  jQuery.spamCheck = function(options) {
    var spam = {
      options: $.extend({
        formSelector: 'form[data-spam="true"]',
        isHumanSelector: '#antiSpam_isHuman'
      }, options),

      init: function() {
        jQuery('.js-anti-spam').hide();
        jQuery(d).on('click.antiSpam', spam.isHuman).on("keypress.antiSpam", spam.isHuman);
      },

      isHuman: function() {
        //console.log('should set it true');
        jQuery(spam.options.isHumanSelector).val('true');
        jQuery(d).off('click.antiSpam').off('keypress.antiSpam');
      }
    };

    return {
      init: spam.init()
    };
  };

  jQuery(d).ready(function() {
    var spamCheck = new $.spamCheck(),
      ajaxForm = new $.ajaxForm();
  });
})(jQuery, document);

jQuery(document).ready(function($){
 
  
	$('.cep').mask('00000-000');
	$('.cpf').mask('000.000.000-00', {reverse: true});
	$('.date').mask('00/00/0000');
	$('.telefone').mask('(00) 0000-00000');
	$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
	$('.money').mask("#.##0,00", {reverse: true});
	
  
});