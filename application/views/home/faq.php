  <section class="our-webcoderskull padding-lg">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylefaq.css') ?>">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <h1>FAQ Section</h1>

    <div class="container5">

      <div class="acc">
        <h3>Pertanyaan 1 : Apakah itu hello coffee ?</h3>
        <div class="content">
          <div class="content-inner">
            <p>Hello coffee adalah sebuah situs pemesanan kopi yang berbasis website</p>
          </div>
        </div>
      </div>

      <div class="acc">
        <h3>Pertanyaan 2: Kenapa saya harus mengakses laman ini?</h3>
        <div class="content">
          <div class="content-inner">
            <p>Karena dengan website hello coffee ini memudahkan konsumen untuk melakukan transaksi pemesanan kopi, selain itu website hello coffee juga menawarkan tampilan website yang interaktf</p>
          </div>
        </div>
      </div>

      <div class="acc">
        <h3>Pertanyaan 3: Bagaimana cara memesan Kopi dihalaman website?</h3>
        <div class="content">
          <div class="content-inner">
            <p>User hanya tinggal memilih toko kopi yang berada di halama home, setelah itu user dapat memilih kopi yg ingin dipesa selanjutnya akan masuk kedalah halaman check out </p>
          </div>
        </div>
      </div>
    </section>


    <script> 


      $('.acc h3').click(function(){
        $(this).next('.content').slideToggle();
        $(this).parent().toggleClass('active');
        $(this).parent().siblings().children('.content').slideUp();
        $(this).parent().siblings().removeClass('active');
      });

    </script>

    <link rel="stylesheet" href="<?php  echo base_url('assets/css/styleabout.css')?>" />

    <div id="container">

      <!--Begin About Section-->
      <div id="about">
        <h1>FAQ(Tanya Jawab)</h1>
        <!--Begin Connect Section-->  
        <div id="connect">
          <h6>Silahkan hubungi kami untuk pertanyaan yang belum terjawab.</h6>
          <div class="top-divider"></div>
          <div class="content">
            <div id="form">
              <form action="#">
                <span>Name</span>
                <input type="text" name="name" class="name" />
                <span>Email</span>
                <input type="text" name="email" class="email"/>
                <span>Message</span>
                <textarea class="message"></textarea>
                <input type="submit" name="submite" value="Submit" class="submit">
              </form>
            </div>
          </div>
        </div>
        <!--End Connect Section--> 
      </div>
    </body>
  </section>
