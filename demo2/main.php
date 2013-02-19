<?php 
/** 
* @action 显示实例程序 
*/ 
	include_once("../libs/Smarty.class.php"); //包含smarty类文件 
	define('Site_root','G:/usr/www/samarty/Smarty/demo2');
	//移植到其它地方 只需要修改Site_root就可以了
	// Site_root以 main.php 的位置为基准
	$smarty = new Smarty(); //建立smarty实例对象$smarty 
	//以下内容可以省略
	//$smarty->templates("templates"); //设置模板目录 
	//$smarty->templates_c("templates_c"); //设置编译目录 
	//$smarty->cache("cache"); //缓存目录 
	$smarty->templates=Site_root."/templates/"; //设置模板目录 
	$smarty->templates_c=Site_root."/templates_c/"; //设置编译目录 
	$smarty->cache=Site_root."/cache/"; //缓存目录
	
	$smarty->cache_lifetime = 0; //缓存时间 
	$smarty->caching = true; //缓存方式 
	$smarty->left_delimiter = "<{"; 
	$smarty->right_delimiter = "}>"; 
?> 