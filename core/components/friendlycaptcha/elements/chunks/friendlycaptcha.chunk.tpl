<script
  type="module"
  src="[[+friendlycaptcha.assetsurl]]components/friendlycaptcha/js/widget.module.min.js"
  async
  defer
></script>
<script nomodule src="[[+friendlycaptcha.assetsurl]]components/friendlycaptcha/js/widget.min.js" async defer></script>


<div class="frc-captcha" data-sitekey="[[++friendlycaptcha.sitekey]]"></div>

[[!+fi.error.friendlycaptcha:notempty=`<div>[[!+fi.error.friendlycaptcha]]</div>`]]
