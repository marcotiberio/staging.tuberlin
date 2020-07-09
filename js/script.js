// FOYER 0
$(document).ready(function(){
    $("#_00_URBAN_DESIGN_FLOOR").mouseenter(function(){
      $("#_00_URBAN_DESIGN_TEXT").css("display", "block");
    });
    $("#_00_URBAN_DESIGN_FLOOR").mouseleave(function(){
      $("#_00_URBAN_DESIGN_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_00_MARCH-T_FLOOR").mouseenter(function(){
      $("#_00_MARCH-T_TEXT").css("display", "block");
    });
    $("#_00_MARCH-T_FLOOR").mouseleave(function(){
      $("#_00_MARCH-T_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_00_ACKRERSTR_FLOOR").mouseenter(function(){
      $("#_00_ACKERSTR_TEXT").css("display", "block");
    });
    $("#_00_ACKRERSTR_FLOOR").mouseleave(function(){
      $("#_00_ACKERSTR_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_00_FACHSHAFT_FLOOR").mouseenter(function(){
      $("#_00_FACHSCHAFT_TEXT").css("display", "block");
    });
    $("#_00_FACHSHAFT_FLOOR").mouseleave(function(){
      $("#_00_FACHSCHAFT_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_00_ROUNDABOUT_SHAPE").mouseenter(function(){
      $("#_00_ROUNDABOUT_TEXT").css("display", "block");
    });
    $("#_00_ROUNDABOUT_SHAPE").mouseleave(function(){
      $("#_00_ROUNDABOUT_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_00_NEWS_BOARD-2").mouseenter(function(){
      $("#_00_NEWS_TEXT").css("display", "block");
    });
    $("#_00_NEWS_BOARD-2").mouseleave(function(){
      $("#_00_NEWS_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_00_ARCH_FORUM_FLOOR").mouseenter(function(){
      $("#_00_ARCH_FORUM_TEXT").css("display", "block");
    });
    $("#_00_ARCH_FORUM_FLOOR").mouseleave(function(){
      $("#_00_ARCH_FORUM_TEXT").css("display", "none");
    });
});

// FOYER 1
$(document).ready(function(){
    $("#_01_HBD_FLOOR").mouseenter(function(){
      $("#_01_HBD_TEXT").css("display", "block");
    });
    $("#_01_HBD_FLOOR").mouseleave(function(){
      $("#_01_HBD_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_01_REM_FLOOR").mouseenter(function(){
      $("#_01_REM_TEXT").css("display", "block");
    });
    $("#_01_REM_FLOOR").mouseleave(function(){
      $("#_01_REM_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_01_URBAN_MANAGEMENT_FLOOR").mouseenter(function(){
      $("#_01_URBAN_MANAGEMENT_TEXT").css("display", "block");
    });
    $("#_01_URBAN_MANAGEMENT_FLOOR").mouseleave(function(){
      $("#_01_URBAN_MANAGEMENT_TEXT").css("display", "none");
    });
});

// FOYER 3
$(document).ready(function(){
    $("#_03_GEBAUDETECHNIK_FLOOR").mouseenter(function(){
      $("#_03_GEBAUDETECHNIK").css("display", "block");
    });
    $("#_03_GEBAUDETECHNIK_FLOOR").mouseleave(function(){
      $("#_03_GEBAUDETECHNIK").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_03_TEK_FLOOR").mouseenter(function(){
      $("#_03_TEK_TEXT").css("display", "block");
      $("#_03_Tragwerkslehre").css("display", "block");
    });
    $("#_03_TEK_FLOOR").mouseleave(function(){
      $("#_03_TEK_TEXT").css("display", "none");
      $("#_03_Tragwerkslehre").css("display", "none");
    });
});

// FOYER 4
$(document).ready(function(){
    $("#_04_CODE_FLOOR").mouseenter(function(){
      $("#_04_CODE_TEXT").css("display", "block");
    });
    $("#_04_CODE_FLOOR").mouseleave(function(){
      $("#_04_CODE_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_04_DE_CO_FLOOR").mouseenter(function(){
      $("#_04_DE_CO_TEXT").css("display", "block");
    });
    $("#_04_DE_CO_FLOOR").mouseleave(function(){
      $("#_04_DE_CO_TEXT").css("display", "none");
    });
});

// FOYER 5
$(document).ready(function(){
    $("#_05_ARCH_FOR_HEALTH_FLOOR").mouseenter(function(){
      $("#_05_ARCH_FOR_HEALTH_TEXT").css("display", "block");
    });
    $("#_05_ARCH_FOR_HEALTH_FLOOR").mouseleave(function(){
      $("#_05_ARCH_FOR_HEALTH_TEXT").css("display", "none");
    });
});
$(document).ready(function(){
    $("#_05_ADREIZEHN_FLOOR").mouseenter(function(){
      $("#_05_ADREIZEHN_TEXT").css("display", "block");
    });
    $("#_05_ADREIZEHN_FLOOR").mouseleave(function(){
      $("#_05_ADREIZEHN_TEXT").css("display", "none");
    });
});








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

$(document).ready(function(){
    $("#openIntro").click(function(){
        $("#modalIntro").toggle();
        $("#modalInfo").hide();
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




// Types
$(document).ready(function(){
    $( "#arrowsTypes" ).click(function() {
        $( "#boxTypes" ).animate({
            height: "65vh", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#arrowsTypes" ).click(function() {
        $( "#arrowOne" ).animate({
            margin: "0 100px", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#arrowsTypes" ).click(function() {
        $( "#arrowTwo" ).animate({
            margin: "0 100px", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#arrowsTypes" ).click(function() {
        $( "#arrowThree" ).animate({
            margin: "0 100px", 
            }, 200 );
        });
    });

    $(document).ready(function(){
    $( "#arrowsTypes" ).click(function() {
        $( "#infoTypes" ).animate({
            margin: "5% 0 0 0", 
            }, 200 );
        });
    });

    $(document).ready(function(){
    $( "#arrowsTypes" ).click(function() {
        $( "#knowledgeTypes" ).animate({
            margin: "-300px 0 0 0", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#titleTypes" ).click(function() {
        $( "#boxTypes" ).animate({
            height: "12vh", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#titleTypes" ).click(function() {
        $( "#arrowOne" ).animate({
            margin: "0", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#titleTypes" ).click(function() {
        $( "#arrowTwo" ).animate({
            margin: "0", 
            }, 200 );
        });
    });
    
    $(document).ready(function(){
    $( "#titleTypes" ).click(function() {
        $( "#arrowThree" ).animate({
            margin: "0", 
            }, 200 );
        });
    });

    $(document).ready(function(){
    $( "#titleTypes" ).click(function() {
        $( "#infoTypes" ).animate({
            margin: "2% 0 0 0", 
            }, 200 );
        });
    });

    $(document).ready(function(){
    $( "#titleTypes" ).click(function() {
        $( "#knowledgeTypes" ).animate({
            margin: "0 0 0 0", 
            }, 200 );
        });
    });



$(document).ready(function(){
    $( "#arrowsTypesMobile" ).click(function() {
        $( "#boxTypesMobile" ).animate({
            height: "100vh", 
            }, 200 );
        });
    });

$(document).ready(function(){
    $( "#titleTypesMobile" ).click(function() {
        $( "#boxTypesMobile" ).animate({
            height: "12vh", 
        }, 200 );
    });
});