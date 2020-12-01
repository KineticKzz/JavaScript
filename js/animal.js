
class Animal{
	constructor(especie,edad,color){
		this.especie = especie;
		this.edad = edad;
		this.color = color;
		this.info = `Soy un ${especie}, tengo ${edad}, y soy de color ${color}</br>`;
	}

	verInfo(){
		document.write(this.info);
	}
}

class Perro extends Animal{
	constructor(especie,edad,color,raza){
		super(especie,edad,color);
		this.raza = null;
	}

	set setRaza(newRaza){
		this.raza = newRaza;
	}

	get getRaza(){
		return this.raza;
	}
	
	static ladrar(){
		alert("Waw");
	}
}

const perro = new Perro("perro",5,"marron","doberman");

