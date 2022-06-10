<?php
require_once("inc/header.php");
?>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
        require_once("inc/menu.php");
        ?>
        <div class="main">
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Service providers
                        </h1>
                    </div>
                    <div class="row">
                    <div class="col-xxl-3">
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">Angelica Ramos</h2>
								</div>
								<div class="card-body">
									<div class="row g-0">
										<div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
											<img src="https://picsum.photos/100/100" width="84" height="84" class="rounded-circle mt-2" alt="Angelica Ramos">
                                            <br>
                                            <span>Logo of Angelica ramos</span>
										</div>
										<div class="col-sm-9 col-xl-12 col-xxl-8">
											<strong>Slogan</strong>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
												sociis
												natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Title</th>
												<td>rakesh junjun</td>
											</tr>
											<tr>
												<th>category</th>
												<td>plumber</td>
											</tr>
											<tr>
												<th>name</th>
												<td>Rakesh</td>
											</tr>
											<tr>
												<th>Surname</th>
												<td>junjun</td>
											</tr>
											<tr>
												<th>father name </th>
												<td>kamlesh junjun</td>
											</tr>
											<tr>
												<th>email</th>
												<td>Suii@gmail.com</td>
											</tr>
											<tr>
												<th>mobile number1</th>
												<td>9586254152</td>
											</tr>
											<tr>
												<th>address 1</th>
												<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, voluptatem! Maiores, saepe.</td>
											</tr>
												<th>address 2</th>
												<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, voluptatem! Maiores, saepe.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 style="display: inline;" class="mb-0">Total Catelog by - name of provider</h1>
                                    <div class="text-end">
                                        <a style="display: inline;" class="btn btn-success" href="specific_service.php">View Total Booked Service</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>1500</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>2500</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>3500</td>
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
    require_once("inc/script.php");
    ?>
</body>

</html>