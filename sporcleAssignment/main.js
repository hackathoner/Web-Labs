function startGame(){
	
	var button = document.getElementById('start');
    button.parentNode.removeChild(button);
    var title = document.getElementById('title');
    title.parentNode.removeChild(title);
    showQuestion();
}
function showQuestion(){
	var states = ['Alabama Montgomery', 'Alaska Juneau', 'Arizona Phoenix', 'Arkansas Little Rock', 'California Sacramento', 'Colorado Denver', 'Connecticut Hartford', 'Delaware Dover', 'Florida Tallahassee', 'Georgia Atlanta', 'Hawaii Honolulu', 'Idaho Boise', 'Illinois Springfield', 'Indiana Indianapolis', 'Iowa Des Moines', 'Kansas Topeka', 'Kentucky Frankfort', 'Louisiana Baton Rouge', 'Maine August', 'Maryland Annapolis', 'Massachusetts Boston', 'Michigan Lansing', 'Minnesota St.Paul', 'Mississippi Jackson', 'Missouri Jackson', 'Montana Helena', 'Nebraska Lincoln', 'Nevada Carson City', 'New Hampshire Concord', 'New Jersey Trenton', 'New Mexico Santa Fe', 'New York Albany', 'North Carolina Raleigh', 'North Dakota Bismarck', 'Ohio Columbus', 'Oklahoma Oklahoma City', 'Oregon Salem', 'Pennsylvania Harrisburg', 'Rhode Island Providence', 'South Carolina Columbia', 'South Dakota Pierre', 'Tennessee Nashville', 'Texas Austin', 'Utah Salt Lake City', 'Vermont Montpelier', 'Virginia Richmond', 'Washington Olympia', 'West Virginia Charleston', 'Wisconsin Madison', 'Wyoming Cheyenee'];
	for(var x = 0; x < states.length; x ++){
		console.log("State: " + states[x].substring(0,states[x].indexOf(" ")) + "\nCapital: " + states[x].substring(states[x].indexOf(" ")));
	}
	var lead = document.getElementById('questions');
	var valled = parseInt((Math.random() * 49));
	console.log(valled);
	var q = document.createTextNode("What is the Capital of " + states[valled].substring(0,states[valled].indexOf(" ")) + "?");
	lead.appendChild(q);
	var a1html = '<input type="text" style="padding-left:5%; padding-right: 5%; padding-top:2%; padding-bottom:2%;"/>';
	var a1 = document.createElement("div");
	a1.innerHTML = a1html;
	lead.appendChild(a1);
	

}