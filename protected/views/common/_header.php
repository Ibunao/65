<header class="hd_header w100">
    <div class="header_logo fl">
        <img class="header_logo_img" src="<?php if($this->purchase_id=='1') {echo Yii::app()->theme->baseUrl.'/images/pic_logo_top_01.png?v=2">'; }else { echo Yii::app()->theme->baseUrl.'/images/fav_ico_144_uki.png?v=2">'; }?>
    </div>
    <div class="header_title fl"><?php echo $this->purchase_id=='1'?Yii::app()->params['purchase_oct']:Yii::app()->params['purchase_uki'];?></div>
    <div class="header_info fr">
        <?php if($this->down_name): ?>
            <span class="header_info_title">该下线code代码:</span>
            <span class="header_info_dt word_green"><?php echo $this->down_code; ?></span>
            <span class="header_info_title">该下线名称:</span>
            <span class="header_info_dt word_green"><?php echo $this->down_name; ?></span>
        <?php else: ?>
            <span class="header_info_title">客户代码:</span>
            <span class="header_info_dt word_green"><?php echo Yii::app()->session['code'];?></span>
            <span class="header_info_title">客户名称:</span>
            <span class="header_info_dt word_green"><?php echo $this->username;?></span>
        <?php endif; ?>
    </div>
</header>