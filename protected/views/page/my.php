<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Page'=>array('/page'),
	'My',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>