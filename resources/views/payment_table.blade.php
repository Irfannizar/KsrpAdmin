<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>KSRP ID</th>
                                                <!--<th>EVENT</th>-->
                                                <th>NAME</th>
                                                <th>REGION</th>
                                                <th>TITLE EVENT</th>
                                                <!--<th>ORDER ID</th>-->
                                                <th>USER DETAILS</th>
                                                <!--<th>IPAY TRANSACTION ID</th>-->
                                                <th>STATUS</th>
                                                <th>AMOUNT</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($payments as $payment)
                                            <tr>
                                                <td>{{ $payment->ksrp_id }}</td>
                                                <td>{{ $payment->name }}</td>
                                                <td>{{ $payment->region }}</td>
                                                <td>{{ $payment->event->title }}</td>
                                                <!--<td>{{ $payment->order_id }}</td>-->
                                                <td>
                                                    <ul>
                                                       
                                                        <li>Email: {{ $payment->email }}</li>
                                                        <li>Phone: {{ $payment->contact_no }}</li>
                                                        
                                                    </ul>
                                                </td>
                                                <!--<td>{{ $payment->ipay_transaction_id }}</td>-->
                                                <td>{{ $payment->status }}</td>
                                                <td>{{ $payment->amount }}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>