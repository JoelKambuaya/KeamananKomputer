
<?php
class AuthController
{
    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $error = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $username = $_POST["username"] ?? "";
            $password = $_POST["password"] ?? "";

            if ($username === "admin" && $password === "12345") {

                $_SESSION["username"] = $username;

                // DEMO OPEN REDIRECT (VULNERABLE)

                //versi aman

                $allowed = [
                'home' => '/WebBelanja.com/public/index.php',
                'dashboard' => '/WebBelanja.com/public/index.php?url=dashboard'
                ];

                $key = $_POST['redirect'] ?? 'home';
                $destination = $allowed[$key] ?? $allowed['home'];

                header("Location: " . $destination);
                exit;


                // versi rentan
                //  {
                // $redirect = $_POST['redirect']
                //     ?? '/WebBelanja.com/public/index.php';

                // if ($redirect === '') {
                //     $redirect = '/WebBelanja.com/public/index.php';
                // }

                // header("Location: " . $redirect);
                // exit;
                // }

            } else {
                $error = "Username atau password salah!";
            }
        }

        include __DIR__ . '/../views/Auth/login.php';
    }
}
