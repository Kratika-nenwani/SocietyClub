@extends('admin.index-main') 
@section('csscontent') 

@endsection 
@section('content') 
<main class="main__content_wrapper">
    <!-- Dashboard container -->
    <div style="padding: 20px;">
        <div style="margin-bottom: 30px;">
            <h2 style="font-size: 24px; font-weight: bold; color: #333;">Requests</h2>
            <p style="font-size: 16px; color: #666;">We are glad to see you again!</p>
            <!-- Button to trigger modal -->
            
        </div>

        <div>
            <table style="width: 100%; border-collapse: collapse; background-color: white;">
                <thead>
                    <tr>
                        <th style="padding: 10px; background-color: #F5F7F8;">ID</th>
                        <th style="padding: 10px; background-color: #F5F7F8;">Name</th>
                        <th style="padding: 10px; background-color: #F5F7F8;">Email</th>
                        <th style="padding: 10px; background-color: #F5F7F8;">Phone No.</th>
                        <th style="padding: 10px; background-color: #F5F7F8;">Status</th>
                    </tr>
                </thead>
                <tbody id="facility-partner-table">
                    @forelse ($req as $r)
                        <tr id="partner-{{ $r->id }}">
                            <td>{{ $r->id }}</td>     
                            <td>{{ $r->name }}</td>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->phone }}</td>
                            
                            <td>{{ $r->status }}</td>
                        
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No Requests found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection 

@section('jscontent') 

@endsection
