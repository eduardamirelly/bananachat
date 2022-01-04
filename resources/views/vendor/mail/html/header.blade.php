<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'BananaChat')
<img src="{{asset('assets/logo-bananachat.svg')}}" class="logo" alt="BananaChat">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
