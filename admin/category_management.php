<?php 
session_start();
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
                            <?php 
require_once("../inc/message.php");
                        ?>  
                                <div class="card-header">
                                    <h1 class="mb-0">Insert category</h1>
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
                                                    <th>Sr no.</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td width="15%">Param patel</td>
                                                  
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td width="15%">Param patel</td>
                                                    
                                                    <td><img src="https://picsum.photos/100/100" alt=""></td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi iste! Exercitationem eligendi recusandae alias odit accusantium distinctio inventore totam?</td>
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