<?php 
    class MainController {
        public function index () {
            if (!isset($_SESSION["login"])) {
                header("Location: ?c=m&a=l");
            }
            require "pages/templates/header.php";
            require "pages/home.php";
            require "pages/templates/footer.php";
        }

        public function login () {
            require "pages/auth/login.php";
        }

        public function sessionDestroy() {
            session_destroy();
            header("Location: index.php?c=m&a=l");
        }
    }
?>