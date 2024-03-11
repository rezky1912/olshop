<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Online Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Dashboard Online Shop</h1>
        <div class="row">
            <div class="card">
                <h2>Ringkasan Penjualan</h2>
                <p>Total Penjualan: <span class="total-penjualan">Rp 0</span></p>
                <p>Total Pesanan: <span class="total-pesanan">0</span></p>
            </div>
            <div class="card">
                <h2>Produk Terlaris</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Terjual</th>
                        </tr>
                    </thead>
                    <tbody class="produk-terlaris">
                        <!-- Data produk terlaris akan diisi melalui JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>