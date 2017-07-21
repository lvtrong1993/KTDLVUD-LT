			<!-- FOOTER -->
			<div class="col-xs-12 col-sm-12 col-md-12" style="position:fixed;bottom:0;width: 100%; height:190px; background: #027B76;">
				<!-- <div class="bottom" > -->
				<div class="well well-sm col-xs-12 col-sm-12 col-md-12" style="height: 182px; margin-top:3px; padding-top: 1px;">
					<ul class="nav nav-tabs" style="">
						<li class="active"><a href="#1kv" data-toggle="tab">Khu vực</a></li>
						<li><a href="#2ke" data-toggle="tab">Kệ</a></li>
						<li><a href="#3hh" data-toggle="tab">Hàng Hóa</a></li>
						<li style="float:right; margin-top: 7px;">
							<label>Tọa độ:</label>
							<div id="txtToaDo" style=" width: 100px; float: right;"></div>
						</li>
					</ul>
					<!--CONTENT FORMS-->
					<div class="tab-content ">
						<!-- FORM CONTENT KHU VỰC -->
						<div class="tab-pane active" id="1kv">
							<form name="frmKV" class="form-horizontal" action="/action_page.php">
								<div class="form-content">
									<div class="col-xs-10 col-sm-10 col-md-10" style="border: 1px solid #DDDDDD;">
										<div class="form-group " style="margin-top : 10px;" >
											<div class="col-sm-4 nopadding">
												<label class="control-label col-sm-4" for="email">Mã khu vực:</label>
												<div class="col-sm-8">
													<input  class="form-control" id="txtMaKV" name="txtMaKV" placeholder="Mã khu vực" value="1" readonly="">
												</div>
											</div>
											<div class="col-sm-4 nopadding" >
												<label class="control-label col-sm-4 "  for="email">Cao TĐ:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="txtCCKV" name="txtCCKV" placeholder="Mã khu vực"  >
												</div>
											</div>
											<div class="col-sm-4 nopadding" >
												<label class="control-label col-sm-4 "  for="email">Số kệ:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="txtSoKe" name="txtSoKe" placeholder="Số kệ hàng hóa"  >
												</div>
											</div>
										</div>

										<div class="form-group "  >
											<div class="col-sm-4 nopadding">
												<label class="control-label col-sm-4" for="email">Tọa độ:</label>
												<div class="col-sm-8">
													<div class="col-sm-6" style="padding-left: 0px; padding-right: 0px;">
														<div class="col-sm-4 " style="margin-top: 5px;">
															<label>X:</label>
														</div>
														<div class="col-sm-8">
															<input class="form-control" id="txtXKV" name="txtXKV" placeholder="Mã khu vực" >
														</div>
													</div>
													<div class="col-sm-6" style="padding-left: 0px; padding-right: 0px;">
														<div class="col-sm-4 " style="margin-top: 5px;">
															<label>Y:</label>
														</div>
														<div class="col-sm-8">
															<input  class="form-control" id="txtYKV"  name="txtYKV" placeholder="Mã khu vực">
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-4 nopadding" >
												<label class="control-label col-sm-4 "  for="email">Góc xoay:</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" id="txtGocXoay" name="txtGocXoay" placeholder="Góc xoay">
												</div>
											</div>
											<div class="col-sm-4 nopadding" >
												<label class="control-label col-sm-4 "  for="email">SL HH:</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" id="txtSLSPKV" name="txtSLSPKV" placeholder="Số lượng hàng hóa">
												</div>
											</div>
											<div class="col-sm-12" style="margin-top: 7px;">
												<div class="col-sm-6 text-right">
													<button type="submit" class="btn btn-primary" id="btnXacNhan" name="btnXacNhanKV">Xác nhận</button>
												</div>
												<div class=" col-sm-6">
													<button type="submit" class="btn btn-default" id="btnHuyBo" name="btnHuyBoKV">Hủy bỏ</button>
												</div>
											</div>
										</div>	
									</div>
									<div class="col-sm-2">
										<div class="text-right" style="width: 150px;  float: right; height: 100px; padding-top: 10px; padding-bottom: 10px; margin-top: 20px; border: 1px solid #DDDDDD;" >
											<button type="submit" class="btn btn-success" id="btnThemKV" name="btnThemKV">
												<span class="glyphicon glyphicon-plus"></span>
												Thêm Khu vực</button>
												<button type="submit" class="btn btn-danger" id="btnXoaKV" name="btnXoaKV" style="margin-top: 10px;">
													<span class="glyphicon glyphicon-remove"></span>
													Xóa Khu vực &nbsp;</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<!-- ./ FORM CONTENT KHU VỰC -->
								<!-- CONTENT FORM kỆ -->
								<div class="tab-pane" id="2ke">	
									<form name="frmKe" class="form-horizontal" action="/action_page.php">
										<div class="form-content">
											<div class="col-xs-10 col-sm-10 col-md-10" style="border: 1px solid #DDDDDD;">
												<div class="form-group " style="margin-top : 10px;" >
													<div class="col-sm-4 nopadding">
														<label class="control-label col-sm-4" for="email">Mã Kệ:</label>
														<div class="col-sm-8">
															<input  class="form-control" id="txtMaKe" name="txtMaKe" placeholder="Mã kệ" value="1" readonly="">
														</div>
													</div>
													<div class="col-sm-4 nopadding" >
														<label class="control-label col-sm-4 "  for="email">Mã KV:</label>
														<div class="col-sm-8">
															<input type="email" class="form-control" id="txtMaKV2" name="txtMaKV2" placeholder="Mã khu vực hiện tại" readonly="" >
														</div>
													</div>
													<div class="col-sm-4 nopadding" >
														<label class="control-label col-sm-4 "  for="email">SL HH:</label>
														<div class="col-sm-8">
															<input type="email" class="form-control" id="txtSLHHKe" name="txtSLHHKe" placeholder="Số lượng hàng hóa"  readonly="">
														</div>
													</div>
												</div>

												<div class="form-group "  >

													<div class="col-sm-6 nopadding" >
														<label class="control-label col-sm-4 "  for="email">Số ngăn:</label>
														<div class="col-sm-8">
															<input type="number"  min="0" class="form-control" id="txtSoNgan" name="txtGocXoay" placeholder="Số ngăn chứa">
														</div>
													</div>
													<div class="col-sm-6 nopadding" >
														<label class="control-label col-sm-4 "  for="email">Số hàng:</label>
														<div class="col-sm-8">
															<input type="number" min="0" class="form-control" id="txtSoHang" name="txtSoHang" placeholder="Số hàng">
														</div>
													</div>
													<div class="col-sm-12" style="margin-top: 7px;">
														<div class="col-sm-6 text-right">
															<button type="submit" class="btn btn-primary" id="btnXacNhan" name="btnXacNhanKV">Xác nhận</button>
														</div>
														<div class=" col-sm-6">
															<button type="submit" class="btn btn-default" id="btnHuyBo" name="btnHuyBoKV">Hủy bỏ</button>
														</div>
													</div>
												</div>	
											</div>
											<div class="col-sm-2">
												<div class="text-right" style="width: 150px;  float: right; height: 100px; padding-top: 10px; padding-bottom: 10px; margin-top: 20px; border: 1px solid #DDDDDD;" >
													<button type="submit" class="btn btn-success" id="btnThemKV" name="btnThemKV">
														<span class="glyphicon glyphicon-plus"></span>
														Thêm Kệ</button>
														<button type="submit" class="btn btn-danger" id="btnXoaKV" name="btnXoaKV" style="margin-top: 10px;">
															<span class="glyphicon glyphicon-remove"></span>
															&nbsp;Xóa Kệ &nbsp;</button>
														</div>
													</div>
												</div>
											</form>
										</div>
										<!-- ./ CONTENT FORM KỆ -->
										<!-- CONTENT FORM HÀNG HÓA -->
										<div class="tab-pane" id="3hh">
											<form name="frmKe" class="form-horizontal" action="/action_page.php">
												<div class="form-content">
													<div class="col-xs-10 col-sm-10 col-md-10" style="border: 1px solid #DDDDDD;">
														<div class="form-group " style="margin-top : 10px;" >
															<div class="col-sm-4 nopadding">
																<label class="control-label col-sm-4" for="email">Hàng Hóa:</label>
																<div class="col-sm-8">
																	<select class="form-control" name="selHH" id="selHH" disabled="">
																		<option>1-Ô tô đồ chơi</option>
																		<option>2</option>
																		<option>3</option>
																		<option>4</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-4 nopadding" >
																<label class="control-label col-sm-4 "  for="email">Mã Kệ:</label>
																<div class="col-sm-8">
																	<input type="email" class="form-control" id="txtMaKe2" name="txtMaKe2" placeholder="Mã kệ hiện tại" readonly="" >
																</div>
															</div>
															<div class="col-sm-4 nopadding" >
																<label class="control-label col-sm-4 "  for="email">Mã KV:</label>
																<div class="col-sm-8">
																	<input type="email" class="form-control" id="txtMaKV3" name="txtMaKV3" placeholder="Mã khu vực hiện tại"  readonly="">
																</div>
															</div>
														</div>

														<div class="form-group "  >

															<div class="col-sm-4 nopadding" >
																<label class="control-label col-sm-4 "  for="email">Số lượng:</label>
																<div class="col-sm-8">
																	<input type="number"  min="0" class="form-control" id="txtSL" name="txtSL" placeholder="Số lượng hàng">
																</div>
															</div>
															<div class="col-sm-4 nopadding" >
																<label class="control-label col-sm-4 "  for="email">Kích thước:</label>
																<div class="col-sm-8">
																	<input type="number" min="1" max="2" class="form-control" id="txtKT" name="txtKT" placeholder="Kích thước sản phẩm">
																</div>
															</div>
															<div class="col-sm-4 nopadding" >
																<label class="control-label col-sm-4 "  for="email">Màu sắc:</label>
																<div class="col-sm-8">
																	<div class="mauSac" id="mauSac" style="width: 50px; height: 30px; border: 1px solid #DDDDDD;" ondrop="drop(event)" ondragover="allowDrop(event)">
																	<!-- 	<div id="drag1" draggable="true" ondragstart="drag(event)" id="drag3"  style="background: red; height: 100%;">	
																</div> -->
															</div>
														</div>
													</div>
													<div class="col-sm-12" style="margin-top: 7px;">
														<div class="col-sm-6 text-right">
															<button type="submit" class="btn btn-primary" id="btnXacNhanHH" name="btnXacNhanHH">Xác nhận</button>
														</div>
														<div class=" col-sm-6">
															<button type="submit" class="btn btn-default" id="btnHuyBoHH" name="btnHuyBoHH">Hủy bỏ</button>
														</div>
													</div>
												</div>	
											</div>
											<div class="col-sm-2">
												<div class="text-right" style="width: 150px;  float: right; height: 100px; padding-top: 10px; padding-bottom: 10px; margin-top: 20px; border: 1px solid #DDDDDD;" >
													<button type="submit" class="btn btn-success" id="btnThemHH" name="btnThemHH">
														<span class="glyphicon glyphicon-plus"></span>
														Thêm Sản phẩm</button>
														<button type="submit" class="btn btn-danger" id="btnXoaHH" name="btnXoaHH" style="margin-top: 10px;">
															<span class="glyphicon glyphicon-remove"></span>
															&nbsp;Xóa Sản phẩm &nbsp;</button>
														</div>
													</div>
												</div>
											</form>
										</div>
										<!-- ./ CONTENT FORM HÀNG HÓA -->

									</div>
									<!-- ./ CONTENT FORMS -->
								</div>


								<!-- ICON SHOW TEAM INFO -->
								<a href="#" id="show-team-info">
									<div class="icon-show-team-info" id="icon-show-team-info">
										<img src="public/images/arrow-up-3.png" height="40px" width="40px">
									</div>
								</a>
								<!-- ./ICON SHOW TEAM INFO -->
							</div>
							<!-- </div> -->
						</div>
					</div>
					<!-- ./ FOOTER -->
					<!-- THÔNG TIN NHÓM -->
					<div class="col-md-3" id="team-info" >
						<div class="well well-sm " style="height: 320px; background: #D9EBF7;">


							<div class="panel panel-default" style="margin-bottom: 5px;">
								<div class="panel-heading text-center"><label>Lazy Team</label></div>
								<div class="panel-body" style="height: 220px;">

									<table class="table table-bordered">
										<thead>
											<tr>
												<th>MSSV</th>
												<th>Họ tên</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1642094</td>
												<td>Lường Văn Trọng</td>
											</tr>
											<tr>
												<td>1642057</td>
												<td>Lê Hồng Sơn</td>
											</tr>
											<tr>
												<td>1642066</td>
												<td>Nguyễn Hữu Thạnh</td>
											</tr>
											<tr>
												<td>1642029</td>
												<td>Lê Nguyễn Đăng Khoa</td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>
							<div class="icon-close-team-info" id="icon-close-team-info">
								<img src="public/images/arrow-down.png" width="30px" height="30px">
							</div>
						</div>
					</div>
					<!-- ./THÔNG TIN NHÓM -->
				</div>
				<!-- MENU CUSTOM HÀNG HÓA -->
				<ul class='custom-menu'>
					<li class="disable-li" data-action="first">GẤU BÔNG</li>
					<li data-action="first"><span class="glyphicon glyphicon-th icon-menu-edit-hh" ></span>Chi tiết</li>	
					<li data-action="second">
						<span class="glyphicon glyphicon-plus icon-menu-edit-hh" ></span>
						Thêm hàng hóa
					</li>
					<li data-action="third"><span class="glyphicon glyphicon glyphicon-scissors icon-menu-edit-hh" class="icon-menu-edit-hh"></span>Xóa kệ</li>
					<li data-action="fourth"><span class="glyphicon glyphicon glyphicon-remove icon-menu-edit-hh" style="color:red;"></span>Thoát</li>
				</ul>
				<!-- ./ MENU CUSTOM HÀNG HÓA -->
				<!-- MENU KỆ -->
				<ul class='menu-ke'>
					<li class="disable-li2" style="pointer-events:none; opacity:0.8;background: black;color: white;font-weight: bold;text-align: center;" data-action="first">KỆ 01</li>
					<li data-action="first"><span class="glyphicon glyphicon-th icon-menu-edit-hh" ></span>Chi tiết</li>	
					<li data-action="second">
						<span class="glyphicon glyphicon-plus icon-menu-edit-hh" ></span>
						Zoom
					</li>
					<li data-action="third"><span class="glyphicon glyphicon glyphicon-scissors icon-menu-edit-hh" class="icon-menu-edit-hh"></span>Xóa kệ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li data-action="fourth"><span class="glyphicon glyphicon glyphicon-remove icon-menu-edit-hh" style="color:red;"></span>Thoát</li>
				</ul>
				<!-- ./ MENU KỆ -->
				<!-- MENU KỆ -->
				<ul class='menu-khu-vuc'>
					<li class="disable-li" data-action="first">KV-01</li>
					<li data-action="first"><span class="glyphicon glyphicon-th icon-menu-edit-hh" ></span>Chi tiết</li>	
					<li data-action="second">
						<span class="glyphicon glyphicon-plus icon-menu-edit-hh" ></span>
						Zoom
					</li>
					<li data-action="third"><span class="glyphicon glyphicon glyphicon-scissors icon-menu-edit-hh" class="icon-menu-edit-hh"></span>Xóa Khu vực</li>
					<li data-action="fourth"><span class="glyphicon glyphicon glyphicon-remove icon-menu-edit-hh" style="color:red;"></span>Thoát</li>
				</ul>
				<!-- ./ MENU KỆ -->

