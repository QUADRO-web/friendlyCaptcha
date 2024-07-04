<?php
/*
 * friendlyCaptchaRenderer
 *
 * Captcha Renderer
 *
 * Usage examples:
 * [[friendlyCaptchaRenderer? &tpl=`myCustomChunk`]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */


// properties
$tpl = $modx->getOption('tpl', $scriptProperties, 'friendlycaptcha', true);

// templating
return $modx->getChunk($tpl, array(
    'friendlycaptcha.assetsurl' => MODX_ASSETS_URL,
));