
Hello,
You received a message from : {{ $request->name }}
 
<p>
User Name: {{ $request->name }}
</p>
 
<p>
User Email: {{ $request->email }}
</p>
 
<h2>Nueva resrevacion de:</h2>
<h1>{{ $request->name }} {{ $request->lastname }}</h1>  
<p>{{ $request->email  }}</p>
<p>{{ $request->cellphone  }}</p>
<p>{{ $request->country  }}</p>
<p>{{ $request->city  }}</p>
<p>{{ $request->state  }}</p>
<p>{{ $request->pk_adress  }}</p>

