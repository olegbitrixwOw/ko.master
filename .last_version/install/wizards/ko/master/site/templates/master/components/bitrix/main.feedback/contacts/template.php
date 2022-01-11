<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="col-lg-12">
                                        <div class="title-h2">Форма обратной связи</div>
                                        <div class="rf">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>

  <form>
                                                <div class="row min">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                           
<input type="text"  name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" class="form-control required" placeholder="Ваше имя" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">

<input type="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" class="form-control required" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">

 <textarea  name="MESSAGE" class="form-control required" placeholder="Сообщение"><?=$arResult["MESSAGE"]?></textarea>
                                                </div>
<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
                                                <div class="push10"></div>
<input type="submit"  name="submit" class="btn" value="Отправить" />
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

</form>
 <div class="push30"></div>
                                        </div>
                                    </div>
