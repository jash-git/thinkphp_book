ThinkPHP實戰 書本範例USBWEBSERVER實際測試紀錄

2018/04/06: chapter-1測試成功，有修改index.php才能執行
2018/04/06: chapter-2測試成功，有修改index.php才能執行
			◆config-demo.php是為了證明ThinkPHP是基於原生PHP環境，要使用者安心使用
			◆介紹/實測『配置』的優先權實驗:預設(ThinkPHP\Conf\convention.php)->共用(Application\Common\Conf\config.php)->模式(Application\Common\Config\config_XXX.php)->除錯(Application\Common\Config\debug.php)->Home(Application\Common\Conf\home.php)
			◆『配置』函數ThinkPHP\Common\functions.php的C函數
2018/04/07: chapter-3測試成功，有修改index.php才能執行
			◆路由測試
				▼ http://localhost:8080/thinkphp_book/home/test/ X
				▼ http://localhost:8080/thinkphp_book/home/test/test O
2018/04/08: chapter-4測試成功，有修改index.php才能執行
			◆JashliaoController.class.php
				▼建立控制器步驟:
					▽檔案命名「xxxController.class.php」並放在「模塊\Controller」目錄下
					▽使用對應 namespace 和 use Think\Controller;
					▽類別要繼承Controller
					▽建立對應action
				▼測試結果
					▽http://localhost:8080/thinkphp_book/jashliao X
						FILE: C:\Users\usernb\Desktop\USBWebserver v8.6\root\thinkphp_book\ThinkPHP\Library\Think\Dispatcher.class.php 　LINE: 178
					▽http://localhost:8080/thinkphp_book/jashliao/jashliao
						FILE: C:\Users\usernb\Desktop\USBWebserver v8.6\root\thinkphp_book\ThinkPHP\Library\Think\Dispatcher.class.php 　LINE: 178
					▽http://localhost:8080/thinkphp_book/home/jashliao X
						FILE: C:\Users\usernb\Desktop\USBWebserver v8.6\root\thinkphp_book\ThinkPHP\Library\Think\Controller.class.php 　LINE: 170
					▽http://localhost:8080/thinkphp_book/home/jashliao/jashliao O
			◆TestController.class.php
				▼函數名稱用到系統關鍵字，必須在「模塊\Conf」目錄下的config.php中開啟 「'ACTION_SUFFIX' => 'Action'」			
				▼未開啟測試結果
				▽public function testAction()
					-http://localhost:8080/thinkphp_book/home/test/test X
						FILE: C:\Users\usernb\Desktop\USBWebserver v8.6\root\thinkphp_book\ThinkPHP\Library\Think\Controller.class.php 　LINE: 170
				▽public function test()		
					-http://localhost:8080/thinkphp_book/home/test/test O
				▽public function listAction()
					-http://localhost:8080/thinkphp_book/home/test/list X
						FILE: C:\Users\usernb\Desktop\USBWebserver v8.6\root\thinkphp_book\ThinkPHP\Library\Think\Controller.class.php 　LINE: 170
				▽public function list()
					-http://localhost:8080/thinkphp_book/home/test/list X
						syntax error, unexpected 'list' (T_LIST), expecting identifier (T_STRING)
			◆函數名稱用到系統關鍵字，必須在「模塊\Conf」目錄下的config.php中開啟 「'ACTION_SUFFIX' => 'Action'」一啟用全系統都要改，很麻煩，所以一定要避開使用關鍵字做為函數名
			◆「'ACTION_SUFFIX' => 'Action'」還有一個功能 那就是把一個函數變成執行前+執行中+執行後三個函數
				▼P37
					▽public function _berfor_xxx()
					▽public function xxx()
					▽public function _after_xxx()
			◆「'URL_CASE_INSENSITIVE' => true」URL路徑目錄不分大小寫參數設定
				▼P40
			◆U函數:產生URL	(可給等待跳轉使用)
				▼P41
			◆json/xml字串輸出: $this->ajaxReturn($xxx) 或 $this->ajaxReturn($xxx,'xml')
				▼P43
			◆網址重新自動立即轉址(跳到登錄頁): $this->redirect('函數名');
				▼P44
			◆等待跳轉: $this->succes(...); 或 $this->error(...);
				▼P46
			◆判斷呼叫該PHP的模式為何[POST/GET/DELETE/...]
				▼P46
			◆I函數:讀取參數輸入
				▼P48
			◆使用空操作/空控制器 實現防呆操作
				▼P50
2018/04/15: chapter-5測試成功
			◆Application\Common\Conf\config.php設定DB連線資訊
			◆建立空的M直接存取DB
				▼JashliaoController.class.php
					class JashliaoController extends Controller
					{
						public function jashliao()
						{
							echo '您访问了home/jashliao/jashliao';
						}
						public function showuserdata()
						{
							$m = new Model();
							$data = $m->query('SELECT * FROM c5_user');
							print_r($data);
						}	
					}				
				▼測試結果
					▽http://localhost:8080/thinkphp_book/home/jashliao/jashliao O
					▽http://localhost:8080/thinkphp_book/home/jashliao/showuserdata O
---------------------------------------------------------------------------

MVC->自己使用時 M使用空的，V用模板網頁，C自己寫