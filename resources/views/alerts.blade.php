<div class="row justify-content-md-center mt-2">
    <div class="col-md-6"> 
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-text">{{ session('error') }}</div>
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-text">{{ session('success') }}</div> 
        </div>
        @endif
        @if(session('response_time'))
         <div class="alert alert-warning" role="alert">
            <div class="alert-text">RESPONSE TIME: {{ session('response_time') }}</div> 
        </div> 
        @endif
    </div>
</div>