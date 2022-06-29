<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>Faktur Penjualan Barang</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
</head>

<body onload="window.print()">
    <h1 style="margin-top: 20px;" align="center">Ifani Shop</h1>

    <div id="laporan">
        <table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
            <!--<tr>
    <td><img src="<?php // echo base_url().'assets/img/kop_surat.png'
                    ?>"/></td>
</tr>-->
        </table>

        <table border="0" align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:0px;">
            <tr>

            </tr>

        </table>
        <?php
        $b = $invoice->row_array();
        ?>
        <table border="0" align="center" style="width:700px;border:none;">
            <tr>
                <th style="text-align:left;">No Faktur</th>
                <th style="text-align:left;">: <?php echo $b['invoice_code']; ?></th>
                <th style="text-align:left;">Total</th>
                <th style="text-align:left;">: <?php echo 'Rp ' . number_format($b['total_price']) . ',-'; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;">Tanggal</th>
                <th style="text-align:left;">: <?php echo $b['date_input']; ?></th>
                <th style="text-align:left;">Diskon</th>
                <th style="text-align:left;">: <?php echo 'Rp ' . number_format($b['discount']) . ',-'; ?></th>

            </tr>
            <tr>
                <th style="text-align:left;">Keterangan</th>
                <th style="text-align:left;">: -</th>
                <th style="text-align:left;">Total yang harus dibayar</th>
                <th style="text-align:left;">: <?php echo 'Rp ' . number_format($b['total_all']) . ',-'; ?></th>

            </tr>
            <tr>
                <th></th>
                <th></th>
                <th style="text-align:left;">Tunai</th>
                <th style="text-align:left;">: <?php echo 'Rp ' . number_format($b['pay']) . ',-'; ?></th>

            </tr>
            <tr>
                <th></th>
                <th></th>
                <th style="text-align:left;">Kembalian</th>
                <th style="text-align:left;">: <?php echo 'Rp ' . number_format($b['changes']) . ',-'; ?></th>
            </tr>
        </table>

        <table border="1" align="center" style="width:700px;margin-bottom:20px;">
            <thead>

                <tr>
                    <th style="width:50px;">No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>SubTotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($transaction->result_array() as $i) {
                    $no++;

                    $nabar = $i['product_name'];
                    $harga = $i['price'];
                    $qty = $i['qty'];
                    $total = $i['price'] * $i['qty'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td style="text-align:left;"><?php echo $nabar; ?></td>
                        <td style="text-align:right;"><?php echo 'Rp ' . number_format($harga); ?></td>
                        <td style="text-align:center;"><?php echo $qty; ?></td>
                        <td style="text-align:right;"><?php echo 'Rp ' . number_format($total); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>

                <tr>
                    <td colspan="4" style="text-align:center;"><b>Total</b></td>
                    <td style="text-align:right;"><b><?php echo 'Rp ' . number_format($b['total_price']); ?></b></td>
                </tr>
            </tfoot>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td></td>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="right"><?php echo date('d-M-Y') ?></td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /></td>
            </tr>

            <tr>
                <td align="center"></td>
            </tr>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <th><br /><br /></th>
            </tr>
            <tr>
                <th align="left"></th>
            </tr>
        </table>
    </div>

</body>

</html>