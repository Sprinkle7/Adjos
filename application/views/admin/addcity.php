
        <div class="container-fluid" style=" margin:-20px 0 -40px 0; background:#6dcff6; ">
            <div class="row-fluid"  style="">
                <div class="span3"></div>
                <div class="span5">
                 <?php
                    if(!empty($msg)) 
                    {
                    echo $msg;
                    }
                ?>
                </div>
                <div class="span4"></div>
            </div> 
             <div class="row-fluid">
                        <!-- block -->
                        <div class="block span8" style="margin:2em 15em;">
                            <div class="navbar navbar-inner block-header color8">
                                <div class="pull-left">Cities</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  </style>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name Of City</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach ($show as $row) {
                                        ?>
                                            <tr>
                                              <td><?php echo $row->id; ?></td>
                                              <td><?php echo $row->city; ?></td>
                                              <td><a href="<?php echo base_url()?>adjos_admin/edit_city/<?php echo $row->id;?>"><span class="fa fa-pencil"></span></a></td>
                                              <td><a href="<?php echo base_url()?>adjos_admin/del_city/<?php echo $row->id;?>" onclick="confirm('Are You Sure To Delete')"><span class="fa fa-trash-o"></span></a></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
           </div>

        </div>
           <div class="row">
                <div class="modal fade" id="city" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header color9">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <h4 class="modal-title">Add City</h4>
                      </div>
                      <div class="modal-body">
                        <div class="panel-body">
                         <div class="row">
                          <div class="span4">
                          <!-- Form Starts Here -->
                           <form class="form-horizontal" action="<?php echo base_url();?>adjos_admin/addcity" method="post" role="form">
                            <!-- row starts here -->
                           
                            <div class="control-group simple">
                              <label class="control-label">City Name</label>
                               <div class="controls">
                                  <input type="text" name="name" class="input" required>
                               </div>
                            </div>
                           <!-- Form Ends Here -->
                         </div>
                        </div>
                        <!-- /.row (nested) -->
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default color8" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-default color8" value="Save City">
                        <input type="hidden" value="adding" name="city">
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
             </div>
                

        <!--/.fluid-container-->
      <script src="../assets/vendors/jquery-1.11.1.min.js"></script>
        <script src="../assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/assets/scripts.js"></script>
        <script src="../assets/assets/DT_bootstrap.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
            $('.alert').delay(2000).hide(500);
        });
      </script>
    </body>

</html>