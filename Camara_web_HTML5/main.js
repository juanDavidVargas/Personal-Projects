;(function(){

  var camara = new Camara("video", "canvas", function(){

    var snap = document.getElementById("snap")
    var downloadBtn = document.getElementById("download")
    var cancelBtn = document.getElementById("cancel")
    var stickerBtn = document.getElementById("sticker")

    document.querySelectorAll(".sticker").forEach(function(el){
      el.addEventListener("click", addSticker)
    })

    snap.addEventListener("click", function(){
      camara.snap()
      document.getElementById('actions').style.display = "block"
    })

    downloadBtn.addEventListener("click", function(){
      var imageURL = camara.canvas.toDataURL("image/png")

      var link = document.getElementById("download-link")

      link.href = imageURL
      link.download = "Photo.png"

      link.click()
    })

    cancelBtn.addEventListener("click", function(){
      camara.unSnap()
      document.getElementById('actions').style.display = "none"
    })

    stickerBtn.addEventListener("click", function(){
      document.getElementById('stickers').style.display = "inline-block"
    })

    function addSticker()
    {
      camara.addSticker(this)
      document.getElementById('stickers').style.display = "none"
    }
  })
})()
