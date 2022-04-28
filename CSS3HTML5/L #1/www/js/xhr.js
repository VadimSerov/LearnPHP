const requestURL = 'https://jsonplaceholder.typicode.com/users' ;

const xhr = new XMLHttpRequest();

xhr.open( 'GET' , requestURL);

xhr.responseType = 'json' ;

xhr.onload = () => {
	tx.innerHTML=xhr.response[0].id ;
}

xhr.send();

