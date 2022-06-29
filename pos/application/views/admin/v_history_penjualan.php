<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>History Penjualan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'assets/css/4-col-portfolio.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/dataTables.bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist/css/bootstrap-select.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap-datetimepicker.min.css' ?>">
</head>

<body>

    <!-- Navigation -->
    <?php
    $this->load->view('admin/menu');
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <center><?php echo $this->session->flashdata('msg'); ?></center>
                <h1 class="page-header">History
                    <small>Penjualan</small>

                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-condensed" style="font-size:11px;margin-top:10px;" id="mydata100">
                    <thead>
                        <tr>
                            <th>No Faktur</th>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th style="text-align:center;">Discount(Rp)</th>
                            <th style="text-align:center;">Subtotal</th>
                            <th style="text-align:center;">Dibayarkan(Rp)</th>
                            <th style="text-align:center;">kembalian</th>
                            <th style="width:90px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($history->result_array() as $items) : ?>
                            <tr>
                                <td><?php echo $items['invoice_code']; ?></td>
                                <td><?php echo $items['date_input']; ?></td>
                                <td style="text-align:left;"><?php echo $items['total_price']; ?></td>
                                <td style="text-align:center;"><?php echo number_format($items['discount']); ?></td>
                                <td style="text-align:center;"><?php echo number_format($items['total_all']); ?></td>
                                <td style="text-align:center;"><?php echo number_format($items['pay']); ?></td>
                                <td style="text-align:center;"><?php echo number_format($items['changes']); ?></td>
                                <td style="text-align:center;"><a href="<?php echo base_url() . 'admin/penjualan/detail_history/' . $items['invoice_code']; ?>" class="btn btn-warning btn-xs"><span class="fa fa-eye"></span> Detail History</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

                <hr />
            </div>
            <!-- /.row -->


            <!--END MODAL-->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() . 'assets/dist/js/bootstrap-select.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/dataTables.bootstrap.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.price_format.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap-datetimepicker.min.js' ?>"></script>


        <script type="text/javascript">
            $(document).ready(function() {

                $('#mydata100').DataTable({
                    order: [
                        [1, 'desc']
                    ],
                });
            });
        </script>



</body>

</html>