<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
<?php //echo "<pre>";print_r($allcalls) ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="mt-5">ADD NEW CALL</h1>
          <div class="row" >
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('flsh_msg'); ?>
              <table class="table" border="1">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Answertype</th>
                    <th>Answer</th>
                    <th>SubQuestion</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($allcalls as  $value): ?>
                    <tr>
                      <td><?php echo $value->id ?></td>
                      <td><?php echo $value->question ?></td>
                      <td><?php echo $value->answertype ?></td>
                      <td>
                        <?php if($value->answertype=='multichoice'){
                          echo "<pre>";
                          print_r(json_decode($value->answer));
                          echo "</pre>";
                        }else{
                          echo $value->answer;
                        } ?>
                      </td>
                      <td>
                        <?php if($value->answertype=='singlechoice'){?>
                          <p id="cliccktoview<?php echo $value->id ?>">View</p>
                        <?php } ?>
                        <script type="text/javascript">
                        $("#cliccktoview<?php echo $value->id ?>").click(function(){
                            $("#<?php echo $value->id ?>").toggle();
                        });
                        </script>
                        <div id="<?php echo $value->id ?>" style="display:none;">
                          <?php if($value->answertype=='singlechoice'){
                            echo "<pre>";
                            print_r(json_decode($value->subquestions));
                            echo "</pre>";
                          }else{
                            echo $value->subquestions;
                          } ?>
                        </div>
                      </td>
                      <td><?php echo $value->created ?></td>
                      <td><a href="<?php echo base_url() ?>maincontroller/deletecalls/<?php echo $value->id ?>">Delete</a></td>
                    </tr>
                  <?php endforeach ?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

