{{-- ESTE FORMULÁRIO É UTILIZADO TANTO PARA A EDIÇÃO QUANTO PARA A CRIAÇÃO DE NOVOS CONTATOS --}}

{!! csrf_field() !!}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-12">
    <label for="inputName" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Nome" value="{{ old('name', $contact->name)}}" name="name">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-sm-12">
    <label for="inputPhone" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPhone" placeholder="Exemplo (21) 12345-6789" value="{{ old('phone', $contact->phone) }}" name="phone">
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
    <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" value="{{ old('email', $contact->email) }}" name="email">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }} col-sm-12">
    <label for="inputCep" class="col-sm-2 control-label">CEP</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputCep" placeholder="CEP" name="cep" value="{{ old('cep', $contact->cep) }}">
        @if ($errors->has('cep'))
            <span class="help-block">
                <strong>{{ $errors->first('cep') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- DEPENDENDO DA URL, EXIBO OU OCULTO OS CAMPOS RUA - BAIRRO - CIDADE - UF - IBGE --}}
<div id="dadosCep" {{ \App\Utils::checkRoute(['admin::contacts.create', 'admin::contacts.create']) ? 'hidden': '' }}>
    <fieldset class="col-sm-12">
        {{-- <legend style="font-size:14px; label-success">Cep encontrado</legend> --}}
        <div class="form-group col-sm-6">
            <label class="col-sm-4 control-label text-green">Rua</label>
            <div class="col-sm-8">
                <input name="rua" class="form-control" type="text" id="rua" readonly value="{{ old('rua', $contact->rua) }}"/>
            </div>
        </div>
        <div class="form-group col-sm-6">
            <label class="col-sm-4 control-label text-green">Bairro</label>

            <div class="col-sm-8">
                <input name="bairro" class="form-control" type="text" id="bairro" readonly value="{{ old('bairro', $contact->bairro) }}"/>
            </div>
        </div>

        <div class="form-group col-sm-6">
            <label class="col-sm-4 control-label text-green">Cidade</label>

            <div class="col-sm-8">
                <input name="cidade" class="form-control" type="text" id="cidade" readonly value="{{ old('cidade', $contact->cidade) }}"/>
            </div>
        </div>
        <div class="form-group col-sm-3">
            <label class="col-sm-4 control-label text-green">UF</label>

            <div class="col-sm-8">
                <input name="uf" class="form-control" type="text" id="uf" readonly value="{{ old('uf', $contact->uf) }}"/>
            </div>
        </div>
        <div class="form-group col-sm-3">
            <label class="col-sm-4 control-label text-green">IBGE</label>

            <div class="col-sm-8">
                <input name="ibge" class="form-control" type="text" id="ibge" readonly value="{{ old('ibge', $contact->ibge) }}"/>
            </div>
        </div>
    </fieldset>
</div>   