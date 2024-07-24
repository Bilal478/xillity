<?require("./global.php");?>
<!DOCTYPE html>

<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>


<?include("./includes/views/head2.php");?>

</head>

<body class="body-padding body-p-top">

    <!-- preloader start -->

    <div class="preloader d-none">

        <div class="loader">

            <span></span>

            <span></span>

            <span></span>

        </div>

    </div>

    <!-- preloader end -->



    <!-- header start -->

    <?include("./includes/views/navbar.php"); ?>

    <!-- header end -->



    <!-- profile right sidebar start -->

    <?include("./includes/views/rightsidebar.php"); ?>

    <!-- right sidebar end -->



    <!-- main sidebar start -->

    <?include("./includes/views/leftmenu2.php"); ?>

    <!-- main sidebar end -->



    <!-- main content start -->

    <div class="main-content">

        <div class="dashboard-breadcrumb mb-25">

            <h2>Tables</h2>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Basic Tables</h5>

                    </div>

                    <div class="panel-body">

                        <div class="row g-3">

                            <div class="col-lg-6">

                                <div class="card">

                                    <div class="card-header">

                                        Default Table

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Use <code>table</code> class to show bootstrap-based default table.</p>

                                        <div class="table-responsive">

                                            <table class="table">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Total</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="card">

                                    <div class="card-header">

                                        Striped Rows

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Use <code>table-striped</code> class to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>

                                        <div class="table-responsive">

                                            <table class="table table-striped">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Total</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="card">

                                    <div class="card-header">

                                        Striped columns

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Use <code>.table-striped-columns</code> to add zebra-striping to any table column.</p>

                                        <div class="table-responsive">

                                            <table class="table table-striped-columns">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Total</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="card">

                                    <div class="card-header">

                                        Table Colors

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Use contextual classes to color tables, table rows or individual cells.</p>

                                        <div class="table-responsive">

                                            <table class="table table-success">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Total</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>$240</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-header">

                                        Hoverable Table

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>

                                        <div class="row g-3">

                                            <div class="col-lg-6">

                                                <div class="table-responsive">

                                                    <table class="table table-hover">

                                                        <thead>

                                                            <tr>

                                                                <th>Invoice ID</th>

                                                                <th>Client</th>

                                                                <th>Due Date</th>

                                                                <th>Total</th>

                                                                <th>Status</th>

                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <tr>

                                                                <td>#INV-0001</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-primary px-2">Partially Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0002</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-success px-2">Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0003</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-primary px-2">Partially Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0004</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-success px-2">Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0005</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-primary px-2">Partially Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0006</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-success px-2">Paid</span>

                                                                </td>

                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>

                                            <div class="col-lg-6">

                                                <div class="table-responsive">

                                                    <table class="table table-striped table-hover">

                                                        <thead>

                                                            <tr>

                                                                <th>Invoice ID</th>

                                                                <th>Client</th>

                                                                <th>Due Date</th>

                                                                <th>Total</th>

                                                                <th>Status</th>

                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <tr>

                                                                <td>#INV-0001</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-primary px-2">Partially Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0002</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-success px-2">Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0003</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-primary px-2">Partially Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0004</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-success px-2">Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0005</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-primary px-2">Partially Paid</span>

                                                                </td>

                                                            </tr>

                                                            <tr>

                                                                <td>#INV-0006</td>

                                                                <td>Hazel Nutt</td>

                                                                <td>9 Aug 2018</td>

                                                                <td>$240</td>

                                                                <td>

                                                                    <span class="badge bg-success px-2">Paid</span>

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

                            <div class="col-lg-4">

                                <div class="card">

                                    <div class="card-header">

                                        Bordered tables

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>

                                        <div class="table-responsive">

                                            <table class="table table-bordered">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="card">

                                    <div class="card-header">

                                        Table Border Color

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Border color utilities can be added to change colors:</p>

                                        <div class="table-responsive">

                                            <table class="table table-bordered border-primary">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="card">

                                    <div class="card-header">

                                        Table without borders

                                    </div>

                                    <div class="card-body">

                                        <p class="fs-14 pb-1 mb-10">Add <code>.table-borderless</code> for a table without borders.</p>

                                        <div class="table-responsive">

                                            <table class="table table-borderless">

                                                <thead>

                                                    <tr>

                                                        <th>Invoice ID</th>

                                                        <th>Client</th>

                                                        <th>Due Date</th>

                                                        <th>Status</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>#INV-0001</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0002</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0003</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0004</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0005</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-primary px-2">Partially Paid</span>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>#INV-0006</td>

                                                        <td>Hazel Nutt</td>

                                                        <td>9 Aug 2018</td>

                                                        <td>

                                                            <span class="badge bg-success px-2">Paid</span>

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

                </div>

            </div>

            <div class="col-12">

                <div class="panel">

                    <div class="panel-header">

                        <h5>Data Tables</h5>

                    </div>

                    <div class="panel-body">

                        <div class="row g-3">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-header">

                                        Default Data Table

                                    </div>

                                    <div class="card-body">

                                        <table class="table table-dashed table-hover digi-dataTable table-striped" id="componentDataTable">

                                            <thead>

                                                <tr>

                                                    <th class="no-sort">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </th>

                                                    <th>Name</th>

                                                    <th>Username</th>

                                                    <th>Last Active</th>

                                                    <th>Date Registered</th>

                                                    <th>Email</th>

                                                    <th>Orders</th>

                                                    <th>Total Spend</th>

                                                    <th>AOV</th>

                                                    <th>Country / Region</th>

                                                    <th>City</th>

                                                    <th>Region</th>

                                                    <th>Postal Code</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-header">

                                        Data Table Body Scroll

                                    </div>

                                    <div class="card-body">

                                        <table class="table table-dashed table-hover digi-dataTable table-striped" id="componentDataTable2">

                                            <thead>

                                                <tr>

                                                    <th class="no-sort">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </th>

                                                    <th>Name</th>

                                                    <th>Username</th>

                                                    <th>Last Active</th>

                                                    <th>Date Registered</th>

                                                    <th>Email</th>

                                                    <th>Orders</th>

                                                    <th>Total Spend</th>

                                                    <th>AOV</th>

                                                    <th>Country / Region</th>

                                                    <th>City</th>

                                                    <th>Region</th>

                                                    <th>Postal Code</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td><a href="#">Shaikh Abu Dardah</a></td>

                                                    <td>admin</td>

                                                    <td>December 27, 2022</td>

                                                    <td>November 23, 2021</td>

                                                    <td><a href="#">example@info.com</a></td>

                                                    <td>2</td>

                                                    <td>$74.00</td>

                                                    <td>$74.00</td>

                                                    <td>BD</td>

                                                    <td>Dhaka</td>

                                                    <td>CA</td>

                                                    <td>12563</td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-header">

                                        Customized Data Table

                                    </div>

                                    <div class="card-body">

                                        <div class="table-filter-option">

                                            <div class="row g-3">

                                                <div class="col-xl-9 col-md-8">

                                                    <div class="row g-3">

                                                        <div class="col">

                                                            <form class="row g-2">

                                                                <div class="col">

                                                                    <select class="form-control form-control-sm" data-placeholder="Bulk action">

                                                                        <option value="">Bulk action</option>

                                                                        <option value="0">Edit</option>

                                                                        <option value="1">Move To Trash</option>

                                                                    </select>

                                                                </div>

                                                                <div class="col">

                                                                    <button class="btn btn-sm btn-primary w-100">Apply</button>

                                                                </div>

                                                            </form>

                                                        </div>

                                                        <div class="col">

                                                            <select class="form-control form-control-sm">

                                                                <option value="0">All Category</option>

                                                                <option value="1">Cloth</option>

                                                                <option value="2">Fashion</option>

                                                                <option value="3">Bag</option>

                                                                <option value="4">Food</option>

                                                                <option value="5">Medicine</option>

                                                                <option value="6">Watch</option>

                                                                <option value="7">Smart Phone</option>

                                                            </select>

                                                        </div>

                                                        <div class="col">

                                                            <select class="form-control form-control-sm">

                                                                <option value="0">All Product Type</option>

                                                                <option value="1">Downloadable</option>

                                                                <option value="2">Virtual</option>

                                                            </select>

                                                        </div>

                                                        <div class="col">

                                                            <select class="form-control form-control-sm">

                                                                <option value="0">All Product Stock</option>

                                                                <option value="1">In stock</option>

                                                                <option value="2">Out of stock</option>

                                                                <option value="3">On backorder</option>

                                                            </select>

                                                        </div>

                                                        <div class="col">

                                                            <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-xl-3 col-md-4 d-flex justify-content-between">

                                                    <div id="tableSearch"></div>

                                                    <div id="productTableLength"></div>

                                                </div>

                                            </div>

                                        </div>

                                        <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">

                                            <thead>

                                                <tr>

                                                    <th class="no-sort">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" id="markAllProduct">

                                                        </div>

                                                    </th>

                                                    <th>Product</th>

                                                    <th>SKU</th>

                                                    <th>Stock</th>

                                                    <th>Price</th>

                                                    <th>Sales</th>

                                                    <th>Rating</th>

                                                    <th>Published</th>

                                                    <th>Action</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="table-product-card">

                                                            <div class="part-img">

                                                                <img src="assets/images/product-img-1.jpg" alt="Image">

                                                            </div>

                                                            <div class="part-txt">

                                                                <span class="product-name">A4TECH BH300 Bluetooth Wireless Headset</span>

                                                                <span class="product-category">Category: electronics/music</span>

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td>CSJ0158</td>

                                                    <td>12</td>

                                                    <td>$560</td>

                                                    <td>256</td>

                                                    <td>

                                                        <div class="rating">

                                                            <div class="star">

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star"></i>

                                                            </div>

                                                            <div class="rating-amount">(42)</div>

                                                        </div>

                                                    </td>

                                                    <td>12/24/2023 01:05 PM</td>

                                                    <td>

                                                        <div class="btn-box">

                                                            <button><i class="fa-light fa-eye"></i></button>

                                                            <button><i class="fa-light fa-pen"></i></button>

                                                            <button><i class="fa-light fa-trash"></i></button>

                                                        </div>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="table-product-card">

                                                            <div class="part-img">

                                                                <img src="assets/images/product-img-4.jpg" alt="Image">

                                                            </div>

                                                            <div class="part-txt">

                                                                <span class="product-name">Premium Blend Tea</span>

                                                                <span class="product-category">Category: Drink/tea</span>

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td>CSJ0158</td>

                                                    <td>22</td>

                                                    <td>$160</td>

                                                    <td>756</td>

                                                    <td>

                                                        <div class="rating">

                                                            <div class="star">

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star"></i>

                                                            </div>

                                                            <div class="rating-amount">(380)</div>

                                                        </div>

                                                    </td>

                                                    <td>10/21/2022 01:05 PM</td>

                                                    <td>

                                                        <div class="btn-box">

                                                            <button><i class="fa-light fa-eye"></i></button>

                                                            <button><i class="fa-light fa-pen"></i></button>

                                                            <button><i class="fa-light fa-trash"></i></button>

                                                        </div>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox">

                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="table-product-card">

                                                            <div class="part-img">

                                                                <img src="assets/images/product-img-3.jpg" alt="Image">

                                                            </div>

                                                            <div class="part-txt">

                                                                <span class="product-name">Chris Adams Body Spray Classic Denim</span>

                                                                <span class="product-category">Category: Fashion/perfume</span>

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td>CSJ0158</td>

                                                    <td>12</td>

                                                    <td>$560</td>

                                                    <td>256</td>

                                                    <td>

                                                        <div class="rating">

                                                            <div class="star">

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star starred"></i>

                                                                <i class="fa-sharp fa-solid fa-star"></i>

                                                            </div>

                                                            <div class="rating-amount">(42)</div>

                                                        </div>

                                                    </td>

                                                    <td>12/24/2023 01:05 PM</td>

                                                    <td>

                                                        <div class="btn-box">

                                                            <button><i class="fa-light fa-eye"></i></button>

                                                            <button><i class="fa-light fa-pen"></i></button>

                                                            <button><i class="fa-light fa-trash"></i></button>

                                                        </div>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                        <div class="table-bottom-control"></div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-header">

                                        Resizable Data Table

                                    </div>

                                    <div class="card-body">

                                        <table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">

                                            <thead>

                                                <tr>

                                                    <th class="no-sort">

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </th>

                                                    <th><span class="resize-col">Name</span></th>

                                                    <th><span class="resize-col">Username</span></th>

                                                    <th><span class="resize-col">Last Active</span></th>

                                                    <th><span class="resize-col">Date Registered</span></th>

                                                    <th><span class="resize-col">Email</span></th>

                                                    <th><span class="resize-col">Orders</span></th>

                                                    <th><span class="resize-col">Total Spend</span></th>

                                                    <th><span class="resize-col">AOV</span></th>

                                                    <th><span class="resize-col">Country / Region</span></th>

                                                    <th><span class="resize-col">City</span></th>

                                                    <th><span class="resize-col">Region</span></th>

                                                    <th><span class="resize-col">Postal Code</span></th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="resize-col overflow-visible">

                                                            <div class="form-check">

                                                                <input class="form-check-input" type="checkbox">

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td><span class="resize-col">Shaikh Abu Dardah</span></td>

                                                    <td><span class="resize-col">admin</span></td>

                                                    <td><span class="resize-col">December 27, 2022</span></td>

                                                    <td><span class="resize-col">November 23, 2021</span></td>

                                                    <td><span class="resize-col">example@info.com</span></td>

                                                    <td><span class="resize-col">2</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">$74.00</span></td>

                                                    <td><span class="resize-col">BD</span></td>

                                                    <td><span class="resize-col">Dhaka</span></td>

                                                    <td><span class="resize-col">CA</span></td>

                                                    <td><span class="resize-col">12563</span></td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer start -->

        <?include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

    <!-- main content end -->

    

    <<?include("./includes/views/footerjs.php"); ?>

</body>

</html>