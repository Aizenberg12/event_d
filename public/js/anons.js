$("#about_b").click(function(event) {
    event.preventDefault();
    $( "#event_speeker" ).hide();
    $("#about").show();
    $( "#2").removeClass("active");
    $( "#1" ).addClass("active");;
})
$("#event_speeker_b").click(function(event) {
    event.preventDefault();
    $( "#about" ).hide();
    $("#event_speeker").show();
    $( "#1").removeClass("active");
    $( "#2" ).addClass("active");
})

/**
 * Created by Acer on 04.06.2017.
 */
