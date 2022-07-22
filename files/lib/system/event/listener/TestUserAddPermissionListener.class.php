<?php

namespace wcf\system\event\listener;

class TestUserAddPermissionListener implements IParameterizedEventListener
{
    /**
     * @inheritDoc
     */
    public function execute($eventObj, $className, $eventName, array &$parameters)
    {
        $eventObj->neededPermissions = ['user.profile.isNoTestGroup'];
    }
}
