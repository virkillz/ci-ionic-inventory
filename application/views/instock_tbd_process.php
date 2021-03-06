
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Detail AWB</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li class="active">Detail AWB</li>
                                </ol>
                            </div>
                        </div>

                        <?php foreach($result  as $r): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Detail AWB</h3>
                                    </div>
                                    <div class="panel-body">
                                       <form class="form-horizontal" method="post">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">AWB</label>
                                            <div class="col-sm-9">
                                            	<p class="blend"><?php echo $r->awb; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Destination State/Division</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->receiverstate; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Destination Point</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo '(ID '.$r->codeto.') '.$r->locationName; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Name</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->senderName; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender NRC</label>
                                            <div class="col-sm-9">

                                                <p class="blend"><?php echo $r->senderNRC; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Phone</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->senderPhone; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sender Address</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->senderAdd; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Name</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverName; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver NRC</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverNRC; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Phone</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverPhone; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Receiver Address</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->receiverAdd; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Dimension</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->width.' cm x '.$r->width.' cm x'.$r->length.' cm'; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Weight</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->weight; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Price per kg</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->price.' ky (for first 5kg)'; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Total Price</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->totalprice; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Service Type</label>
                                            <div class="col-sm-9">
                                                <p class="blend"><?php echo $r->servicetype; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Content of package</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->content; ?></p>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Content of package</label>
                                            <div class="col-sm-9">
                                              <p class="blend"><?php echo $r->deliveryStatus; ?></p>

                                            </div>
                                        </div>
                                        </div>

                                    </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                        <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading"><h3 class="panel-title">Handover to Customer</h3></div>
                                                            <div class="panel-body">
                                                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>instock/tbd_action">

                                                                    <div class="form-group">
                                                                        <input type="hidden" value="<?php echo $r->awb; ?>" name="awb">
                                                                        <label class="col-md-2 control-label">Actual Receiver Name</label>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" name="actrecname" placeholder="Put actual receiver name here">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label">Same receiver with data?</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" name="samename">
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-2 control-label">Aditional Info</label>
                                                                        <div class="col-md-10">
                                                                            <textarea class="form-control" rows="5" name="addinfo"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"></label>
                                                                        <div class="col-sm-10">
                                                                          <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> <!-- panel-body -->
                                                        </div> <!-- panel -->
                                                    </div> <!-- col -->
                                                </div> <!-- End row -->


<div class="row">
<div class="col-lg-12">
  <div class="panel panel-default panel-fill">
    <div class="panel-heading">
        <h3 class="panel-title">Log History</h3>
    </div>
        <div class="timeline-2">

          <?php foreach ($logs as $l)
          {
            echo '
            <div class="time-item">
                        <div class="item-info">
                            <div class="text-muted">'.$l->time.'</div>
                            <p>'.$l->textlog.'</p>
                        </div>
                    </div>';

          } ?>
    </div>
</div>
</div>
</div> <!-- container -->
</div> <!-- content -->
</div> <!-- container -->
</div> <!-- container -->

                <footer class="footer text-right">
                    2015 © <?php echo MY_CONSTANT; ?>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-blockui/jquery.blockUI.js"></script>
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>
	</body>
</html>
