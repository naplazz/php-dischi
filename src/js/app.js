var $ = require('jquery');
$(document).ready(function() {

  $('#btn').click(function() {
    $('.php_display').addClass('hidden');
    $('h1').text('Jquery Display')
    $.ajax({
      url: 'http://localhost:8888/BOOLEAN-PHP/php-dischi/jsonencode.php',
      method: 'GET',
      success: function(data) {
        var dischi = JSON.parse(data);
        for (var i = 0; i < dischi.length; i++) {
          var source = document.getElementById("entry-template").innerHTML;
          var template = Handlebars.compile(source);
          var context = {
            title: dischi[i].title,
            artist: dischi[i].artist,
            img: dischi[i].img
          };
          var html = template(context);
          $('.jsonappend').append(html)

        }
        $('#btn').click(function() {
          location.reload();
        });

      },
      error: function() {
        alert('error');
      }

    });


  });



});
