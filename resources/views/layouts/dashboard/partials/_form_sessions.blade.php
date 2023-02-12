@if(session()->has('success'))
    <div
        class="session-state relative p-5 mb-4 border border-green-500  bg-green-500 rounded-md text-white shadow-lg shadow-green-500/30">
        {{session('success')}}
    </div>
@endif
@if(session()->has('errors'))
    <div
        class="session-state relative p-5 mb-4 border border-red-500  bg-red-500 rounded-md text-white shadow-lg shadow-red-500/30">
        <strong class="bold">Oops!</strong> something went wrong.
    </div>
@endif
