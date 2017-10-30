<?php if($answertype == 'multiline'){ ?>
<div id="multiline" class="form-group col-lg-12" style="padding:5px; margin-left: 29px;"  >
  <label style="float:left">-></label>
  <textarea class="form-control col-lg-8" required placeholder="Multi line Answer" name="<?php echo $questionarray ?>[answer][]"></textarea>                      
</div>
<?php }elseif($answertype == 'singlechoice'){ ?>
<div id="singlechoise" class="form-group col-lg-12" style="padding:5px; margin-left: 29px;"  >
  <label style="float:left">-></label>
  <input type="text" class="form-control col-lg-8" required placeholder="Single Choice Answer" name="<?php echo $questionarray ?>[answer][]">
  
  </div>
                    

<?php }elseif($answertype == 'multichoice'){ ?>
<div id="multichoise" class="form-group col-lg-12" style="padding:5px; margin-left: 29px;"  >
  <div class="form-group col-lg-12" style="padding:3px;">
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer" name="<?php echo $questionarray ?>[answer][]" >
    
  </div>
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer" name="<?php echo $questionarray ?>[answer][]" >
    
  </div> 
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer" name="<?php echo $questionarray ?>[answer][]" >
    
  </div>
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer" name="<?php echo $questionarray ?>[answer][]" >
    
  </div>
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer" name="<?php echo $questionarray ?>[answer][]" >
    
  </div>                
</div>
<?php } ?>