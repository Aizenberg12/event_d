$("#start_information_b").click(function(event) {
    event.preventDefault();
    $( "#event_registration, #organizers, #program_spek" ).hide();
    $("#start_information").show();
    $( "#2, #3, #4" ).removeClass("active");
    $( "#1" ).addClass("active");;
})
$("#event_registration_b").click(function(event) {
    event.preventDefault();
    $( "#start_information, #organizers, #program_spek" ).hide();
    $("#event_registration").show();
    $( "#1, #3, #4" ).removeClass("active");
    $( "#2" ).addClass("active");
})
$("#organizers_b").click(function(event) {
    event.preventDefault();
    $( "#start_information, #event_registration, #program_spek" ).hide();
    $("#organizers").show();
    $( "#1, #2, #4" ).removeClass("active");
    $( "#3" ).addClass("active");
})
$("#program_spek_b").click(function(event) {
    event.preventDefault();
    $( "#start_information, #organizers, #event_registration" ).hide()
    $("#program_spek").show();
    $("#1, #2, #3" ).removeClass("active");
    $( "#4" ).addClass("active");
})
