<div class="item">
    <?php echo $data->name; ?><br/>
    <?php echo $data->discount; ?>% Discount Voucher<br/>
    Remaining: <?php echo $data->quantity; ?><br/>
    Salon: <?php echo $data->user['first_name']." ".$data->user['last_name']; ?><br />
    Image: <?php echo CHtml::image(Yii::app()->request->baseUrl."/images/user_profile_pictures/".$data->user['profile_image'],"ballpop"); ?>
    
</div>
