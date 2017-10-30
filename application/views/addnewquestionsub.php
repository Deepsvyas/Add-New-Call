<div class="form-group col-lg-12" style="padding:5px;">
  <label style="float: left; padding: 5px;"><?php echo $no ?>. </label>
  <input type="text" class="form-control col-lg-8" required placeholder="Sub Question" name="questionarray[<?php echo $subquestionarray; ?>][answer][subquestionarray][<?php echo $no ?>][question]" style="float: left;" >
  <span class="glyphicon glyphicon-font" style="float: left; padding: 5px;">A</span>
  <select class="form-control col-lg-3 changeanswertypesub" name="questionarray[<?php echo $subquestionarray; ?>][answer][subquestionarray][<?php echo $no ?>][answertype]" data-qarray="questionarray[<?php echo $subquestionarray; ?>][answer][subquestionarray][<?php echo $no ?>]" required>
    <option value="">Select</option>
    <option value="multiline">Multi line Text</option>
    <option value="singlechoice">Single Choice</option>
    <option value="multichoice">Multi Choice</option>
  </select>
  
</div>
<div class="answertypeidsub" style="width: 100%;"></div> 

<script type="text/javascript">
var sasqcount = 1;
$(".changeanswertypesub").change(function(){
    var $this = $(this);
    var qestionarrayval = $(this).data('qarray');
    $.ajax({
      url: "<?php echo base_url(); ?>maincontroller/answertypesub", 
      type:'POST',
      data:{typeofanswer:$(this).val(),subquestionarray:'<?php echo $subquestionarray ?>',no:'<?php echo $no ?>',answertypeno:'<?php echo $no ?>',questionarray:qestionarrayval},
      success: function(result){
        $this.parent('.form-group').next(".answertypeidsub").html(result);
        sasqcount++;
    }});
});
</script>