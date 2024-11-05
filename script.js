function iniciarMultimedia() {
    // Oculta el botón y muestra el contenedor del video
    document.getElementById('boton').style.display = 'none';
    document.getElementById('videoContainer').style.display = 'block';

    // Reproduce el video y el audio al mismo tiempo
    const video = document.getElementById('video');


    video.play();

}
