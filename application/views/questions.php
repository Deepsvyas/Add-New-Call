<div class="form-group col-lg-12" style="padding:5px;">
  <label style="float: left; padding: 5px;"><?php echo $no ?>. </label>
  <input type="text" class="form-control col-lg-8" required placeholder="Question" name="questionarray[<?php echo $no ?>][question]" style="float: left;">
  <span class="glyphicon glyphicon-font" style="float: left; padding: 5px;">A</span>
  <select class="form-control col-lg-3 changeanswertype<?php echo $no ?>" name="questionarray[<?php echo $no ?>][answertype]" required>
    <option value="">Select</option>
    <option value="multiline">Multi line Text</option>
    <option value="singlechoice">Single Choice</option>
    <option value="multichoice">Multi Choice</option>
  </select>
  
</div>
<div class="answertypeid<?php echo $no ?>" style="width: 100%;"></div> 

<script type="text/javascript">
$(".changeanswertype<?php echo $no ?>").change(function(){
    $.ajax({
      url: "<?php echo base_url(); ?>maincontroller/answertype", 
      type:'POST',
      data:{typeofanswer:$(this).val(),qcount:'<?php echo $no ?>'},
      success: function(result){
        sqcount = 1;
        $(".answertypeid<?php echo $no ?>").html(result);
    }});
});
</script>