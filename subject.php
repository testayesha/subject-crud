<?php  $this->load->view('include/header'); ?>
<?php  $this->load->view('include/sidebar'); ?>
<?php  $this->load->view('include/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Create Subject
                        <a href="<?php echo base_url('sub_con/create'); ?>" class="btn btn-danger float-right">ADD</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="">Branch Name</label>
                            <select type="text" name="branch_id" class="form-control">
                                <option value="">Select Branch</option>


                                <?php 
                
                        foreach($get_branch as $branch)
                          {   ?>
                                <option value="<?php echo $branch['branch_id']; ?>">
                                    <?php echo $branch['branch_name']; ?></option>
                                <?php   }  ?>

                                <!-- <small><?php echo form_error('branch_name');  ?></small> -->
                        </div>
                        </select>


                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" id="subject_name" name="subject_name" placeholder="subject_name"
                                    class="form-control" value="<?php echo set_value('subject_name'); ?>">
                                <?php echo form_error('subject_name'); ?>
                            </div>
                        </div>
                </div>



                <div class="form-group">
                    <div class="input_group">
                        <label for="">Subject Author</label>
                        <input type="text" name="subject_author" class="form-control"
                            value="<?php echo set_value('subject_author'); ?>">
                        <small><?php echo form_error('subject_author');  ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input_group">
                        <label for="">Subject Type</label>
                        <select type="text" name="subject_type" class="form-control" value="<?php echo set_value('subject_type'); ?>>
                        <option value="">Select Subject Type</option>
                    
                          
                        <?php 
                
                        foreach($get_sub_type as $subject)
                          {   ?>
                            <option value="
                            <?php echo $subject['subject_type']; ?>"><?php echo $subject['subject_type']; ?></option>
                            <?php   }  ?>

                            <!-- <small><?php echo form_error('subject_type');  ?></small> -->
                    </div>
                    </select>

                </div>
                <!-- <div class="form-group">
                        <label for="">Subject Type</label>
                        <input type="text" name="subject_type" class="form-control">
                        <small><?php// echo form_error('subject_type');  ?></small>
                    </div> 


                     -->

                <div class="form-group">
                    <div class="input-group">
                        <div class="form-actions form-group"><button type="submit"
                                class="btn btn-primary btn_lg">Submit</button>
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