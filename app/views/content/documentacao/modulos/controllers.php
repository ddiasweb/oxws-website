<div class="row marketing">
  <div class="col-sm-12">

    <h4>Documentação Oxws - Módulos - Controllers</h4>
    <p>Versão 1.0.0</p>

    <h3>Controllers Oxws</h3>
    <p>Detalhamento da camada de negócio</p>

    <h4>Controller padrão</h4>
    <p>Caminho base dos controllers: "app/controllers"<br>Exemplo: "app/controllers/index.php"
      <pre>
&lt;?php
use Oxsys\Oxws\Views;
class IndexController {
  function indexAction() {
    Views::render();
  }
}
?&gt;
      </pre>
    </p>

    <h4>Controller por URL</h4>
    <p>Url: http://oxws.oxsys.com.br/exemplo<br>Exemplo: "app/views/controllers/exemplo.php"<br>Url: <a href="/exemplo">/exemplo</a>
      <pre>
&lt;?php
use Oxsys\Oxws\Views;
use Oxsys\Oxws\Helpers\Page;
use Oxsys\Oxws\Helpers\Data;
class ExemploController {
	function indexAction() {
		Page::set('Exemplo', '/');
		Data::set('content', 'Você está no controller "Exemplo"');
		Views::render('exemplo');
	}
	function acao1Action() {
		Page::set('Exemplo - Ação 1', 'acao1');
		Data::set('content', 'Você está na &lt;strong&gt;"ação 1"&lt;/strong&gt; do controller "Exemplo"');
		Views::render('exemplo');
	}
	function acao2Action() {
		Page::set('Exemplo - Ação 2', 'acao2');
		Data::set('content', 'Você está na &lt;strong&gt;"ação 2"&lt;/strong&gt; do controller "Exemplo"');
		Views::render('exemplo');
	}
}
?&gt;
      </pre>
    </p>
  </div>

</div>
