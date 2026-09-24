<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #212529;
            color: white;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar a {
            color: #cfd8e3;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #0d6efd;
            color: white;
        }

        .sidebar .submenu a {
            padding-left: 50px;
            font-size: 14px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            padding: 25px;
            flex: 1;
        }

        .top-header {
            background: white;
            padding: 15px 25px;
            box-shadow: 0 2px 5px #ddd;
        }

        .stat-card {
            border: none;
            border-radius: 10px;
            color: white;
        }

        .stat-card i {
            font-size: 35px;
        }

        .product-img {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 5px;
        }

        footer {
            background: white;
            padding: 15px;
            text-align: center;
            border-top: 1px solid #ddd;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
                transition: width 0.3s;
            }

            .sidebar.show {
                width: 250px;
            }

            .main-content {
                margin-left: 0;
            }

            .content {
                padding: 15px;
            }
        }
    </style>
</head>