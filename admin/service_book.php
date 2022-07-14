<?php 
require_once("inc2/header.php");
?>
</head>
<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
		require_once("inc2/service_menu.php");
		?>
        <div class="main">
        <?php
            require_once("inc2/service_logout.php");
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Blank Page
                        </h1>
                        <!-- <nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="theme/dashboard-default.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Blank</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blank Page</li>
							</ol>
						</nav> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title mb-0">View category</h2>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                  
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>
                                                        <button href="#" class="btn btn-success">Approve</button>
                                                        <br>
                                                        <br>
                                                        <button href="#" class="btn btn-danger">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td width="15%">Param patel</td>
                                                    
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>
                                                        <button href="#" class="btn btn-success">Approve</button>
                                                        <br>
                                                        <br>
                                                        <button href="#" class="btn btn-danger">Reject</button>
                                                    </td>
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
	require_once("inc2/script.php");
	?>
</body>
</html>