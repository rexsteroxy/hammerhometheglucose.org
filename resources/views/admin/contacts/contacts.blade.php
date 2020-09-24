@extends('layouts.sidebar')
@section('pageContent')
<div class="container"> 
    <div class="row"> 
    
        @if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">  
                       DISPLAY ALL Contacts
                     </div>
                     <div class="col-md-4">
                    
                     </div>
                </div>
                </div>

                <div class="panel-body">



                <div class="col-md-12">

@if(count($contacts) > 0)

@foreach($contacts->all() as $contact)
<div class="row">
    <div></div>
    <h1>{{$contact->id}}</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Message</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Uique Token</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{$contact->created_at->diffForHumans()}}</td>
                <td><a href="mailto:{{ $contact->email }}" class="btn btn-primary">Click to send an email to {{ $contact->email }}</a></td>
               
            </tr>
        </tbody>
    </table>
</div>


@endforeach
<div class="row">
				<div class="col">
					<div class="d-flex align-items-center justify-content-center"> {{ $contacts->links() }}</div>
				</div>
			</div>
@else
<h4 class="text-center">No Contact</h4>

@endif


</div>
              
                </div>
             
            </div>
        </div>
    </div>
</div>
@endsection





