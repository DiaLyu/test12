<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => "Баннер 2",
	"DESCRIPTION" => "Какое-то описание баннера",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "service",
		"CHILD" => array(
			"ID" => "bannerfood",
			"NAME" => "Название сервиса"
		)
	),
);
?>