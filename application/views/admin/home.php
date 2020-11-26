   
   <!-- page content -->
        <div class="right_col" role="main">

<!-- star jam -->
<?php 
        $hari=array("Minggu","Senin","Selasa","Rabu","Kamis","Ju'mat","Sabtu");
        $bulan=array(1=>"Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus",
                  "September","Oktober","September","November","Desember");
        $tgl=date("d");
        $bln=date("n");
        $hr=date("w");
        $thn=date("Y");
        // echo("Kalender hari ini: ");
        echo("<b>$hari[$hr] $tgl $bulan[$bln] $thn</b>");
    ?>
          <!-- jam -->
             <script type="text/javascript">  
       // This function gets the current time and injects it into the DOM  
       function updateClock() {  
         // Gets the current time  
         var now = new Date();  
         // Get the hours, minutes and seconds from the current time  
         var hours = now.getHours();  
         var minutes = now.getMinutes();  
         var seconds = now.getSeconds();  
         // Format hours, minutes and seconds  
         if (hours < 10) {  
           hours = "0" + hours;  
         }  
         if (minutes < 10) {  
           minutes = "0" + minutes;  
         }  
         if (seconds < 10) {  
           seconds = "0" + seconds;  
         }  
         // Gets the element we want to inject the clock into  
         var elem = document.getElementById('clock');  
         // Sets the elements inner HTML value to our clock data  
         elem.innerHTML = hours + ':' + minutes + ':' + seconds;  
       }  
     </script> 
 <body onload="setInterval('updateClock()', 200);">  
     <!-- This is the container for our clock, it can be any HTML element.   -->
     <h1 id="clock"></h1>  
   </body>
   <!-- end jam -->

          <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count"><?=$data_paslon?></div>
                  <h3>Data Kandidat</h3>
                
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count"><?=$data_masyarakat?></div>
                  <h3>Data Masyarakat</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count"><?=$dpt_memilih?></div>
                  <h3>DPT Telah Memilih</h3>
                  
                  
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count"><?=$dpt_belum_memilih?></div>
                  <h3>DPT Belum Memilih</h3>


                  
                
                </div>
              </div>
            </div>
       
          <br />

          <div class="row">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pie Graph Chart <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="pieChart"></canvas>
                  </div>
                </div>
              </div>

        
            </div>


    
        </div>
        <!-- /page content -->
