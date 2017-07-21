<?php
	// --------------- CẤU HÌNH ĐƯỜNG DẪN TUYỆT ĐỐI-------------------------
	define('DS',DIRECTORY_SEPARATOR);// định nghĩa dấu \ 
	define('ROOT_PATH', dirname(__FILE__));// định nghĩa đường dẫn tới thư mục gôc
	define('LIBRARY_PATH', ROOT_PATH.DS.'libs'.DS);// định nghĩa đường dẫn tới thư viện
	define('CONTROLLER_PATH', ROOT_PATH.DS.'controllers'.DS);// định nghĩa đường dẫn tới folder controllers
	define('MODEL_PATH', ROOT_PATH.DS.'models'.DS);// định nghĩa đường dẫn tới folder models
	define('VIEW_PATH', ROOT_PATH.DS.'views'.DS);// định nghĩa đường dẫn tới folder views
	define('PUBLIC_PATH', ROOT_PATH.DS.'public'.DS);// định nghĩa đường dẫn tới folder public


	//------CẤU HÌNH ĐƯỜNG DẪN TƯƠNG DỐI- THƯỜNG DÙNG CHO CÁC FILE JAVASCRIPT+CSS----
	//define('ROOT_URL', '');
	define('PUBLIC_URL', 'public'.DS);
	define('VIEW_URL', 'views'.DS);


		// --------------- CẤU HÌNH DATABASE-------------------------

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'prjktdl');// định nghĩa tên database
	define('DB_TABLE', 'hanghoa');


 ?>