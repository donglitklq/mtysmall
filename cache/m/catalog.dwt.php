<?php /* Smarty version 2.6.26, created on 2018-04-24 09:16:44
         compiled from catalog.dwt */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->_tpl_vars['site']['m_url']; ?>
data/logo-icon.png" >
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="DouPHP v1.3" />
<link href="http://demo.315-c.com/api/theme/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://demo.315-c.com/api/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://demo.315-c.com/api/theme/default/images/global.js"></script>
</head>
<body>
<div id="wrapper"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="catalog">
  <ul>
   <?php $_from = $this->_tpl_vars['catalog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
   <li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['mark']; ?>
 <?php echo $this->_tpl_vars['item']['name']; ?>
</a></li>
   <?php endforeach; endif; unset($_from); ?>
  </ul>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>