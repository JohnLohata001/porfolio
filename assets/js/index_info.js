$('.myform').on('submit', function(e) {

    e.preventDefault();

    if ($('#name').val() = '') {
      $('#nameErr').val('Fill The Name');
    }



    $('.output_message').text('Loading...');

    var form = $(this);
    $.ajax({
      url: form.attr('action'),
      method: form.attr('method'),
      data: form.serialize(),
      success: function(result) {
        if (result == 'success') {
          $('.output_message').text('Message Sent!');

          $('#myform')['0'].reset();
        } else {
          $('.output_message').text('Error Sending email!');
        }
      }
    });

//     // Prevents default submission of the form after clicking on the submit button. 
//     return false;
  });
// });