<?php

/**
 *    Oxws <http://oxws.oxsys.com.br>
 *
 *    Copyright (C) 2016 Oxsys <http://oxsys.com.br/>
 *
 *    This file is part of Oxws.
 *
 *    Oxws is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    Foobar is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Oxws.  If not, see <http://www.gnu.org/licenses/>.
 *
 *    @link      https://github.com/ddiasweb/oxws
 *    @author    Décio Dias <ddiasweb@gmail.com>
 *    @copyright Copyright (C) 2016 Oxsys <http://oxsys.com.br/>
 *    @license   GPL-3.0 <https://github.com/ddiasweb/oxws/blob/master/LICENSE>
 */

header('Content-Type: text/html; charset=UTF-8');

?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Oxsys\Oxws\Helpers\Page::getTitle() ?></title>
    <?php Oxsys\Oxws\Views::render("common/css"); ?>
  </head>
  <body>
    <div class="container">
      <?php Oxsys\Oxws\Views::render("common/header"); ?>
      <div class="row marketing">
        <div class="col-sm-12">
          <h4>Controller exemplo</h4>
          <p>Ações</p>
          <nav>
            <ul class="nav nav-pills">
              <li><a href="/exemplo">Padrão</a></li>
              <li><a href="/exemplo/acao1">Ação 1</a></li>
              <li><a href="/exemplo/acao2">Ação 2</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-12">
          <h4>Conteúdo</h4>
          <p><?php echo Oxsys\Oxws\Helpers\Data::get("content"); ?></p>
        </div>
      </div>
      <?php Oxsys\Oxws\Views::render('common/footer'); ?>
    </div>
    <?php Oxsys\Oxws\Views::render('common/js'); ?>
  </body>
</html>
