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
		require_once("inc2/menu.php");
		?>
        <div class="main">
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                        View feedback
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Empty card</h5>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                    <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Customer id.</th>
                                                    <th>Service pro id.</th>
                                                    <th>time</th>
                                                    <th>title</th>
                                                    <th>Description</th>
                                                    <th>Rating</th>
                                                    <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>jeet patel</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>10:20:40</td>
                                                    <td>Good service</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>5</td>
                                                    <td>
                                                        <h1 style="display: inline;"><a href="send_feedback.php"><i class="align-middle me-2 fab fa-fw fa-facebook-messenger" style="display: inline;"></i></a></h1>
                                                        <h1 style="display: inline;"><a href=""><i class="align-middle me-2 fas fa-fw fa-trash" style="display: inline;"></i></a><h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>jeet patel</td>
                                                    <td width="15%">Param patel</td>
                                                    <td>10:20:40</td>
                                                    <td>Good service</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                    <td>5</td>
                                                    <td>
                                                        <h1 style="display: inline;"><a href="send_feedback.php"><i class="align-middle me-2 fab fa-fw fa-facebook-messenger" style="display: inline;"></i></a></h1>
                                                        <h1 style="display: inline;"><a href=""><i class="align-middle me-2 fas fa-fw fa-trash" style="display: inline;"></i></a><h1>
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