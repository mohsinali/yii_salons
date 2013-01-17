<?php
/* @var $this PagesController */

$this->breadcrumbs=array(
	'Admin Panel',
);
?>
<h1>Admin Panel</h1>

<table>
    <tr>
        <td><?=CHtml::link("Users", array('admin/user')); ?><br /></td>
        <td><?=CHtml::link("Vouchers", array('admin/user')); ?><br /></td>
    </tr>
</table>
