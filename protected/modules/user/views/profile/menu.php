<nav class="navbar navbar-default" role="navigation" id="topmenu">    
    <ul class="nav navbar-nav">
        <?php
        if (UserModule::isAdmin()):
            ?>
            <li class="dropdown">
                <?php echo CHtml::link(UserModule::t('Manage User'), array('/user/admin'), array()); ?>
            </li>
        <?php else: ?>
            <li class="dropdown">
                <?php echo CHtml::link(UserModule::t('List User'), array('/user'), array('data-toggle' => 'collapse')); ?>
            </li>
        <?php endif; ?>
        <li class="dropdown">
            <?php echo CHtml::link(UserModule::t('Profile'), array('/user/profile'), array('data-toggle' => 'collapse')); ?>
        </li>
        <li class="dropdown">
            <?php echo CHtml::link(UserModule::t('Edit'), array('edit'), array('data-toggle' => 'collapse')); ?>
        </li>
        <li class="dropdown">
            <?php echo CHtml::link(UserModule::t('Change password'), array('changepassword'), array('data-toggle' => 'collapse')); ?>
        </li>
        <li class="dropdown">
            <?php echo CHtml::link(UserModule::t('Logout'), array('/user/logout'), array('data-toggle' => 'collapse')); ?>
        </li>
    </ul>
</nav>