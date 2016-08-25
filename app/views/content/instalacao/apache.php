<div class="row marketing">
  <div class="col-sm-12">

    <h3>Servidor Apache</h3>
    <p>Configuração de um servidor Apache para Oxws</p>

    <h4>Configure o Apache</a></h4>
    <p>Crie o nó VirtualHost em httpd.conf
      <pre>
&lt;VirtualHost *:80&gt;
    DocumentRoot "<strong>/project_home/public</strong>"
    &lt;Directory <strong>/project_home/public</strong>&gt;
        AllowOverride All
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;</pre>
    </p>

    <h4>Crie o .htaccess</a></h4>
    <p>Crie o .htaccess em <strong>/project_home/public</strong>
      <pre>
DirectorySlash off

RewriteEngine On
RewriteOptions AllowNoSlash
RewriteBase /

RewriteCond %{REQUEST_URI} ^.+/$
RewriteRule ^(.+)/$ $1 [R=301,L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php/$1 [L]</pre>
    </p>

  </div>

</div>
