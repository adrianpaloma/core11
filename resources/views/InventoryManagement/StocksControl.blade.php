<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Vendor Stock Control</title>
    <style>
        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }
        .card-header {
            background-color: #744c24;
            color: white;
            font-size: 1.2rem;
            padding: 15px;
        }
        .badge-warning { background-color: #ffc107; }
        .badge-danger { background-color: #dc3545; }
        .badge-success { background-color: #28a745; }
    </style>
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('home.header')
        @include('home.sidenav')
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0" style="color: white;">Stocks Control</h5>
                                <button class="btn btn-add-stock" data-toggle="modal" data-target="#addStockModal">+ Add Stock</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Stock Quantity</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="stockTableBody">
                                        <!-- Stock items will be loaded here dynamically -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('home.footer')
    </div>
    
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    
    <script>
        function fetchStockData() {
            $.ajax({
                url: '/stocks', // Laravel route to fetch stock data
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    let stockTable = $('#stockTableBody');
                    stockTable.empty(); // Clear the table before inserting new data

                    response.forEach(stock => {
                        let statusBadge = `<span class="badge badge-success">In Stock</span>`;
                        if (stock.quantity <= 0) {
                            statusBadge = `<span class="badge badge-danger">Out of Stock</span>`;
                        } else if (stock.quantity < 10) {
                            statusBadge = `<span class="badge badge-warning">Low Stock</span>`;
                        }

                        let stockRow = `
                            <tr>
                                <td>${stock.name}</td>
                                <td>${stock.quantity}</td>
                                <td>${statusBadge}</td>
                                <td>
                                    <button class="btn btn-update-stock btn-sm">Update</button>
                                    <button class="btn btn-delete-stock btn-sm">Remove</button>
                                </td>
                            </tr>
                        `;
                        stockTable.append(stockRow);
                    });
                }
            });
        }

        $(document).ready(function() {
            fetchStockData();
            setInterval(fetchStockData, 5000); // Refresh stock data every 5 seconds
        });
    </script>
</body>
</html>
