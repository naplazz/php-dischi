var $ =  require('jquery');
$(document).ready(function() {

$('#btn').click(function() {
  $('.php_display').addClass('hidden');
  $('h1').text('Jquery Display')
  $.ajax({
    url: 'http://localhost:8888/BOOLEAN-PHP/php-dischi/jsonencode.php',
    method: 'GET',
    success: function(data){
      var dischi = JSON.parse(data)
      console.log(data)
    },
    error: function(){
      alert('error');
    }

  });


});



});
