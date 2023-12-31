<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

if (is_array($arParams['TOP_RATING_DATA'] ?? null))
{
	$arResult['TOP_RATING_DATA'] = $arParams['TOP_RATING_DATA'];
}
elseif (
	$arResult["bIntranetInstalled"]
	&& !empty($arParams["LOG_ID"])
)
{
	$ratingData = \Bitrix\Socialnetwork\ComponentHelper::getLivefeedRatingData(array(
		'logId' => array($arParams["LOG_ID"]),
	));

	if (
		!empty($ratingData)
		&& !empty($ratingData[$arParams["LOG_ID"]])
	)
	{
		$arResult['TOP_RATING_DATA'] = $ratingData[$arParams["LOG_ID"]];
	}
}

if (
	!isset($arResult['PUSH&PULL_ACTION'])
	&& !empty($_REQUEST['REVIEW_ACTION'])
)
{
	$arResult['PUSH&PULL_ACTION'] = $_REQUEST['REVIEW_ACTION'];
}
