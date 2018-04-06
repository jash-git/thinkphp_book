ThinkPHP實戰 書本範例USBWEBSERVER實際測試紀錄

2018/04/06: chapter-1測試成功，有修改index.php才能執行
2018/04/06: chapter-2測試成功，有修改index.php才能執行
			◆config-demo.php是為了證明ThinkPHP是基於原生PHP環境，要使用者安心使用
			◆介紹/實測『配置』的優先權實驗:預設(ThinkPHP\Conf\convention.php)->共用(Application\Common\Conf\config.php)->模式(Application\Common\Config\config_XXX.php)->除錯(Application\Common\Config\debug.php)->Home(Application\Common\Conf\home.php)
			◆『配置』函數ThinkPHP\Common\functions.php的C函數