const requestURL = 'https://jsonplaceholder.typicode.com/users' ;

function sendRequest(method,url,type){
	return new Promise( (resolve,reject) => {
		const xhr = new XMLHttpRequest();
		
		xhr.open( method , url);
		
		xhr.responseType = type ;
		
		xhr.onload = () => {
			if(xhr.status >= 400){
				reject(xhr.response);
			} else {
				resolve(xhr.response);
			}
			
		}
		
		xhr.onerror = () => {
			reject(xhr.responsee) ;
		}
		
		xhr.send();
	});
}

btn_00.onclick = () => {
	sendRequest('GET',requestURL,'json')
		.then(data => tx.innerHTML = data[0].id)
		.catch(err => console.log(err)) ;
}
