<div class="right_col" role="main">
    <div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah Artikel</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('artikel/aksi_simpan_artikel'); ?>" method="post">

                                  
                                        

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Judul <span class="required"> Artikel</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Judul" name="Judul"required="required" class="form-control ">
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Deskripsi <span class="required"> Artikel</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea class="form-control" id="Deskripsi" name="Deskripsi" required="required"></textarea>
												
											</div>
										</div>

                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Gambar</label>
                                            
											<div class="col-md-6 col-sm-6 ">
												<input id="Gambar" class="form-control" type="file" name="Gambar">
                                               
											</div>
										</div>


										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Link</label>
                                            
											<div class="col-md-6 col-sm-6 ">
												<input id="Link" class="form-control" type="text" name="Link">
                                                
											</div>
										</div>



										


										
									


									
										
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                            <a href="<?php echo site_url('dashboard_penjual'); ?>" class="btn btn-primary" role="button">Cancel</a>

												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
                    </div>