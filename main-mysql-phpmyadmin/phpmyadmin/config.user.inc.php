<?php
# Extend session lifetime
$sessionValidity = 3600 * 24 * 365 * 1; // 1 year
$cfg['LoginCookieValidity'] = $sessionValidity; // http://docs.phpmyadmin.net/en/latest/config.html#cfg_LoginCookieValidity
ini_set('session.gc_maxlifetime', (string) $sessionValidity);
$cfg['ShowPhpInfo'] = true;
