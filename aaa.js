
  $('#stt').keypress(function(e) {
      if(e.which == 13) {
          var key=$('#stt').val();
          var url="showstudent.php?q="+key;
          location.href=url;
      }
  });


    $('#en').keypress(function(e) {
        if(e.which == 13) {
            var key=$('#en').val();
            var url="showbooka.php?q="+key;
            location.href=url;
        }
    });
