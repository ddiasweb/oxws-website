<div class="row marketing">
  <div class="col-sm-12">

    <h3>Servidor Nginx</h3>
    <p>Configuração de um servidor Nginx para Oxws</p>

    <h4>Instale e configure o <a href="http://php.net/manual/pt_BR/install.fpm.php">FPM</a></h4>
    <p>Altere a opção listen em php-fpm.conf
      <pre>
listen = /run/php-fpm/php-fpm.sock</pre>
    </p>

    <h4>Configure o Nginx</h4>
    <p>Altere o nó server em nginx.conf
      <pre>
server {

    listen        80;
    server_name   localhost;

    root          <strong>/project_home/public</strong>;
    index         index.html index.php;

    location / {
      # Check if a folder exists, then route to index.php
      if ( -d $request_filename ) {
          rewrite ^(.+)$ /index.php last;
      }
      # Check if a file exists, else route to index.php
      try_files $uri /index.php;
    }

    location ~ \.php$ {
        fastcgi_pass   unix:/var/run/php-fpm/php-fpm.sock;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params;
    }

}</pre>
    </p>

  </div>

</div>
