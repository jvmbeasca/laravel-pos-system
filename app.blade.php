<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'POS Dashboard')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .topbar {
            background: #0f172a;
            color: white;
            padding: 18px 45px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }

        .brand span {
            color: #38bdf8;
        }

        nav a {
            color: #cbd5e1;
            text-decoration: none;
            margin-left: 24px;
            font-size: 15px;
            font-weight: bold;
        }

        nav a:hover,
        nav a.active {
            color: #38bdf8;
        }

        .page-wrapper {
            width: 92%;
            max-width: 1150px;
            margin: 40px auto;
        }

        .welcome {
            background: linear-gradient(135deg, #0284c7, #0f172a);
            color: white;
            padding: 35px;
            border-radius: 16px;
            margin-bottom: 28px;
        }

        .welcome h1 {
            margin: 0 0 10px;
            font-size: 32px;
        }

        .welcome p {
            margin: 0;
            color: #e0f2fe;
        }

        .content-card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 5px 16px rgba(15, 23, 42, 0.08);
        }

        h1, h2 {
            color: #0f172a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: #0284c7;
            color: white;
            padding: 15px;
            text-align: left;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        tr:hover {
            background: #e0f2fe;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #64748b;
            font-size: 14px;
        }

        @media (max-width: 700px) {
            .topbar {
                padding: 18px 20px;
                display: block;
            }

            nav {
                margin-top: 15px;
            }

            nav a {
                margin: 0 15px 0 0;
                font-size: 13px;
            }

            .page-wrapper {
                width: 95%;
                margin: 25px auto;
            }

            .content-card {
                padding: 18px;
                overflow-x: auto;
            }

            table {
                min-width: 650px;
            }
        }
    </style>
</head>
<body>

    <header class="topbar">
        <div class="brand">
            Laravel<span>POS</span>
        </div>

        <nav>
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>

            <a href="{{ route('customers') }}"
               class="{{ request()->routeIs('customers') ? 'active' : '' }}">
                Customers
            </a>

            <a href="{{ route('users') }}"
               class="{{ request()->routeIs('users') ? 'active' : '' }}">
                Users
            </a>
        </nav>
    </header>

    <main class="page-wrapper">
        @yield('content')
    </main>

    <footer>
        Laravel POS Application &copy; {{ date('Y') }}
    </footer>

</body>
</html>