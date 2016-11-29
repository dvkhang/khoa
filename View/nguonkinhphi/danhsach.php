<?php
include 'View/layout/banner.php';
include 'View/layout/menu.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2>Danh sach Nguon Kinh Phi</h2>
				<div >
					<button type="button" class="btn btn-success" id="themmoi" data-toggle="modal" data-target=".bs-example-modal-sm" > Them </button>
				</div>
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Them Nguon Kinh Phi</h4>
							</div>
							<div class="modal-body">
								<form action="?m=nguonkinhphi&a=themkp" method="POST">
									<div class="form-group">
										<input type="text" class="form-control" name="txttennguonkinhphi" required/>
									</div>
									<button type="submit" class="btn btn-success " name="themnkp">Them</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php
				if(isset($thongbao))
				{
					?>
					<div class="alert alert-success"><?php echo $thongbao;?></div>
					<?php
				}
				?>
				<div class="table-responsive" id="tbl_linhvuc">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="text-center">STT</th>
								<th class="text-center">TEN CAP DE TAI</th>
								<th class="text-center">SUA</th>
								<th class="text-center">XOA</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i =0;
							if($danhsach != "")
							{
								foreach($danhsach as $item) 
									{ $i++;


										?>
										<tr>
											<td class="text-center"><?php echo $i;?></td>
											<td>

												<h4><?php echo $item['TenNguon'];?></h4>
											</td>
											<td class="text-center"><a href="#" data-toggle="modal" data-target="#myModalsua<?php echo $i;?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
											<div class="modal fade" id="myModalsua<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title" id="myModalLabel">Sua Linh Vuc De Tai</h4>
														</div>
														<div class="modal-body">
															<form action="?m=nguonkinhphi&a=suakp&i=<?php echo $item['id'];?>" method="POST">
																<div class="form-group">
																	<input type="text" class="form-control" name="txtnguonkinhphi"  placeholder="<?php echo $item['TenNguon']?>"  required/>
																</div>
																<button type="submit" class="btn btn-success " name="suakp">Sua</button>
															</form>
														</div>

													</div>
												</div>
											</div>
											<td class="text-center"><a href="?m=nguonkinhphi&a=xoakp&i=<?php echo $item['id'];?>" ><i class="glyphicon glyphicon-trash"></i></a></td>
										</tr>
										<?php
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include 'View/layout/footter.php';
	?>