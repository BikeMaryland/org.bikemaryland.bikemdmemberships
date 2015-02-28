<script>
{literal}

function toggleFamilyField($){

    if($("input[membership-type=2]").is(':checked') || 
       $("input[membership-type=10]").is(':checked')){

       console.log("Family!");

       $('.helprow-custom_6-section').show();
       $('.editrow_custom_6-section').show();
    } else {
       $('.helprow-custom_6-section').hide();
       $('.editrow_custom_6-section').hide();
    }

}

cj(document).ready(function($) {
    console.log( "membership ready! " );

    toggleFamilyField($);

    $("input[name=price_19]").click(function(){
	toggleFamilyField($);
    });
    
});
{/literal}	
</script>