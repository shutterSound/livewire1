{{--메인--}}
{{--@livewire('ui-main')--}}

{{--코드수정  => 부트에서 만들거나 외부 라이브 와이어 연결 시작  --}}

@if(session()->has('success'))
<div class="w-full bg-success p-1 center">{{ session('success') }}</div>
@endif

{{--@include('livewire.cat1s-input')--}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="horz-layout-colored-controls">카테고리 1 입력 </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        {{--                            <li><a data-action="close"><i class="ft-x"></i></a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">
                    <div class="card-text">
                        <p>울산매일신문 CMS 1차 카테고리 입력창</p>
                    </div>
                    <form wire:submit.prevent="submit"  class="form form-horizontal">
                        <input wire:model="cat1name" type="text">
                        <input wire:model="cat1code" type="text">

                        <div class="form-body">
                            <h4 class="form-section"><i class="la la-eye"></i>1차 카테고리</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="cat1name">1차 카테고리명</label>
                                        <div class="col-md-9 mx-auto">
                                            <input wire:model="cat1name" type="text" id="cat1name" class="form-control border-primary" placeholder="1차 카테고리 이름" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="cat1code">1차 카테고리 코드</label>
                                        <div class="col-md-9 mx-auto">
                                            <input wire:model="cat1code" type="text" id="cat1code" class="form-control border-primary" placeholder="1차 카테고리 코드" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions text-right">
                            <button type="button" class="btn btn-warning mr-1 waves-effect waves-light">
                                <i class="ft-x"></i> 취소
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="la la-check-square-o"></i> 저장
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">카테고리 1</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
{{--                            <li><a data-action="close"><i class="ft-x"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                        <p class="card-text">울산매일신문 CMS 카테고리 1 목록</p>
                        <div id="DataTables_Table_10_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="dt-buttons btn-group">
                                <button class="btn btn-secondary buttons-copy buttons-html5 btn-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" type="button"><span>Copy</span></button>
                                <button class="btn btn-secondary buttons-csv buttons-html5 btn-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" type="button"><span>CSV</span></button>
                                <button class="btn btn-secondary buttons-excel buttons-html5 btn-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" type="button"><span>Excel</span></button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5 btn-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" type="button"><span>PDF</span></button>
                                <button class="btn btn-secondary buttons-print btn-primary mr-1" tabindex="0" aria-controls="DataTables_Table_10" type="button"><span>Print</span></button> </div>
                            <div id="DataTables_Table_10_filter" class="dataTables_filter">
                                <label>Search:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_10"></label></div>
                            <table class="table table-striped table-bordered file-export dataTable" id="DataTables_Table_10" role="grid" aria-describedby="DataTables_Table_10_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 152px;">
                                       Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 231px;">
                                        카테고리명</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">
                                        카테고리 코드</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >
                                        기능</th>
                                </thead>
                                <tbody>
                                <a class="btn btn-blue" href="#" wire:click.prevent="editForm(2)">11111수정</a>
                                @foreach($cat1datas as $cat1data )
                                    <tr  >
                                        <td class="sorting_1">{{$cat1data->id}}</td>
                                        <td>{{$cat1data->cat1name}}</td>
                                        <td>{{$cat1data->cat1code}}</td>
                                        <td>

                                            <a class="btn btn-success shadow" href="javascript:void(0)" wire:click.prevent="editForm({{$cat1data->id}})"> 수정</a>
                                            <button wire:click.prevent="edit({{$cat1data->id}})"class="btn btn-accent-1" type="button" >수정</button>
                                            <button wire:click.prevent="delete({{$cat1data->id}})"class="btn btn-danger" type="button" >삭제</button>
                                        </td>
                                    </tr>
                                @endforeach

</tbody>
{{--                                <tfoot>--}}
{{--                                <tr>--}}
{{--                                    <th rowspan="1" colspan="1">Name</th>--}}
{{--                                    <th rowspan="1" colspan="1">Position</th>--}}
{{--                                    <th rowspan="1" colspan="1">Office</th>--}}
{{--                                    <th rowspan="1" colspan="1">Age</th>--}}
{{--                                </tfoot>--}}
                            </table><div class="dataTables_info" id="DataTables_Table_10_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_10_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_10_previous"><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DataTables_Table_10_next"><a href="#" aria-controls="DataTables_Table_10" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--코드수정 => 메터리얼 section 추가부분 시작 항상 section으로 가져온다.--}}




{{--코드수정 => App으로 이동하기전 위치 --}}


{{--                코드수정 => 컨텐츠 박스 시작 --}}
{{--<div class="app-content content">--}}
{{--    <div class="content-header row">--}}
{{--        --}}{{--                코드수정 => 헤더 사이트 간판 시작--}}
{{--        <div class="content-header-light col-12">--}}
{{--            <div class="row">--}}
{{--                <div class="content-header-left col-md-9 col-12 mb-2">--}}
{{--                    <h3 class="content-header-title">카테고리 1 추가</h3>--}}
{{--                    <div class="row breadcrumbs-top">--}}
{{--                        <div class="breadcrumb-wrapper col-12">--}}
{{--                            <ol class="breadcrumb">--}}
{{--                                <li class="breadcrumb-item"><a href="index.html">홈</a>--}}
{{--                                </li>--}}
{{--                                <li class="breadcrumb-item"><a href="#">카테고리 관리</a>--}}
{{--                                </li>--}}
{{--                                <li class="breadcrumb-item active">카테고리 1 추가--}}
{{--                                </li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="content-header-right col-md-3 col-12">--}}
{{--                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">--}}
{{--                        <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a class="dropdown-item" href="component-alerts.html"> Alerts</a>--}}
{{--                            <a class="dropdown-item" href="material-component-cards.html"> Cards</a>--}}
{{--                            <a class="dropdown-item" href="component-progress.html"> Progress</a>--}}
{{--                            <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="content-overlay"></div>--}}
{{--    <div class="content-wrapper">--}}
{{--        --}}{{--        코드수정 => 아래박스content-body안에 추가 컴포넌트를 넣는다. 시작 --}}
{{--        <div class="content-body">--}}







            {{--                코드수정 => 컨텐츠 박스 끝 --}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
