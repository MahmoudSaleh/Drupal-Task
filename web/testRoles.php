<?php

include_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

// Change the following line, replacing test with the name of your role
$ROLE_TO_ASSIGN = 'test';

// Change the number in the following line to the UID of your user account
$account = user_load(2);
$roles = user_roles();

foreach ($roles as $role_id => $role_name) {
  if ($role_name == $ROLE_TO_ASSIGN) {
    $account->roles[$role_id] = $role_name;
  }
}

user_save($account, array('roles' => $account->roles));

?>