
<div class="tab_footer">
    <div class="row no-gutter align-items-center">
        <div class="col-12 col-md-12 col-lg-4 pb-3">
        </div>
        <div class="col-12 col-md-12 col-lg-8 pb-3">
            <div class="row align-items-center">
                <nav class="navigation col-12" aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $paginator->url(1) }}"><i class="zmdi zmdi-chevron-left"></i></a>
                        </li>
                        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor
                        
                        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}"><i class="zmdi zmdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>

