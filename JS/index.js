document.addEventListener('DOMContentLoaded', function () {
document.getElementById('eat_button').click();
})
function openTab(evt, food) {
  
    var i, tabcontent, tablinks;
    
  
   
    tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
    }
    
  
    
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }


    document.getElementById(food).style.display = "block";
    evt.currentTarget.className += " active";
    
    
}
$(document).on("click", ".like-btn", function(e) {
  e.preventDefault ();

  var $this = $(this), // caching
      $counter = $this.find("span.badge"),
      count = parseInt($counter.text());

      $this.addClass('active');
    
      $counter.text(count+1);
  
});

