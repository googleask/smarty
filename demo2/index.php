<?php 
	require "main.php";
	//$smarty->assign("title", "测试用的网页标题");
	//$smarty->assign("content", "测试用的网页内容");
	// 上面两行也可以用这行代替
	$smarty->assign(array("title" => "Smarty练习", "content" => "测试用的网页内容"));
	$smarty->display('index.html');
?> 