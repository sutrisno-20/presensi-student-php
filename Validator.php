<?php
    class Validator {
        private $data;
        private $errors = array();

        public function __construct($data) {
            $this->data = $data;
        }

        public function validate($rules) {
            foreach($rules as $field => $rule) {
                $rulesArray = explode("|", $rule);
                foreach($rulesArray as $singleRule) {
                    if(strpos($singleRule,":") !== FALSE) {
                        list($ruleName, $ruleValue) = explode(":", $singleRule);
                    }else{
                        $ruleName = $singleRule;
                        $ruleValue = "";
                    }
                    $methodName = "validate".ucfirst($ruleName);
                    $this->$methodName($field, $ruleValue);
                }
            }
        }   

        public function passes() {
            return empty($this->errors);
        }

        public function errors() {
            return $this->errors;
        }

        public function addError($field, $message) {
            $this->errors[$field][] = $message;
        }

        private function validateRequired($field, $ruleValue) {
            if(!isset($this->data[$field]) || empty($this->data[$field])) {
                $this->addError($field, "The $field field is required");
            }
        }

        private function validateEmail($field,$ruleValue) {
            if(!filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)) {
                $this->addError($field,"The $field field is must be a valid email");
            }
        }

        private function validateMin($field,$ruleValue) {
            if(strlen($this->data[$field]) < $ruleValue) {
                $this->addError($field,"The $field field is must be at least $ruleValue character");
            }
        }

       private function validateMax($field,$ruleValue) {
        if(strlen($this->data[$field]) > $ruleValue) {
            $this->addError($field,"The $field field is must be maximum $rulesValue character");
        }
       }
    }