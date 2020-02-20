<?php

require 'config/config.php';
require 'function.php';

include $root.'/components/main/header.php';
include $root.'/components/navbar.php';

include $root.'/components/sidebar.php';

if($_GET && $_GET['action']=="login"){
  include $root.'/components/login.php';

} else if($_GET && $_GET['action']=="logout"){
  include $root.'/components/logout.php';

} else if($_GET && $_GET['action']=="add"){
  include $root.'/components/addMember.php';

} else if($_GET && $_GET['action']=="confirm" && $auth){
  include $root.'/components/confirmAddMember.php';

} else if($_GET && $_GET['action']=="edit"){
  include $root.'/components/editMember.php';

}  else if($_GET && $_GET['action']=="update" && $auth){
  include $root.'/components/confirmEditMember.php';

} else if($_GET && $_GET['action']=="delete" && $auth){
  include $root.'/components/delete/deleteMember.php';

} else if($_GET && $_GET['action']=="delete_req" && $auth){
  include $root.'/components/delete/deleteNewMember.php';

} else if($_GET && $_GET['action']=="delete_update_req" && $auth){
  include $root.'/components/delete/deleteUpdateMember.php';

} else if($_GET && $_GET['goto']=="dashboard" && $auth) {
  include $root.'/components/dashboard/dashboard.php';
  
} else if($_GET && $_GET['goto']=='allMembers' && $auth) {
  include $root.'/components/dashboard/allMember.php';

} else if($_GET && $_GET['goto']=='newRequest' && $auth) {
  include $root.'/components/dashboard/newRequest.php';

} else if($_GET && $_GET['goto']=='updateRequest' && $auth) {
  include $root.'/components/dashboard/updateRequest.php';

} else if($_GET && $_GET['goto']=='add_notice' && $auth) {
  include $root.'/components/dashboard/addNotice.php';

} else if($_GET && $_GET['goto']=='notices') {
  include $root.'/components/dashboard/notices.php';

} else if($_GET && $_GET['goto']=='notice' && $_GET['id']) {
  include $root.'/components/dashboard/singleNotice.php';

} else if($_GET && $_GET['goto']=='settings' && $auth) {
  include $root.'/components/dashboard/settings.php';

} else if($_GET && $_GET['goto']=='about') {
  include $root.'/components/about.php';

} else {
  include $root.'/components/singleMember.php';
}


include $root.'/components/main/footer.php';



?>

