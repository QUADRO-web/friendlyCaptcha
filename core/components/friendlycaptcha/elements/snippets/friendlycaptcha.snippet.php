<?php
/*
 * friendlyCaptcha
 *
 * Formit hook to validate captcha
 *
 * Usage examples:
 * [[FormIt? &hooks=`friendlyCaptcha`]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

$corePath = $modx->getOption('friendlycaptcha.core_path', null, $modx->getOption('core_path') . 'components/friendlycaptcha/');
$friendlycaptcha = $modx->getService('friendlycaptcha', 'friendlycaptcha', $corePath . 'model/friendlycaptcha/', array(
    'core_path' => $corePath
));

// init friendlyCaptcha
$frc = new FriendlyCaptcha($modx);

// check token via api
$res = $frc->validate($hook->getValue('frc-captcha-solution'));

// validate input
if ($res->success) return true;

// get error message
$error = $frc->getErrorMessage($res->errors);

// add error
$hook->addError('friendlycaptcha', $error);

return false;