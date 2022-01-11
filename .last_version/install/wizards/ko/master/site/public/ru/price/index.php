<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Цены");
?>
    <div class="content">
                                
                                <div class="price">
                                    <h3>Полный прайс-лист "Мастер на все руки" актуальность (до 01.01.2037)</h3>
<?
if(CModule::IncludeModule("iblock"))
{

   $items = GetIBlockSectionList("#PRICE_IBLOCK_ID#", 0, Array("sort"=>"asc"), 100);
   while($arItem = $items->GetNext())
   {
$i++;
?>

     <table class="tpl-table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    №
                                                </th>
                                                <th>
                                                    <?=$arItem["NAME"]?>
                                                </th>
                                                <th>
                                                    Ед.
                                                </th>
                                                <th>
                                                    Цена, руб.
                                                </th>
                                            </tr>

<?

 $items2 = GetIBlockElementList("#PRICE_IBLOCK_ID#", $arItem["ID"], Array("SORT"=>"ASC"), 1000);
 $i2=0;
   while($arItem2 = $items2->GetNext())
   {

$db_props = CIBlockElement::GetProperty("#PRICE_IBLOCK_ID#", $arItem2["ID"], array("sort" => "asc"), Array("CODE"=>"PRICE"));
if($ar_props = $db_props->Fetch())
    $P =$ar_props["VALUE"];
else
    $P = false;

$db_props = CIBlockElement::GetProperty("#PRICE_IBLOCK_ID#", $arItem2["ID"], array("sort" => "asc"), Array("CODE"=>"ED"));
if($ar_props = $db_props->Fetch())
    $ED =$ar_props["VALUE"];
else
    $ED = false;


$i2++;

?>

                                            <tr>
                                                <td>
                                                    <?=$i;?>.<?=$i2;?>
                                                </td>
                                                <td>
                                                    <?=$arItem2["NAME"]?>
                                                </td>
                                                <td>
                                                   <?=$ED?>
                                                </td>
                                                <td>
                                                    <?=$P?>
                                                </td>
                                            </tr>


<?
}






?>

                                        </tbody>
                                    </table>
<?
}

}
?>


                                </div>
                                
                            </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>