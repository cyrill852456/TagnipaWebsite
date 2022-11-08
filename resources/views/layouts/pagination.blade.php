<div class="row tm-mb-90">
    <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
        @if($paginator->hasPages())
        @if($paginator->onFirstPage())
        <span class="btn btn-primary tm-btn-prev mb-2 previous-link-disabled">
            @lang('pagination.previous')
        </span>
        @else
        <a href="{{$paginator->previousPageUrl()}}" class="btn btn-primary tm-btn-prev mb-2 previous-link">
            @lang('pagination.previous')
        </a>
            
        @endif
       
        @foreach ($elements as $element)
        <div class="tm-pagin d-flex">
            @if (is_string($element))
                
                    <a  class="tm-paging-link">{{ $element }}</a>
            
               
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                 
                        <a  class="active tm-paging-link">{{ $page }}</a>
                   
                    @else
                
                        <a href="{{ $url }}" class="tm-paging-link">{{ $page }}</a>
                    
                 
                      
                    @endif
                @endforeach
            @endif
        </div>
        @endforeach
        @if($paginator->hasMorePages())
        <a href="{{$paginator->nextPageUrl()}}" class="btn btn-primary tm-btn-next next-link">
            @lang('pagination.next')
        </a>
        @else
        <span class="btn btn-primary tm-btn-next next-link-disable">
            @lang('pagination.next')
        </span>
        @endif
    @endif
    </div>
</div>
