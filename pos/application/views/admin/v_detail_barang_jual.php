					<?php
					error_reporting(0);
					$b = $brg->row_array();
					?>

					<tr>

						<th>Nama Barang</th>
						<th>Stok</th>
						<th>Harga(Rp)</th>

						<th>Jumlah</th>
					</tr>
					<tr>

						<td><input type="text" name="nabar" value="<?php echo $b['title']; ?>" style="width:800px;margin-right:5px;" class="form-control input-sm" readonly></td>
						<td><input type="text" name="stok" value="<?php echo $b['stock']; ?>" style="width:40px;margin-right:5px;" class="form-control input-sm" readonly></td>
						<td><input type="text" name="harjul" value="<?php echo number_format($b['price']); ?>" style="width:120px;margin-right:5px;text-align:right;" class="form-control input-sm" readonly></td>
						<td><input type="number" name="qty" id="qty" value="1" min="1" max="<?php echo $b['stock']; ?>" class="form-control input-sm" style="width:90px;margin-right:5px;" required></td>
						<td><button type="submit" class="btn btn-sm btn-primary">Ok</button></td>
					</tr>