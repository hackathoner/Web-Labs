function createAlert() {

	if(!document.getElementById('swag').value != true){


	sweetAlert({
  title: document.getElementById('swag').value,
  type: "success",
  showCancelButton: false,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Done",
  closeOnConfirm: true,
  html: false
}, function(){
});
	}else{

		swal("You didn't enter anything :(", "" ,"warning")
	}
	
}

