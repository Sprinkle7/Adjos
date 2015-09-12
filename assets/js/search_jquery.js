       	 $(document).ready(function(){
				 	$("#admissions").hide();
                    $("#col").hide();
				 	$("#scholarships").hide();
				 	$("#jobs").hide();
      			 $("select").change(function(){
            	$( "select option:selected").each(function(){
                if($(this).attr("value")=="admissions"){
				 	$("#admissions").show();
                    $("#tab1").hide(1000);
                    $("#scholarships").hide();
                    $("#jobs").hide();
                    $("#id1").fadeIn('slow').show();
/////////////////////////// Buttons Onward ////////////////////////////////////////////////////////////////////////
                    // Button One
	                $("#admissions").find("#next1").click(function(){
	                    $("#admissions").find("#id1").hide(1000);
	                    $("#admissions").find("#id2").show(1000);
                    });
                    // Button Two
                    $("#admissions").find("#next2").click(function(){
	                    $("#admissions").find("#id2").hide(1000);
	                    $("#admissions").find("#id3").show(1000);
                    });
                     $("#admissions").find("#reset").click(function(){
                        $("#admissions").hide(1000);
                        $("body").find("#tab1").show(1000);
                    });
/////////////////////////// Buttons Backward ////////////////////////////////////////////////////////////////////////
                    // Button One
                    $("#admissions").find("#prev1").click(function(){
                        $("#admissions").find("#id2").hide(1000);
                        $("#admissions").find("#id1").show(1000);
                    });
                    // Button Two
                    $("#admissions").find("#prev2").click(function(){
                        $("#admissions").find("#id3").hide(1000);
                        $("#admissions").find("#id2").show(1000);
                    });  
////////////////////////////////////////////////////////////////////////////////////////////////////////////
                }
                if($(this).attr("value")=="scholarships"){
                    $("#scholarships").show();
                    $("#admissions").hide();
                    $("#col").hide();
                    $("#jobs").hide();
                    $("#tab1").hide(1000);
                    $("#sd1").fadeIn('slow').show();
/////////////////////////// Buttons Onward ////////////////////////////////////////////////////////////////////////
                    // Button One
                    $("#scholarships").find("#snext1").click(function(){
                        $("#scholarships").find("#sd1").hide(1000);
                        $("#scholarships").find("#sd2").show(1000);
                    });
                    $("#scholarships").find("#snext2").click(function(){
                        $("#scholarships").find("#sd2").hide(1000);
                        $("#scholarships").find("#sd3").show(1000);
                    });
                    // Button Two
                    $("#scholarships").find("#reset").click(function(){
                        $("#scholarships").hide(1000);
                        $("body").find("#tab1").show(1000);
                    });
/////////////////////////// Buttons Backward ////////////////////////////////////////////////////////////////////////
                    // Button One
                    $("#scholarships").find("#sprev1").click(function(){
                        $("#scholarships").find("#sd2").hide(1000);
                        $("#scholarships").find("#sd1").show(1000);
                    });
                     $("#scholarships").find("#sprev2").click(function(){
                        $("#scholarships").find("#sd3").hide(1000);
                        $("#scholarships").find("#sd2").show(1000);
                    });
////////////////////////////////////////////////////////////////////////////////////////////////////////////

                }
                if($(this).attr("value")=="jobs"){
                    $("#admissions").hide();
                    $("#scholarships").hide();
                    $("#col").hide();
                    $("#jobs").show();
                    $("#tab1").hide(1000);
                    $("#j1").fadeIn('slow').show();
/////////////////////////// Buttons Onward ////////////////////////////////////////////////////////////////////////
                    // Button One
                    $("#jobs").find("#jnext1").click(function(){
                        $("#jobs").find("#j1").hide(1000);
                        $("#jobs").find("#j2").show(1000);
                    });
                    $("#jobs").find("#reset").click(function(){
                        $("#jobs").hide(1000);
                        $("body").find("#tab1").show(1000);
                    });
/////////////////////////// Buttons Backward ////////////////////////////////////////////////////////////////////////
                    // Button One
                    $("#jobs").find("#jprev1").click(function(){
                        $("#jobs").find("#j2").hide(1000);
                        $("#jobs").find("#j1").show(1000);
                    });
                   
                }
            });
        }).change();
    }); 