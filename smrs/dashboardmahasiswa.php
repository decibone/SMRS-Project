<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMRS Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F8AAAA;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 200px;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .menu-item {
            padding: 10px;
            margin: 5px 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .user-info {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .status-akademik, .task-board, .prestasi-akademik {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .task-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>DASHBOARD</h2>
            <div class="menu-item">Dashboard</div>
            <div class="menu-item">Registrasi</div>
            <div class="menu-item">Akademik</div>
            <div class="menu-item">Jadwal Kuliah</div>
            <div class="menu-item">Profile</div>
            <div class="menu-item">Logout</div>
        </div>
        <div class="main-content">
            <div class="user-info">
                <h3>Mochammad Qaynan Mahdaviqya</h3>
                <p>NIM: 2406012214070 | Informatika S5 Tank</p>
            </div>
            <div class="status-akademik">
                <h3>Status Akademik</h3>
                <p>Dosen Wali: Dr. Sutikno, S.T., M.Cs. (NIP: 197905242009121003)</p>
                <p>Semester Akademik Sekarang: 2024/2025 Ganjil</p>
                <p>Semester Studi: 5</p>
                <p>Status Akademik: AKTIF</p>
            </div>
            <div class="task-board">
                <h3>Task Board</h3>
                <div class="task-item">Jadwal Kuliah</div>
                <div class="task-item">IRS</div>
                <div class="task-item">KHS</div>
            </div>
            <div class="prestasi-akademik">
                <h3>Prestasi Akademik</h3>
                <p>IPk: 5.0</p>
                <p>SKSk: 87</p>
            </div>
        </div>
    </div>
</body>
</html>