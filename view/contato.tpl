
<div class="container fundoBranco">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">
                <form action="envio">
                    <div class="row backForm">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fname">Nome Completo</label>
                                <input type="text" name="txtinputnome" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="txtinputemail" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="subject">Assunto</label>
                                <input type="text" name="assunto" class="form-control" />
                            </div>
                            
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" name="txtinputarea" rows="10"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-primary" value="Enviar" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>