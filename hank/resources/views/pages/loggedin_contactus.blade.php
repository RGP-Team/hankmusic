 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Contactus page</a></li>
    </ul>
   <div class="container user-set-cont">
  
  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
      <div class="col-md-6 col-md-offset-3">
      <form action="{!!url('sendemail')!!}" method="POST">
                    {!!csrf_field()!!}
                <div class="row form">
                    <div class="form-group col-md-12 remove-bottom-margin">
                        <label class="form-control-label" for="first_name">NAME *</label>
                        <div class="controls">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Hank Music" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12 remove-bottom-margin">
                        <label class="form-control-label" for="first_name">SUBJECT *</label>
                        <div class="controls">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Hank Music" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="phone">PHONE *</label>
                        <div class="controls">
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="22234567" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="email">EMAIL ADDRESS *</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" class="form-control" placeholder="hank@music.com" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-control-label" for="password">MESSAGE *</label>
                        <div class="controls">
                            <textarea name="message" class="form-control" placeholder="Type your message here" required autocomplete="off"></textarea>
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <div class="controls text-center col-md-4 col-md-offset-4">
                            <button class="btn btn-primary col-md-12">SEND</button><br/>
                        </div>
                    </div>
                </div>
                </form>
              </div>
    </div>

        </div>

    </div>
  </div>
</div>
<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }
</script>






















