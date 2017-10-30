<?php if($answertype == 'multiline'){ ?>
<div id="multiline" class="form-group col-lg-12" style="padding:5px; margin-left: 29px;"  >
  <label style="float:left">-></label>
  <textarea class="form-control col-lg-8" required placeholder="Multi line Answer" name="questionarray[<?php echo $answertypeno; ?>][answer][]"></textarea>                      
</div>
<?php }elseif($answertype == 'singlechoice'){ ?>
<div id="singlechoise" class="form-group col-lg-12" style="padding:5px; margin-left: 29px;"  >
  <label style="float:left">-></label>
  <input type="text" class="form-control col-lg-8" required placeholder="Single Choice Answer" name="questionarray[<?php echo $answertypeno; ?>][answer][]" style="float:left">
  <a class="addnewquestionsub" data-subqestionarray="<?php echo $answertypeno; ?>">+Add sub question</a> 
  <div class="appendquestionsub" style="width: 100%; float: left;"></div>
  </div>
                    

<?php }elseif($answertype == 'multichoice'){ ?>
<div id="multichoise" class="form-group col-lg-12" style="padding:5px; margin-left: 29px;"  >
  <div class="form-group col-lg-12" style="padding:3px;">
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer 1" name="questionarray[<?php echo $answertypeno; ?>][answer][]" >
    <!-- <a class="addnewquestionsub" data-subqestionarray="<?php echo $answertypeno; ?>">+Add sub question</a>
    <div class="appendquestionsub" style="width: 100%; float: left;"></div> -->
  </div>
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer 2" name="questionarray[<?php echo $answertypeno; ?>][answer][]" >
    <!-- <a class="addnewquestionsub" data-subqestionarray="<?php echo $answertypeno; ?>">+Add sub question</a> 
    <div class="appendquestionsub" style="width: 100%; float: left;"></div> -->
  </div> 
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer 3" name="questionarray[<?php echo $answertypeno; ?>][answer][]" >
    <!-- <a class="addnewquestionsub" data-subqestionarray="<?php echo $answertypeno; ?>">+Add sub question</a> 
    <div class="appendquestionsub" style="width: 100%; float: left;"></div> -->
  </div>
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer 4" name="questionarray[<?php echo $answertypeno; ?>][answer][]" >
    <!-- <a class="addnewquestionsub" data-subqestionarray="<?php echo $answertypeno; ?>">+Add sub question</a> 
    <div class="appendquestionsub" style="width: 100%; float: left;"></div> -->
  </div>
  <div class="form-group col-lg-12" style="padding:3px;">  
    <label style="float:left">-></label>
    <input type="text" class="form-control col-lg-8" required placeholder="Multi Choice Answer 5" name="questionarray[<?php echo $answertypeno; ?>][answer][]" >
    <!-- <a class="addnewquestionsub" data-subqestionarray="<?php echo $answertypeno; ?>">+Add sub question</a> 
    <div class="appendquestionsub" style="width: 100%; float: left;"></div> -->
  </div>                
</div>
<?php } ?>

<script type="text/javascript">
var asqcount=1;
$(".addnewquestionsub").click(function(){
	var $this = $(this);
	var subqestionarray = $(this).data('subqestionarray');
	//alert('as');

    $.ajax({
    	url: "<?php echo base_url(); ?>maincontroller/addnewquestionsub", 
    	type:'POST',
    	data:{qcount:asqcount,subquestionarray:subqestionarray},
    	success: function(result){
    		$this.next(".appendquestionsub").append(result);
        //$(this).closest('.appendquestionsub').append(result);
        asqcount++;
    }});
});
</script>