'use strict';

document.querySelector('.header-nav-burger').addEventListener('click', function() {
	this.classList.toggle('active');
	document.querySelector('.nav').classList.toggle('open');
})


const navLinks = document.querySelectorAll('.ul_header_link');
navLinks.forEach(
	link => 
	{
		link.addEventListener('click', function(event) 
		{
			if(document.querySelector('.nav').classList.contains('open'))
			{
				document.querySelector('.nav').classList.toggle('open');
				document.querySelector('.header-nav-burger').classList.toggle('active');
			}
		});
	}
);

const images=['girl_reading_poetry.jpg','boy_playing_chess.jpg','boy_playing_the_violin1.jpg', 'girl_reading_a_book.jpg', 'someone_draws_with_pastels.jpg', 'man_with_guitar1.jpg'];
let activeImage=0;
const sliderPlace=document.querySelector('.slider-line');
const widthOffset = document.querySelector('.slider').clientWidth;

const initSlider=()=>{
	const img=document.createElement('img');
	img.alt='';
	img.src='./img/img-about/'+images[activeImage];
	sliderPlace.append(img);
	nextImageGenerate();
	prevImageGenerate();
}

const nextImageGenerate=()=>{
	let nextImg=activeImage+1;
	if(nextImg>images.length-1){
		nextImg=0;
	}
	const img=document.createElement('img');
	img.alt=' ';
	img.src='./img/img-about/'+images[nextImg];
	sliderPlace.append(img);
}

const prevImageGenerate=()=>{
	let prevImg=activeImage-1;
	if(prevImg<0){
		prevImg=images.length-1;
	}
	const img=document.createElement('img');
	img.alt=' ';
	img.src='./img/img-about/'+images[prevImg];
	sliderPlace.prepend(img);
}

const prevSlide=()=>{
	activeImage--;
	if(activeImage<0){
		activeImage=images.length-1;
	}
	prevImageGenerate();
	document.querySelector('.slider-line > img:last-child').remove();
}

const nextSlide=()=>{
	activeImage++;
	if(activeImage>images.length-1){
		activeImage=0;
	}
	nextImageGenerate();
	document.querySelector('.slider-line > img').remove();
}

initSlider();
document.querySelector('.next-button').addEventListener('click', nextSlide);
document.querySelector('.prev-button').addEventListener('click', prevSlide);

//Запросы


/*Получаю книги, которые нужны для фильтра */
const requestURL = 'http://localhost/dinamic-site/app/database/db.php';

function sendRequest1(method, url) {
  return fetch(url).then(response => {
    return response.json();
  });
}

function filterDataWithoutDescription(data, bookType){
	return data
												.filter((books)=>{
													return (books.book_type===bookType)?1:0
												})
												.map((books)=>{
													return `booksName:${books.name}, booksAutor:${books.book_autor}, booksImg:${books.book_img}`
												}); 
}

function filterDataDescription(data, bookType){
	return data
												.filter((books)=>{
													return (books.book_type===bookType)?1:0
												})
												.map((books)=>{
													return books.book_description
												}); 
}

