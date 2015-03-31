<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo CHtml::form('', 'POST');

    echo CHtml::textField('text', 'My Submit');

    $a = CHtml::listData($models, 'id', 'title');

    echo CHtml::dropDownList('drop', '', $a, array());

    echo CHtml::submitButton('Отправка');
    echo CHtml::endForm();