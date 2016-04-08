<?php
/*
Plugin Name:       Поддержка Системо
Description:      Скрипт добавляет кнопку обращения за поддержкой в компанию Системо
Author:             Systemo
Plugin URI:          https://github.com/systemo-biz/systemo-support
Author URI:         http://systemo.biz
License:              GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

//Support https://github.com/afragen/github-updater
GitHub Plugin URI: https://github.com/systemo-biz/systemo-support
GitHub Branch: master

Version: 20160402
*/

function add_support_script_systemo(){
 ?>

<!-- Start of Omnidesk Widget script -->
<script>
!function(e,o){window.omni=o;o.g_config={widget_id:"104-f1y8jvhj"}; o.email_widget=o.email_widget||{};var w=o.email_widget;w.readyQueue=[];o.config=function(e){ this.g_config.user=e};w.ready=function(e){this.readyQueue.push(e)};var r=e.getElementsByTagName("script")[0];c=e.createElement("script");c.type="text/javascript",c.async=!0;c.src="https://omnidesk.ru/bundles/acmesite/js/cwidget.js";r.parentNode.insertBefore(c,r)}(document,window.omni||{});
</script>
<!-- End of Omnidesk Widget script -->

 <?php
}
add_action( 'admin_print_scripts', 'add_support_script_systemo' );
