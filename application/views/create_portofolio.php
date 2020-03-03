<?php $this->load->view('partials/header'); ?>
</head>
<body>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif ; ?>
                <form sction="" method="post">
                    <div class="form-group">
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul...">
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" name="text" id="text" rows="4"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<?php $this->load->view('partials/footer'); ?>