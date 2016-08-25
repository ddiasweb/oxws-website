    <div class="row marketing">
      <div class="col-sm-12">

        <h4>Instruções de instalação</h4>
        <p>Antes de instalar o Oxws você precisa instalar o <a href="http://php.net/manual/pt_BR/install.php">php</a> e o <a href="https://getcomposer.org/doc/00-intro.md">composer</a>.</p>

        <h3>1 - Instale</h3>

        <h4>Para instalação do Website reutilizável do Oxws, execute:</h4>
        <pre>
$ composer create-project oxsys/oxws-website [project_home]</pre>

        <h4>Ou, para instalação mínima, execute:</h4>
        <pre>
$ mkdir [project_home]
$ composer require oxsys/oxws</pre>

        <h4>Ou, faça o <a href="/instalacao/downloads">download</a> do pacote desejado, descompacte e execute:</h4>
        <pre>
$ cd [project_home]
$ composer install</pre>

        <h3>2 - Inicie o servidor</h3>
        <pre>
$ cd project_home
$ php -S localhost:8080 -t public public/router.php</pre>

        <h3>3 - Codifique</h3>
        <ul>
          <li>Leia a documentação em <a href="http://localhost:8080/documentacao/oxws">http://localhost:8080/documentacao/oxws</a></li>
          <li>Crie e altere os arquivos em <strong>/public</strong> e <strong>/app</strong></li>
          <li>Acompanhe as mudanças em <a href="http://localhost:8080">http://localhost:8080</a></li>
        </ul>

        <h3>4 - Escolha o servidor</h3>
        <ul>
          <li><a href="/instalacao/nginx">Nginx</a> (Recomendado)</li>
          <li><a href="/instalacao/apache">Apache</a></li>
          <li><a href="/instalacao/lighttpd">Lighttpd</a></li>
        </ul>

      </div>
    </div>
