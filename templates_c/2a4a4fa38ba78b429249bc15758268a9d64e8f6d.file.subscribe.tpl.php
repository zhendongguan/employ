<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-19 07:30:17
         compiled from ".\templates\employ\subscribe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22689555aca699bc662-55111467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4a4fa38ba78b429249bc15758268a9d64e8f6d' => 
    array (
      0 => '.\\templates\\employ\\subscribe.tpl',
      1 => 1431919972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22689555aca699bc662-55111467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555aca69a8f592_66997370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555aca69a8f592_66997370')) {function content_555aca69a8f592_66997370($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name = "author" content = "zhendezhendong" />
    <link rel="stylesheet" href="templates/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="templates/employ/mystyle.css">
	<title>Subscribe Infomation</title>
</head>
<body>
<div class="rich_media">
	<div class="rich_madia_inner">
		<div id="page-content">
			<div class="rich_media_area_primary">
				<h2 class="rich_media_title text-center">Subscribe Information</h2>
				<div class="rich_media_content">
					<div class="post_feed">
						<div class="cotainer col-md-offset-1 col-xs-offset-1">
							<p class="text-left"><strong>Notice!!!</strong></p>
							<ol>
								<li>I promise not be evil!</li>
								<li>I can't guarantee that all E-mail address can receive the subscription.</li>
								<li>If you will have subscribed, please add subscription E-mail addrsss to white list.</li>
								<li>Don't expect too much.</li>
							</ol>
						</div>
					</div>
					<div class="post_feed">
						<form class="form-horizontal cotainer col-md-offset-1 col-xs-offset-1">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="Email">
							</div>	
							<div class="form-group">
								<input type="button" class="btn btn-primary" value="Subscribe">
							</div>						
						</form>			
					</div>		
				</div>
				<div id="footer" class="text-center">
					Copyright © 2015  <a href="http://weibo.com/zhendezhendong">真的振东</a>  All Rights Reserved </br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 src="templates/jquery.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="templates/employ/employ.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>	
</body>
</html><?php }} ?>
