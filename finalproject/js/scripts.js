$(function(){

	//  function checkAble() {
	//     if($(".swag2.btn:first-child").val=="Choose class") {
	//     	$("#newclass").attr('disabled','disabled');
	//     	console.log("Y");
	//     }else{
	//     	$("#newclass").removeAttr('disabled');
	//     }
	// }

	// function checkAble2() {
	//     if($(".swag3.btn:first-child").val=="Choose chapter") {
	//     	$("#newchapter").attr('disabled','disabled');
	//     	console.log("Y2");
	//     }else{
	//     	$("#newchapter").removeAttr('disabled');
	//     }
	// }
	
    $("#subject li a").click(function(){
      $(".swag2.btn:first-child").text($(this).text());
      $(".swag2.btn:first-child").val($(this).text());

      //DO AJAX TO CALL THE PHP FUNCTION TO SHOW THE CLASSES FOR THIS SUBJECT
   });



 //    $("#theclass li a").click(function(){
 //      $(".swag2.btn:first-child").text($(this).text());
 //      $(".swag2.btn:first-child").val($(this).text());
 //      checkAble();
 //     //DO AJAX TO CALL THE PHP FUNCTION TO SHOW THE CHAPTERS FOR THIS SUBJECT
 //   });




 //    $("#thechapter li a").click(function(){
 //      $(".swag3.btn:first-child").text($(this).text());
 //      $(".swag3.btn:first-child").val($(this).text());
 //      checkAble2();
 //   });


	// checkAble();

	// checkAble2();


});

