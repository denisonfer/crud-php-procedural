
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
  
  <!-- modal materialize -->
  <script>
    M.AutoInit();

    document.querySelector('body').classList.add('grey');
    document.querySelector('body').classList.add('lighten-4');

    // jquery
    
    $('.toggle').on('click', () => {
      $('.container').addClass('active');
      
    });

    $('.close').on('click', () => {
      $('.container').removeClass('active');
    });
          //# sourceURL=pen.js
        
  </script>
</body>
</html>