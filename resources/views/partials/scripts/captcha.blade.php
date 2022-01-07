
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});



$(document).ready(function(){

    $(".btn-refresh").click(function(){
    $.ajax({
        type: "GET",
        url: "refresh-captcha",
        success: function(data) {
            console.log(data.captcha);
          //  $(".captcha span").html(data.captcha);
            $("#capman").attr("src", data.captcha);
        }
    })

  })

})
</script>
