<div class="row marketing">
  <div class="col-sm-12">

    <h3>Servidor Lighttpd</h3>
    <p>Configuração de um servidor Lighttpd para Oxws</p>

    <h4>Configure o Lighttpd</a></h4>
    <p>Crie o nó $SERVER["socket"] em lighttpd.conf
      <pre>
$SERVER["socket"] == "0.0.0.0:80" {
  server.document-root = "<strong>/project_home/public</strong>"
  url.rewrite-if-not-file = ("^(.*)$" => "/index.php/$1")
}</pre>
    </p>

  </div>

</div>
