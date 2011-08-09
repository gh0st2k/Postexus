<?php
/*************************************************************************
* Postexus - Modular content management/system platform
* Copyright (C) 2011 Postexus (gh0st2k, MarcusG, mpkossen, starefossen)
**************************************************************************
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*************************************************************************/

/*************************************************************************
* File: core/Postexus.class.php
* Author: mpkossen
*************************************************************************/

require_once(__DIR__ . '/Database.class.php');

class Postexus
{
	static $Database = null;

	/**
	 * @static Function to get the current Database object
	 * @return Database object
	 */
	public static function getDatabase()
	{
		if (is_null($Database)) {
			self::$Database = new Database();
		}

		return self::$Database;
	}
}

?>