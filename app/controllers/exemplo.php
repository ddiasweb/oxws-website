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

use Oxsys\Oxws\Views;
use Oxsys\Oxws\Helpers\Page;
use Oxsys\Oxws\Helpers\Data;

class ExemploController {

	function indexAction() {
		Page::set('Exemplo', '/');
		Data::set('content', 'Você está no controller "Exemplo"');
		Views::render('template/exemplo');
	}

	function acao1Action() {
		Page::set('Exemplo - Ação 1', 'acao1');
		Data::set('content', 'Você está na <strong>"ação 1"</strong> do controller "Exemplo"');
		Views::render('template/exemplo');
	}

	function acao2Action() {
		Page::set('Exemplo - Ação 2', 'acao2');
		Data::set('content', 'Você está na <strong>"ação 2"</strong> do controller "Exemplo"');
		Views::render('template/exemplo');
	}

}

?>
