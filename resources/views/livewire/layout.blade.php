<div>
    <ul>
        @foreach ($users as $user)
            <li>
                {{$user->name}}
            </li>
            <li>
                {{$user->email}}
            </li>
            <li>
                <button wire:click="delete({{$user->id}})" wire:key="{{$user->id}}">Delete</button>
            </li>
        @endforeach
    </ul>
</div>