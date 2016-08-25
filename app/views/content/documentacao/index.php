    <div class="row marketing">
      <div class="col-sm-12">

        <h4>Documentação Oxws</h4>
        <p>Versão 1.0.0</p>

        <h3>Oxws</h3>
        <p>Detalhamento do Oxws</p>

        <h4>Projeto</h4>
        <p>Estrutura de pastas de um projeto Oxws
          <pre>
/project_home              Pasta home do seu projeto
├── /public                    Raíz do servidor HTML
│   ├── index.php                  Inicia Oxws
│   └── router.php                 Roteador PHP Standalone server
├── /app                       Aplicação
│   ├── controllers                Controllers
│   ├── views                      Views
│   ├── models                     Models
│   ├── hooks                      Hooks
│   ├── helpers                    Helpers
│   ├── plugins                    Plugins
│   └── apps                       Aplicações
└── /vendor                    Bibliotecas</pre>
        </p>

        <h4>Requisição</h4>
        <p>Caminho de uma requisição HTTP no Oxws
          <pre>
Browser solicita URL
├ Arquivo existe em /home/public?
│ └ Serve arquivo
│ Executa /home/public/index.php
│ Hook preProcess
├ Cache existe?
│ │ Recupera Oxws
│ │ Inicia App
│ │ Inicia Controller
│ └ Executa Action
│ Hook preLoad
│ Inicia Oxws
│ Hook postLoad
├ App existe em /home/app/apps?
│ │ Prepara App específica
├ ┘
│ Hook preApp
│ Inicia App
│ Hook postApp
├ Controller existe em /home/app/controller?
│ │ Prepara Controller específico
├ ┘
│ Hook preController
│ Inicia Controller
│ Hook postController
├ Action existe no Controller?
│ │ Prepara Action específica
├ ┘
│ Hook preAction
│ Executa Action
│ Hook postAction
└ Executa Action</pre>
        </p>

      </div>
    </div>
