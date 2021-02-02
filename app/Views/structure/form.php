<body>
    <main class="container  mt-5">
        <?php echo form_open('/HelloWorld/save'); ?>
            <div class="form-group row">
                <?php echo form_label('Name','name', array('class'=>'col-sm-3 col-form-label')); ?>
                <div class="col-sm-9">
                    <?php echo form_input(array('name'=>'name','placeholder'=>'Enter name','class'=>'form-control')); ?>
                </div>
            </div>
            <div class="form-group row">
                <?php echo form_label('Email', 'email', array('class'=>'col-sm-3 col-form-label')); ?>
                <div class="col-sm-9">
                    <?php echo form_input(array('name'=>'email','placeholder'=>'Enter email','class'=>'form-control')); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                    <?php echo form_submit('save','Save', array('class'=>'btn btn-success')); ?>
                </div>
            </div>
        <?php echo form_close(); ?>
        
        
        <?php?>
    </main>
</body>
</html>