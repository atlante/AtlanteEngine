<?php

if (!Configure::read("Ofbid.sslCertPath")) {
  Configure::write('Ofbid.sslCertPath', false);
  $vpaths = APP::path('Vendor', 'Ofbid');
  foreach ($vpaths as $vpath) {
    if (file_exists($vpath . 'cacert.pem')) {
      Configure::write('Ofbid.sslCertPath', $vpath . 'cacert.pem');
    }
  }
}

if (!Configure::read("Ofbid.userModelName")) {
  Configure::write('Ofbid.userModelName', 'User');
}
if (!Configure::read('Ofbid.successfulLoginMessage')) {
  Configure::write('Ofbid.successfulLoginMessage', 'You have been logged in with your Mozilla BrowserID.');
}
if (!Configure::read("Ofbid.emailNotFoundMessage")) {
  Configure::write('Ofbid.emailNotFoundMessage', 'An acount for your email address was not found.');
}
if (!Configure::read("Ofbid.emailNotFoundRedirect")) {
  Configure::write('Ofbid.emailNotFoundRedirect', '/');
}
if (!Configure::read("Ofbid.defaultErrorMessage")) {
  Configure::write('Ofbid.defaultErrorMessage', 'An authentication error occured, BrowserID service may be down.');
}
if (!Configure::read("Ofbid.defaultErrorRedirect")) {
  Configure::write('Ofbid.defaultErrorRedirect', '/');
}