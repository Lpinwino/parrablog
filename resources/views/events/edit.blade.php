@extends('master')
@section('title', 'Edit a event')
@section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">
		<form class="form-horizontal" method="post">
			@foreach ($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach
			@if (session('status'))
			<div class ="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<fieldset>
				<div class ="form-group">
					<label for="title" class="col-lg-2 control-label">Title</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $event->title }}">
					</div>
				</div>
				<div class ="form-group">
					<label for="department" class="col-lg-2 control-label">Department</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="department" name="department">{{ $event->department }}</textarea>
						<span class="help-block">Department.</span>
					</div>
				</div>

				<div class ="form-group">
					<label for="concept" class="col-lg-2 control-label">Concept</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="concept" name="concept">{{ $event->concept }}</textarea>
						<span class="help-block">Objetives of the event.</span>
					</div>
				</div>

				<div class ="form-group">
					<label for="objetives" class="col-lg-2 control-label">Objetives</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="objetives" name="objetives">{{ $event->objetives }}</textarea>
						<span class="help-block">Objetives of the event.</span>
					</div>
				</div>
				<div class ="form-group">
					<label for="impact_studTeach" class="col-lg-2 control-label">Studens/Teachers</label>
					<div class="col-lg-10">
						<input type="number" class="form-control" rows="3" id="impact_studTeach" name="impact_studTeach" value="{{ $event->impact_studTeach }}"> 
						<span class="help-block">Studens/Teachers that impact.</span>
					</div>
				</div>

				<div class ="form-group">
					<label for="date_event" class="col-lg-2 control-label">Date of Event</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" rows="3" id="date_event" name="date_event" value="{{ $event->date_event }}">
						<span class="help-block">Date of the event.</span>
					</div>
				</div>
				<div class ="form-group">
					<label for="time_event" class="col-lg-2 control-label">Time of event</label>
					<div class="col-lg-10">
						<input type="time" class="form-control" rows="3" id="time_event" name="time_event" value="{{ $event->time_event }}"> 
						<span class="help-block">Time of the event.</span>
					</div>
				</div>

				<div class ="form-group">
					<label for="date_event" class="col-lg-2 control-label">Fecha finaliza evento</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" rows="3" id="end_event" name="end_event" value="{{ old('end_event') }}"> 
						<span class="help-block">Dia que finaliza el evento.</span>
					</div>
				</div>
				<div class ="form-group">
					<label for="time_event" class="col-lg-2 control-label">Hora finaliza evento</label>
					<div class="col-lg-10">
						<input type="time" class="form-control" rows="3" id="end_time" name="end_time" value="{{ old('end_time') }}"> 
						<span class="help-block">Horario en que finaliza el evento.</span>
					</div>
				</div>


				<div class ="form-group">
					<label for="description" class="col-lg-2 control-label">Description</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="description" name="description">{{ $event->description }}</textarea>
						<span class="help-block">Description of the event.</span>
					</div>
				</div>

				<div class="form-group is-empty is-fileinput">
					<div class="col-xs-12">
						<input type="file" name="picture">
						<div class="input-group">
							<input type="text" readonly="" class="form-control" placeholder="Imagen Evento"
									<i class="mdi-editor-attach-file"></i>
								</button>
							</span>
						</div>
						<span class="material-input"></span>
					</div>
				</div>

					<div class ="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancel</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	@endsection
