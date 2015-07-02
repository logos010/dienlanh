<style>
    div.errorSummary > ul > li{margin-left: 2.5em}
</style>

<?php if (Yii::app()->user->hasFlash('loginMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('loginMessage'); ?>
    </div>
<?php endif; ?>

<h2>Đăng nhập tài khoản</h2>
<br/>

<?php if(count($model->getErrors()) != 0): ?>
<div class="alert alert-danger" role="alert">
    <?php echo CHtml::errorSummary($model); ?>
</div>
<?php endif; ?>

<section><!--form-->
    <div class="col-md-9">
        <?php
        $form = $this->beginWidget('UActiveForm', array(
            'id' => 'registration-form',
            'enableAjaxValidation' => true,
            'htmlOptions' => array(
                'enctype' => 'multipart/form-data',
                'class' => 'form-horizontal',
                'data-toggle' => 'validator'
            ),
        ));
        ?>
        <div class="form-group">
            <?php
            echo $form->textField($model, 'username', array(
                'class' => 'form-control',
                'id' => 'username',
                'placeholder' => 'Tên đăng nhập',
                'data-minlength' => '5',
                'data-error' => UTranslate::t('Tên đăng nhập không được trống hoặc nhỏ hơn 5 ký tự'),
                'max-length' => '60',
                'required' => 'required'
            ));
            ?>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <?php
            echo $form->passwordField($model, 'password', array(
                'class' => 'form-control',
                'id' => 'pasword',
                'placeholder' => 'Mật khẩu',
                'data-minlength' => '5',
                'data-error' => UTranslate::t('Mật khẩu không được trống hoặc nhỏ hơn 5 ký tự'),
                'max-length' => '60',
                'required' => 'required'
            ));
            ?>
            <div class="help-block with-errors"></div>
        </div>                    
        <div>
            <span><input class="btn btn-primary" type="submit" value="Submit"></span>
        </div>
        <?php $this->endWidget(); ?>
    </div>            
    <div class="clearfix"></div>
</section><!--/form-->
