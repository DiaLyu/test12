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
<div class="container">
            <div class="promo">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<section class="card card-text-light minimum-basket">
		<img src=<?=$arItem["PREVIEW_PICTURE"]["SRC"]?> alt="Минимум усилий"  class="card-image">
		<div class="card-header">
			<h3 class="card--title"><?=$arItem["NAME"]?></h3>
			<p class="card-description"><?echo $arItem["PREVIEW_TEXT"];?></p>
		</div>
		<!-- /.card-header -->
		<div class="card-footer">

			<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
				<strong class="card-price">
					<span>ОТ</span> <?if($pid == "PRICE"): echo $arProperty["DISPLAY_VALUE"]; endif?> ₽
				</strong>
			<?endforeach;?>
			<span class="card-delivery">
				стоимость доставки до 200 ₽
			</span>
			<a href="#" class="button button-default">Собрать корзину</a>
		</div>
		<!-- /.card-footer -->

	</section>
<?endforeach;?>
	</div>
</div>
