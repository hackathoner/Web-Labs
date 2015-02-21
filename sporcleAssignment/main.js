var score = 0;
var repeat;
var timeLeft = 3;

function startGame() {
	var button = document.getElementById('start');
    var title = document.getElementById('title');
    button.parentNode.removeChild(button);
    title.parentNode.removeChild(title);
    var q = document.createTextNode("Score: " + score);
    document.getElementById('score').appendChild(q);
    showQuestion();
}

function startTimer(timeLeft){
	var mytime = timeLeft;
	repeat = setInterval((countdown),1000);

		
}
function countdown(){
	if(timeLeft != 0){s
		var timer = document.getElementById('timer');
		timer.innerHTML = timeLeft + " seconds" ;
		console.log(timeLeft);
		timeLeft--;
	}else{
		deleteQuestion();
		showQuestion();
		timeLeft = 3;
		// repeat.stop();
	}

}
function deleteQuestion(){
	var lead = document.getElementById('questions');
	lead.parentNode.removeChild(lead);
	var qs = document.appendChild('div');


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
	var a1html = '<input type="text" style="width:30%; font-family:Roboto; font-size:25px; font-weight:300; margin-top:3%"/>';
	var a1 = document.createElement("div");
	a1.innerHTML = a1html;
	lead.appendChild(a1);
	startTimer(30);

}