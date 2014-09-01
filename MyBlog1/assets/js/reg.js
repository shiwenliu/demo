$(function(){
	
	$('#f_email').blur(function(){
		//url, param, callback, type
		var _this = this;
		$.get('check_name', {account: this.value}, function(data){
			if(data == "fail"){
				$(_this).css({
					background: 'red',
					border: '1px solid red'
				});
			}
		},"text");
	});
	
});
