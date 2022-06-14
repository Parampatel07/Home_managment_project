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
                            Send feedback
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class=" mb-0">Send feedback to - customer name </h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" name="form1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">

                                                    <label for="" class="form-label">
                                                        Enter title here
                                                    </label>
                                                    <input type="text" name="title" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">
                                                        Subject
                                                    </label>
                                                    <input type="text" name="photo" class="form-control" required>
                                                </div>
                                            </div>
                                            <label for="" class="form-label">
                                                        Type Your mail here
                                                    </label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="clearfix">
                                                                <div id="quill-toolbar">
                                                                    <span class="ql-formats">
                                                                        <select class="ql-font"></select>
                                                                        <select class="ql-size"></select>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-bold"></button>
                                                                        <button class="ql-italic"></button>
                                                                        <button class="ql-underline"></button>
                                                                        <button class="ql-strike"></button>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <select class="ql-color"></select>
                                                                        <select class="ql-background"></select>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-script" value="sub"></button>
                                                                        <button class="ql-script" value="super"></button>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-header" value="1"></button>
                                                                        <button class="ql-header" value="2"></button>
                                                                        <button class="ql-blockquote"></button>
                                                                        <button class="ql-code-block"></button>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-list" value="ordered"></button>
                                                                        <button class="ql-list" value="bullet"></button>
                                                                        <button class="ql-indent" value="-1"></button>
                                                                        <button class="ql-indent" value="+1"></button>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-direction" value="rtl"></button>
                                                                        <select class="ql-align"></select>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-link"></button>
                                                                        <button class="ql-image"></button>
                                                                        <button class="ql-video"></button>
                                                                    </span>
                                                                    <span class="ql-formats">
                                                                        <button class="ql-clean"></button>
                                                                    </span>
                                                                </div>
                                                                <div id="quill-editor"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 text-end">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Send Mail">
                                                <a href="feedback.php" class="btn btn-danger">Back</a>
                                            </div>
                                        </div>
                                    </form>
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
    <script>
		document.addEventListener("DOMContentLoaded", function() {
			if (!window.Quill) {
				return $("#quill-editor,#quill-toolbar,#quill-bubble-editor,#quill-bubble-toolbar").remove();
			}
			var editor = new Quill("#quill-editor", {
				modules: {
					toolbar: "#quill-toolbar"
				},
				placeholder: "Type something",
				theme: "snow"
			});
			var bubbleEditor = new Quill("#quill-bubble-editor", {
				placeholder: "Compose an epic...",
				modules: {
					toolbar: "#quill-bubble-toolbar"
				},
				theme: "bubble"
			});
		});
	</script>
</body>

</html>