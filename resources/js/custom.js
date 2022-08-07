$(document).ready(()=>{
	$('form.delete button').click(e=>{
		e.preventDefault();
		$.ajax({
			url: '/getTranslations',
            type: 'GET',
            dataType:'JSON',
            data: {
            	translations:[
            		'users.delete.confirm'
            	]
            },
		}).done(response=>{
			if(confirm(response['users.delete.confirm'])){
				$('form.delete').submit();
			}
		})
		.fail(response=>{
			console.error(response);
		});
	});
});