 $(document).ready(function(){
        date();
      });
      function date(){
      var $d = new Date();
      document.getElementById("date").innerHTML = $d;
    };
    setInterval(date, 1000);
  