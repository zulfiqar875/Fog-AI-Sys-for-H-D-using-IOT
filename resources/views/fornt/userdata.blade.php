my testing data. till them enjoy <br>
@foreach($data as $dele)
    <tr>
        <td>{{$dele->created_at}}</td>
        <td>{{$dele->Hiper}}</td>
        <td>{{$dele->Loper}}</td>
        <td>{{$dele->Plusrate}}</td>
        <td>{{$dele->Status}}</td>
    </tr>
    <br>
@endforeach