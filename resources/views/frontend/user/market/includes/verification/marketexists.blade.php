<script type="text/javascript">

$('#market_name').blur(function() {
 var input = $('#market_name');
 var wantedName = input.val();

 $.ajax({
     method: 'GET',
     url: "{{route('frontend.user.market.validate.name')}}",
     data: {
         name: wantedName,
     }
 }).done(function(e) {
     if(e == 'exists' ) {
         $('div.invalid-feedback.market-name').attr('style', 'display:block');
     } else {
         $('div.valid-feedback.market-name').attr('style', 'display:block');
     }
 })
});

$('#business_email').blur(function() {
 var input = $('#business_email');
 var email = input.val();

 $.ajax({
     method: 'GET',
     url: "{{route('frontend.user.market.validate.email')}}",
     data: {
         email: email,
     }
 }).done(function(e) {
     if(e == 'exists' ) {
         $('div.invalid-feedback.email').attr('style', 'display:block');
     } else {
         $('div.valid-feedback.email').attr('style', 'display:block');
     }
 })
});




</script>
