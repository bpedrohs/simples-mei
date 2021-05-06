<?php 

/*
Template Name: Form Abrir Mei
*/

get_header();
?>

    <main id="main">
        <section class="section-bg-yellow mb-5" data-aos="fade-up" date-aos-delay="200"></section>
        
        <div class="container" data-aos="fade-up" date-aos-delay="200">
            <form class="form-abrir-mei">

                <div class="form-group mb-5">
                    <label class="label-mei">preencha o formulário abaixo para abrir o seu cnpj mei</label>
                </div>
                <div class="form-group mb-4">
                    <label class="text-label-up">dados pessoais</label>
                    <hr class="hr-blue"></hr>
                    <label class="text-label-cp">Campos com * são obrigatórios.</label>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-lg-6 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Nome completo*" required>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <input type="email" name="" id="" class="form-control input-abrir-mei" placeholder="E-mail*" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-lg-6 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Telefone*" required>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="CPF*" required>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="RG">
                    </div>
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Orgão Expedidor RG">
                    </div>
                    <div class="col-xs-12 col-lg-4" style="height: 60px;">
                        <select class="form-control select-abrir-mei">
                            <option>UF RG</option>
                          </select>
                    </div>
                </div>
                <div class="form-group mb-5">
                    <label class="text-label-up">informações do mei</label>
                    <hr class="hr-blue"></hr>
                </div>
                <div class="form-group row mb-5">
                    <div class="col-xs-12 col-lg-6 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Nome da Fantasia do MEI*" required>
                    </div>
                    <div class="col-xs-12 col-lg-6  mb-3" style="height: 60px;">
                        <select class="form-control select-abrir-mei">
                            <option>Capital Social*</option>
                          </select>
                    </div>
                    <div class="col-12 mb-3" style="height: 60px;">
                        <select class="form-control select-abrir-mei">
                            <option>Escolha sua ocupação principal (opção 01)*</option>
                          </select>
                    </div>
                    <div class="col-12" style="height: 60px;">
                        <select class="form-control select-abrir-mei">
                            <option>Escolha até 15 ocupações secundárias (opcional)</option>
                          </select>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="text-label-up">Endereço comercial</label>
                    <hr class="hr-blue"></hr>
                    <label class="text-label-cp">Endereço no qual quer abrir o MEI</label>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="cep*" required>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <input type="email" name="" id="" class="form-control input-abrir-mei" placeholder="Rua*" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Número">
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <input type="email" name="" id="" class="form-control input-abrir-mei" placeholder="Complemento">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Bairo*" required>
                    </div>
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <input type="text" name="" id="" class="form-control input-abrir-mei" placeholder="Cidade*" required>
                    </div>
                    <div class="col-xs-12 col-lg-4" style="height: 60px;">
                        <select class="form-control select-abrir-mei">
                            <option>Estado*</option>
                          </select>
                    </div>
                </div>
                <div class="form-group  mb-5">
                    <label class="text-label-up">outras informações pessoais</label>
                    <hr class="hr-blue"></hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-3 tex-lg-left text-center">
                        <label class="color-B9B9B9 other-information-label mb-0">Declarou Imposto de Renda</label><br>
                        <label class="color-B9B9B9 other-information-label">nos 2 últimos anos?*</label>
                        <select class="form-control select-abrir-mei">
                            <option>Selecione</option>
                          </select>
                    </div>
                    <div class="col-xs-12 col-lg-3 tex-lg-left text-center">
                        <label class="color-B9B9B9 other-information-label mb-0">Número do Título de Eleitor</label><br>
                        <label class="color-B9B9B9 other-information-label">(apenas números)</label>
                        <input type="text" name="" id="" class="form-control input-abrir-mei">
                    </div>
                    <div class="col-xs-12 col-lg-3 tex-lg-left text-center">
                        <label class="color-B9B9B9 other-information-label mb-0">Possui conta bancária</label><br>
                        <label class="color-B9B9B9 other-information-label">ou internet banking?</label>
                        <select class="form-control select-abrir-mei">
                            <option>Selecione</option>
                          </select>
                    </div>
                    <div class="col-xs-12 col-lg-3 tex-lg-left text-center">
                        <label class="color-B9B9B9 other-information-label mb-0">Endereço residencial é</label><br>
                        <label class="color-B9B9B9 other-information-label">diferente do comercial?*</label>
                        <select class="form-control select-abrir-mei">
                            <option>Selecione</option>
                          </select>
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php get_footer(); ?>