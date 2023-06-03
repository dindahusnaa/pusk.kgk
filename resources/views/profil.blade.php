<style> body {
    font-family: Arial, Helvetica, sans-serif;
  }
    * {
      box-sizing: border-box;
    }
    
    /* Create four equal columns that floats next to each other */
    .column_download {
      float: left;
      width: 25%;
      padding: 5px;
      text-align: center;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
      .column_download  {
        width: 50%;
      }
    }
    
    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 500px) {
      .column_download  {
        width: 100%;
      }
    }
</style>

<content class="p-3">
    <div class="jumbotron p-3" style="background-color: #e9f6e7; color: #2d3436;">
        <br>
        <h1 class="text-center"><b> Profil Kesehatan</b></h1>
        <h3 class="text-center">"Profil Kesehatan adalah gambaran situasi kesehatan di Kota Semarang yang mermuat berbagai data tentang situasi dan hasil pembangunan kesehatan selama kurun waktu satu tahun."</h3>

        <p>Data dan informasi yang termuat meliputi : </p>
        <p>- data demografi,</p>
        <p>- sumber daya kesehatan, </p>
        <p>- derajat kesehatan, </p>
        <p> - upaya kesehatan dan manajemen kesehatan.</p> <br>
    </div>

    <p>Untuk melihat Profil Kesehatan, dapat diunduh di sini.</p>

    <section class="p-3">

        <div class="row">
            <div class="column_download" style="background-color:#50B83C; color: #ffffff;">
                <p><b>Profil Tahun</b></p>
            </div>
            <div class="column_download" style="background-color:#d5612b; color: #ffffff;">
                <p><b>Unduh</b></p>
            </div>

        </div>

        <div class="row">
            <div class="column_download" style="background-color:#A9DBA0;">
                <p>Profil 2022</p>
            </div>
            <div class="column_download" style="background-color:#ffebb3;">
                <a href="/images/myw3schoolsimage.jpg" download>
                    <em class="icon ni ni-download"></em>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="column_download" style="background-color:#A9DBA0;">
                <p>Profil 2021</p>
            </div>
            <div class="column_download" style="background-color:#ffebb3;">
                <a href="/images/myw3schoolsimage.jpg" download>
                    <em class="icon ni ni-download"></em>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="column_download" style="background-color:#A9DBA0;">
                <p>Profil 2020</p>
            </div>
            <div class="column_download" style="background-color:#ffebb3;">
                <a href="/images/myw3schoolsimage.jpg" download>
                    <em class="icon ni ni-download"></em>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="column_download" style="background-color:#A9DBA0;">
                <p>Profil 2019</p>
            </div>
            <div class="column_download" style="background-color:#ffebb3;">
                <a href="/images/myw3schoolsimage.jpg" download>
                    <em class="icon ni ni-download"></em>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="column_download" style="background-color:#A9DBA0;">
                <p>Profil 2018</p>
            </div>
            <div class="column_download" style="background-color:#ffebb3;">
                <a href="/images/myw3schoolsimage.jpg" download>
                    <em class="icon ni ni-download"></em>
                </a>
            </div>
        </div>

    </section>

    <?php echo $map_puskesmas ?>

</content>

<br>    

