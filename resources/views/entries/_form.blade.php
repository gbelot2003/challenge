<div class="row">
    <div class="form-group col-md-12">
        <label for="title">Title</label>
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>

    <div class="form-group col-md-12">
        <label for="title">Body</label>
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-12">
        <hr />
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</div>
