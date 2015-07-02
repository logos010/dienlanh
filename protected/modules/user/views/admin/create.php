<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('index'),
    UserModule::t('Create'),
);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <?php echo UserModule::t("Create User"); ?>
            <span class="pull-right">
                <?php
                if (!isset($_GET['ajax']))
                    echo CHtml::link("Manage", array('index'), array('class' => 'btn btn-default'));
                ?>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <?php
        echo $this->renderPartial('_form', array('model' => $model, 'profile' => $profile));
        ?>
    </div>
</div>