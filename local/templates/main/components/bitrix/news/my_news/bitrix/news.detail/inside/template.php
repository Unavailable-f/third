<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$date = substr($arResult["~TIMESTAMP_X"], 0, 10) 
?>

<div class="article-card">
    <div class="article-card__title"><?= $arResult['NAME'] ?></div>
    <div class="article-card__date"><?= $date ?></div>
    <div class="article-card__content">
        <div class="article-card__image sticky"><img 
                                                     src="<?= $arResult["DETAIL_PICTURE"]['SRC'] ?>" alt="" data-object-fit="cover"/>
        </div>
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3"><p><?= $arResult['DETAIL_TEXT'] ?></p></div>
        </div>
</div>

