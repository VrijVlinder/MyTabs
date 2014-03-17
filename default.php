<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2014 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

// Define the plugin:


$PluginInfo['MyTabs'] = array(
   'Name'=>'MyTabs',
   'Description' => "This plugin adds profile tabs on the panel in a dropdown menu via jquery. ",
   'Version' => '1.0',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class MyTabs_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }

 public function Base_Render_Before($Sender) {

$Session = Gdn::Session();
      if ($Session->IsValid()) {

$Sender->AddJsFile('plugins/MyTabs/mytabs.js');
$Sender->AddCssFile('plugins/MyTabs/design/mytabs.css');
}
else
{
     return;
}

}















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
