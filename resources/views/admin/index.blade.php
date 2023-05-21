@extends('admin.admin_dashboard')
@section('admin')
    <style>
        /* Table styles */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table tbody td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <div class="page-content">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <div class="d-flex align-items-center">

                            <h5 class="mb-0 text-white">
                                <?php
                                $connection = mysqli_connect('localhost', 'root', '', 'laravel');
                                $query = 'SELECT id FROM orders ORDER BY id';
                                $query_run = mysqli_query($connection, $query);
                                
                                $row = mysqli_num_rows($query_run);
                                
                                echo '<h3> ' . $row . '</h3>';
                                ?>
                            </h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-cart-add'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Orders</p>
                            <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-orange">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">
                                <?php
                                $connection = mysqli_connect('localhost', 'root', '', 'laravel');
                                $query = 'SELECT id FROM products ORDER BY id';
                                $query_run = mysqli_query($connection, $query);
                                
                                $row = mysqli_num_rows($query_run);
                                
                                echo '<h3> ' . $row . '</h3>';
                                ?>
                            </h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-bed'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Products</p>
                            <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-coffee-bean'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">
                                <?php
                                $connection = mysqli_connect('localhost', 'root', '', 'laravel');
                                $query = 'SELECT id FROM users ORDER BY id';
                                $query_run = mysqli_query($connection, $query);
                                
                                $row = mysqli_num_rows($query_run);
                                
                                echo '<h3> ' . $row . '</h3>';
                                ?>
                            </h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-user'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Visitors</p>
                            <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">
                                <?php
                                $connection = mysqli_connect('localhost', 'root', '', 'laravel');
                                $query = 'SELECT id FROM customers ORDER BY id';
                                $query_run = mysqli_query($connection, $query);
                                
                                $row = mysqli_num_rows($query_run);
                                
                                echo '<h3> ' . $row . '</h3>';
                                ?>
                            </h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-group'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Customers</p>
                            <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">
                                    <?php
                                    $connection = mysqli_connect('localhost', 'root', '', 'laravel');
                                    $query = 'SELECT role FROM users ORDER BY role';
                                    $query_run = mysqli_query($connection, $query);
                                    
                                    $row = mysqli_num_rows($query_run);
                                    
                                    echo '<h3> ' . $row . '</h3>';
                                    ?>
                                </h5>
                                <div class="ms-auto">
                                    <i class='h1 bx bxs-group'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Total Agents</p>
                                <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card radius-10 bg-gradient-ibiza">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">
                                    <?php
                                    $connection = mysqli_connect('localhost', 'root', '', 'laravel');
                                    $query = 'SELECT id FROM payments ORDER BY id';
                                    $query_run = mysqli_query($connection, $query);
                                    
                                    $row = mysqli_num_rows($query_run);
                                    
                                    echo '<h3> ' . $row . '</h3>';
                                    ?>
                                </h5>
                                <div class="ms-auto">
                                    <i class='h1 bx bxs-dollar-circle'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Total Revenue</p>
                                <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Agents List</h5>
                </div>
                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                </div>
            </div>
            <hr>
            <div class="table-responsive container">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection credentials
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $database = 'laravel';
                        
                        // Create a connection
                        $conn = new mysqli($servername, $username, $password, $database);
                        
                        // Check the connection
                        if ($conn->connect_error) {
                            die('Connection failed: ' . $conn->connect_error);
                        }
                        
                        // Query to fetch agents
                        $sql = "SELECT * FROM users WHERE role = 'Agent'";
                        $result = $conn->query($sql);
                        
                        // Check if any agents were found
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td>' . $row['name'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo "<tr><td colspan='3'>No agents found.</td></tr>";
                        }
                        
                        // Close the connection
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
            <!--end row-->
        @endsection
