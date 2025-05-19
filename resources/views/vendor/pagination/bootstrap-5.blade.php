@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
    
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    
                        <span></span>
                  
                @else
                
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
              
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                  
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
             
                @else
                  
                        <span></span>
                    
                @endif
           
        </div>


@endif