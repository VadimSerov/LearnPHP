const requestURL = 'https://jsonplaceholder.typicode.com/users' ;

function sendRequest(method,url){
	return fetch(url).then(response => {
		return response.json();
	});;
}

btn_00.onclick = () => {
	
	sendRequest('GET',requestURL)
		.then(data => txar_00.innerHTML= data[0].name)
		.catch(err => console.log(err)) ;
		
	/*sendRequest('POST',requestURL,'json','Content-Type','application/json',JSON.stringify({
		name:'Vladilen',
		age: 26
	}))
		.then(data => txar_00.innerHTML = data.name)
		.catch(err => console.log(err)) ;*/
}
