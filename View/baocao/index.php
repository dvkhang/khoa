<?php
include 'View/layout/banner.php';
include 'View/layout/menu.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2>Danh sach Can Bo</h2>
				<div >
					<button type="button" class="btn btn-success" id="themmoi" data-toggle="modal" data-target=".bs-example-modal-sm" > Them </button>
				</div>
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Them Bao Cao</h4>
							</div>
							<div class="modal-body">
								<form action="?m=baocao&a=thembaocao" method="POST">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Tên bài báo</label>
												<input type="text" class="form-control" name="tenbaibao" required/>
											</div>
											<div class="form-group">
												<label>Tên tạp chí</label>
												<input type="text" class="form-control" name="tentapchi" required/>
											</div>
											<div class="form-group">
												<label>Tạp chí số</label>
												<input type="number" class="form-control" name="tapchiso" required/>
											</div>
											<div class="form-group">
												<label>Trang đăng</label>
												<input type="number" class="form-control" name="trangdang" required/>
											</div>
											<div class="form-group">
												<label>Tập</label>
												<input type="number" class="form-control" name="tap" required/>
											</div>
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Địa chỉ</label>
												<input type="text" class="form-control" name="diachi" required/>
											</div>
											<div class="form-group">
												<label>Năm</label>
												<input type="number" class="form-control" name="nam" required/>
											</div>
											<div class="form-group">
												<label>Phân loai</label>
												<input type="text" class="form-control" name="theloai" required/>
											</div>
											<div class="form-group">
												<label>Địa điểm</label>
												<input type="radio"  name="diadiem" value="Trong nước" checked required/>Trong nước
												<input type="radio"  name="diadiem" value="Nước ngoài" required/>Nước ngoài
											</div>
											<div class="form-group">
												<label>Danh sách tác giả</label>
												<input type="text" class="form-control" name="danhsachtacgia" required/>
											</div>
											<div class="form-group">
												<label>Là tác giả TNU đầu tiên</label>
												<input type="checkbox" class="" name="tnu" value="1" />
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
								<th class="text-center">Tên bài báo</th>
								<th class="text-center">Tên tạp chí</th>
								<th class="text-center">Tạp chí số</th>
								<th class="text-center">Trang đăng</th>
								<th class="text-center">Tập</th>
								<th class="text-center">Địa chỉ</th>
								<th class="text-center">Năm</th>
								<th class="text-center">Phân loai</th>
								<th class="text-center">Địa điểm</th>
								<th class="text-center">Danh sách tác giả</th>
								<th class="text-center">Là tác giả TNU đầu tiên</th>
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
											<td class="text-center"><?php echo $i;?></td>
											
											<td style = "font-size: 14px;">
												<?php echo $item['name']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['magazine_name']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['magazine_issue']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['magazine_page']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['part']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['address']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['year']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['category']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['location']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['auth']?>
											</td>
											<td style = "font-size: 14px;">
												<?php echo $item['is_auth_tnu']?>
											</td>

											<td class="text-center"><a href="#" data-toggle="modal" data-target="#myModalsua<?php echo $i;?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
											<div class="modal fade" id="myModalsua<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog  modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title" id="myModalLabel">Sua Can Bo</h4>
														</div>
														<div class="modal-body">
															<form action="?m=baocao&a=suabaocao&i=<?php echo $item['id']?>" method="POST">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label>Tên bài báo</label>
																			<input type="text" class="form-control" name="tenbaibao" value="<?php echo $item['name']; ?>" required/>
																		</div>
																		<div class="form-group">
																			<label>Tên tạp chí</label>
																			<input type="text" class="form-control" value="<?php echo $item['magazine_name']; ?>" name="tentapchi" required/>
																		</div>
																		<div class="form-group">
																			<label>Tạp chí số</label>
																			<input type="number" value="<?php echo $item['magazine_issue'] ?>" class="form-control" name="tapchiso" required/>
																		</div>
																		<div class="form-group">
																			<label>Trang đăng</label>
																			<input type="number" value="<?php echo $item['magazine_page']?>" class="form-control" name="trangdang" required/>
																		</div>
																		<div class="form-group">
																			<label>Tập</label>
																			<input type="number" value="<?php echo $item['part']?>" class="form-control" name="tap" required/>
																		</div>
																		
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label>Địa chỉ</label>
																			<input type="text" value="<?php echo $item['address']?>" class="form-control" name="diachi" required/>
																		</div>
																		<div class="form-group">
																			<label>Năm</label>
																			<input type="number" value="<?php echo $item['year']?>" class="form-control" name="nam" required/>
																		</div>
																		<div class="form-group">
																			<label>Phân loai</label>
																			<input type="text" value="<?php echo $item['category']?>" class="form-control" name="theloai" required/>
																		</div>
																		<div class="form-group">
																			<label>Địa điểm</label>
																			<input type="radio"  name="diadiem" value="Trong nước" checked required/>Trong nước
																			<input type="radio"  name="diadiem" value="Nước ngoài" required/>Nước ngoài
																		</div>
																		<div class="form-group">
																			<label>Danh sách tác giả</label>
																			<input type="text" value="<?php echo $item['auth']?>" class="form-control" name="danhsachtacgia" required/>
																		</div>
																		<div class="form-group">
																			<label>Là tác giả TNU đầu tiên</label>
																			<input type="checkbox" <?php if ($item['is_auth_tnu']==1) {
																				echo "checked";
																			} ?> class="" name="tnu" value="1" />
																		</div>
																	</div>
																</div>
														<button type="submit" class="btn btn-success " name="suabaocao">Sửa</button>
													</form>
												</div>

											</div>
										</div>
									</div>
									<td class="text-center"><a id="link-del" href="javascript:delete_id(<?php echo $item['id']; ?>)"><i class="glyphicon glyphicon-trash"></i></a></td>
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
<script type="text/javascript">
	function delete_id(id)
	{
	     if(confirm('Bạn có chắc chán muốn xóa bản ghi này ?'))
	     {
	        window.location.href='?m=baocao&a=xoabaocao&i='+id;
	     }
	}
</script>
<?php
include 'View/layout/footter.php';
?>