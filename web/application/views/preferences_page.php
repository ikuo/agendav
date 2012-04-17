<div class="page-header">
 <h1><?php echo $this->i18n->_('labels', 'preferences')?></h1>
</div>

<?php
$img_return = array(
		'src' => 'img/button-icons/arrow_left.png',
		'alt' => $this->i18n->_('labels', 'return'),
		'title' => $this->i18n->_('labels', 'return'),
		);

$img_save = array(
		'src' => 'img/button-icons/ok.png',
		'alt' => $this->i18n->_('labels', 'save'),
		'title' => $this->i18n->_('labels', 'save'),
		);

?>
<div id="prefs_buttons">
<button id="return_button"><?php echo img($img_return) 
	. ' ' . $this->i18n->_('labels', 'return')?></button>
<button id="save_button"><?php echo img($img_save) 
	. ' ' . $this->i18n->_('labels', 'save')?></button>
</div>

<div id="prefs_tabs">
<ul>
 <li><a href="#tabs-general"><?php echo $this->i18n->_('labels',
		 'generaloptions')?></a></li>
 <li><a href="#tabs-calendars"><?php echo $this->i18n->_('labels',
		 'calendars')?></a></li>
</ul>

<div id="tabs-general">
 yyy
</div>

<div id="tabs-calendars">
 xxx
</div>

</div>
