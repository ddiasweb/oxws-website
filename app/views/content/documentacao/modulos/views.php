    <div class="row marketing">
      <div class="col-sm-12">

        <h4>Documentação Oxws - Módulos - Views</h4>
        <p>Versão 1.0.0</p>

        <h3>Views Oxws</h3>
        <p>Detalhamento da camada de apresentação</p>

        <h4>Template padrão</h4>
        <p>Caminho base dos views: "app/views"<br>Exemplo: "app/views/index.php"
          <pre>
&lt;?php
header('Content-Type: text/html; charset=UTF-8');
?&gt;&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;title&gt;Oxws PHP&lt;/title&gt;
    &lt;?php Views::render("common/css"); ?&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;?php Views::render("common/header"); ?&gt;
      &lt;?php Views::render("content"); ?&gt;
      &lt;?php Views::render('common/footer'); ?&gt;
    &lt;/div&gt;
    &lt;?php Views::render('common/js'); ?&gt;
  &lt;/body&gt;
&lt;/html&gt;
          </pre>
        </p>

        <h4>Conteúdo padrão</h4>
        <p>Caminho dos conteúdos do template: "/content"<br>Url: http://oxws.oxsys.com.br<br>Exemplo: "app/views/content/index.php"
          <pre>
&lt;div class="jumbotron"&gt;
  &lt;h1&gt;Oxws&lt;/h1&gt;
  &lt;p class="lead"&gt;Oxsys Websites&lt;/p&gt;
&lt;/div&gt;
&lt;div class="row marketing"&gt;
  &lt;div class="col-sm-6"&gt;
    &lt;h4&gt;Fácil de instalar&lt;/h4&gt;
    &lt;p&gt;Baixe o pacote e descompacte em um servidor http com suporte à php.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="col-sm-6"&gt;
    &lt;h4&gt;Rápido para customizar&lt;/h4&gt;
    &lt;p&gt;Modifique os arquivos do Oxws para adequar ao seu projeto.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
          </pre>
        </p>

        <h4>Conteúdo por URL</h4>
        <p>Caminho dos conteúdos do template: "/content"<br>Url: http://oxws.oxsys.com.br/sobre<br>Exemplo: "app/views/content/sobre.php"
          <pre>
&lt;div class="row marketing"&gt;
  &lt;div class="col-sm-6"&gt;
    &lt;h4&gt;O que é Oxws?&lt;/h4&gt;
    &lt;p&gt;Oxws, sigla para Oxsys Websites, é uma ferramenta que posibilita criar Websites e uma forma simples, rápida e eficiente.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="col-sm-6"&gt;
    &lt;h4&gt;História&lt;/h4&gt;
    &lt;p&gt;Oxws nasceu da necessidade de criar Websites rapidamente, atendendo desde funcionalidades simples como reutilização de blocos de html até integração com banco de dados.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
          </pre>
        </p>
      </div>

    </div>
