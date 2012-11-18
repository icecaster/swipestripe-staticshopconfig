swipestripe-staticshopconfig
============================

Allows setting static shopconfig vars.
Mainly avoiding your client to mess with important settings.

Add this to your mysite/_config.php:

StaticShopConfig::enable();
StaticShopConfig::set("LicenceKey", "...");

