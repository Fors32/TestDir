<?php
/*
        foreach($models as $model) {
            $title = CHtml::encode($model->title);

            echo CHtml::link(
                $title,
                array('page/view', 'id'=>$model->id),
                array('target'=>'_blank', 'id' => 'my', 'adf' => 3));

            echo Chtml::normalizeUrl(array('page/view', 'id'=>$model->id));

            echo '<hr />';
        }
?>
<a href="http://localhost/test/index.php/page/2">link</a>
*/


$this->renderPartial('/part/_part', array('models' => $models));

?>