


<!--<aside id="d_menu">
 <div id="dash_menu"></div>
 <div id="dash_menu_btn">Menu</div>
</aside>-->



<div class="container-fluid mt-3">

    <h6><i class="fa-solid fa-pen"></i> Adicionar artigo</h6><hr>

      <div class="container">

          <div class="row d-flex justify-content-center">

          <div class="col-sm-12 col-md-10 col-lg-8">
           
          <form action="home/publick" method="POST" name="edit">

            <div class="form-group">
            <select class="form-control form-control-sm" name="escritor" id="escritor">
            <?php foreach($data as $jornalista):?>
              <option value="<?=$jornalista['matricula']?>"><?= $jornalista['matricula'];?></option>
            <?php endforeach;?>  
            </select>
            </div>
            
            <div class="form-group">
            <select class="form-control form-control-sm" name="nome" id="nome">
            <?php foreach($data as $jornalista):?>
              <option value="<?=$jornalista['nome']?>"><?= $jornalista['nome'];?></option>
            <?php endforeach;?>  
            </select>
            </div>

            <div class="form-group">
              <input type="text" name="titulo" id="titulo" class="form-control form-control-sm" placeholder="Titulo">
            </div>  

            <div class="form-group">
              <textarea class="form-control form-control-sm" name="artigo" id="artigo" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group d-flex justify-content-end">
              <button class="btn btn-sm btn-outline-success"><i class="fa-solid fa-plus"></i> Escrever artigo</button>
            </div>

          </form>
          </div>
          </div>

          <hr>

          <div class="row d-flex justify-content-center">

            <div class="col-sm-12 col-md-10 col-lg-8">

            <form action="product/insertJourn" method="POST" name="register">
              
            <div class="form-group">
              <input type="text" name="nomeJorn" id="nomeJorn" class="form-control form-control-sm" placeholder="Escritor">
            </div>
            <div class="form-group">
              <input type="text" name="matriculaJorn" id="matriculaJorn" class="form-control form-control-sm" placeholder="Matricula">
            </div>  

            <div class="form-group d-flex justify-content-end">
              <button class="btn btn-sm btn-outline-success"><i class="fa-solid fa-plus"></i>Registrar</button>
            </div>
            </form>
         
          </div>

              <!-- 
              <div class="col-sm-12 col-md-6 col-lg-12">
                  <picture>
                    <source media="(min-width:950px)" srcset="assets/imgs/Jacque.jpg" width="300" height="300" style="object-fit:cover;"/>
                    <source media="(min-width:850px)" srcset="assets/imgs/Gio.jpg" width="300" height="300" style="object-fit:cover;"/>
                    <img src="assets/imgs/Tutu.jpg" alt="" width="300" height="300" style="object-fit:cover;">
                  </picture>
              </div>
               -->

          </div>
      </div>

</div>
     