
/*Inclua o link para o jQuery
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
Inclua o link para o Slick Carousel -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
*/

  $(document).ready(function(){
    $('.conteudo2').slick({
      slidesToShow: 1, // Quantidade de cards exibidos ao mesmo tempo
      slidesToScroll: 1, // Quantidade de cards deslizados ao passar o carrossel
      autoplay: true, // Reprodução automática
      autoplaySpeed: 2000, // Velocidade em milissegundos para passar os cards automaticamente
      dots: true, // Exibe os pontos de navegação
    })
  })
