@if (session('success'))
    <div class="ui green message">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="ui red message">{{ session('error') }}</div>
@endif
