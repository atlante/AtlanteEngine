OverFlow's BrowserID authentication plugin for CakePHP 2.x
======================================================

  I just stumbled on Mozilla's new OpenID competitor and liked it. I figured I would be albe to implement it on my currently existing user database without any major changes, so I started a simple cake plugin for it.

Prerequisites
-------------

  1. Your application should already have an authentication method setup, this plugin is simply designed to augment it.
  2. Your AppController needs to use the Auth and Session components
  3. Your server needs to support curl and ssl
  
  
To Install
----------

  1. Clone `https://github.com/OverFlow636/Ofbid.git` into `/Plugin/Ofbid`
  2. Load the plugin in your bootstrap.php with the bootstrap option true ex. `CakePlugin::load(array('Ofbid'=>array('bootstrap'=>true)));`
  3. In your AppController or in the controller you would like to use the button add the following helper `Ofbid.Ofbid`
  4. In the login view call `$this->Ofbid->loginButton()` to print the BrowserID login button
  
Configuration
-------------

  * Default settings will work for many applications, but there are many options to customize if you require
  * All session redirect messages
  * All redirect locations
  * Optional CakeEventListener can be configured to perform user login logic, without having to change plugin code
  * To configure any of theese options checkout the plugins `bootstrap.php` for the Configure keys, and write them in your applications config