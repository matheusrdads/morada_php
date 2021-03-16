
<div class="estrelas">
  <div>
      <?php if (isset($row_carousel['estrela'])) {

          $ava = $row_carousel['estrela']; ?>

          <?php
          if ($ava > 0 and $ava < 2) { ?>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <input type="radio" id="estrela_um" name="estrela" value="1">

          <?php } else if ($ava > 1 and $ava < 3) { ?>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>


          <?php } else if ($ava > 2 and $ava < 4) { ?>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>


          <?php } else if ($ava > 3 and $ava < 5) { ?>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>


          <?php } else if ($ava > 4 and $ava < 6) { ?>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>
              <label for="estrela_cinco"><i class="fa"></i></label>

          <?php }
      } else { ?>

          <p>Usuário sem avaliação</p>

      <?php } ?>

  </div>

</div>