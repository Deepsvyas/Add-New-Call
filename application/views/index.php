    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="mt-5">ADD NEW CALL</h1>
          <div class="row" >
            <div class="col-lg-12">
              <form class="" style="padding:5px;" action='' method="post">
                <div style="min-height:400px; border:1px solid; max-height: 400px;overflow-y: scroll;" class="appendquestion">                    
                    <?php echo $this->session->flashdata('flsh_msg'); ?>
                </div>
                <div class="form-group" style="border:1px solid; padding:5px;">
                  <div class="">
                    <a class="btn btn-default btn-block text-right addnewquestion">+Add New Question</a>
                  </div>
                </div>
                <div class="form-group" style="border:1px solid; padding:5px;">
                  <div class="col-sm-offset-2 col-sm-10 pull-right">
                    <button type="submit" class="btn btn-primary" id="enablebutton" name="submit" disabled>Submit</button>
                    <a href="<?php echo base_url('/'); ?>" class="btn btn-default">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

