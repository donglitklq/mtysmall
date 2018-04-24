<?php /* Smarty version 2.6.26, created on 2018-04-23 16:36:59
         compiled from cloud.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body>
<div id="dcWrap">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="cloud" class="mainBox" style="<?php echo $this->_tpl_vars['workspace']['height']; ?>
">
   <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
   <?php if ($this->_tpl_vars['rec'] == 'handle'): ?>
   <div class="handle">
   <h2><?php if ($this->_tpl_vars['mode'] == 'update' || $this->_tpl_vars['rec'] == 'system_update'): ?><?php echo $this->_tpl_vars['lang']['cloud_title_update']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['cloud_title_install']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['type']; ?>
 <?php echo $this->_tpl_vars['cloud_id']; ?>
</h2>
   <?php endif; ?>
   <?php if ($this->_tpl_vars['rec'] == 'order'): ?>
   <div class="order">
    <?php echo $this->_tpl_vars['cloud_html']; ?>

    <?php if ($this->_tpl_vars['cloud_html']): ?>
    <?php if ($this->_tpl_vars['action'] == 'default'): ?>
    <p>
     <form action="cloud.php?rec=order&type=<?php echo $this->_tpl_vars['type']; ?>
&action=checkout&cloud_id=<?php echo $this->_tpl_vars['cloud_id']; ?>
" method="post">
     <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
     <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['cloud_order_submit']; ?>
" />
     </form>
    </p>
    <?php elseif ($this->_tpl_vars['action'] == 'checkout'): ?>
    <script type="text/javascript">
    <?php echo '
    $(document).ready(function(){
      $(".btnPayment").click(function(){
          $("#douFrame").show();
      });
    });
    '; ?>

    </script>
    <div id="douFrame" style="display:none">
     <div class="bg"></div>
     <div class="frame selectBox">
      <div class="content">
       <a href="<?php echo $this->_tpl_vars['module_link']; ?>
" class="btn"><?php echo $this->_tpl_vars['lang']['cloud_pay_success']; ?>
</a> <a href="<?php echo $this->_tpl_vars['module_link']; ?>
" class="btnGray"><?php echo $this->_tpl_vars['lang']['cloud_pay_fail']; ?>
</a>
      </div>
     </div>
    </div>
    <?php endif; ?>
    <?php else: ?>
    <?php echo $this->_tpl_vars['lang']['cloud_account_cue']; ?>
 ! <a href="cloud.php?rec=account" class="btn"><?php echo $this->_tpl_vars['lang']['cloud_account']; ?>
</a>
    <?php endif; ?>
   </div>
   <?php endif; ?>
   <?php if ($this->_tpl_vars['rec'] == 'account'): ?>
   <div class="account">
    <?php if ($this->_tpl_vars['action'] == 'set'): ?>
    <form action="cloud.php?rec=account_post" method="post">
     <?php echo $this->_tpl_vars['lang']['cloud_account_user']; ?>
：<input type="text" name="cloud_user" size="30" class="inpMain" value="<?php echo $this->_tpl_vars['cloud_account']['user']; ?>
" />
     <?php echo $this->_tpl_vars['lang']['cloud_account_password']; ?>
：<input type="password" name="cloud_password" size="30" class="inpMain" />
     <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
     <input type="submit" name="submit" class="btn" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
     <input type="button" class="btnGray" value="<?php echo $this->_tpl_vars['lang']['btn_cancel']; ?>
" onclick="location.href='cloud.php?rec=account'" />
     <p class="guide"><?php echo $this->_tpl_vars['lang']['cloud_account_register_0']; ?>
 <a href="http://www.douco.com/user/register" target="_blank"><?php echo $this->_tpl_vars['lang']['cloud_account_register']; ?>
</a></p>
    </form>
    <?php else: ?>
    <em><?php echo $this->_tpl_vars['lang']['cloud_account_seted']; ?>
：<?php echo $this->_tpl_vars['cloud_account']['user']; ?>
</em>
    <a href="cloud.php?rec=account&action=set" class="btn"><?php echo $this->_tpl_vars['lang']['cloud_account_reset']; ?>
</a>
    <a href="cloud.php?rec=account_clean" class="btnGray"><?php echo $this->_tpl_vars['lang']['cloud_account_clean']; ?>
</a>
    <p class="guide">如果您已经购买授权可以 <a href="cloud.php?rec=handle&type=onedou&cloud_id=copyright">点此去除DouPHP版权信息</a></p>
    <?php endif; ?>
   </div>
   <?php endif; ?>
   
<?php if ($this->_tpl_vars['rec'] != 'handle'): ?>
   </div>
  </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</body>
</html>
<?php endif; ?>