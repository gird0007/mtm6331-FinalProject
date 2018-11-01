const $sidebar = document.getElementById('sidebar')
const $open = document.getElementById('open')
const $close = document.getElementById('close')
const $sidebarbox = document.getElementById('sidebar-box')
console.log($sidebar)
console.log($open)
console.log($close)

$sidebar.addEventListener('click', e => {
  if (e.target.classList.contains('arrow')) {
    if (e.target.classList.contains('open')) {
      $open.classList.toggle('open')
      $open.classList.toggle('close')
      $close.classList.toggle('close')
      $close.classList.toggle('open')
      $sidebar.classList.toggle('right')
      $sidebarbox.classList.toggle('sidebar-open')
    }
  }
})
