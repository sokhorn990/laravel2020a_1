
<h2>Subject List</h2>
<table>
    <tr>
        <th>Subject</th>
        <th>Score</th>
    </tr>
    @foreach ($subjects as $subject)
        <tr>
            <td>{{$subject['name']}}</td>
            <td>{{$subject['score']}}</td>
        </tr>
    @endforeach
</table>