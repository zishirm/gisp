<?php
$x = win32_create_service(array(
    'service'               => 'dummyphp',                                           // the name of your service
    'display'               => 'sample dummy PHP service',                           // short description
    'description'           => 'This is a dummy Windows service created using PHP.', // long description
    'params'                => '"' . __FILE__ . '"  run',                            // path to the script and parameters
    'recovery_delay'        => 12,                                               // Recovery action is executed after 2 minutes
    'recovery_action_1'     => WIN32_SC_ACTION_RESTART,                              // On first failure, restart the service
    'recovery_action_2'     => WIN32_SC_ACTION_RUN_COMMAND,                          // On second failure, execute the commmand
    'recovery_action_3'     => WIN32_SC_ACTION_NONE,                                 // On other failure, do nothing
    'recovery_reset_period' => 86400,                                                // Reset the fail counter after 1 day
    'recovery_enabled'      => true,                                                 // Enable the recovery parameter
    'recovery_reboot_msg'   => null,                                                 // Do not define a reboot message, it's not needed here
    'recovery_command'      => "c:\clean-service.bat",                               // When the action is WIN32_SC_ACTION_RUN_COMMAND, execute this command
));
debug_zval_dump($x);
?>