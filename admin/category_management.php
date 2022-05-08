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
           <?php
           require_once("inc/logout.php")
           ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Category Management
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title mb-0">Insert category</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <form action="" method="POST" name="form1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter title here
                                                        </label>
                                                        <input type="text" name="title" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Select photo for category
                                                        </label>
                                                        <input type="file" name="photo" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label class="form-label">Enter description of category</label>
                                                    <textarea class="form-control" placeholder="Textarea"
                                                        name="description" required rows="2"></textarea >
                                                </div>
                                                <div class="mt-2 text-end">
                                                    <input type="submit" name="submit" class="btn btn-primary"
                                                        value="Save category">
                                                    <input type="reset" name="reset" class="btn btn-danger"
                                                        value="Cancel">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
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