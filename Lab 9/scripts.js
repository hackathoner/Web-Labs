function myAjax() {
      $.ajax({
           type: "POST",
           url: 'download.php',
           data:{action:'call_this'},
           success:function(html) {
             alert("Row Deleted");
             window.location = "generated.pdf";
           }

      });
 }