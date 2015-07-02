<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
?>

<div class="register">
    <?php if (Yii::app()->user->hasFlash('registration')): ?>
        <div class="success">
            <?php echo Yii::app()->user->getFlash('registration'); ?>
        </div>
    <?php else: ?>

        <!-- form-->
        <?php
        $form = $this->beginWidget('UActiveForm', array(
            'id' => 'registration-form',
            'enableAjaxValidation' => true,
            'disableAjaxValidationAttributes' => array('RegistrationForm_verifyCode'),
            'htmlOptions' => array(
                'enctype' => 'multipart/form-data',
                'class' => 'form-horizontal',
                'data-toggle' => 'validator'
            ),
        ));
        ?>
        <div class="  register-top-grid">
            <h3>Thông tin để chúng tôi có thể liên hệ vói bạn</h3>
        </div>
        
        <?php echo $form->errorSummary(array($model, $profile)); ?>
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Tên truy cập</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="RegistrationForm[username]" id="username" placeholder="Tên truy cập" data-minlength="5"
                       data-error="Tên truy cập không được trống hoặc ít hơn 5 ký tự nhé" required >
                <div class="help-block with-errors"></div>
            </div>            
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Mật khẩu</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="RegistrationForm[password]" id="password" data-minlength="8"
                       data-error="Mật khẩu phải chứa ít nhất 1 ký tự đặc biệt: !, @, #, hoặc $" placeholder="Mật khẩu" required >
                <span class="help-block">Mật khẩu phải có ít nhất 8 ký tự</span>
                <div class="help-block with-errors"></div>
            </div>            
        </div>

        <div class="form-group">
            <label for="verifyPassword" class="col-sm-2 control-label">Xác nhận mật khẩu</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="RegistrationForm[verifyPassword]" id="retype-password" placeholder="Xác nhận mật khẩu" data-match="#password" required >
                <div class="help-block with-errors"></div>
            </div>            
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="RegistrationForm[email]" id="email" placeholder="Email" data-error="Email invalid" required >
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <?php
        $profileFields = $profile->getFields();
        if ($profileFields) {
            foreach ($profileFields as $field) {
                ?>
                <div class="form-group">
                    <?php echo $form->labelEx($profile, $field->varname, array('class' => 'col-sm-2 control-label')); ?>̣̣̣
                    <div class="col-sm-10">
                        <?php
                        if ($field->widgetEdit($profile)) {
                            echo $field->widgetEdit($profile);
                        } elseif ($field->range) {
                            echo $form->dropDownList($profile, $field->varname, Profile::range($field->range, array('class' => 'form-control')));
                        } elseif ($field->field_type == "TEXT") {
                            echo$form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                        } else {
                            echo $form->textField($profile, $field->varname, array(
                                'size' => 60,
                                'maxlength' => (($field->field_size) ? $field->field_size : 255),
                                'class' => 'form-control'
                            ));
                        }
                        ?>
                    </div>
                    <?php echo $form->error($profile, $field->varname); ?>
                </div>	
                <?php
            }
        }
        ?>
        <?php if (UserModule::doCaptcha('registration')): ?>
            <div>
                <?php echo $form->labelEx($model, 'verifyCode'); ?>

                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model, 'verifyCode'); ?>
                <?php echo $form->error($model, 'verifyCode'); ?>

                <p class="hint"><?php echo UserModule::t("Nhập ký tự trong hình."); ?>
                    <br/><?php echo UserModule::t("Ký tự không phân biệt chữ hoa hay chữ thường."); ?></p>
            </div>
        <?php endif; ?>

        <div>
            <?php echo CHtml::submitButton(UserModule::t("Đăng ký"), array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    <?php endif; ?>

</div>  <!-- registration-->




