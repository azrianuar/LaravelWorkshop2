@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
  <div>
    <h1>Upload property</h1>
    <label>
      <span>Address </span>
      <input id="area" type="text" name="area" />
    </label>

    <label>
      <span><br />
      Price (RM)</span> 
      <input id="email" type="text" name="email" />
    </label>
    
    <label>
      <span><br />
      Size (sq.ft.) </span>
      <input id="subject" type="text" name="subject" />
    </label>

	<label>
      <span><br />
      No. of Bedroom </span>
      <input id="subject" type="text" name="subject" />
    </label>
    
    <label>
      <span><br />
      House photo </span>
      <input type="file" name="pic" accept="image/*">
    </label>
    
      <label>
      <span><br />
      Agreement letter </span>
      <input type="file" name="agreement" accept=".doc, .docx, .pdf">
    </label>
      
      <button type="submit" form="form1" value="Submit">Submit</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
