<?php if ($this->Session->read('Auth.User.role') != 'admin'): ?>
  <script type='text/javascript'>(function() {
      var done = false;
      var script = document.createElement('script');
      script.async = true;
      script.type = 'text/javascript';
      script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript';
      document.getElementsByTagName('HEAD').item(0).appendChild(script);
      script.onreadystatechange = script.onload = function(e) {
        if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
          var w = new PCWidget({c: '4a4410d8-0e5f-4eac-bc2b-e6789321643d', f: true});
          done = true;
        }
      };
    })();</script>
<?php endif; ?>