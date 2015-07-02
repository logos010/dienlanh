<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Profile");
$this->breadcrumbs = array(
    UserModule::t("Profile") => array('profile'),
    UserModule::t("Edit"),
);
?><h2><?php echo UserModule::t('Edit profile'); ?></h2>
<?php echo $this->renderPartial('menu'); ?>

<?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
    </div>
<?php endif; ?>

<div>
    <?php
    $form = $this->beginWidget('UActiveForm', array(
        'id' => 'profile-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
            'class' => 'form-horizontal',
            'data-toggle' => 'validator'),
    ));
    ?>

    <?php echo $form->errorSummary(array($model, $profile)); ?>

    <?php
    $profileFields = $profile->getFields();
    if ($profileFields) {
        foreach ($profileFields as $field) {
            ?>
            <div class="form-group">
                <?php
                echo $form->labelEx($profile, $field->varname, array('class' => 'col-sm-2 control-label'));
                ?>
                <div class="col-sm-10">
                    <?php
                    if ($field->widgetEdit($profile)) {
                        echo $field->widgetEdit($profile);
                    } elseif ($field->range) {
                        echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                    } elseif ($field->field_type == "TEXT") {
                        echo $form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                    } else {
                        echo $form->textField($profile, $field->varname, array(
                            'size' => 60,
                            'maxlength' => (($field->field_size) ? $field->field_size : 255),
                            'class' => 'form-control',
                        ));
                    }
                    echo $form->error($profile, $field->varname);
                    ?>
                </div>
            </div>	
            <?php
        }
    }
    ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'username', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>
    </div>

    <div>
        <?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save'), array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
