<h1>Thailand Coronavirus Report</h1>
<table>
    <tr>
        <th>Number&nbsp;</th>
        <th>Date&nbsp;</th>
        <th>Country&nbsp;</th>
        <th>Total&nbsp;</th>
        <th>Active&nbsp;</th>
        <th>Death&nbsp;</th>
        <th>Recovered&nbsp;</th>
    </tr>
    @foreach($reports as $item)
    @if( $loop->iteration <= 3 ) 
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $loop->iteration }}</td>
                <td>{{ $item->date }}</td>
                <td>
                        @switch($item->country)
                            @case("Thailand")
                                        <img src="https://spng.pngfind.com/pngs/s/637-6378530_thailand-flag-logo-vector-thailand-flag-hd-png.png" width=20>
                        @break
                            @case("China")
                                        <img src="https://cdn.countryflags.com/thumbs/china/flag-400.png" width=20>
                        @break
                            @endswitch
                        {{ $item->country }}
                </td>
                <td>&nbsp;{{ $item->total }}</td>
                <td>&nbsp;{{ $item->active }}</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->death }}</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->recovered }}</td>
            </tr>
        @endif
        @endforeach
</table>