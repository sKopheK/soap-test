<?php //netteCache[01]000365a:2:{s:4:"time";s:21:"0.79149500 1396953278";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:51:"D:\htdocs\soap\app\templates\Homepage\default.latte";i:2;i:1396953277;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: D:\htdocs\soap\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'b8pgvktl0r')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3cb69be458_content')) { function _lb3cb69be458_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="banner">
<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>
</div>

<p><?php echo Nette\Templating\Helpers::escapeHtml($url, ENT_NOQUOTES) ?></p>

<p><?php echo Nette\Templating\Helpers::escapeHtml($output, ENT_NOQUOTES) ?></p><?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb500a8cdc94_title')) { function _lb500a8cdc94_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Soap test</h1>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 