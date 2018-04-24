<?php /* Smarty version 2.6.26, created on 2018-04-23 16:37:25
         compiled from guestbook.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<link href="templates/guestbook.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body>
<div id="dcWrap"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="mainBox" style="<?php echo $this->_tpl_vars['workspace']['height']; ?>
"> 
   <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
   <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
   <div id="list">
    <form name="del" method="post" action="guestbook.php?rec=del_all">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
       <th align="left"><?php echo $this->_tpl_vars['lang']['guestbook_title']; ?>
</th>
       <th width="60" align="center"><?php echo $this->_tpl_vars['lang']['guestbook_name']; ?>
</th>
       <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['add_time']; ?>
</th>
       <th width="60" align="center"><?php echo $this->_tpl_vars['lang']['if_show']; ?>
</th>
      </tr>
      <?php $_from = $this->_tpl_vars['book_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['guestbook']):
?>
      <tr <?php if ($this->_tpl_vars['guestbook']['if_read'] == '0'): ?>class="unread"<?php endif; ?>>
       <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['guestbook']['id']; ?>
" /></td>
       <td><a href="guestbook.php?rec=read&id=<?php echo $this->_tpl_vars['guestbook']['id']; ?>
"><?php echo $this->_tpl_vars['guestbook']['title']; ?>
</a></td>
       <td align="center"><?php echo $this->_tpl_vars['guestbook']['name']; ?>
</td>
       <td align="center"><?php echo $this->_tpl_vars['guestbook']['add_time']; ?>
</td>
       <td align="center"><?php echo $this->_tpl_vars['guestbook']['if_show']; ?>
</td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
     </table>
     <div class="action"><input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['del']; ?>
" /></div>
    </form>
   </div>
   <div class="clear"></div>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pager.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <?php endif; ?>
   <?php if ($this->_tpl_vars['rec'] == 'read'): ?>
   <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
   <div id="guestBook">
    <dl class="book">
     <dt><a href="javascript:void(0)" onClick="dou_callback('guestbook.php?rec=show_hidden', 'id', <?php echo $this->_tpl_vars['guestbook']['id']; ?>
, 'if_show')" class="showHidden" id="if_show"><em class="<?php if ($this->_tpl_vars['guestbook']['if_show']): ?>d<?php else: ?>h<?php endif; ?>"><b><?php echo $this->_tpl_vars['lang']['display']; ?>
</b><s><?php echo $this->_tpl_vars['lang']['hidden']; ?>
</s></em></a><?php echo $this->_tpl_vars['guestbook']['title']; ?>
</dt>
     <dd><?php echo $this->_tpl_vars['guestbook']['content']; ?>
</dd>
     <p><b><?php echo $this->_tpl_vars['lang']['guestbook_name']; ?>
：<?php echo $this->_tpl_vars['guestbook']['name']; ?>
</b><b><?php echo $this->_tpl_vars['lang']['guestbook_contact_type']; ?>
（<?php echo $this->_tpl_vars['guestbook']['contact_type']; ?>
）：<?php echo $this->_tpl_vars['guestbook']['contact']; ?>
</b><b><?php echo $this->_tpl_vars['lang']['add_time']; ?>
：<?php echo $this->_tpl_vars['guestbook']['add_time']; ?>
</b></p>
    </dl>
    <?php if ($this->_tpl_vars['reply']['content']): ?>
    <dl class="reply"><b><?php echo $this->_tpl_vars['lang']['guestbook_admin_reply']; ?>
[<?php echo $this->_tpl_vars['reply']['add_time']; ?>
]：</b> <?php echo $this->_tpl_vars['reply']['content']; ?>
</dl>
    <?php else: ?>
    <dl class="replySubmit">
     <form action="guestbook.php?rec=reply" method="post">
      <textarea name="content" cols="90" rows="5" class="textArea" id="content"></textarea>
      <br>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['guestbook']['id']; ?>
">
      <input type="hidden" name="title" value="<?php echo $this->_tpl_vars['guestbook']['title']; ?>
">
      <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['guestbook_reply']; ?>
" />
     </form>
    </dl>
    <?php endif; ?>
   </div>
   <?php endif; ?> 
  </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>