const requestURL = 'https://jsonplaceholder.typicode.com/users' ;

function sendRequest(method,url,type,header_type,header_app,body=null){
	return new Promise( (resolve,reject) => {
		const xhr = new XMLHttpRequest();
		
		xhr.open( method , url);
		
		xhr.responseType = type ;
		xhr.setRequestHeader(header_type,header_app);
		
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
		
		xhr.send(body);
	});
}

btn_00.onclick = () => {
	/*sendRequest('GET',requestURL,'json')
		.then(data => tx.innerHTML = data[0].id)
		.catch(err => console.log(err)) ;*/
	sendRequest('POST',requestURL,'json','Content-Type','application/json',JSON.stringify({
		name:'Vladilen',
		age: 26
	}))
		.then(data => tx.innerHTML = data.name)
		.catch(err => console.log(err)) ;
}
