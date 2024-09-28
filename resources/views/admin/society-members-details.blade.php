@extends('admin.index-main')

@section('csscontent')
<style>
    .main__content_wrapper {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .details-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }
    h2 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }
    .detail-item {
        margin-bottom: 15px;
    }
    .detail-item strong {
        color: #555;
    }
    .document-link {
        display: inline-block;
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }
    .document-link:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
<main class="main__content_wrapper">
<br><br>
    <div class="details-container">
        <h2>Society Members Details</h2>
        <div class="detail-item">
            <strong>Name:</strong> {{ $member->name }}
        </div>
        <div class="detail-item">
            <strong>Email:</strong> {{ $member->email }}
        </div>
        <div class="detail-item">
            <strong>Phone Number:</strong> {{ $member->phone_number }}
        </div>
        <div class="detail-item">
            <strong>Flat No.:</strong> {{ $member->flat }}
        </div>
        <div class="detail-item">
            <strong>Required Document:</strong>
            @if($member->document)
                <a href="{{ asset('Documents/' . $member->document) }}" target="_blank" class="document-link">
                    View Document
                </a>
            @else
                No document available
            @endif
        </div>
    </div>
</main>
@endsection

@section('jscontent')
@endsection
