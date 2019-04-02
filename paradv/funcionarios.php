<?php include_once('header.php'); ?>

  <section>
    <div>
      <div class="row">
        <div class="col-lg-12 mx-auto text-center centralizado">

          <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'diretoria')" id="defaultOpen">Diretoria Executiva</button>
            <button class="tablinks" onclick="openCity(event, 'profissionais')">Profissionais</button>
            <button class="tablinks" onclick="openCity(event, 'parceiros')">Parceiros</button>
          </div>

          <div id="conteudo">
            <div id="diretoria" class="tabcontent customtab ">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Diretoria Executiva</h2>
              </div>

              <div class="container">
                <div class="card-deck funcionarios">
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Edson Ribeiro Viana</h3>
                      <p class="card-text">Presidente</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Lydia da Cruz Marques</h3>
                      <p class="card-text">Vice-Presidente</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Claudinéia Vojivoda Medeiros</h3>
                      <p class="card-text">1º Tesoureiro</p>
                    </div>
                  </div>
                </div>

                <div class="card-deck funcionarios">
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Akemi Kaneshiro Ogata</h3>
                      <p class="card-text">2º Tesoureiro</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Debora Morette da Silva Camargo</h3>
                      <p class="card-text">1ª Secretária</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Évelin Cristina dos Santos Fernandes</h3>
                      <p class="card-text">2ª Secretária</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="profissionais" class="tabcontent customtab">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Profissionais</h2>
              </div>

              <div class="container ">
                <div class="card-deck funcionarios">
                  <div class="card cartao ">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Maria Helena Palhares Viana</h3>
                      <p class="card-text">Coordenadora administrativa e educadora</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Lydia da Cruz Marques</h3>
                      <p class="card-text">Ortoptista e coordenadora técnica</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Alex Palhares Viana</h3>
                      <p class="card-text">Professor de educação física adaptada</p>
                    </div>
                  </div>
                </div>

                <div class="card-deck funcionarios">
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Bruna Rafaela de Batista</h3>
                      <p class="card-text">Mestre em educação especial</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Jaqueline Nogueira Viana</h3>
                      <p class="card-text">Psicóloga e psicopedagoga</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Évelin Cristina dos Santos Fernandes</h3>
                      <p class="card-text">Auxiliar administrativo</p>
                    </div>
                  </div>
                </div>

                <div class="card-deck funcionarios">
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Deise Cristina Cagnin Dias</h3>
                      <p class="card-text">Terapeuta ocupacional</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Maria José Oliveira de Moraes</h3>
                      <p class="card-text">Assistente social</p>
                    </div>
                  </div>
                  <div class="card cartao">
                    <img class="card-img-top" src="img/user.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h3 class="card-title">Elizabeth dos Santos</h3>
                      <p class="card-text">Profissional da limpeza</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="parceiros" class="tabcontent customtab">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Parceiros</h2>
              </div>

              <div class="container">
                <div class="row justify-content-lg-center">
                  <div class="col-lg-12">
                    <ul class="funcionarios">
                      <li class="lista">
                        <h4 class="card-text">Clínica de Oftalmologia Barbieri- Day Hospital</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-text">Secretaria Municipal de Assistência e Desenvolvimento Social de Araraquara</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">Secretaria de Educação da Prefeitura Municipal de Araraquara</h4>
                        <p class="card-text">Educação Especial e Transporte</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">COMCRIAR</h4>
                        <p class="card-text">Conselho Municipal dos Direitos da Criança e do Adolescente</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-text">Academia Raia 1</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">AFE</h4>
                        <p class="card-text">Associação Ferroviária de Esportes</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">CPB</h4>
                        <p class="card-text">Comitê Paralímpico Brasileiro</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-text">Assessoria Especial de Políticas Públicas para Pessoas com Deficiências</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">Curso de Terapia Ocupacional da UFSCar</h4>
                        <p class="card-text">Universidade Federal de São Carlos</p>
                      </li>
                      <li>
                        <h4 class="card-title">CEDIP</h4>
                        <p class="card-text">Centro de Diagnóstico e Intervenção Precoce da Prefeitura Municipal de Araraquara</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">Espaço Ser do Município de Araraquara</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">Fundação Dorina Nowill</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">LARAMARA</h4>
                        <p class="card-text">Associação Brasileira à Pessoa com Deficiência Visual</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">Secretaria de Educação da Prefeitura Municipal de Américo Brasiliense</h4>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">FUNDESPORT</h4>
                        <p class="card-text">Fundação de Amparo ao Esporte de Araraquara</p>
                      </li>
                      <li class="lista">
                        <h4 class="card-title">FPDC</h4>
                        <p class="card-text">Federação Paulista de Desporto para os Cegos</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
  </section>

  <?php include_once('footer.php'); ?>
