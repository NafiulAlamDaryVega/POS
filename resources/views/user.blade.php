<html>
    <head>
        <title>User</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
            }

            .container {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                max-width: 400px;
                width: 90%;
            }

            h1 {
                color: #333;
            }

            h2 {
                color: #666;
            }

            p {
                color: #888;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Halaman User</h1>
            <h2>User Profile</h2>
            <p>User ID: {{ $id }}</p>
            <p>User Name: {{ $name }}</p>
            <p>by Nafi'ul Alam Dary Vega</p>
        </div>
    </body>
</html>
