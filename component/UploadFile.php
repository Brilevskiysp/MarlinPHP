<?php 

// Загрузка файла
class UploadFile {

		protected $db;

		public function __construct($db) {
        $this->db = $db;
		}

   	public function addFile($table, $files, $path) {
      	foreach ($files as $file) {
      			if ($file['name'] !== '') {
				        $name = mt_rand(0, 1000) . $file['name'];
				        move_uploaded_file($file['tmp_name'], "$path/$name");
				        $result = "$path/$name";
				        // $this->db->create($table, ['img' => "$path/$name", 'title' => $_POST['title']], $id);
      			}
    		}
    		return $result;
	  }

	  public function deleteFile($img) {
	  		$file = "$path/$name";
        if (file_exists($file))
            unlink($file);
	  }
}

?>