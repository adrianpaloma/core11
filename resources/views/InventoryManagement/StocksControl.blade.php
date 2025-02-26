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
        .btn-add-stock {
            background: linear-gradient(135deg, #28a745, #218838);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .btn-add-stock:hover {
            background: linear-gradient(135deg, #218838, #1e7e34);
            transform: scale(1.05);
        }

        .btn-update-stock {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .btn-update-stock:hover {
            background: linear-gradient(135deg, #2980b9, #1f6690);
            transform: scale(1.05);
        }

        .btn-delete-stock {
            background: linear-gradient(135deg, #dc3545, #c82333);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .btn-delete-stock:hover {
            background: linear-gradient(135deg, #c82333, #b21f2d);
            transform: scale(1.05);
        }
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
                                    <tbody>
                                        <tr>
                                            <td>Coffee Beans</td>
                                            <td>30</td>
                                            <td><span class="badge badge-warning">Low Stock</span></td>
                                            <td>
                                                <button class="btn btn-update-stock btn-sm">Update</button>
                                                <button class="btn btn-delete-stock btn-sm">Remove</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Espresso Machines</td>
                                            <td>0</td>
                                            <td><span class="badge badge-danger">Out of Stock</span></td>
                                            <td>
                                                <button class="btn btn-update-stock btn-sm">Update</button>
                                                <button class="btn btn-delete-stock btn-sm">Remove</button>
                                            </td>
                                        </tr>
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
    
    <!-- Add Stock Modal -->
    <div class="modal fade" id="addStockModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Stock</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Stock Quantity</label>
                            <input type="number" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="home/assets/libs/js/main-js.js"></script>
</body>
</html>