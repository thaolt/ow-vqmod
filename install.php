<?php

$plugin = OW::getPluginManager()->getPlugin('vqmod');
mkdir($plugin->getPluginFilesDir().DS.'xml',0777);
mkdir($plugin->getPluginFilesDir().DS.'vqcache',0777);
copy(
  $plugin->getRootDir().DS.'.htaccess',
  $plugin->getPluginFilesDir().DS.'.htaccess'
);

OW::getPluginManager()->addPluginSettingsRouteName('vqmod', 'vqmod.index');

