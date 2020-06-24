// Menu Toggle
$(document).ready(function(){
    $("#openMenu").click(function(){
        $("#site-navigation").toggle();
        $("#navigationSearch").toggle();
    });
});


// Studio Programs Modals
$(document).ready(function(){
    $("#openSeminar").click(function(){
        $("#modalSeminar").show();
    });
    $("#closeSeminar").click(function(){
        $("#modalSeminar").hide();
    });
});

$(document).ready(function(){
    $("#openMAstudio").click(function(){
        $("#modalMAstudio").show();
    });
    $("#closeMAstudio").click(function(){
        $("#modalMAstudio").hide();
    });
});

$(document).ready(function(){
    $("#openBachelor").click(function(){
        $("#modalBachelor").show();
    });
    $("#closeBachelor").click(function(){
        $("#modalBachelor").hide();
    });
});

$(document).ready(function(){
    $("#openLiveproject").click(function(){
        $("#modalLiveproject").show();
    });
    $("#closeLiveproject").click(function(){
        $("#modalLiveproject").hide();
    });
});

$(document).ready(function(){
    $("#openInsidemodal").click(function(){
        $("#insideModal").show();
    });
    $("#closeInsidemodal").click(function(){
        $("#insideModal").hide();
    });
});


// Studio Modals
$(document).ready(function(){
    $("#openInfo").click(function(){
        $("#modalInfo").toggle();
        $("#modalSeminar").hide();
    });
});

$(document).ready(function(){
    $("#openVideo").click(function(){
        $("#modalVideo").show();
    });
    $("#openInfo").click(function(){
        $("#modalVideo").hide();
    });
});


// Go Back One Page
function goBack() {
    window.history.back();
}


// Numeric FLoor Pad
// Cache selectors
var lastId,
    topMenu = $("#floorPad"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});