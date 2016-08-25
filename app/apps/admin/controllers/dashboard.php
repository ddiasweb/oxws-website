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

class DashboardController {

	function indexAction() {
		Page::set('Dashboard de exemplo', 'dashboard');
		Data::set('content', 'Index action');
		Views::render('template');
	}

	function statusAction() {
		Page::set('Status de exemplo', 'status');
		Data::set('content', 'Status action');
		Views::render('template');
	}

	function logAction() {
		Page::set('Log de exemplo', 'log');
		Data::set('content', 'Log action');
		Views::render('template');
	}

}

?>
