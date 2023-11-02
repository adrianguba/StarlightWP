function sampleFunction() {
	const element = document.createElement( 'div' );

	element.innerHTML = 'Hello sample';

	return element;
}

document.body.appendChild( sampleFunction() );