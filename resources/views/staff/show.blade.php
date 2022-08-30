<x-theme title="">
    <h1>Staff #{{ $staff->id }}</h1>
    <table class="table table-sm" style="width:50%">
        <tbody>
            <tr>
                <th> ID </th>
                <td>{{ $staff->id }}</td>
            </tr>
            <tr>
                <th> Name </th>
                <td> {{ $staff->name }} </td>
            </tr>
            <tr>
                <th> Age </th>
                <td> {{ $staff->age }} </td>
            </tr>
            <tr>
                <th> Salary </th>
                <td> {{ $staff->salary }} </td>
            </tr>
            <tr>
                <th> Phone </th>
                <td> {{ $staff->phone }} </td>
            </tr>
            <tr>
                <th> Remark </th>
                <td> {{ $staff->remark }} </td>
            </tr>
        </tbody>
    </table>
</x-theme>