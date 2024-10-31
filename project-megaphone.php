<?php
/*
Plugin Name: Project Megaphone
Plugin Script: project-megaphone.php
Plugin URI: https://github.com/tfrce/project-megaphone
Description: This plugin adds the Project Megaphone (https://github.com/tfrce/project-megaphone) banner into your theme.
Version: 1.0
License: GPL
Author: Taskforce.is
Author URI: http://taskforce.is

=== RELEASE NOTES ===
2013-10-18 - v1.0 - first version is ready
*/

/* 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
Online: http://www.gnu.org/licenses/gpl.txt
*/

    function add_project_megaphone_banner() {
        $widget_link = plugins_url( 'project-megaphone widget.min.js' , __FILE__ );
        echo "<!--[if !(lte IE 8)]><!-->
        <script>
          (function(){
            var e = document.createElement('script'); e.type='text/javascript'; e.async = true;
            e.src = '" . $widget_link . "';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s);
          })();
        </script>
        <!--<![endif]-->";
    }
    
    add_action('wp_footer', 'add_project_megaphone_banner', 1);

?>