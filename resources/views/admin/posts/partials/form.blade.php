<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug',null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post','readonly']) !!}

    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id','Categoria') !!}
    {!! Form::select('category_id',$categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id) !!}
        {{$tag->name}}
    </label>
    @endforeach

    @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">

            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2021/02/08/16/03/dinosaur-5995333_960_720.png" alt="">
            @endisset

            
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Subir imagen') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quis hic rem est voluptatem ea accusantium
            numquam
            natus odit quos, asperiores libero qui dolorum, quam sint laborum vero iure inventore.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract','Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
    <small clas="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body','Cuerpo del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
    <small clas="text-danger">{{$message}}</small>
    @enderror
</div>