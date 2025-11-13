<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$title = "Admin Login";
include __DIR__ . "/includes/header.php";

// Database connection

require_once __DIR__ . '/config/db.php';


// Handle login form submission
$error_message = '';

    $database = new Database();
    $conn = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
   
    $input_username = $conn->real_escape_string($_POST['username']);
    $input_password = $_POST['password'];

    // Check if admin user exists
    $sql = "SELECT * FROM admin_users WHERE username = '$input_username' AND status = 'active'";
    $result = $conn->query($sql); // ✅ execute the query

    if ($result && $result->num_rows > 0) {
        $admin = $result->fetch_assoc();

        // Verify password (using password_verify for hashed passwords)
        if ($input_password === $admin['password']) { // ✅ secure password check
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_role'] = $admin['role'];

            // Redirect to dashboard
            header("Location: dashboard");
            exit();
        } else {
            $error_message = "Invalid username or password!";
        }
    } else {
        $error_message = "Invalid username or password!";
    }

    $conn->close();
}

?>

<style>
  .login-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .login-card {
    background: white;
    border-radius: 16px;
    padding: 2.5rem;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    width: 100%;
    max-width: 400px;
  }
  
  .login-logo {
    text-align: center;
    margin-bottom: 2rem;
  }
  
  .login-title {
    font-size: 1.875rem;
    font-weight: bold;
    color: #1f2937;
    margin-bottom: 0.5rem;
  }
  
  .login-subtitle {
    color: #6b7280;
    margin-bottom: 2rem;
  }
</style>

<div class="login-container">
  <div class="login-card">
    <div class="login-logo">
      <i class="fas fa-lock text-4xl text-indigo-600 mb-4"></i>
      <h1 class="login-title">Admin Login</h1>
      <p class="login-subtitle">Access your property dashboard</p>
    </div>

    <?php if (!empty($error_message)): ?>
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        <?php echo $error_message; ?>
      </div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
        <input type="text" name="username" 
               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
               placeholder="Enter your username" required>
      </div>
      
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input type="password" name="password" 
               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
               placeholder="Enter your password" required>
      </div>
      
      <button type="submit" name="login" 
              class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
        Sign In
      </button>
    </form>
    
    <div class="mt-6 text-center text-sm text-gray-600">
      <p>Contact administrator if you forgot your credentials</p>
    </div>
  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<?php include __DIR__ . "/includes/footer.php"; ?>