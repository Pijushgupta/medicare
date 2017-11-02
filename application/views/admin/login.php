
  
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Medicare Healthcare Management System </a>
                </div>
                <ul class="nav navbar-nav">

                </ul>
            </div>
        </nav>
        <div class="margin-top-51px"></div>
        <div class="container">
            <div class="margin-top-51px col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Staff Login</div>
                    <div class="panel-body">
                        <?php echo form_open('login/login_submit');?>
                        
                            <div class="form-group">
                                <?php echo form_input(array('type'=>'text', 'class'=> 'form-control', 'id'=>'user','placeholder'=>'User name','name'=>'username', 'required'=>'required','value'=>set_value('username')));?>
                            </div>
                            <div class="form-group">
                                <?php echo form_input(array('type'=>'password','class'=>'form-control','id'=>'pwd','placeholder'=>'Password','name'=>'password' ,'required'=>'required','value'=> set_value('password')));?>
                            </div>
                            <div class="form-group">
                                
                                <button class="btn btn-default" type="reset">Reset</button>
                                <?php echo form_submit(array('type'=>'submit','class'=>'btn btn-success','value'=>'Login','name'=>'submit'));?>
                               
                            </div>
                        <?php echo form_close();?>
                        <div class="form-group">
                            <?php
                                if($this->session->flashdata('login_error_msg')){
                                    
                                    echo '<div class="alert alert-danger">
                                        <strong>Warning!</strong>' . $this->session->flashdata('login_error_msg') .'
                                        </div>';
                                    
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 