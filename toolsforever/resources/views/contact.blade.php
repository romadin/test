<body>
  <div id="wrapper" class="toggled">
    @include('gadget.header')

    <div class="container-fluid">
      <div class="row-fluid" >
        <div class="col-md-8 google-maps" id="box">
        <h2>Locaties</h2>
        <hr>
        <iframe src="https://www.google.com/maps/d/embed?mid=1cdyoFXgYSJLmxhbq33mDG3EBKLo" width="100%" height="50%"></iframe>
        </div>
        <div class="col-md-4">
          <h2>Adres gegevens</h2>
          <hr>
          <p>
            <strong><i class="fa fa-map-marker"></i> Adres</strong><br>
            Enter 36-42 EINDHOVEN
          </p>
          <p><strong><i class="fa fa-phone"></i> Telefoon nummer</strong><br>
            (040) 987 65 00
          </p>
          <p>
            <strong><i class="fa fa-envelope"></i>  Email Adres</strong><br>
            info@toolsforever.nl</p>
          <p></p>
          <h3>Post Adres</h3>
          <hr>
          <p>
            <strong><i class="fa fa-map-marker"></i> Postbus</strong><br>
            12345 5600 VM  EINDHOVEN
          </p>
          <p><strong><i class="fa fa-phone"></i> Fax nummer</strong><br>
            (040) 987 65 99
          </p>
        </div>
      </div>
    </div>
  </div>
</body>