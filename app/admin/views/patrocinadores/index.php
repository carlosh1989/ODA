<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">SPONSORS</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
  <form action="<?php echo baseUrl ?>admin/patrocinadores" method="POST" class="form-horizontal">
  <?php echo Token::field() ?>
      <input type="hidden" value="carlos silva" name="nombrenino">
      <input type="hidden" value="" name="picture">
      <input type="hidden" value="ge_carlos" name="id_pago">
      <input type="hidden" value="<?php echo date("F j, Y, g:i a"); ?>" name="fecha">
      <input type="text" name="nombre" placeholder="Your Name" class="form-control abajo">
      <input type="text" name="telefono" placeholder="Phone" class="form-control abajo">
      <select name="plans" class="form-control abajo">
        <option value="Full">Plan FULL $70.00 per month</option>
        <option value="Half">Plan HALF $35.00 per month</option>
      </select>
      <br>
      <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
      data-key="pk_test_bqIBnpZ6WG2or6wg0iAI4Wwr"
      data-amount="Half"
      data-description="ge_carlos"
      data-label="Sponsor"
      data-image="">
      </script>      
      </from>
    </div>
  </div>