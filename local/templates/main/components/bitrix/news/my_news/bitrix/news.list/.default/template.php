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
?>

<div class="wrapper-news">
<?php foreach ($arResult['ITEMS'] as $arItem): ?>

	<?php
	$temporary = $arItem["~TIMESTAMP_X"];
	preg_match('#\d\d.\d\d.\d\d\d\d#', $temporary, $matches);
	$date = $matches[0];
	?>
	
		<div class="eachNewzz" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<h2><a href="<?= $arItem["~DETAIL_PAGE_URL"] ?>"><?= $arItem['NAME'] ?></a></h2>
			<div class="general">
				<p><?= $arItem['PREVIEW_TEXT'] ?></p>
			</div>
			<div class="time"><?= $date ?></div>
	    </div>
<? endforeach; ?>
</div>

