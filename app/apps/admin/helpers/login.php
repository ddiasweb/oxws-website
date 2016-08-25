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

use Oxsys\Oxws\Oxws;
use Oxsys\Oxws\Helpers\User;
use Oxsys\Oxws\Helpers\Data;

class LoginHelper {

	static function startSession() {
		$login = $_POST['username'];
		$senha = $_POST['password'];
		if ($login == "user" && $senha == "user") {
			User::set('User', $login, 1);
			Oxws::redirectTo("admin");
		} else {
			Data::set("message","Login e senha incorretos.");
		}
	}

	static function endSession() {
		if ( User::isLogged() ) {
			User::set();
			Data::set("message","Sessão encerrada.");
			Oxws::redirectTo("");
		}
	}

}

?>
