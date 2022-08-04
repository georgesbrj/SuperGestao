{{$slot}}
<form  action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="nome" value="{{old('nome')}}"  type="text" placeholder="Nome" class="{{$classe}}">
    @if($errors->has('nome'))
      {{$errors->first('nome')}}
    @endif
    
    <br>
    <input name="telefone" value="{{old('telefone')}}"  type="text" placeholder="Telefone" class="{{$classe}}">
     {{$errors->first('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input name="email" value="{{old('email')}}"  type="text" placeholder="E-mail" class="{{$classe}}">
    {{$errors->first('email') ? $errors->first('email') : '' }}
    
    <br>
 
    <select  name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
           <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id' == $key ? 'selected' : '')}}>{{$motivo_contato->motivo_contato}}</option>        
        @endforeach        
    </select>
    {{$errors->first('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea  name="mensagem"   class="{{$classe}}">
        {{$errors->first('mensagem') ? $errors->first('mensagem') : '' }}    
       @if( old('mensagem') != '' )
           {{old('mensagem')}}
        @else
        Preencha aqui a sua mensagem
       @endif 
    </textarea>
    
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>


@if($errors->any())
        <div>
          @foreach($errors->all() as $error )
            {{$error}} <br>
          @endforeach
        </div>

@endif    