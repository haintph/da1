<?php
require_once __DIR__ . '/../../models/Auth.php';
session_start();
class AccountController
{
    private $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }
    public function MyAccount()
    {
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $email = $_SESSION['email'];
            $role = $_SESSION['role'];
            $user = $this->authModel->findUserByEmail($email);
            return view('client.account.my-account', compact('user'));
        } else {
            $_SESSION['message'] = "Bạn cần đăng nhập để truy cập trang này.";
            header("Location: ?ctl=sign-in"); // Chuyển hướng về trang đăng nhập
            exit;
        }
    }



    public function SignIn($email = null, $password = null)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Kiểm tra dữ liệu POST
            $email = $_POST['email'] ?? null;
            $password = $_POST['password'] ?? null;

            if (empty($email) || empty($password)) {
                $_SESSION['message'] = "Vui lòng điền đầy đủ thông tin!";
                return view('client.account.sign-in');
            }

            $user = $this->authModel->findUserByEmail($email);
            if (!$user) {
                $_SESSION['message'] = "Email không tồn tại!";
                return view('client.account.sign-in');
            }

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['message'] = "Đăng nhập thành công!";
                return view('client.account.sign-in');
                exit;
            } else {
                $_SESSION['message'] = "Mật khẩu sai!";
                return view('client.account.sign-in');
            }
        }
        return view('client.account.sign-in');
    }



    public function SignUp($username = null, $email = null, $password = null)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $existingUser = $this->authModel->checkUserExists($email, $username);
            if ($existingUser) {
                $_SESSION['message'] = "Đã có user";
                return view('client.account.sign-up');
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            if ($this->authModel->createUser($username, $email, $hashedPassword)) {
                $_SESSION['message'] = "Đăng kí thành công";
                return view('client.account.sign-up');
                exit;
            } else {
                return "Đã xảy ra lỗi, vui lòng thử lại!";
                return view('client.account.sign-up');
            }
        }
        return view('client.account.sign-up');
    }

    public function editProfile()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'];
            $role = $_POST['role'];
            $image = '';
            if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                $file = $_FILES['image'];
                $imageName = uniqid() . '-' . basename($file['name']);
                $targetPath = __DIR__ . "/../../images/users/" . $imageName;

                if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                    $image = $imageName;
                    echo "Ảnh đã được tải lên thành công.";
                } else {
                    echo "Lỗi khi tải ảnh lên.";
                    exit();
                }
            }


            if (empty($username) || empty($email)) {
                echo "Vui lòng điền đầy đủ thông tin.";
                return;
            }
            $user = new AuthModel();
            $data = [
                'username' => $username,
                'image' => $image ?: null,
                'email' => $email,
                'role' => $role
            ];
            $user->edit($data);
            header("Location: " . ROOT_URL . "?ctl=my-account");
            exit();
        }
    }

    public function LogOut()
    {
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
            session_destroy();

            $_SESSION['message'] = "Bạn đã đăng xuất thành công.";
            header("Location: ?ctl=sign-in");
            exit;
        } else {
            $_SESSION['message'] = "Bạn chưa đăng nhập.";
            header("Location: ?ctl=sign-in");
            exit;
        }
    }
}
