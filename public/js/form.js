$("#start_information_b").click(function(event) {
    event.preventDefault();
    $( "#event_registration, #organizers, #program_spek" ).hide();
    $("#start_information").show();
})
$("#event_registration_b").click(function(event) {
    event.preventDefault();
    $( "#start_information, #organizers, #program_spek" ).hide();
    $("#event_registration").show();
})
$("#organizers_b").click(function(event) {
    event.preventDefault();
    $( "#start_information, #event_registration, #program_spek" ).hide();
    $("#organizers").show();
})
$("#program_spek_b").click(function(event) {
    event.preventDefault();
    $( "#start_information, #organizers, #event_registration" ).hide();
    $("#program_spek").show();
})