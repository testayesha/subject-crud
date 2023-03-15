<?php  $this->load->view('include/header'); ?>
<?php  $this->load->view('include/sidebar'); ?>
<?php  $this->load->view('include/navbar'); ?>

<!DOCTYPE html>
<html>
<head>
   
    <title>List Subject</title>
    <link rel="styleshhet" type="text/css" href="<?php echo base_url('https:://bootstrap.css') ?>">

</head> 
<body>
    <!-- <div class="navbar navbar-dark bg-dark"> -->
    <div class="container">
   
    </div>
    </div>
      <div class="container" style="padding-top: 10px;"></div>             
      <h3>View Subject</h3>
      <hr>
      <div class="row">
    <div class="col-md-12"> 
       <table class="table table-stripped">
                    <tr>
                        
                         <th>#</th>
                        <th>Branch Name</th>
                        <th>Subject Name</th>
                        <th>Subject Author</th>
                          <th>Subject Type</th>
                          <th>Edit</th>
                           <th>Delete</th>
                    </tr>
                    
                    <?php  if(!empty($subject)) { foreach($subject as  $subject) { ?>
                        <tr>
                            
                           <td><?php echo $subject['subject_code']?></td>
                            <td><?php echo $subject['branch_name']?></td>
                            <td><?php echo $subject['subject_name']?></td>
                            <td><?php echo $subject['subject_author']?></td>
                            <td><?php echo $subject['subject_type']?></td>
                            <td>
                          <a href="<?php echo base_url('sub_con/edit/'. $subject['subject_code']) ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                          <a href="<?php echo base_url('sub_con/delete/'. $subject['subject_code']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                  <?php  } } else   ?>
                  <tr>
                    <td colspan="5"></td>
                  </tr>
                  <?php     ?>
                </table>
                </div>
                </div>
                </div>
            </div>
            </div>
           </div>
           </body>
           </html>
           