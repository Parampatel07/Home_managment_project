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
		// require_once("inc/service_menu.php");
		?>
        <div class="main">
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Create your profile
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Create profile</h5>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <form action="" method="POST" name="form1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Enter slogan here
                                                        </label>
                                                        <input type="text" name="title" class="form-control"
                                                            placeholder="Enter company name / service name" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-5">
                                                        <label for="" class="form-label">
                                                            Select logo
                                                        </label>
                                                        <input type="file" accept="image/*" name="logo" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your name
                                                    </label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your surname
                                                    </label>
                                                    <input type="text" name="surname" class="form-control"
                                                        placeholder="Enter your surname" required>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <label for="" class="form-label">
                                                        Enter your father name
                                                    </label>
                                                    <input type="text" name="father_name" class="form-control"
                                                        placeholder="Enter your father name" required>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Enter address 1</label>
                                                    <textarea class="form-control"  required placeholder="address 1"
                                                        rows="2"></textarea>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Enter address 2</label>
                                                    <textarea class="form-control"  required placeholder="address 2"
                                                        rows="2"></textarea>
                                                </div>
                                                <div class="text-end mt-4">
                                                    <input type="submit" class="btn btn-primary" value="Create profile">
                                                    <input type="reset" value="Clear all"
                                                    class="btn btn-danger">
                                                </div>
                                            </div>
                                        </form>
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