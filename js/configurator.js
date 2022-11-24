const openItems = document.querySelectorAll('.click-items')
const itemsList = document.querySelectorAll('.items-list')

openItems.forEach((item, index) => {
	item.addEventListener('click', () => {
		itemsList[index].classList.toggle('active')
	}) 
})



