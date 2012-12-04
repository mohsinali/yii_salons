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
            $vouchers = Voucher::model()->findAll();
            $output = "<ul>";
            foreach ($vouchers as $voucher) {
                $output .= "<li>";
                $output .= $voucher->name."<br />";
                $output .= $voucher->discount."% Discount voucher"."<br />";
                $output .= "Valid till: ".date("d M Y",strtotime($voucher->validity))."<br />";
                $output .= "Remaining: ".$voucher->quantity."<br />";
                $output .= "</li>";
            }
            $output .= "</ul>";
            echo $output;
            ?>
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
