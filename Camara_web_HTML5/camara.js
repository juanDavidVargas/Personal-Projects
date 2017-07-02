
class Camara{

  constructor(video_id, canvas_id, callback)
  {

    if(!this.isBrowserValid()) return

    this.video = document.getElementById(video_id)
    this.canvas = document.getElementById(canvas_id)
    this.contexto = this.canvas.getContext("2d")
    this.sticker = null
    this.camaras = []

    navigator.mediaDevices.enumerateDevices()
        .then((devices)=>{
          devices.forEach((device)=>{
            if (device.kind === "videoinput")
                console.log(device.deviceId + " - " + device.label);
                this.camaras.push(device)
          })
        })

    console.log(this)

    navigator.webkitGetUserMedia({video: true},(localMediaStream)=>{

      console.log(this);
      this.set_video(localMediaStream)
      this.set_canvas()

      callback();
    }, function(error){
      console.log(error)
    })

  }

  snap(){
    this.video.pause()
  }

  unSnap()
  {
    this.video.play()
    this.sticker = null
  }

  addSticker(img)
  {
    this.sticker = img
    this.draw()
  }

  set_video(localMediaStream)
  {
    this.video.src = window.URL.createObjectURL(localMediaStream);
  }

  set_canvas()
  {
    video.addEventListener("play", (ev)=> this.loop())
  }

  loop(){
    if (this.video.paused || this.video.ended) return

    this.draw()

    setTimeout(()=>this.loop(), 1000 / 30)
  }

  draw(){
    this.contexto.drawImage(this.video, 0, 0)
    if (this.sticker != null)
        this.contexto.drawImage(this.sticker, 20, 20)
  }

  isBrowserValid()
  {
    return !!(navigator.getUserMedia || navigator.webkitGetUserMedia);
  }
}
