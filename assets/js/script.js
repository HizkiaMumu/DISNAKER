function app_confirm(url,message){
	result=confirm(message);
	if (result == true) {
	    window.location.href=url;
	} else {
	    return false;
	}
}