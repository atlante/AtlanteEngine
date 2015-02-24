<?php

class OfbidHelper extends AppHelper {

  public $helpers = array(
      'Html'
  );

  function loginButton($text = 'Login with BrowserID', $tag = 'button', $options = array()) {
    $options = array_merge($options, array('onClick' => 'ofbid_login()'));
    $out = $this->Html->tag($tag, $text, $options);

    return $this->__head() . $out . $this->__foot();
  }

  function imageButton($color = 'green', $type = '') {
    $out = $this->Html->image("/ofbid/img/" . $type . "sign_in_$color.png", array('onClick' => 'ofbid_login()', 'style' => 'cursor:pointer'));

    return $this->__head() . $out . $this->__foot();
  }

  function __head() {
    $out = $this->Html->script('https://login.persona.org/include.js');
    $out .= $this->Html->script('http://code.jquery.com/jquery-1.7.1.min.js');
    return $out;
  }

  function __foot() {
    return '<script>
			function ofbid_login() {
				navigator.id.get(function(assertion) {
					if (assertion) {
						$.ajax({
							type: \'POST\',
							url: \'ofbid/authenticate\',
							data: { assertion: assertion },
							success: function(res, status, xhr) {
									window.location.href = res;
							},
							error: function(res, status, xhr) {
								alert("BrowserID Service Unavailable");
							}
						});
					}
				});
			}
			</script>';
  }

}
