<?php
/*
 * @version $Id: setup.dropdowns.php 3511 2006-05-25 12:14:29Z moyo $
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2006 by the INDEPNET Development Team.
 
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/
include ("_relpos.php");
$NEEDED_ITEMS=array("setup");
include ($phproot . "/inc/includes.php");

checkLoginUser();

if (isset($_GET["popup"])) $_SESSION["glpipopup"]=$_GET["popup"];

if (isset($_SESSION["glpipopup"])){
	switch ($_SESSION["glpipopup"]){
		case "dropdown":
			include "setup.dropdowns.php";
			break;
	}
}

?>