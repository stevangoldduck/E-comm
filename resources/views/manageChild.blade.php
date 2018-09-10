<ul>
    @foreach($childs as $child)
        <li>
            {{ $child->name }}
            @if(count($child->childs))
                @include('manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>