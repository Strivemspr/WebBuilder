function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



(function($) {
  
  var menuItems = $("#menu-wrapper").children();
  // Menu filer
  $("#menu-flters li a").click(function() {
    $("#menu-flters li a").removeClass('active');
    $(this).addClass('active');

    var selectedFilter = $(this).data("filter");

    console.log(selectedFilter);

    var filteredItems = [];

    for (let count = 0; count < menuItems.length; count++) {
      if((menuItems[count].className.includes(selectedFilter))) {
        item = menuItems[count];
        filteredItems.push(item);
      }
    }

    console.log(filteredItems);

    $("#menu-wrapper").html(filteredItems);
  });

  // Add smooth scrolling to all links in navbar + footer link
  $(".sidenav a").on('click', function(event) {
    var hash = this.hash;
    if (hash) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function() {
        window.location.hash = hash;
      });
    }

  });

  $(".sidenav a").on('click', function() {
		closeNav();
	});

})(jQuery);
