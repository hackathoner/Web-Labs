function onClick(ev) {
    console.log(ev.target.tagName);
    if(ev.target.tagName == "DIV"){
        document.getElementById('2').style.background = "orange";
        document.getElementById('5').style.background = "white";
        document.getElementById('3').style.background = "white";
        document.getElementById('1').style.background = "white";
        document.getElementById('4').style.background = "white";

    }else if(ev.target.tagName == "P"){
        document.getElementById('1').style.background = "white";
        document.getElementById('3').style.background = "white";

        document.getElementById('2').style.background = "white";
        document.getElementById('5').style.background = "white";
        document.getElementById('4').style.background = "orange";

    }else if(ev.target.tagName == "UL"){
        document.getElementById('1').style.background = "white";
        document.getElementById('2').style.background = "white";
        document.getElementById('3').style.background = "white";

        document.getElementById('4').style.background = "white";
        document.getElementById('5').style.background = "orange";

    }else if(ev.target.tagName == "LI"){
        document.getElementById('5').style.background = "white";
        document.getElementById('1').style.background = "white";
        document.getElementById('2').style.background = "white";
        document.getElementById('3').style.background = "orange";
        document.getElementById('4').style.background = "white";

    }else {
        document.getElementById('3').style.background = "white";
        document.getElementById('1').style.background = "orange";
        document.getElementById('2').style.background = "white";
        document.getElementById('4').style.background = "white";

        document.getElementById('5').style.background = "white";

    }
//    var nextNode = getFirstValidElement(ev.target);
}