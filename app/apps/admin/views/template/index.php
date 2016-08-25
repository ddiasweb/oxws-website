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
    <title>Oxws Admin</title>
    <?php Oxsys\Oxws\Views::render("common/css"); ?>
  </head>
  <body>
    <?php Oxsys\Oxws\Views::render('common/header'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php Oxsys\Oxws\Views::render('menus'); ?>
        </div>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header"><?php echo Oxsys\Oxws\Helpers\Page::getTitle(); ?></h1>
        <?php echo Oxsys\Oxws\Helpers\Page::getBreadcrumb(); ?>
        <?php Oxsys\Oxws\Views::render('content'); ?>
        <hr>
        <?php Oxsys\Oxws\Views::render('common/footer'); ?>
      </div>
    </div>
    <?php Oxsys\Oxws\Views::render('common/js'); ?>
  </body>
</html>
