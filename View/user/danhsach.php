<?php
include 'View/layout/banner.php';
include 'View/layout/menu.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2>Danh sach User</h2>
				<div >
					<button type="button" class="btn btn-success" id="themmoi" data-toggle="modal" data-target=".bs-example-modal-sm" > Them </button>
				</div>
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Them Can Bo</h4>
							</div>
							<div class="modal-body">
								<form action="?m=canbo&a=themcb" method="POST">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ma Can Bo</label>
												<input type="text" class="form-control" name="txtmacb" required/>
											</div>
											<div class="form-group">
												<label>Ngay Sinh</label>
												<input type="date" class="form-control" name="txtngaysinh" required/>
											</div>
											<div class="form-group">
												<label>Hoc Vi</label>
												<select class="form-control" name="hocvi">
													<option ></option>
													<option value="Thac Si">Thac Si</option>
													<option value="Tien Si">Tien Si</option>
												</select>
											</div>
											<div class="form-group">
												<label>Don Vi</label>
												<input type="text" class="form-control" name="txtdonvi" required/>
											</div>
											<div class="form-group">
												<label>So Dien Thoai</label>
												<input type="tel" class="form-control" name="txtsdt" required/>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ho va Ten</label>
												<input type="text" class="form-control" name="txthoten" required/>
											</div>
											<div class="form-group">
												<label>Chuc Vu</label>
												<input type="text" class="form-control" name="txtchucvu" required/>
											</div>
											<div class="form-group">
												<label>Hoc Ham</label>
												<select class="form-control" name="hocham">
													<option ></option>
													<option value="Giao Su">Giao Su</option>
													<option value="Pho Giao Su">Pho Giao Su</option>
												</select>
											</div>
											<div class="form-group">
												<label>Dia Chi</label>
												<textarea name="txtdiachi" cols="60" rows="3"></textarea>
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" name="txtemail" required/>
											</div>
										</div>
									</div>
									

									<button type="submit" class="btn btn-success " name="themcb">Them</button>
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
								<th class="text-center">Username</th>
								<th class="text-center">Password</th>
								<th class="text-center">Ho va Ten</th>
								<th class="text-center">Ngay Sinh</th>
								<th class="text-center">Dia Chi</th>
								<th class="text-center">Level</th>
								<th class="text-center">Sua</th>
								<th class="text-center">Xoa</th>
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
											<td class="text-center"></td>
                                            	<td class="text-center"></td>
                                                	<td class="text-center"></td>
                                                    	<td class="text-center"></td>
                                                        	<td class="text-center"></td>
                                                            	<td class="text-center"></td>
                                                                	<td class="text-center"></td>
											

											<td class="text-center"><a href="#" data-toggle="modal" data-target="#myModalsua<?php echo $i;?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
											<div class="modal fade" id="myModalsua<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog  modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title" id="myModalLabel">Sua Can Bo</h4>
														</div>
														<div class="modal-body">
															<form action="?m=canbo&a=suacb&i=<?php echo $item['id']?>" method="POST">
																<div class="row">
																	<div class="col-sm-6">
																		
																		<div class="form-group">
																			<label>Ngay Sinh</label>
																			<input type="date" class="form-control" name="txtngaysinh"  value="<?php echo $item['NgaySinh'];?>" required/>
																		</div>
																	
																    </div>
																    <div class="col-sm-6">
																	
																
															         </div>
														          </div>
														      <button type="submit" class="btn btn-success " name="suacb">Sua</button>
													   </form>
												    </div>

											</div>
										</div>
									</div>
									<td class="text-center"><a href="?m=canbo&a=xoacb&i=<?php echo $item['id'];?>" ><i class="glyphicon glyphicon-trash"></i></a></td>
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