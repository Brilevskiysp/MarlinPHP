<?php 

class Form {
    private $name, $values = [], $errors = []; 
	
		protected $rules = []; 
   
    public function __construct($name) {
		$this->name = $name;
		

		if (isset($_SESSION["formdata"][$name])) {
			$this->values = $_SESSION["formdata"][$name];

			$this->errors = $_SESSION["formdata"]["$name-errors"];

			unset($_SESSION["formdata"][$name], $_SESSION["formdata"]["$name-errors"]);
		}
    }

		public function value($name) {
	    	if (isset($this->values[$name]))
		    echo $this->values[$name];
		}
	
		public function error($name) {
		    if (isset($this->errors[$name]))
			    echo $this->errors[$name];
		}
	
		public function validate($data) {
			$errors = [];
			foreach ($this->rules as $field_name=>$rule_options) {
				list($func, $message) = $rule_options;
				$success = call_user_func($func, $data, $field_name);
				if (!$success) {
					$errors[$field_name] = $message;

					unset($data[$field_name]);
				}
			}
			if (!empty($errors)) {
				$_SESSION["formdata"][$this->name] = $data;
				$_SESSION["formdata"]["$this->name-errors"] = $errors;
				return false;
			}
			return true;
		}
	
		static public function required(array $data, $name) {
			return !empty($data[$name]);
		}
	
		static public function email(array $data, $name) {
			return !empty($data[$name]) && filter_var($data[$name], FILTER_VALIDATE_EMAIL) !== false; 
		}
}

	class UserForm extends Form {

		protected $rules =
			[
				"name" => ["Form::required", "Необходимо заполнить имя пользователя"],
				"email"=> ["Form::email", "Необходимо ввести корректный e-mail"],
			];
}

?>