<?php

    class User {
        public $name;
        public $email;
        public $password;

        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        function get_name() {
            return $this->name;
        }

        function set_name($name) {
            $this->name = $name;
        }

    }

    // $user1 = new User();
    // $user1->name = 'Brad';
    // $user2 = new User();
    // $user2->set_name('Jake');

    $user3 = new User("Steve", "steveiscool@g.com", "gtrtrt");
    // echo $user3->name;

    //-------------INHERITENCE-------------

    class Employee extends User{
        public $title;

        public function __construct($name, $email, $password, $title) {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }

        public function get_title() {
            return $this->title;
        }
    }

?>