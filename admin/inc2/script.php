<script src="theme/js/app.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
// these script is for data table
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js">

</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
</script>
<script>
    $(document).ready(function(){
        console.log("included Jquery working");
        $('body').on('click','#logout',function(){
            alert("Do you Really want to logout");
            var user=$(this).attr('data-user');
            var page ="submit/logout.php";
            $.get(page,function(data,status){
                if(user=="admin")
                {
                    $(location).attr("href","index.php");
                }
                else
                {
                    $(location).attr("href","service_login2.php");
                }
            });
        });
    })
</script>