
if (navigator.serviceWorker) {
  navigator.serviceWorker.register("./sw.js")
}


;(function(){

  let sticky = false
  let currentPosition = 0

  const imageCounter = $("[data-name='image-counter']").attr("content")
  const email = "davidvargas.jdvp@gmail.com"

  $("#contact-form").on("submit", (ev)=>{
    ev.preventDefault()

    sendForm($(this))

    return false
  })

  $("#sticky-navigation").removeClass("hidden")
  $("#sticky-navigation").slideUp(0)
  checkScroll()
  isOpen()

  $('#menu-opener').on('click', toggleNav)

  $('.menu-link').on('click', toggleNav)

  setInterval(function(){

    if (currentPosition < imageCounter) {
      currentPosition++
    }else{
      currentPosition = 0
    }

    $("#gallery .inner").css({
      left: "-"+currentPosition * 100+"%"
    })
  },4000)

  //console.log($(window).height())
  $(window).scroll(checkScroll)

  function checkScroll()
  {
    const inBottom = (isInBottom())

    if (inBottom && !sticky) {
      //Mostrar la navegación
      sticky = true
      stickNavigation()
    }

    if(!inBottom && sticky){
      //Ocultar navegación
      sticky = false
      unStickNavigation()
    }
  }

  function isOpen()
  {
    let date = new Date()
    const current_hour = date.getHours()

    if(current_hour < 12 || current_hour > 22)
    {
      $('#is-open .text').html("Cerrado ahora <br> Abierto de 12:00 PM a 10:00 PM")
    }
  }

  function toggleNav()
  {
      $('#responsive-nav ul').toggleClass('active')
      $('#menu-opener').toggleClass('glyphicon-menu-hamburger')
  }

  function stickNavigation()
  {
    $("#description").addClass('fixed').removeClass('absolute')
    $("#navigation").slideUp("fast")
    $("#sticky-navigation").slideDown("fast")
  }

  function unStickNavigation()
  {
    $("#description").removeClass('fixed').addClass('absolute')
    $("#navigation").slideDown("fast")
    $("#sticky-navigation").slideUp("fast")
  }

  function isInBottom()
  {
    const $description = $("#description")
    const descriptionHeight = $description.height()

    return $(window).scrollTop() > $(window).height() - (descriptionHeight * 2)
  }
})()
