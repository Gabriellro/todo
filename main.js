//Modal Create

const openModal = () => document.getElementsByClassName('modal')
    .classList.add('active')

const closeModal = () => document.getElementsByClassName('modal')
    .classList.remove('active')

document.getElementById('cadastrartarefa')
    .addEventListener('click', openModal)

document.getElementById('modalClose')
    .addEventListener('click', closeModal)

