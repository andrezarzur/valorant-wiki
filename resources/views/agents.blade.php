<div class="container-fluid">
    @foreach($agentsData as $data)
        <p>{{$data['displayName']}}</p>
    @endforeach
</div>