

  <!-- <div class="slideshow-container" style="background-color:#e9f6e7; color: #2d3436;" >
  <br>

  <div class="mySlides fade">
    <div class="numbertext"></div>
  <center>
    <img src="/assets/images/dashboard/jam_pelayanan.png" style="width: 69%" >
    <div class="text"></div>
  </center>
    <br>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <center>
    <img src="/assets/images/dashboard/jadwal_pelayanan_kia.png" style="width:69%">
    <div class="text"></div>
  </center>
    <br>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)"></a>
  <a class="next" onclick="plusSlides(1)"></a>
  
  </div>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div> -->

  <!-- Carousel Gambar -->

  <div class="slideshow-container p-2" style="background-color:#e9f6e7; color: #2d3436;">
    <div id="carouselExConInd" class="carousel slide" data-bs-ride="carousel">    
      <ol class="carousel-indicators">        
        <li data-bs-target="#carouselExConInd" data-bs-slide-to="0" class="active"></li>        
        <li data-bs-target="#carouselExConInd" data-bs-slide-to="1"></li>        
      </ol>    
      <div class="carousel-inner">        
        <div class="carousel-item active">            
          <img src="/assets/images/dashboard/jadwal_pelayanan_kia.png" class="d-block w-100" alt="carousel">        
        </div>        
        <div class="carousel-item">            
          <img src="/assets/images/dashboard/jam_pelayanan.png" class="d-block w-100" alt="carousel">        
        </div>        
          
      </div>    
      <a class="carousel-control-prev" href="#carouselExConInd" role="button" data-bs-slide="prev">        
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>        
        <span class="visually-hidden">Previous</span>    
      </a>    

      <a class="carousel-control-next" href="#carouselExConInd" role="button" data-bs-slide="next">        
        <span class="carousel-control-next-icon" aria-hidden="true"></span>        
        <span class="visually-hidden">Next</span>    
      </a>
    </div>
  </div>
        
  <!-- Tulisan Visi dan Misi -->
  <div class="jumbotron jumbotron-fluid p-3" style="background-color: #a9dba0; color: #2d3436;">
    
    <br>  
    <h1 class="text-center">Visi : </h1>
      <h3 class="text-center">"Terwujudnya Kota Semarang yang Semakin Hebat yang berlandaskan Pancasila, dalam bingkai NKRI Ber-Bhineka Tunggal Ika"</h3>
      <br>
      <h1 class="text-center">Misi :</h1>
      <div class="row">
              <div class="col-md-6">
          <ul>
            <li>
              <strong class="text-center">Meningkatkan kualitas dan kapasitas Sumber Daya Manusia yang Unggul dan Produktif untuk mencapai kesejahteraan dan keadilan sosial</strong>
            </li>
          </ul>
        </div>
              <div class="col-md-6">
          <ul>
            <li>
              <strong class="text-center">Meningkatkan potensi ekonomi lokal yang berdaya saing dan stimulasi pembangunan industri, berlandaskakn riset dan inovasi berdasar prinsip demokrasi ekonomi pancasila</strong>
            </li>
          </ul>
        </div>
              <div class="col-md-6">
          <ul>
            <li>
              <strong class="text-center">Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar dan perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan</strong>
            </li>
          </ul>
        </div>
              <div class="col-md-6">
          <ul>
            <li>
              <strong class="text-center">Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</strong>
            </li>
          </ul>
        </div>
              <div class="col-md-6">
          <ul>
            <li>
              <strong class="text-center">Menjalankan reformasi birokrasi pemerintahan secara dinamis dan menyusun produk hukum yang sesuai nilai-nilai Pancasila dalam kerangka Negara Kesatuan Republik Indonesia</strong>
            </li>
          </ul>
        </div>
            </div>
      <h2 class="text-center">Motto : </h2>
      <h2 class="text-center">"Prima Melayani, Sehat Bersama Kami"</h2>
      <br>
  </div>

  <!-- Map Puskesmas -->
  <?php echo $map_puskesmas;  ?>
