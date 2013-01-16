<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<table border="1">
    <tr>
        <td>
            <h2>Free Vouchers</h2>
            <?php            
            $criteria = new CDbCriteria;
            $criteria->with = array('user');
            $now = new CDbExpression("NOW()");
            $criteria->addCondition('validity >= '.$now);
            $criteria->addCondition('is_active = 1');
            
            $dataProvider = new CActiveDataProvider('Voucher', array('criteria' => $criteria));
            $dataProvider->pagination = false;
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_free_voucher',
                'summaryText' => "",
                'separator' => "<hr>",
            ));
            ?>
            More Vouchers &raquo;
        </td>
        <td>Second</td>
        <td>Third</td>
    </tr>
</table>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
