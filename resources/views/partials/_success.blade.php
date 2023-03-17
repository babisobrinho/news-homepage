@if (session('success'))
<div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <p>{{ session('success') }}</p>
</div>
@endif