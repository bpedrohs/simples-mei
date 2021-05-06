//  Initi AOS
AOS.init({
    duration: 1000
});

// Initi Owl Carousel
var owl = $('.owl-carousel');

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({});
});

$('.loop').owlCarousel({
    center: true,
    items: 1,
    dots: false,
    loop: true,
    responsive: {
        600: {
            items: 1
        }
    }
});

$('.arrowNextButton').click(function () {
    owl.trigger('next.owl.carousel');
})

$('.arrowPrevButton').click(function () {
    owl.trigger('prev.owl.carousel', [300]);
})

$('.myslider').owlCarousel({
    items: 1,
    nav: false,
    dots: true,
    dotsData: true,
});

paceOptions = {
    // Desativa a fonte de 'elementos'
    elements: false,

    // Mostra apenas o progresso na navegação de página regular e ajax-y,
    // nem todo pedido
    restartOnRequestAfter: false
}

$(document).ready(function(){
    
    if (typeof $('.woocommerce-error').offset() !== 'undefined') {
        var offset = 230;
        var altura = $('.woocommerce-error').offset().top;
        $('html, body').animate({
            scrollTop: altura - offset
        }, 1000);
    };

    // Checkout
    // Checkout Mask
    $(function () {
        $('.date').mask('00/00/0000');
        $('.title_voter').mask('000000000000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.rg').mask('000000000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {
            reverse: true
        });
        $('.clear-if-not-match').mask("00/00/0000", {
            clearIfNotMatch: true
        });

        $('.selectonfocus').mask("00/00/0000", {
            selectOnFocus: true
        });

        $('.cep_with_callback').mask('00000-000', {
            onComplete: function (cep) {
                console.log('Mask is done!:', cep);
            },
            onKeyPress: function (cep, event, currentField, options) {
                console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
            },
            onInvalid: function (val, e, field, invalid, options) {
                var error = invalid[0];
                console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
            }
        });

        $('.crazy_cep').mask('00000-000', {
            onKeyPress: function (cep, e, field, options) {
                var masks = ['00000-000', '0-00-00-00'];
                mask = (cep.length > 7) ? masks[1] : masks[0];
                $('.crazy_cep').mask(mask, options);
            }
        });

        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('.money').mask('#.##0,00', {
            reverse: true
        });

        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

        $('.celphones').mask(SPMaskBehavior, spOptions);

        $(".bt-mask-it").click(function () {
            $(".mask-on-div").mask("000.000.000-00");
            $(".mask-on-div").fadeOut(500).fadeIn(500)
        })

        $('pre').each(function (i, e) {
            hljs.highlightBlock(e)
        });

    });

    if (typeof $('#createaccount') !== 'undefined') {
        var createaccount = $("#createaccount");
        createaccount.attr("checked", true);
    }

    if (typeof $('#billing_phone') !== 'undefined') {
        var billing_phone = $("#billing_phone");
        billing_phone.addClass("celphones");
    }
    if (typeof $('#billing_cpf') !== 'undefined') {
        var billing_cpf = $("#billing_cpf");
        billing_cpf.addClass("cpf");
    }
    if (typeof $('#billing_postcode') !== 'undefined') {
        var billing_postcode = $("#billing_postcode");
        billing_postcode.addClass("cep");
    }
    if (typeof $('#billing_rg') !== 'undefined') {
        var billing_rg = $("#billing_rg");
        billing_rg.addClass("rg");
    }
    if (typeof $('#billing_number_title_voter') !== 'undefined') {
        var billing_number_title_voter = $("#billing_number_title_voter");
        billing_number_title_voter.addClass("title_voter");
    }
    if (typeof $('#billing_share_capital') !== 'undefined') {
        var billing_share_capital = $("#billing_share_capital");
        billing_share_capital.addClass("money");
    }

    if ((typeof($('#billing_uf_rg')) !== 'undefined')&&($('#billing_uf_rg') !== null)) {
        var billing_uf_rg = $("#billing_uf_rg");
        var billing_uf_rg_first = $("#billing_uf_rg option:first-child");
        billing_uf_rg_first.attr('data-placeholder', true);
        billing_uf_rg_first.attr('selected', false);
        billing_uf_rg.each(function () {
            const billing_uf_rg_var = new SlimSelect({
                select: '#billing_uf_rg',
                placeholder: 'Selecione uma ocupação',
                allowDeselect: true
            });
            billing_uf_rg_var.selected();
        });
    }

    if ((typeof($('#billing_social_occupation')) !== 'undefined')&&($('#billing_social_occupation') !== null)) {
        var billing_social_occupation = $("#billing_social_occupation");
        var billing_social_occupation_first = $("#billing_social_occupation option:first-child");
        billing_social_occupation_first.attr('data-placeholder', true);
        billing_social_occupation_first.attr('selected', false);
        billing_social_occupation.each(function () {
            const occupation_p = new SlimSelect({
                select: '#billing_social_occupation',
                placeholder: 'Selecione uma ocupação',
                allowDeselect: true
            });
            occupation_p.selected();
        });
        
    }

    if ((typeof($('#billing_secondary_occupation')) !== 'undefined')&&($('#billing_secondary_occupation') !== null)) {
        var billing_secondary_occupation_option_first = $("#billing_secondary_occupation option:first-child");
        var billing_secondary_occupation = $("#billing_secondary_occupation");
        billing_secondary_occupation.attr('multiple', 'multiple');
        billing_secondary_occupation_option_first.attr('data-placeholder', true);
        billing_secondary_occupation_option_first.attr('selected', false);
        billing_secondary_occupation.each(function () {
            const occupation_s = new SlimSelect({
                select: '#billing_secondary_occupation',
                limit: 15,
                placeholder: 'Selecione até 15 ocupações secundárias'
            });
            occupation_s.selected();
        });
        $('.ss-search input').attr('placeholder', 'Pesquisar');
    }

    if ((typeof($('#billing_state')) !== 'undefined')&&($('#billing_state') !== null)) {
        var billing_state = $("#billing_state");
        var billing_state_first = $("#billing_state option:first-child");
        billing_state_first.attr('data-placeholder', true);
        billing_state_first.attr('selected', false);
        billing_state.each(function () {
            const billing_state_var = new SlimSelect({
                select: '#billing_state',
                placeholder: 'Selecione uma ocupação',
                allowDeselect: true
            });
            billing_state_var.selected();
        });        
    }

    if ((typeof($('#billing_income_tax')) !== 'undefined')&&($('#billing_income_tax') !== null)) {
        var billing_income_tax = $("#billing_income_tax");
        var billing_income_tax_first = $("#billing_income_tax option:first-child");
        billing_income_tax_first.attr('data-placeholder', true);
        billing_income_tax_first.attr('selected', false);
        billing_income_tax.each(function () {
            const billing_income_tax_var = new SlimSelect({
                select: '#billing_income_tax',
                placeholder: 'Selecione uma ocupação',
                allowDeselect: true
            });
            billing_income_tax_var.selected();
        });
        
    }

    if ((typeof($('#billing_bank_account')) !== 'undefined')&&($('#billing_bank_account') !== null)) {
        var billing_bank_account = $("#billing_bank_account");
        var billing_bank_account_first = $("#billing_bank_account option:first-child");
        billing_bank_account_first.attr('data-placeholder', true);
        billing_bank_account_first.attr('selected', false);
        billing_bank_account.each(function () {
            const billing_bank_account_var = new SlimSelect({
                select: '#billing_bank_account',
                placeholder: 'Selecione uma ocupação',
                allowDeselect: true
            });
            billing_bank_account_var.selected();
        });
        
    }

    if ((typeof($('#billing_home_address')) !== 'undefined')&&($('#billing_home_address') !== null)) {
        var billing_home_address = $("#billing_home_address");
        var billing_home_address_first = $("#billing_home_address option:first-child");
        billing_home_address_first.attr('data-placeholder', true);
        billing_home_address_first.attr('selected', false);
        billing_home_address.each(function () {
            const billing_income_tax_var = new SlimSelect({
                select: '#billing_home_address',
                placeholder: 'Selecione uma ocupação',
                allowDeselect: true
            });
            billing_income_tax_var.selected();
        });        
    }

    // Pagar.me
    if (typeof $('#customer_details') !== 'undefined') {
        var customer_details = $("#customer_details");
        customer_details.append("<label class='text-label-pag col-12 pl-0'>Pagamento</label><span class='col-12'></span>");
    }

    function limpa_formulario_cep() {
        // Limpa valores do formulário de cep.
        $("#billing_address_1").val("");
        $("#billing_neighborhood").val("");
        $("#billing_city").val("");
        $("#select2-billing_state-container").val("");
        $("#select2-billing_state-container").html("");
        $("#select2-billing_state-container").prop("title", "");
    }

    //Quando o campo cep perde o foco.
    $("#billing_postcode").blur(function () {
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, "");

        //Verifica se campo cep possui valor informado.
        if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {
            //Loading
            $("body").loading({ stoppable: true });

            // Limpar formulário
            limpa_formulario_cep();

            //Consulta o webservice viacep.com.br/
            $.getJSON(
            "https://viacep.com.br/ws/" + cep + "/json/?callback=?",
            function (dados) {
                if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                $("#billing_address_1").val(dados.logradouro);
                $("#billing_neighborhood").val(dados.bairro);
                $("#billing_city").val(dados.localidade);
                $("#select2-billing_state-container").val(dados.uf);
                $("#select2-billing_state-container").html(dados.uf);
                $("#select2-billing_state-container").prop("title", dados.uf);
                } //end if.
                else {
                //CEP pesquisado não foi encontrado.
                limpa_formulario_cep();
                alert("CEP não encontrado.");
                }
            }
            );
        } //end if.
        else {
            //cep é inválido.
            limpa_formulario_cep();
            alert("Formato de CEP inválido.");
        }
        } //end if.
        else {
        //cep sem valor, limpa formulário.
        limpa_formulario_cep();
        }

        // stop loading
        $("body").loading("stop");
    });

    

});