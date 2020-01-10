<style>
    td, th {
      text-align: left;
      padding: 15px;
    }
    
    tr:nth-child(even) {
      background-color:#eff0f2;
    }
</style>

Hello,
You received a message from : {{ $data->name }}
<table width="600px" border="0" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; color:#4A4A4A">
    <tr>
       <td align="center">
         <img src="http://okalasurfschool.com/img/logo.svg">
       </td>
       <td>
          <h3>Lessons reservations:</h3>
          <p style="color:aquamarine;">{{ $data->classes }}</p>
       </td>
    </tr>
    <tr>
       <td><strong>Names:</strong></td>
       <td>{{ $data->name }} {{ $data->lastname }}</td>
    </tr>
    <tr>
       <td><strong>Email:</strong></td>
       <td>{{ $data->email  }}</td>
    </tr>
    <td><strong>Cellphone:</strong></td>
    <td>{{ $data->cellphone  }}</td>
    </tr>
    <tr>
        <td><strong>Country</strong></td>
        <td>{{ $data->country  }}</td>
     </tr>
    <tr>
       <td><strong>City</strong></td>
       <td>{{ $data->city }}</td>
    </tr>
    <tr>
       <td><strong>State</strong></td>
       <td>{{ $data->state  }}</td>
    </tr>
    <tr>
       <td><strong>Pickup Address:</strong></td>
       <td>{{ $data->pk_adress  }}</td>
    </tr>
    <tr>
        <td><strong>Special Required</strong></td>
        <td>{{ $data->special_required }}</td>
     </tr>
 </table>
 