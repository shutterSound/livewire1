{{--코드수정 => 부트스튜디오에서 작성한 UI 적용 --}}

<div>
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




{{--   <section class="card" style="color: var(--blue);background: var(--secondary);border-radius: 14px;border-bottom-left-radius: 14px;border-top-width: 1px;border-top-style: none;">--}}
{{--        <h4 data-bss-hover-animate="shake" style="color: var(--teal);padding: 6px;border-radius: 27px;margin-right: 0;padding-right: 0;padding-left: 11px;box-shadow: 0px -5px 8px #999999;background: rgba(255,255,255,0);margin-top: -37px;margin-left: 0px;border: 1px solid var(--blue);border-top-width: 0px;border-top-style: solid;border-right-style: none;border-bottom: 1px none var(--pink);border-left-style: none;text-align: center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">--}}
{{--            카테고리 - 1차</h4>--}}
{{--        <form wire:submit.prevent="submit" class="form-inline input_form">--}}
{{--            <div class="md-input-group input_item input_title">--}}
{{--                <label class="md-input-label" style="color: var(--success);">카테고리명</label>--}}
{{--                <input wire:model="cat1name" class="form-control md-input" type="text">--}}
{{--                <div class="text-right md-messages">--}}
{{--                    @error('cat1name')--}}
{{--                    <span class="text-right md-message src-only" style="margin-left: 0;">{{$message}}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="md-input-group input_item input_title">--}}
{{--                <label class="md-input-label" style="color: var(--success);">카테고리 코드</label>--}}
{{--                <input wire:model="cat1code" class="form-control md-input" type="text">--}}
{{--                <div class="text-right md-messages">--}}
{{--                    <span class="text-right md-message src-only" style="margin-left: 0;">User name is required</span></div>--}}
{{--            </div>--}}
{{--            <button class="btn btn-primary btn-block md-btn" data-bss-hover-animate="pulse" type="submit"--}}
{{--                    style="border-radius: 23px;background: rgba(255,255,255,0);border-top-left-radius: 0px;border-top-right-radius: 0px;width: 100%;border-color: var(--indigo);border-top-width: 0px;box-shadow: 0px 8px 20px 10px rgba(255,255,255,0.29);height: 50px;font-size: 18px;">--}}
{{--                카테고리 저장</button>--}}
{{--        </form>--}}
{{--    </section>--}}
</div>


