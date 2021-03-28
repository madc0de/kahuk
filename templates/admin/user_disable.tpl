<!-- user_disable.tpl -->
<legend>{#PLIKLI_Visual_View_User_Disable#}</legend>
<div class="alert alert-warning expires-warning">{#PLIKLI_Visual_Page_Expires#}</div>
<p>Are you sure you want to "disable" this user and prevent them from logging in?</p>
<p>
	<a class="btn btn-danger" href="{$my_base_url}{$my_plikli_base}/admin/admin_users.php?mode=yesdisable&user={$user}{$uri_token_admin_users_disable}">Yes, disable this user.</a>
	<a class="btn btn-default" href="javascript: history.go(-1)">No, cancel</a>
</p>
<p>A disabled user will be "logged out" if they are currently "logged in."</p>
<!--/user_disable.tpl -->