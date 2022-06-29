<?php echo $this->session->flashdata('upload'); ?>

<!-- Modal -->
<div class="modal fade" id="checkStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form action="<?php echo base_url() ?>transaction/process" method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cek Status Pembayaran</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="orderid" col-form-label">Order ID/Invoice</label>
						<input type="text" required class="form-control" name="order_id" id="orderid" autocomplete="off">
					</div>
					<input type="hidden" name="action" value="status">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Proses</button>
				</div>
			</div>
		</div>
	</form>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Data Pesanan</h1>

	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="online-tab" data-toggle="tab" href="#online" role="tab" aria-controls="online" aria-selected="true">Online</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="offline-tab" data-toggle="tab" href="#offline" role="tab" aria-controls="offline" aria-selected="false">Offline</a>
		</li>

	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="online" role="tabpanel" aria-labelledby="online-tab">
			<div class="card shadow mb-4 mt-3">
				<div class="card-header py-3">
					<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#checkStatus">Status</button>
				</div>
				<div class="card-body">
					<?php echo $this->session->flashdata('failed'); ?>
					<?php echo $this->session->flashdata('status'); ?>
					<?php if ($orders->num_rows() > 0) { ?>
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th>Kode/Invoice</th>
										<th>Nama</th>
										<th>Total Pesanan</th>
										<th>Tanggal Pesan</th>
										<th>Order Status</th>
										<th>Pay Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tfoot></tfoot>
								<tbody class="data-content">
									<?php $no = $this->uri->segment(3) + 1; ?>
									<?php foreach ($orders->result_array() as $data) : ?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $data['invoice_code']; ?></td>
											<td><?= $data['name']; ?></td>
											<td>Rp <?= number_format($data['total_all'], 0, ",", "."); ?></td>
											<td><?= $data['date_input']; ?></td>
											<?php if ($data['courier'] == "cod") { ?>
												<?php if ($data['status'] != 4) { ?>
													<td>Cash of Delivery</td>
												<?php } else { ?>
													<td>Selesai</td>
												<?php } ?>
											<?php } else { ?>
												<?php if ($data['status'] == 0) { ?>
													<td>Belum di proses</td>
												<?php } else if ($data['status'] == 1) { ?>
													<td>Belum diproses</td>
												<?php } else if ($data['status'] == 2) { ?>
													<td>Sedang diproses</td>
												<?php } else if ($data['status'] == 3) { ?>
													<td>Sedang dikirim</td>
												<?php } else if ($data['status'] == 4) { ?>
													<td>Selesai</td>
												<?php } ?>
												<?php if ($data['pay_status'] == 'pending') { ?>
													<td>Belum dibayar</td>
												<?php } else if ($data['pay_status'] == 'settlement') { ?>
													<td>Lunas</td>
												<?php } else if ($data['pay_status'] == 'cancel') { ?>
													<td>Dibatalkan</td>
												<?php } else if ($data['pay_status'] == 'failure') { ?>
													<td>Gagal</td>
												<?php } else { ?>
													<td>Belum dibayar</td>
												<?php } ?>
											<?php } ?>
											<td>
												<a href="<?= base_url(); ?>administrator/order/<?= $data['invoice_code']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
											</td>
										</tr>
										<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?= $this->pagination->create_links(); ?>
						</div>
					<?php } else { ?>
						<div class="alert alert-warning" role="alert">
							Opss, pesanan masih kosong.
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="offline" role="tabpanel" aria-labelledby="offline-tab">
			<div class="card shadow mb-4 mt-3">

				<div class="card-body">
					<?php echo $this->session->flashdata('failed'); ?>
					<?php echo $this->session->flashdata('status'); ?>
					<?php if ($offline->num_rows() > 0) { ?>
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>#</th>
										<th>Kode/Invoice</th>
										<th>Nama</th>
										<th>Total Pesanan</th>
										<th>Tanggal Pesan</th>
										<th>Order Status</th>
										<th>Pay Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tfoot></tfoot>
								<tbody class="data-content">
									<?php $no = $this->uri->segment(3) + 1; ?>
									<?php foreach ($offline->result_array() as $data) : ?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $data['invoice_code']; ?></td>
											<td><?= $data['name']; ?></td>
											<td>Rp <?= number_format($data['total_all'], 0, ",", "."); ?></td>
											<td><?= $data['date_input']; ?></td>
											<?php if ($data['courier'] == "cod") { ?>
												<?php if ($data['status'] != 4) { ?>
													<td>Cash of Delivery</td>
												<?php } else { ?>
													<td>Selesai</td>
												<?php } ?>
											<?php } else { ?>
												<?php if ($data['status'] == 0) { ?>
													<td>Belum di proses</td>
												<?php } else if ($data['status'] == 1) { ?>
													<td>Belum diproses</td>
												<?php } else if ($data['status'] == 2) { ?>
													<td>Sedang diproses</td>
												<?php } else if ($data['status'] == 3) { ?>
													<td>Sedang dikirim</td>
												<?php } else if ($data['status'] == 4) { ?>
													<td>Selesai</td>
												<?php } ?>
												<?php if ($data['pay_status'] == 'pending') { ?>
													<td>Belum dibayar</td>
												<?php } else if ($data['pay_status'] == 'terbayar') { ?>
													<td>Lunas</td>
												<?php } else if ($data['pay_status'] == 'cancel') { ?>
													<td>Dibatalkan</td>
												<?php } else if ($data['pay_status'] == 'failure') { ?>
													<td>Gagal</td>
												<?php } else { ?>
													<td>Belum dibayar</td>
												<?php } ?>
											<?php } ?>
											<td>
												<a href="<?= base_url(); ?>administrator/order/<?= $data['invoice_code']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
											</td>
										</tr>
										<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?= $this->pagination->create_links(); ?>
						</div>
					<?php } else { ?>
						<div class="alert alert-warning" role="alert">
							Opss, pesanan masih kosong.
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- DataTales Example -->

</div>
<!-- /.container-fluid -->