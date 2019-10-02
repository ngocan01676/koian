require(['jquery'],function(){

	jQuery(document).ready(function(){
		jQuery("#form_height").submit(function(){

			var heightValue=jQuery("input[name='height']").val();
			var weightValue=jQuery("input[name='weight']").val();
			//var url='owlcarousel/result/result';
			//var url = "<?php echo $block->getBaseUrl().'owlcarousel/result/result/' ?>";
			var url="http://localhost/owlcarousel/result/result";
			jQuery.ajax({
                url:url,
                type:"POST",
                data:{height:heightValue,weight:weightValue},
                showLoader:true,
                cache:false,
                success:function(response){
                	console.log(response.output);
                	jQuery("#calval").show();
                	jQuery("#output").text(response.output);
                }


			});
			 return false;

		});

	});
});