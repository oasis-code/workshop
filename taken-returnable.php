<?php include 'partials/head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include 'partials/navbar.php'; ?>
        <?php include 'partials/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mi-bg">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Returnable items Taken</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="returnable.php" class="btn float-right bg-success"></i> Returnable items
                            </a>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- filter -->
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body pb-1">
                                    <form action="enhanced-results.html">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="input-group ">
                                                                <input type="search" class="form-control form-control-md" placeholder="Enter Name" value="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn bg-success" value="Search">Search</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- filter -->
                        <div class="col-sm-12">
                            <div class="card">
                               
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-head-fixed">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>Image</th>
                                                <th>Item Name</th>
                                                <th>Person Name</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Qty taken</th>
                                            <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Img1</td>
                                                
                                                <td>Washer</td>
                                                <td>Andinda</td>
                                                <td>IT</td>
                                                <td>IT personel</td>
                                                <td><b>6</b></td>
                                                <td><a href ="return.php">Return</a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Img1</td>
                                                
                                                <td>Washer</td>
                                                <td>Andinda</td>
                                                <td>IT</td>
                                                <td>IT personel</td>
                                                <td><b>6</b></td>
                                                <td><a href ="return.php">Return</a></td>
                                                
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->                            
                            </div>
                            <div class="pb-2">
                                <nav aria-label="Contacts Page Navigation">
                                    <ul class="pagination m-0">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
        </div><!-- /.main-row -->

    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'partials/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include 'partials/foot.php'; ?>