sendRequest1('GET', requestURL)
  .then(data => {
		console.log(data);
		// создаю новые массивы, отфильтрованные по типам книг, в них один элемент - строка

		const all_booksWithoutDescription= data
												.map((books)=>{ 
													return `booksName:${books.name}, booksAutor:${books.book_autor},  booksImg:${books.book_img}`
												})
		console.log("0",all_booksWithoutDescription);

		const allBooksDescription= data
												.map(books=>books.book_description)
		console.log("0",allBooksDescription)

		const allKolVo={};

		for (const item of allBooksDescription) {
			allKolVo[item] = allKolVo[item] ? allKolVo[item] + 1 : 1;
		} 
		console.log("0", allKolVo)
		const allKolVoArray = Object.entries(allKolVo);
		console.log("0" ,allKolVoArray);

    const educational_books= filterDataWithoutDescription(data, "uchebnaya");
		console.log("1",educational_books);

		const educational_booksDescription= filterDataDescription(data, "uchebnaya");
		console.log("1",educational_booksDescription);

		const popular_science_books= filterDataWithoutDescription(data, "nauchpop");
		console.log("2",popular_science_books);

		const popular_science_booksDescription= filterDataDescription(data, "nauchpop");
		console.log("2",popular_science_booksDescription);

		const artistic_books= filterDataWithoutDescription(data, "hudojestvennaya");
		console.log("3",artistic_books);

		const artistic_booksDescription= filterDataDescription(data, "hudojestvennaya");
		console.log("3",artistic_booksDescription);

		const references_books= filterDataWithoutDescription(data, "spravochnaya")
		console.log("4",references_books);
		
		const references_booksDescription= filterDataDescription(data, "spravochnaya")
		console.log("4",references_booksDescription);

		
		function arrBooksFinal(type_books,type_booksDescription){

	// создаю из новых массивов без описаний Set, чтобы избавится от повторений и преобразую обратно в массивы объектов. Для массивов описаний, создаю сэт, преобразую в массив строк, потом в массив объектов. И объединяю с помощью оператора spread

			const typeBooksNoRepetitions = new Set(type_books);
			const typeBooksNoRepetitionsArr = Array.from(typeBooksNoRepetitions).map(str => {
				const [name, autor, img] = str.split(',');
				return { name: name.split(':')[1], autor: autor.split(':')[1], img:img.split(':')		[1] };
			});
			console.log('массив без описаний с элементами-объктами',typeBooksNoRepetitionsArr)

			const typeBooksNoRepetitionsD = new Set(type_booksDescription);
			console.log('сэт описаний с элементами-строками',typeBooksNoRepetitionsD)

			const typeBooksNoRepetitionsArrD = Array.from(typeBooksNoRepetitionsD);
			console.log('массив описаний с элементами-строками',typeBooksNoRepetitionsArrD)

			const typeBooksNoRepetitionsArrObjD = typeBooksNoRepetitionsArrD.map((str) => {
				return { description: str };
				});
			console.log('массив описаний с элементами-объектами',typeBooksNoRepetitionsArrObjD)

			return typeBooksNoRepetitionsArr.map((book, index) => {
				return { ...book, ...typeBooksNoRepetitionsArrObjD[index] };//оператор spread (...)
			});
		}


		const educationalBooksNoRepetitionsDescription = arrBooksFinal(educational_books,educational_booksDescription);
		console.log('itog',educationalBooksNoRepetitionsDescription)
		
		const popularScienceBooksNoRepetitionsDescription = arrBooksFinal(popular_science_books,popular_science_booksDescription);
		console.log('итог сложения',popularScienceBooksNoRepetitionsDescription)

		const artisticBooksNoRepetitionsDescription = arrBooksFinal(artistic_books,artistic_booksDescription);
		console.log(artisticBooksNoRepetitionsDescription)

		const referencesBooksNoRepetitionsDescription = arrBooksFinal(references_books,references_booksDescription);
		console.log(referencesBooksNoRepetitionsDescription)

		const allBooksNoRepetitionsDescription = arrBooksFinal(all_booksWithoutDescription,allBooksDescription);
		console.log(allBooksNoRepetitionsDescription)

	
		let counterBook=allBooksNoRepetitionsDescription.length;
		console.log(counterBook)
		
		// функция, создающая карточки
		function createDiv(book){
			const item = document.createElement('div');
					item.classList.add('all-book-cards');
					container_cards.appendChild(item);

					const itemP = document.createElement('p');
					itemP.classList.add('favotites_section_p');
					/*const count=allKolVoArray.reduce((acc,items,index,allKolVoArray)=>{
						const allBooksNoRepetitionsWithoutAllWithD=allBooksNoRepetitionsDescription.forEach(
							(book)=>{
								  book.description
								if(book.description===items[index][1]){
									return items[index][2]
								}
							}
						)
					})*/
					itemP.innerHTML = `o`;
					item.appendChild(itemP);

					const itemPLine = document.createElement('span');
					itemP.classList.add('favotites_section_line');
					itemP.appendChild(itemPLine);

					const itemH3Name = document.createElement('h3');
					itemH3Name.classList.add('favotites_section_h3');
					itemH3Name.innerHTML = `${book.name}`;
					item.appendChild(itemH3Name);

					const itemH3Autor = document.createElement('h3');
					itemH3Autor.classList.add('favotites_section_h3');
					itemH3Autor.innerHTML = `${book.autor}`;
					item.appendChild(itemH3Autor);

					const itemPDescription = document.createElement('p');
					itemPDescription.classList.add('favotites_section_content');
					itemPDescription.innerHTML = `${book.description}`;
					item.appendChild(itemPDescription);

					const itemImg = document.createElement('img');
					itemImg.classList.add('favotites_section_img');
					itemImg.alt=' ';
					itemImg.src=`${book.img}`;
					item.appendChild(itemImg);

					const itemButton = document.createElement('button');
					itemButton.classList.add('favorites_section_button');
					item.appendChild(itemButton);

		}
	  
		// для книг всех типов
		const container_cards = document.querySelector('.cards-container');
		allBooksNoRepetitionsDescription.forEach(book => { 
			createDiv(book);
		});

		function eventClick(booksNoRepetitionsArr){
			for(let i=0; i<counterBook; i++){
				document.querySelector('.all-book-cards').remove();
			}

			counterBook=0;
			const container_cards = document.querySelector('.cards-container');
			booksNoRepetitionsArr.forEach((book) => {
				
				createDiv(book);
				counterBook=counterBook+1;
			});

			let linkElement=document.getElementById('myLink');
			let link=linkElement.getAttribute('href');
			window.location.href=link;
		};

		// для каждого типа книг, прслушиваем клик
		document.querySelector('#input_radio-educational').addEventListener('click', function(event) {
			eventClick(educationalBooksNoRepetitionsDescription);
		});

		document.querySelector('#input_radio-popularScience').addEventListener('click', function(event) {
			eventClick(popularScienceBooksNoRepetitionsDescription);
		});

		document.querySelector('#input_radio-artistic').addEventListener('click', function(event) {
			eventClick(artisticBooksNoRepetitionsDescription);
		});

		document.querySelector('#input_radio-references').addEventListener('click', function(event) {
			eventClick(referencesBooksNoRepetitionsDescription);
		});
	})
  .catch(err => {
    console.log(err);
  });


