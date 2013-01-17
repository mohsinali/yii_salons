<?php
/* @var $this UserController */

$this->breadcrumbs=array(
    'Admin Panel',
    'User',
);
?>
<h1>Manage users</h1>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$dataProvider,
    'template'=>"{items}\n{pager}",
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'first_name', 'header'=>'First name'),
        array('name'=>'last_name', 'header'=>'Last name'),
        array(
            'header' => "Actions",
            'class'=>'bootstrap.widgets.TbButtonColumn',            
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
