$(document).ready(function(){

    //function to hide and show forms
    $(".bf1").click(function(){
        
        //Values from input tag
        var aname = document.getElementById('saname').value;
        
        //ajax post for passing values to php
        $.ajax({
            type: "POST",
            url: "custom.php",
            data:{ sname: aname }, 
            success: function(){
                
            }
        });

        //Values from input tag
        check(document.getElementById("ctype").value);
        
        //form hide and show
        $("#f2").show();
        $("#f1").hide();
      });

    //fuction to hide and show forms
    $(".bf2").click(function(){

      //Delete values stored in deleteJSON.php
      jQuery.post('deleteJSON.php');

      //Clearing canvas data
      var canvas = document.getElementById('cust');
      const context = canvas.getContext('2d');
      context.clearRect(0, 0, canvas.width, canvas.height);

      //clearing iframes 
      $(".chartjs-hidden-iframe").remove();

      //form hide and show
      $("#f1").show(400);
      $("#f2").hide();
    });
  });

