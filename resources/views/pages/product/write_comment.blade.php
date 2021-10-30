<div class="layout layout--onecol group-write">
    <div class="container">
        <div class="col-md-12  can_detail_danhgia_cauhoi">
            <div class="row can_trong col-md-12 cachle_trai_detail_danhgia_cauhoi">
                <div class="btn btn-comment">
                    <button class="tablink"  id="show_viet_danh_gia"><i class="fa fa-pencil"></i>{{ trans('title.write_review') }}</button>
                </div>
                <div class="btn btn-comment">
                    <button class="tablink" id="show_dat_cau_hoi"><i class="fa fa-comments"></i>{{ trans('title.write_question') }}</button>
                </div>
            </div>
            <div class="row can_trong">
                <div id="News" class="tabcontent not-padding col-md-12" >
                    <div class='rating-stars text-center'>
                        <ul id='stars'>
                            <li class='star selected' title='Poor' data-value='1'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star selected' title='Fair' data-value='2'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star selected' title='Good' data-value='3'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star selected' title='Excellent' data-value='4'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                            <li class='star selected' title='WOW!!!' data-value='5'>
                                <i class='fa fa-star fa-fw'></i>
                            </li>
                        </ul>
                        <p id="err-star" class="text-danger"></p>
                    </div>
                    <div class="">
                        <div class="" id="review-box">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="title_rv" id="title_rv" type="email" class="m-text-input__input input-text label-comt" title="{{ trans('title.write_title') }}">
                                    <label class="m-text-input__label label-lb" for="title_rv"><span>{{ trans('title.write_title') }}</span></label>
                                </div>
                            </div>
                            <textarea id="noi_dung_commnet" class="form-control col-12" rows="2" placeholder="{{ trans('title.please_leave_your_comment') }}"></textarea>
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <input name="name_rv" id="name_rv" type="email" class="m-text-input__input input-text label-comt" title="Name">
                                            <label class="m-text-input__label label-lb" for="name_rv"><span>{{ trans('title.fullname') }}</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <input name="phone_rv" id="phone_rv" type="email" class="m-text-input__input input-text label-comt" title="Phone">
                                            <label class="m-text-input__label label-lb" for="phone_rv"><span>{{ trans('title.phone_number') }}</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <input name="email_rv" id="email_rv" type="email" class="m-text-input__input input-text label-comt" title="Email">
                                            <label class="m-text-input__label label-lb" for="email_rv"><span>Email</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <button data-url="{{ route('get.product_comment',['slug'=>$slug]) }}" data-type="review" product_id="{{ $product->id }}" user_id="{{ get_data_user('web') }}" class="btn-comment-rv btn btn-sm btn-primary pull-right" type="button">
                                                <i class="fa fa-pencil fa-fw"></i> Gửi đánh giá</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="question" class="tabcontent not-padding col-md-12">
                    <div class="">
                        <div>
                            <textarea id="noi_dung_question" class="form-control" rows="2" placeholder="{{ trans('title.please_leave_your_comment') }}"></textarea>
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <input name="name_qs" id="name_qs" type="email" class="m-text-input__input input-text label-comt" title="Name">
                                            <label class="m-text-input__label label-lb" for="name_qs"><span>{{ trans('title.fullname') }}</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <input name="phone_qs" id="phone_qs" type="email" class="m-text-input__input input-text label-comt" title="Phone">
                                            <label class="m-text-input__label label-lb" for="phone_qs"><span>{{ trans('title.phone_number') }}</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <input name="email_qs" id="email_qs" type="email" class="m-text-input__input input-text label-comt" title="Email">
                                            <label class="m-text-input__label label-lb" for="email_qs"><span>Email</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                    <div class="field email required">
                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                            <button data-url="{{ route('get.product_comment',['slug'=>$slug]) }}" data-type="question" product_id="{{ $product->id }}" user_id="{{ get_data_user('web') }}" 
                                                class="btn-comment-qs btn btn-sm btn-primary pull-right" type="button">
                                                <i class="fa fa-pencil fa-fw"></i> {{ trans('title.submit_quesstion') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 can_detail_danhgia_cauhoi">
            <div class="row can_trong">
                <div class="btn btn-comment">
                    <button class="tablink" id="view_danh_gia"><i class="fa fa-user"></i> {{ trans('title.rated') }}</button>
                </div>
                <div class="btn btn-comment">
                    <button class="tablink" id="view_cau_hoi"><i class="fa fa-comments"></i> {{ trans('title.question') }}</button>
                </div>
            </div>
            <div class="row can_trong">
                <div id="view_review" class="tabcontents not-padding col-md-12">
                    <div class="">
                        <div>
                            <div>
                                @forelse ($noi_dung_comment as $item)
                                <div class="media-block">
                                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="{{ $item->name }}" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                    <div class="media-body">
                                        <div class="mar-btm">
                                            <a href="#" class="btn-link text-semibold media-heading box-inline" style="color:#08532f">
                                                {{ ($item->name != '') ? $item->name : 'Khách Hàng '.$item->id }} -- {{ ($item->title != '') ? '( '.$item->title.' )' : '( Bình Luận Sản Phẩm )' }}
                                                <br>
                                                Đánh Giá: {{ $item->star }} @for ($i = 0; $i < $item->star; $i++)
                                                <span class="fa fa-star checked-star"></span>
                                                @endfor
                                                <hr>
                                            </a>
                                            
                                        </div>
                                        <p class="margin-left1 font-weight-bold">{{ $item->title_rv }}</p>
                                        <p class="margin-left1">{{ $item->noi_dung_comment }}</p>
                                    </div>
                                </div>
                                @empty
                                    
                                @endforelse
                          
                                <!--===================================================-->
                                <!-- End Newsfeed Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="view_question" class="tabcontents not-padding col-md-12">

                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    @forelse ($noi_dung_comment as $item)
                    <div class="media-block">
                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="{{ $item->name }}" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                        <div class="media-body">
                            <div class="mar-btm">
                                <a href="#" class="btn-link text-semibold media-heading box-inline" style="color:#08532f">
                                    {{ ($item->name != '') ? $item->name : 'Khách Hàng '.$item->id }} -- {{ ($item->title != '') ? '( '.$item->title.' )' : '( Bình Luận Sản Phẩm )' }}
                                    <br>
                                    Đánh Giá: {{ $item->star }} @for ($i = 0; $i < $item->star; $i++)
                                    <span class="fa fa-star checked-star"></span>
                                    @endfor
                                    <hr>
                                </a>
                                
                            </div>
                            <p class="margin-left1 font-weight-bold">{{ $item->title_rv }}</p>
                            <p class="margin-left1">{{ $item->noi_dung_comment }}</p>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
              
                    @forelse ($noi_dung_question as $item)
                    <div class="media-block">
                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="{{ $item->name }}" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                        <div class="media-body">
                            <div class="mar-btm">
                                <a href="javascript:;" class="btn-link text-semibold media-heading box-inline">{{ $item->name }}</a>
                            </div>
                            <p class="margin-left1">{{ $item->noi_dung_question }}</p>
                            <div class="answer-gr">
                                <div class="mar-btm">
                                    <a href="javascript:;" class="btn-link text-semibold media-heading box-inline">Unimall</a>
                                </div>
                                <p class="margin-left1">{{ $item->noi_dung_answer }}</p>
                            </div>
        
                            <hr>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                   
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->
                </div>
            </div>
        </div>
    </div>
</div>