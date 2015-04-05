<script>
{literal}

function toggleFamilyField($){

    // check state of 1-yr and 3-yr family memberships	 
    if($("input[membership-type=2]").is(':checked') || 
       $("input[membership-type=10]").is(':checked')){

       console.log("show family membership field ");

       $('.helprow-custom_6-section').show();
       $('.editrow_custom_6-section').show();
    } else {
       $('.helprow-custom_6-section').hide();
       $('.editrow_custom_6-section').hide();
       $('textarea#custom_6').val("");
    }
}

cj(document).ready(function($) {
    console.log( "bikemdmemberships ready! " );

    toggleFamilyField($);

    $("input[name=price_19]").click(function(){
	toggleFamilyField($);
    });

    // Move legislative districts if present
    $(".crm-profile-id-33").insertAfter(".custom_pre_profile-group");
});
{/literal}	
</script>