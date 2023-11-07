
//$(document).ready(function() {
//    $('.custom-radio + label').click(function() {
//        $(this).prev('.custom-radio').prop('checked', true);
//    });
//});
//$(document).ready(function(){
//    $('input[type="radio"]').change(function(){
//        var selectedValue = $('input[type="radio"]:checked').val();
//        var selectedId = $('input[type="radio"]:checked').attr('id');
//        console.log('Checked radio button value: ' + selectedValue);
//        console.log('Checked radio button ID: ' + selectedId);
//    });
//});

// Wait for the document to be ready
$(document).ready(function() {
    // Handle change event for radio buttons with name "fordbl"
    $('input[name="fordbl"]').change(function() {
        // Get the selected value for "fordbl" set of radio buttons
        var selectedValue = $('input[name="fordbl"]:checked').val();
        // Get the ID of the checked radio button
        var selectedId = $('input[name="fordbl"]:checked').attr('id');
        console.log('Selected value for fordbl: ' + selectedValue);
        console.log('Checked radio button ID for fordbl: ' + selectedId);
    });

    // Handle change event for radio buttons with name "dedbl"
    $('input[name="dedbl"]').change(function() {
        // Get the selected value for "dedbl" set of radio buttons
        var selectedValue = $('input[name="dedbl"]:checked').val();
        // Get the ID of the checked radio button
        var selectedId = $('input[name="dedbl"]:checked').attr('id');
        console.log('Selected value for dedbl: ' + selectedValue);
        console.log('Checked radio button ID for dedbl: ' + selectedId);
    });

    $('input[name="tdbl"]').change(function() {
        // Get the selected value for "dedbl" set of radio buttons
        var selectedValue = $('input[name="tdbl"]:checked').val();
        // Get the ID of the checked radio button
        var selectedId = $('input[name="tdbl"]:checked').attr('id');
        console.log('Selected value for tdbl: ' + selectedValue);
        console.log('Checked radio button ID for tdbl: ' + selectedId);
    });
});




var radioButtons = document.querySelectorAll('.custom-radio'); // Select all radio buttons with class 'custom-radio'

radioButtons.forEach(function(radioButton) {
    radioButton.addEventListener('change', function() {
        if (this.checked) {
            console.log('Checked radio button value:', this.value); // Log the value of the checked radio button
        }
    });
});
console.log("entry.js loaded");

// Get the selected value from the dropdown menu
var selectedValue = document.getElementById("af1").value;

// Set the value of the radio button equal to the selected value from the dropdown
document.getElementById("atlF1").value = selectedValue;







// BELOW NO LONGER REQUIRED BUT WILL KEEP FOR REFERENCE

//document.getElementById("edmBut").innerHTML = "Edmonton Oilers";
//document.getElementById("detBut").innerHTML = "Detriot Red Wings";
//document.getElementById("nyrBut").innerHTML = "New York Rangers";
//document.getElementById("torBut").innerHTML = "Toronto Maple Leafs";
//document.getElementById("bosBut").innerHTML = "Boston Bruins";

// Team names object
//const teamNames = {
//    edmBut: "Edmonton Oilers",
//    detBut: "Detroit Red Wings",
//    torBut: "Toronto Maple Leafs",
//    nyrBut: "New York Rangers",
//    bosBut: "Boston Bruins",
//    cgyBut: "Calgary Flames",
//    monBut: "Montreal Canadians",
//    dalBut: "Dallas Stars",
//    sjBut: "San Jose Sharks",
//    wpgBut: "Winnipeg Jets",
//    nyiBut: "New York Islanders",
//    tbBut: "Tampa Bay Lightning",
//    phiBut: "Flyers",
//    pitBut: "Pittsberg P",
//    flaBut: "Flordia Panthers",
//    minBut: "Minnisota Wild"
//};
//
//// Set text content for each team button
//for (const teamId in teamNames) {
//    if (Object.hasOwnProperty.call(teamNames, teamId)) {
//        const teamButton = document.getElementById(teamId);
//        if (teamButton) {
//            teamButton.innerHTML = teamNames[teamId];
//        }
//    }
//}
//
//
//
//// Get all elements with class "player-link"
//const playerLinks = document.querySelectorAll('.player-link');
//
//// Loop through each player link and add a click event listener
//playerLinks.forEach(link => {
//    link.addEventListener('click', function(event) {
//        // Prevent the default behavior of the link (prevents navigation)
//        event.preventDefault();
//
//        // Get the text content of the clicked player link
//        const playerName = this.textContent;
//
//        // Find the parent dropdown of the clicked link
//        const parentDropdown = this.closest('.dropdown');
//
//        // Find the button inside the parent dropdown and set its text content to the player name
//        const button = parentDropdown.querySelector('button');
//        button.textContent = playerName;
//    });
//});