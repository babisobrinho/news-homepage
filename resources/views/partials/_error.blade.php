@isset($errors)
    @if ($errors->any())
        <div class="alert error">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endisset