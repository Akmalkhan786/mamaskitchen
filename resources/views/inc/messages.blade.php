@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close text-white" onclick="this.parentElement.style.display='none';">x</button>
            <span><b> Danger - </b> {{$error}} </span>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close text-white" onclick="this.parentElement.style.display='none';">x</button>
        <span><b> Success - </b> {{session('success')}} </span>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close text-white" onclick="this.parentElement.style.display='none';">x</button>
        <span><b> Danger - </b> {{session('error')}} </span>
    </div>
@endif