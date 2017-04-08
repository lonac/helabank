<table class="table table-hover">
	<thead>
		<tr>
			<th>SN</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>Take Date</th>
			<th>Amount Taken</th>
			<th>Return Date</th>
			<th>Return Amount</th>
			<th>Transaction ID</th>
			<th>Descriptions</th>
			<th>Account Balance</th>
			<th>Authorize</th>
		</tr>
	</thead>
	<tbody>
		@foreach($transactions as $trans)
			<tr>
				<td>{{ $trans->id}}</td>
				<td>{{ $trans->firstname}}</td>
				<td>{{ $trans->lastname}}</td>
				<td>{{ $trans->takeDate}}</td>
				<td>{{ $trans->takeAmount}}</td>
				<td>{{ $trans->retDate}}</td>
				<td>{{ $trans->retAmount}}</td>
				<td>{{ $trans->transactionId}}</td>
				<td>{{ $trans->descriptions}}</td>
				<td>{{ $trans->totalAmount}}</td>
				<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a></td>
			</tr>
		@endforeach
	</tbody>
</table>