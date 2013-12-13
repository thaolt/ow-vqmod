<?php

$adminMenu = new BOL_MenuItem();

$adminMenu->prefix = 'admin';
$adminMenu->key = 'sidebar_menu_plugins_vqmod';
$adminMenu->type = 'admin_plugins';
$adminMenu->routePath = 'vqmod.index';
$adminMenu->visibleFor = 2;
$adminMenu->order = 4;

BOL_NavigationService::getInstance()->saveMenuItem($adminMenu);
