<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hero-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 60px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px;
        }

        .hero-icon {
            font-size: 80px;
            color: #667eea;
            margin-bottom: 30px;
        }

        .btn-hero {
            padding: 15px 40px;
            font-size: 18px;
            border-radius: 10px;
            margin: 10px;
            transition: all 0.3s ease;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .feature-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 10px 0;
        }

        .feature-icon {
            font-size: 30px;
            color: #667eea;
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <div class="hero-card">
        <i class="fas fa-boxes hero-icon"></i>
        <h1 class="mb-3 fw-bold">Stock Management System</h1>
        <p class="lead text-muted mb-4">
            Sistem manajemen stok mudah digunakan untuk mengelola inventori Anda
        </p>

        <div class="d-grid gap-3 mb-4">
            <a href="{{ route('admin.products') }}" class="btn btn-primary btn-hero">
                <i class="fas fa-box me-2"></i> Management Products
            </a>
            <a href="{{ route('admin.transactions') }}" class="btn btn-info btn-hero text-white">
                <i class="fas fa-exchange-alt me-2"></i> Transactions
            </a>
        </div>

        <hr class="my-4">
        <div class="mt-4">
            <small class="text-muted">
                <i class="fas fa-user-tie"></i> Created by Mikel Ega Wijaya<br>
            </small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
