
 
  <!-- <script src="assets/plugins/jquery/jquery.min.js"></script> -->
  <!-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.js"></script>
  <!-- <script src="assets/plugins/datatable/dataTable.bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script>
    $(document).ready(function(){
      //inialize datatable
        $('#myTable').DataTable();
       
        //hide alert
        //$(document).on('click', '.close', function(){
        //  $('.alert').hide();
        //})
          const username = $('#name').val();
        
        $('#btnAdd').click(function(){

          

          $.ajax({
            url:'../app/controllers/user.php',
            method:'POST',
            data:$('#form_submit').serialize(),
            beforeSend:function(){
                $('#sms').html('Loading ...');
            },
            success:function(response){
              alert(response);
              $('#sms').html('');
              // $('form').trigger('reset');
            }
          })
        })
    });
</script>

</body>
</html>
