    <div class="row marketing">
      <div class="col-sm-12">

        <h4>Documentação Oxws - Módulos</h4>
        <p>Versão 1.0.0</p>

        <h3>Módulos Oxws</h3>
        <p>Detalhamento de Módulos Oxws</p>

        <h4>Controllers</h4>
        <p>Caminho: "/app/controllers"
          <pre>
/controllers               Controllers
├── /index.php                 Controller padrão
├── /conteudo.php              Controller da url "/conteudo"
└── /usuario                   Controllers da url "/usuario"
    ├── /index.php                 Controller padrão
    └── /editar.php                Controller da url "/usuario/editar"
          </pre>
        </p>

        <h4>Views</h4>
        <p>Caminho: "/app/views"
          <pre>
/views                     Views
├── /common                    Blocos comuns
│   ├── /css.php                   css
│   ├── /footer.php                rodapé
│   ├── /header.php                cabeçalho
│   └── /js.php                    js
├── /content                   Blocos de conteúdo
│   ├── /index.php                 Conteúdo principal
│   ├── /documentacao              Conteúdo da url "/documentacao"
│   │   ├── /features.php              Conteúdo da url "/documentacao/features"
│   │   └── /roadmap.php               Conteúdo da url "/documentacao/roadmap"
│   ├── /documentacao.php          Conteúdo da url "/documentacao"
│   ├── /download                  Conteúdo da url "/download"
│   │   ├── /aplications.php           Conteúdo da url "/download/aplications"
│   │   └── /helpers.php               Conteúdo da url "/download/helpers"
│   ├── /download.php              Conteúdo da url "/download"
│   └── /sobre.php                 Conteúdo da url "/sobre"
├── /template                  Templates
│   ├── /index.php                 Template padrão
│   └── /sidebar.php               Template com sidebar
└── /nav                       Views da navegação
    ├── /index.php                 Menu principal
    ├── /documentacao.php          Menu documentação
    ├── /download.php              Menu download
    └── /li                        Links da navegação
        ├── /home.php                  Links do menu principal
        ├── /documentacao.php          Links do menu documentação
        └── /download.php              Links do menu download
          </pre>
        </p>
      </div>

    </div>
