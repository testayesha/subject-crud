<?php  $this->load->view('include/header'); ?>
<?php  $this->load->view('include/sidebar'); ?>
<?php  $this->load->view('include/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
           <h5>
            Edit Subject
            <a href="<?php echo base_url('sub_con'); ?>" class="btn btn-danger float-right">BACK</a>
           </h5>
            </div> 
            <div class="card-body">
                <form action="<?php 'sub/update/'.$sub->subject_code ?>" method="POST"> 

                    <div class="form-group">
                        <label for="">Branch Name</label>
                     <input type="text" name="branch_name" value="<?php $sub->branch_name ?>" class="form-control">
                         <small><?php echo form_error('branch_name');  ?></small>
                    </div> 

                    <div class="form-group">
                        <label for="" >Subject Name</label>
                        <input type="text" name="subject_name" value="<?= $sub->subject_name ?>" class="form-control">
                        <small><?php echo form_error('subject_name');  ?></small>
                    </div>

                    <!-- <div class="form-group">
                        <label for="">Subject Code</label>
                        <input type="num"  name= "subject_code"  class="form-control">
                          <small>// echo form_error('subject_code');  ?></small>
                    </div> -->
   
                       <div class="form-group">
                        <label for="">Subject Author</label>
                        <input type="text" name="subject_author" value="<?= $sub->subject_author ?>" class="form-control">
                           <small><?php echo form_error('subject_author');  ?></small>
                       </div>
                          
                       <div class="form-group">
                        <label for="">Subject Type  Name</label>
                     <input type="text" name="subject_type" value="<?php $sub->subject_type ?>" class="form-control">
                         <small><?php echo form_error('subject_type');  ?></small>
                    </div> 

                    <!-- <div class="form-group">
                        <label for="">Subject Type</label>
                        <input type="text" name="subject_type" value="<?=$sub->subject_type ?>" class="form-control">
                        <small><?php echo form_error('subject_type');  ?></small>
                    </div> -->
                            
                    <div class="form-group">
                                <div class="input-group">
                                    <div class="form-actions form-group"><button type="submit"
                                            class="btn btn-info">Update</button>
                                        <a href="<?php echo base_url('sub_con/list_sub'); ?>">
                                    </div>
                                </div>
                            </div>            
                                </div>

                </form>
            </div>
        </div>
        </div>
       </div>
      </div>
