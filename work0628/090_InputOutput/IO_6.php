<?php
////// 字串模式
$content = <<<fileContent
PHP基本語法重點整理、
自訂函式寫作注意事項、
陣列與相關函式、
字串與相關函式、
物件導向程式設計、
狀態資訊管理、
XML/JSON資料處理、
PHP資料庫程式設計、
檔案系統與資料讀寫、
串流與網路程式設計、
程式安全與攻防實例、
Web Services、
PHP與jQuery、
jQuery Mobile整合運用
fileContent;
//fileContent結尾 一定要再切齊最前面

$fileSize = file_put_contents("data2.txt", $content); //file_put_contents是將$content寫進data2.txt
echo "File size: $fileSize <br />-- Done --"; //顯示大小
?>