<?php 

/*
Template Name: Dúvidas
*/

get_header();
?>

	<main id="main">

        <section class="container-fluid banner-duvidas overflow-hidden" data-aos="fade">
            <div class="banner-duvidas-bg"></div>
            <div class="container d-flex align-items-center justify-content-center h-100">

                <div class="row">

                    <div class="col">
                        <h1 class="duvidas-title"> Dúvidas </h1>
                    </div>

                </div>

            </div>

        </section>

        <section data-aos="fade-up">
            <div class="container">
                <div class="row">

                    <div class="col-12 overflow-hidden" data-aos="fade-down">
                        <h1 class="abrir-mei-duvidas">Abrir MEI</h1>
                        <div class="accordion" id="accordion-duvidas">
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingOne">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            O que é o MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        O MEI surgiu em 2008 como uma alternativa simples criada pelo Governo para formalizar o pequeno empresário individual, tirando-os da informalidade e garantindo seus direitos de forma prática e sem burocracia. O MEI deve:
                                    </div>
                                    <div class="card-body color-969696">
                                        <ul>
                                            <li>Ter um faturamento limitado a R$ 81.000,00 por ano;</li>
                                            <li>Não participar como sócio, administrador ou titular de outra empresa;</li>
                                            <li>Contratar no máximo um empregado;</li>
                                            <li>
                                                <p class="m-0">Exercer uma das atividades econômicas previstas pela categoria (criar</p>
                                                <p>post no blog com a lista ou colocar link da resolução).</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingTwo">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Quais as vantagens de ser MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-duvidas">
                                    <div class="card-body color-969696">
                                        <ul>
                                            <li>Legalizar sua empresa sem burocracia e pagando pouco</li>
                                            <li>
                                                <p class="m-0">Ter um CNPJ e a possibilidade de obter opções especiais de crédito e </p>
                                                <p class="m-0">preços diferenciados com fornecedores</p>
                                            </li>
                                            <li>Poder emitir nota fiscal e vender por maquininha de cartão de crédito</li>
                                            <li>Ter direito aos benefícios previdenciários do INSS.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingTree">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                                            Quais as obrigações do MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        O MEI deve pagar mensalmente o simbólico do DAS (Documento de Arrecadação do Simples Nacional) e anualmente entregar a DASN-SIMEI (Declaração Anual de Faturamento).
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingfour">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Quem pode ser MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        O empreendedor maior de idade que se encaixe nas atividades permitidas pode ser um MEI. É impedido de se tornar MEI, quem:
                                    </div>
                                    <div class="card-body color-969696">
                                        <ul>
                                            <li>Servidores Públicos Federais em atividade;</li>
                                            <li>
                                                <p class="m-0">Servidores públicos estaduais e municipais devem observar os critérios da </p>
                                                <p class="m-0">respectiva legislação, que podem variar conforme estado ou município;</p>
                                            </li>
                                            <li>respectiva legislação, que podem variar conforme estado ou município;</li>
                                            <li>Estrangeiros com visto provisório.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingFive">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Quais as atividades permitidas para o MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        O MEI pode ser até 16 atividades cadastradas em sua empresa, sendo 1 atividade principal e outras 15 secundárias. Confira a lista completa de atividades permitidas aqui.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingSix">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Posso abrir um MEI com o nome sujo?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. Ter dívidas no SPC ou Serasa não é um impedimento para a formalização como MEI.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingSeven">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Posso abrir um MEI trabalhando de carteira assinada?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. O empregado que trabalha de carteira assinada em uma empresa privada também pode ser MEI.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingEight">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Como abrir o MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Abrir o MEI é rápido e descomplicado. Te ajudamos a resolver todo o processo com mais comodidade e segurança. Basta clicar aqui e preencher o formulário com seus dados e de seu negócio.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingNine">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Quanto custa ser MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Após a abertura do MEI, a única obrigação tributária é o pagamento mensal do DAS (Documento de Arrecadação do Simples Nacional). O valor aproximado é de 50 reais ao mês.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingTen">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Quanto tempo demorar para me tornar MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Em um prazo de 48 horas após preencher o seu cadastro e realizar o pagamento, você receberá o seu comprovante MEI em seu e-mail.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 overflow-hidden" data-aos="fade-down" >
                        <h1 class="alterar-mei-duvidas">Alterar MEI</h1>
                        <div class="accordion" id="accordion-alterar">
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingelEven">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseelEven" aria-expanded="false" aria-controls="collapseelEven">
                                            Posso alterar minha atividade MEI a qualquer momento?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseelEven" class="collapse" aria-labelledby="headingelEven" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. Depois de efetivada a abertura do seu MEI, você pode realizar a alteração de suas atividades econômicas (principal e secundárias) a qualquer momento.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingTwelve">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            Posso alterar outras informações do meu MEI além da atividade?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. As alterações permitidas são:
                                    </div>
                                    <div class="card-body color-969696">
                                        <ul>
                                            <li>Exclusão do título do estabelecimento (nome fantasia);</li>
                                            <li>Alteração do título do estabelecimento (nome fantasia);</li>
                                            <li>Alteração de endereço entre municípios dentro do mesmo estado;</li>
                                            <li>Alteração de endereço dentro do mesmo município;</li>
                                            <li>Alteração do telefone;</li>
                                            <li>Alteração do endereço de e-mail;</li>
                                            <li>Exclusão do endereço de e-mail;</li>
                                            <li>Alteração de atividades econômicas (principal e secundárias);</li>
                                            <li>Alteração do capital social;</li>
                                            <li>Alteração da forma de atuação.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingThirteen">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Posso transferir a sede do meu MEI para outro estado?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. O MEI com sede em uma unidade federativa pode fazer transferência para outra UF. No entanto, antes de efetuar a transferência de estado ou município, o MEI deve realizar uma consulta prévia para verificar se suas atividades possuem alguma exigência
                                        para o novo endereço. Neste momento, conte com o nosso auxílio!
                                        <p class="mt-2">
                                            Quanto ao número do CNPJ, não existe mudança de numeração, permanecendo o mesmo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingFourteen">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            Minha atividade foi excluída, como faço para alterar meu MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Caso sua atividade deixe de ser considerada permitida, é necessário efetuar o seu desenquadramento do sistema. Porém, uma outra opção é apenas mudar a sua atividade para alguma outra permitida. Neste caso, será feita de forma simples, a alteração para
                                        excluir a atividade anterior.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingFifteen">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            Posso alterar o nome do meu negócio MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        A razão social é o nome oficial da sua empresa e não pode ser mudado. Já o nome fantasia pela qual seu negócio MEI é conhecido, pode sim ser alterado.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 overflow-hidden" data-aos="fade-down">
                        <h1 class="cancelar-mei-duvidas">Cancelar MEI</h1>
                        <div class="accordion" id="accordion-cancelar">
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingSixteen">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                            Como requerer o cancelamento do meu negócio MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion-cancelar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                    Para cancelar o seu CNPJ MEI basta preencher o formulário corretamente e realizar o pagamento da taxa única. Após a confirmação do pagamento, em até 48 horas os documentos de cancelamento do seu MEI serão enviados por e-mail.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingSeventeen">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                            O MEI que cancelou seu CNPJ pode reabrir a mesma empresa depois de fechada?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordion-cancelar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                    Não. No entanto, o MEI poderá abrir uma nova empresa com outro CNPJ.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingEighteen">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                            O MEI com débitos mensais (DAS) e anuais (DASN-SIMEI) pode cancelar seu CNPJ?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordion-cancelar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        <p class="mb-0">
                                            Sim. Mesmo com débitos, o MEI pode dar baixa e pagar a dívida em nome da pessoa física. 
                                        </p>
                                        <p class="mt-2">
                                            A baixa do registro, sem quitação dos débitos, não impede que posteriormente sejam lançados ou cobrados do titular os impostos, contribuições e respectivas penalidades decorrentes da falta de recolhimento ou da prática comprovada e apurada em processo administrativo ou judicial de outras irregularidades praticadas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingNineteen">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                            Após o cancelamento do MEI é necessário entregar a Declaração de Extinção – DASN-SIMEI- Extinção?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion-cancelar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. No caso de extinção do MEI, a entrega da declaração deve ocorrer até o último dia do mês:
                                        <ul class="m-2" style="list-style: none;">
                                            <li>a)  <strong>De junho</strong>, na hipótese da extinção ocorrer entre janeiro e abril de cada ano;</li>
                                            <li>b)  Subsequente ao mês da extinção, quando a extinção ocorrer entre maio e dezembro de cada ano.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingTwenty">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                            Se o cancelamento do MEI for no último dia do mês, será preciso pagar o boleto que vencerá no mês subsequente?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion-cancelar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim, será necessário pagar o boleto (das) que vencerá no próximo mês.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingTwenty-one">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseTwenty-one" aria-expanded="false" aria-controls="collapseTwenty-one">
                                            Se o cancelamento do MEI foi no primeiro dia do mês é necessário pagar o boleto que vencerá no mesmo mês?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseTwenty-one" class="collapse" aria-labelledby="headingTwenty-one" data-parent="#accordion-cancelar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Sim. O MEI deve pagar o boleto que vence no mês seguinte.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 overflow-hidden" data-aos="fade-down">
                        <h1 class="alterar-mei-duvidas">Das</h1>
                        <div class="accordion" id="accordion-alterar">
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingDasOne">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDasOne" aria-expanded="false" aria-controls="collapseDasOne">
                                            O que é o DAS?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDasOne" class="collapse" aria-labelledby="headingDasOne" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        O DAS é o Documento de Arrecadação do Simples Nacional e deve ser pago mensalmente. É com esse documento que o MEI recolhe seus impostos.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingDasTwo">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDasTwo" aria-expanded="false" aria-controls="collapseDasTwo">
                                            Qual o valor do DAS?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDasTwo" class="collapse" aria-labelledby="headingDasTwo" data-parent="#accordion-alterar">
                                    <div class="card-body color-969696">
                                        <div class="card-body d-flex align-items-start flex-column color-969696">
                                            A contribuição do MEI em 2020 é de:
                                        </div>
                                        <table class="table-das">
                                            <thead>
                                                <tr>
                                                    <td>&nbsp;MEIs – Atividade</td>
                                                    <td>&nbsp;INSS - R$</td>
                                                    <td>&nbsp;ICMS/ISS - R$</td>
                                                    <td>&nbsp;Total - R$</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>&nbsp;Comércio e Industria - ICMS</td>
                                                    <td>&nbsp;52,25</td>
                                                    <td>&nbsp;1,00</td>
                                                    <td>&nbsp;53,25</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;Serviços - ISS</td>
                                                    <td>&nbsp;52,25</td>
                                                    <td>&nbsp;5,00</td>
                                                    <td>&nbsp;57,25</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;Comércio e Serviços - ICMS e ISS</td>
                                                    <td>&nbsp;52,25</td>
                                                    <td>&nbsp;6,00</td>
                                                    <td>&nbsp;58,25</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingDasTree">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDasTree" aria-expanded="false" aria-controls="collapseDasTree">
                                            Como e quando o MEI deve fazer o pagamento do DAS?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDasTree" class="collapse" aria-labelledby="headingDasTree" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Ao abrir o seu CNPJ MEI conosco, enviaremos todos os boletos do DAS referentes ao ano vigente. O vencimento ocorre sempre no dia 20 de cada mês e pode ser feito em lotéricas e qualquer outra unidade bancária.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingDasFour">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDasFour" aria-expanded="false" aria-controls="collapseDasFour">
                                            Se o MEI durante o ano alterar, incluir ou excluir atividades de seu registro, o valor do DAS? 
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDasFour" class="collapse" aria-labelledby="headingDasFour" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Não. A alteração, inclusão ou exclusão de atividades não altera o valor do DAS até o encerramento do ano, em Dezembro. Os novos valores começam a valer no próximo ano.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-yellow" id="headingFifteen">
                                    <span class="h2">
                                        <button class="btn btn-yellow-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            Atrasei o pagamento do DAS. Como proceder?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion-alterar">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        <p>
                                            Em caso de atraso, nos envie um e-mail <span><?php $target_email = get_theme_mod('set_link_email', 'contato@simplesmei.com');echo '<a href="mailto:' . $target_email . '" class="color-969696 font-weight-bold">' . $target_email . '</a>'?></span>, para que seja gerado um novo boleto com o valor atualizado. 
                                            Ressaltamos que o MEI pode ter seu CNPJ cancelado caso não haja o pagamento do DAS em 12 meses consecutivos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 overflow-hidden" data-aos="fade-down">
                        <h1 class="abrir-mei-duvidas">Declaração Anual</h1>
                        <div class="accordion" id="accordion-declaracao">
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingDeclaracaoOne">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDeclaracaoOne" aria-expanded="false" aria-controls="collapseDeclaracaoOne">
                                                O que é a Declaração Anual (DASN-SIMEI)?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDeclaracaoOne" class="collapse" aria-labelledby="headingDeclaracaoOne" data-parent="#accordion-declaracao">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        A Declaração Anual do Simples Nacional – Microempreendedor Individual (DASN-SIMEI), é uma declaração na qual o MEI informa o quanto faturou anualmente.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingDeclaracaoTwo">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDeclaracaoTwo" aria-expanded="false" aria-controls="collapseDeclaracaoTwo">
                                            Qual o prazo para entregar a Declaração Anual do MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDeclaracaoTwo" class="collapse" aria-labelledby="headingDeclaracaoTwo" data-parent="#accordion-declaracao">
                                    <div class="card-body color-969696">
                                        O prazo para o MEI entregar a Declaração Anual é entre 1º de janeiro e 31 de maio.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingDeclaracaoTree">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDeclaracaoTree" aria-expanded="false" aria-controls="collapseDeclaracaoTree">
                                            O que devo declarar?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDeclaracaoTree" class="collapse" aria-labelledby="headingDeclaracaoTree" data-parent="#accordion-declaracao">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        <ul>
                                            <li>A receita bruta obtida no ano-calendário anterior;</li>
                                            <li>
                                                A receita bruta total obtida no ano-calendário anterior relacionada a operações sujeitas a ICMS;
                                            </li>
                                            <li>As informações a respeito da contratação de funcionários (caso tenha ocorrido).</li>
                                            <li>Mesmo quando não há faturamento, o MEI é obrigado a entregar a Declaração Anual.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingDeclaracaofour">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseDeclaracaofour" aria-expanded="false" aria-controls="collapseDeclaracaofour">
                                            Como enviar a Declaração Anual do MEI?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseDeclaracaofour" class="collapse" aria-labelledby="headingDeclaracaofour" data-parent="#accordion-declaracao">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        Para entregar a Declaração Anual, o MEI deve acessar o site da Receita Federal ou do Portal do Empreendedor.
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparente mb-3">
                                <div class="card-header card-header-questions-blue" id="headingFive">
                                    <span class="h2">
                                        <button class="btn btn-blue-duvidas d-flex justify-content-between align-items-md-center align-items-start" 
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                O que acontece quando a Declaração Anual do MEI não é entregue dentro do prazo?
                                            <i class='bx bx-plus'></i>
                                            <i class='bx bx-minus'></i>
                                        </button>
                                    </span>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-duvidas">
                                    <div class="card-body d-flex align-items-start flex-column color-969696">
                                        O contribuinte que exceder o prazo de entrega estará sujeito a multa. Caso deixe de apresentar a Declaração nos dois últimos exercícios a DAS-SIMEI e estiver inadimplente com as suas contribuições mensais terá seu CNPJ MEI cancelado.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
		
<?php get_footer(); ?>