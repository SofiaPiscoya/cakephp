<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Ingreso al sistema</div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

            <?= $this->Form->create(null, ['class' => 'form-horizontal']) ?>

                <?= $this->Flash->render('auth') ?>
            
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <?= $this->Form->text('username', ['class' => 'form-control', 'placeholder'=>'Usuario', 'autocomplete'=>'off']) ?>                                      
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <?= $this->Form->password('password', ['class' => 'form-control', 'placeholder'=>'Clave']) ?>   
                </div>



                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <?= $this->Form->submit('Ingresar', ['class' => 'btn btn-success']);?>
                    </div>
                </div>


            <?= $this->Form->end() ?>

        </div>                     
    </div>  
</div>
