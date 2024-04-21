    @extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')    
@section('content_header_subtitle', 'Kategori')

@section('content')                             
<div class="container">                                                                      
    <div class="card">  
        <div class="card-header">Manage Kategori
            <a href="{{ route('kategori.create') }}" class="card-link btn btn-primary ml-auto">add</a>
        </div>
        <div class="card-body">    
            
              {{ $dataTable->table() }}
             </div>              
         </div>                                     
    </div>
@endsection

@push('scripts')                                
    {{ $dataTable->scripts() }}

@endpush