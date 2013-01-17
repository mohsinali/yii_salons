<div class="item">
    <?php    
    $image_file = ($data->user['profile_image'] == null)?"default.png":$data->user['profile_image'];
    $this->widget('ext.SAImageDisplayer', array(
        'image' => $image_file,
        'size' => '120_80',
        'defaultImage' => 'default.png',
    ));
    ?>
    <?php echo $data->name; ?><br/>
    <?php echo $data->discount; ?>% Discount Voucher<br/>
    Remaining: <?php echo $data->quantity; ?><br/>
    Salon: <?php echo $data->user['first_name']." ".$data->user['last_name']; ?><br />
    Valid till: <?php echo date('d F Y',strtotime($data->validity)); ?>
    
</div>
