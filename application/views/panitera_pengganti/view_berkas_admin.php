<div class="container">
	<div class="row mt-5 mb-3">
		<div class="col">
			<?php foreach ($detail_berkas as $db) : ?>


				<div class="accordion" id="accordionExample">

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Surat Pengantar
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<!-- isi di disini bundel A -->
								<table class="table">
									<tbody>

										<tr>
											<td>Surat Pengantar</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="SuratPengantar/<?= $db->sp_perkara; ?>" class="text-decoration-none text-reset">
													<?= $db->sp_perkara; ?>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
								Bundel A
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<!-- isi di disini bundel A -->
								<table class="table">
									<tbody>

										<tr>
											<td>Surat Gugatan</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->surat_gugatan; ?>" class="text-decoration-none text-reset">
													<?= $db->surat_gugatan; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Surat Kuasa dari Kedua Belah Pihak</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->sk_bundelA; ?>" class="text-decoration-none text-reset">
													<?= $db->sk_bundelA; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Bukti Pembayaran Panjar Biaya Perkara (SKUM)</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->bukti_pemb_panjar; ?>" class="text-decoration-none text-reset">
													<?= $db->bukti_pemb_panjar; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Penetapan Majelis Hakim</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->majelis_hakim; ?>" class="text-decoration-none text-reset">
													<?= $db->majelis_hakim; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Penunjukan Panitera Pengganti</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->penunjukan_pp; ?>" class="text-decoration-none text-reset">
													<?= $db->penunjukan_pp; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Penunjukan Jurusita/Jurusita Pengganti</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->penunjukan_js; ?>" class="text-decoration-none text-reset">
													<?= $db->penunjukan_js; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Penetapan Hari Sidang</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->penetapan_hari_sidang; ?>" class="text-decoration-none text-reset">
													<?= $db->penetapan_hari_sidang; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Relaas-relaas Panggilan</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->relaas_panggilan; ?>" class="text-decoration-none text-reset">
													<?= $db->relaas_panggilan; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Berita Acara Sidang</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->ba_sidang; ?>" class="text-decoration-none text-reset">
													<?= $db->ba_sidang; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Penetapan Sita Conservatoir/Revindicatoir</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->penetapan_sita; ?>" class="text-decoration-none text-reset">
													<?= $db->penetapan_sita; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Berita Acara Sita Conservatoir/Revindicatoir</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->ba_sita; ?>" class="text-decoration-none text-reset">
													<?= $db->ba_sita; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Lampiran-lampiran surat yang diajukan oleh kedua belah pihak</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->lampiran_surat; ?>" class="text-decoration-none text-reset">
													<?= $db->lampiran_surat; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Surat-surat bukti penggugat</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->surat_bukti_penggugat; ?>" class="text-decoration-none text-reset">
													<?= $db->surat_bukti_penggugat; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>surat-surat bukti tergugat</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->surat_bukti_tergugat; ?>" class="text-decoration-none text-reset">
													<?= $db->surat_bukti_tergugat; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Tanggapan bukti-bukti tergugat dari penggugat</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->tanggapan_bukti_tergugat; ?>" class="text-decoration-none text-reset">
													<?= $db->tanggapan_bukti_tergugat; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Tanggapan bukti-bukti penggugat dari tergugat</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->tanggapan_bukti_penggugat; ?>" class="text-decoration-none text-reset">
													<?= $db->tanggapan_bukti_penggugat; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Gambar situasi</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->gambar_situasi; ?>" class="text-decoration-none text-reset">
													<?= $db->gambar_situasi; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Surat-surat lain</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_a/<?= $db->surat_lain; ?>" class="text-decoration-none text-reset">
													<?= $db->surat_lain; ?>
												</a>
											</td>
										</tr>
									</tbody>
								</table>

							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
								Bundel B
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<!-- isi di sini bundel B -->
								<table class="table">
									<tbody>

										<tr>
											<td>Salinan Putusan Pengadilan Agama</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->salinan_putusan_pa; ?>" class="text-decoration-none text-reset">
													<?= $db->salinan_putusan_pa; ?>
												</a>
											</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->salinan_putusan_pa_rtf; ?>" class="text-decoration-none text-reset">
													<?= $db->salinan_putusan_pa_rtf; ?>
												</a>
											</td>
										</tr>

										<tr>
											<td>Surat Kuasa dari Kedua Belah Pihak</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->sk_bundelb; ?>" class="text-decoration-none text-reset">
													<?= $db->sk_bundelb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Akta Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->akta_banding; ?>" class="text-decoration-none text-reset">
													<?= $db->akta_banding; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Akta Penerimaan Memori Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->akta_penerimaan_mb; ?>" class="text-decoration-none text-reset">
													<?= $db->akta_penerimaan_mb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Memori Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->memori_banding; ?>" class="text-decoration-none text-reset">
													<?= $db->memori_banding; ?>
												</a>
											</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->memori_banding_rtf; ?>" class="text-decoration-none text-reset">
													<?= $db->memori_banding_rtf; ?>
												</a>
											</td>
										</tr>

										<tr>
											<td>Akta Pemberitahuan Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->akta_pemberitahuan_banding; ?>" class="text-decoration-none text-reset">
													<?= $db->akta_pemberitahuan_banding; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Pemberitahuan Penyerahan Memori Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->pemberitahuan_penyerahan_mb; ?>" class="text-decoration-none text-reset">
													<?= $db->pemberitahuan_penyerahan_mb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Akta Penerimaan Kontra Memori Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->akta_penerimaankontra_mb; ?>" class="text-decoration-none text-reset">
													<?= $db->akta_penerimaankontra_mb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Kontra Memori Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->kontra_mb; ?>" class="text-decoration-none text-reset">
													<?= $db->kontra_mb; ?>
												</a>
											</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->kontra_mb_rtf; ?>" class="text-decoration-none text-reset">
													<?= $db->kontra_mb_rtf; ?>
												</a>
											</td>
										</tr>

										<tr>
											<td>Pemberitahuan Penyerahan Kotra Memori Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->pemberitahuan_penyerahankontra_mb; ?>" class="text-decoration-none text-reset">
													<?= $db->pemberitahuan_penyerahankontra_mb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Relaas Pemberitahuan untuk memeriksa (Inzage) Berkas Perkara Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->relaas_periksa_berkas_pb; ?>" class="text-decoration-none text-reset">
													<?= $db->relaas_periksa_berkas_pb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Surat Kuasa Khusus </td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->sk_khusus; ?>" class="text-decoration-none text-reset">
													<?= $db->sk_khusus; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Bukti Penerimaan Biaya Perkara Banding</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->bukt_pengiriman_bpb; ?>" class="text-decoration-none text-reset">
													<?= $db->bukt_pengiriman_bpb; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Bukti Setor Biaya Pendaftaran Ke Kas Negara</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->bukti_setor_bp_kasnegara; ?>" class="text-decoration-none text-reset">
													<?= $db->bukti_setor_bp_kasnegara; ?>
												</a>
											</td>
										</tr>
										<tr>
											<td>Surat Lainnya</td>
											<td>
												<a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= str_replace("/", "-", $db->no_perkara); ?>/bundle_b/<?= $db->surat_lainnya_b; ?>" class="text-decoration-none text-reset">
													<?= $db->surat_lainnya_b; ?>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>

<!-- //modal tampil pdf -->

<div class="modal fade" id="modalPdf">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Berkas Perkara</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" id="tampil">


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>





<!-- end modal tampil pdf -->
