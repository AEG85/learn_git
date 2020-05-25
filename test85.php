<?


require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("тест85");
?>Text here....
<?
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
Bitrix\Main\Loader::includeModule('iblock');

echo Bitrix\Iblock\IblockTable::getTableName();


?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>