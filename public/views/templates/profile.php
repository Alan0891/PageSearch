
<div class="container-fluid mt-3">

<h6><i class="fa-solid fa-user"></i> Profile</h6><hr>

  <div class="container">
      <div class="row d-flex justify-content-center">

          <!--<div class="col-sm-12 col-md-6 col-lg-3">
            <p class="text-center">Jobs</p>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3">
          <p class="text-center">Projetos</p>
          <p id="proj" class="proj">15</p>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3">
          <p class="text-center">Stacks</p>
          </div>-->


          <div>
          <?php for($i=1;$i <= 7;$i++)  : ?>
            <button style="width:100px;height:100px;padding:20px;"><i class="fa-solid fa-music fa-1x"></i></button>
            <?php if(($i%2) == 0):?>
            <br>
            <?php endif; ?>  
           <?php endfor; ?>
          </div>
         </div>
  
   </div>
  </div>
</div>