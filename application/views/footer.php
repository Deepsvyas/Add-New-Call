    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
<script type="text/javascript">
var qcount = 1;
var sqcount = 1;
var asqcount = 1;
var sasqcount = 1;
// $(".changeanswertype").change(function(){
//     $.ajax({
//     	url: "<?php echo base_url(); ?>maincontroller/answertype", 
//     	type:'POST',
//     	data:{typeofanswer:$(this).val()},
//     	success: function(result){
//         $(".answertypeid").html(result);
//     }});
// });
</script>
<script type="text/javascript">
$(".addnewquestion").click(function(){
	$('#enablebutton').removeAttr('disabled');
    $.ajax({
    	url: "<?php echo base_url(); ?>maincontroller/addnewquestion", 
    	type:'POST',
    	data:{qcount:qcount},
    	success: function(result){
        $(".appendquestion").append(result);
        qcount++;
    }});
});
</script>
</html>