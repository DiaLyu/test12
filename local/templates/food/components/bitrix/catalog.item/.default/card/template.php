<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>
<img src="<?=$item['PREVIEW_PICTURE_SECOND']['SRC']?>" alt="" class="tabs-image">
<div class="tabs-card-content">
	<h3 class="tabs-title"><?=$item['NAME']?></h3>
	<p class="tabs-description"><?=$item['PREVIEW_TEXT']?></p>
	<div class="tabs-info">
		<div class="tabs-good">
			<span class="tabs-price"><?=$item['ITEM_PRICES'][0]['BASE_PRICE']?> ₽</span>
			<span class="tabs-weight">500 гр</span>
		</div>
		<!-- /.tabs-good -->
		<button class="button button-outline">В корзину</button>
	</div>
</div>
