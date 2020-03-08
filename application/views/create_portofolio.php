<?php $this->load->view('partials/header'); ?>
</head>
<body>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form sction="" method="post">
                    <div class="form-group">
                        <input type="file" name="image" id="image">
                        <small class="form-text text-danger" ><?= form_error('image'); ?></small> 
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul...">
                        <small class="form-text text-danger" ><?= form_error('judul'); ?></small> 
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" name="text" id="text" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Link</label>
                        <textarea class="form-control" name="link" id="link" rows="4"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" style="float: right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<?php $this->load->view('partials/footer'); ?>