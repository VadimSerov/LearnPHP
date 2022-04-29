const requestURL = 'https://jsonplaceholder.typicode.com/users' ;
const headers = {
	"Content-Type":"application/json"
}

function sendRequest(method, url, headers, body = null){
	return fetch(url, {
		method:method,
		body:JSON.stringify(body),
		headers:headers
	}).then(response => {
		if(response.ok){
			return response.json();
		}
		// else не использовать
		return response.json().then(error => {
			const e = new Error('Что-то пошло не так... ');
			e.data = error ;
			throw e ;
		});
	});
}

btn_00.onclick = () => {
	
	/*sendRequest('GET',requestURL)
		.then(data => txar_00.innerHTML= data[0].name)
		.catch(err => console.log(err)) ;*/
		
	const body = {
		name: 'Vladilen',
		age: 26
	}
		
	sendRequest('POST',requestURL,headers,body)
		.then(data => txar_00.innerHTML = data.name)
		.catch(err => console.log(err)) ;
}
