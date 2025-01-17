<?php
include 'config.php';
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user info (optional, for display)
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #b5ffb2, #00cc00);
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #4caf50;
            display: flex;
            justify-content: space-between;
            padding: 15px;
            color: white;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
        }
        .navbar a.active {
            text-decoration: underline;
            font-weight: bold;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
            margin-top: 20px;
        }
        .quick-links {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        .quick-link-card {
            flex: 1 1 calc(25% - 30px);
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .quick-link-card:hover {
            transform: scale(1.05);
            background-color: #e6ffe6;
        }
        .quick-link-card a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
        }
        .quick-link-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span>Welcome, <?php echo htmlspecialchars($username); ?>!</span>
        <div>
            <a href="dashboard.php" class="active">Home</a>
            <a href="summarizer.php">Summarizer</a>
            <a href="file_manager.php">File Manager</a>
            <a href="pomodoro.php">Pomodoro Timer</a>
            <a href="flashcards.php">Flashcards</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="content">
        <h1>Welcome to Brainiac</h1>
        <p>Choose an option from the navigation bar or use the quick links below to get started.</p>

        <div class="quick-links">
            <div class="quick-link-card">
                <h3>Summarizer</h3>
                <p>Summarize your documents efficiently.</p>
                <a href="summarizer.php">Open Summarizer</a>
            </div>
            <div class="quick-link-card">
                <h3>File Manager</h3>
                <p>Organize and manage your files.</p>
                <a href="file_manager.php">Go to File Manager</a>
            </div>
            <div class="quick-link-card">
                <h3>Pomodoro Timer</h3>
                <p>Boost your productivity with focused sessions.</p>
                <a href="pomodoro.php">Use Timer</a>
            </div>
            <div class="quick-link-card">
                <h3>Flashcards</h3>
                <p>Create and review study flashcards.</p>
                <a href="flashcards.php">View Flashcards</a>
            </div>
        </div>
    </div>
    <script></script>
</body>
</html>
