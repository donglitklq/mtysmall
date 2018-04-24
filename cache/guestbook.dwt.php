<?php /* Smarty version 2.6.26, created on 2018-04-23 16:37:19
         compiled from guestbook.dwt */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="DouPHP v1.3" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<link href="http://demo.315-c.com/theme/default/style.css" rel="stylesheet" type="text/css" />
<link href="http://demo.315-c.com/theme/default/guestbook.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://demo.315-c.com/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://demo.315-c.com/theme/default/images/global.js"></script>
</head>
<body>
<div id="wrapper"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div class="wrap mb"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/ur_here.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="guestBook"> 
   <?php if ($this->_tpl_vars['guestbook']): ?>
   <h2><?php echo $this->_tpl_vars['lang']['guestbook']; ?>
</h2>
   <div class="bookList"> 
    <?php $_from = $this->_tpl_vars['guestbook']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['guestbook']):
?>
    <dl>
     <dt><?php echo $this->_tpl_vars['lang']['guestbook_title']; ?>
：<?php echo $this->_tpl_vars['guestbook']['title']; ?>
 <b><?php echo $this->_tpl_vars['guestbook']['add_time']; ?>
</b></dt>
     <dd><em><?php echo $this->_tpl_vars['lang']['guestbook_content']; ?>
：</em><span><?php echo $this->_tpl_vars['guestbook']['content']; ?>
</span></dd>
     <?php if ($this->_tpl_vars['guestbook']['reply']): ?>
     <p><em><?php echo $this->_tpl_vars['lang']['guestbook_reply']; ?>
：</em><span><?php echo $this->_tpl_vars['guestbook']['reply']; ?>
</span><b><?php echo $this->_tpl_vars['guestbook']['reply_time']; ?>
</b></p>
     <?php endif; ?>
    </dl>
    <?php endforeach; endif; unset($_from); ?> 
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
   <?php endif; ?>
   <h2><?php echo $this->_tpl_vars['lang']['guestbook_add']; ?>
</h2>
   <div class="bookAdd">
    <form id="bookAdd" action="<?php echo $this->_tpl_vars['insert_url']; ?>
" method="post">
     <dl>
      <dt><?php echo $this->_tpl_vars['lang']['guestbook_title']; ?>
：</dt>
      <dd>
       <input type="text" name="title" size="80" class="textInput" />
       <p id="title" class="cue"></p>
      </dd>
     </dl>
     <dl>
      <dt><?php echo $this->_tpl_vars['lang']['guestbook_name']; ?>
：</dt>
      <dd>
       <input type="text" name="name" size="55" class="textInput" />
       <p id="name" class="cue"></p>
      </dd>
     </dl>
     <dl>
      <dt><?php echo $this->_tpl_vars['lang']['guestbook_contact_type']; ?>
：</dt>
      <dd>
       <select name="contact_type" class="select">
        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
        <?php echo $this->_tpl_vars['option']; ?>

       </select>
       <input type="text" name="contact" size="60" class="textInput" />
       <p id="contact" class="cue"></p>
      </dd>
     </dl>
     <dl>
      <dt><?php echo $this->_tpl_vars['lang']['guestbook_content']; ?>
：</dt>
      <dd>
       <textarea name="content" cols="90" rows="5" class="textArea" /></textarea>
       <p id="content" class="cue"></p>
      </dd>
     </dl>
     <?php if ($this->_tpl_vars['site']['captcha']): ?>
     <dl>
      <dt><?php echo $this->_tpl_vars['lang']['captcha']; ?>
：</dt>
      <dd>
       <input type="text" name="captcha" class="textArea captcha" size="10">
       <img id="vcode" src="<?php echo $this->_tpl_vars['site']['root_url']; ?>
captcha.php" alt="<?php echo $this->_tpl_vars['lang']['captcha']; ?>
" border="1" onClick="refreshimage()" title="<?php echo $this->_tpl_vars['lang']['captcha_refresh']; ?>
">
       <p id="captcha" class="cue"></p>
      </dd>
     </dl>
     <?php endif; ?>
     <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
     <dl class="submit">
      <input type="button" class="btn" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" onclick="douSubmit('bookAdd')"/>
     </dl>
    </form>
   </div>
  </div>
  <div class="clear"></div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>