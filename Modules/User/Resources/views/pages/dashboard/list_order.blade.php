@extends('user::pages.layout.app_master_user')
@section('content')

    <main id="maincontent" class="">

    <div class=" columns">
        @include('user::pages.component._inc_menu_user')

        <div class="column main padding_css">

            <div class="show-product" id="show-product">
                <div class="mt-2 mb-5">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-12">

                            <table class="table table-striped">
                                <thead>
                                    <tr class="order-list-li">
                                        <th class="text-center" scope="col">#</th>
                                        <th scope="col" class="text-center">{{ trans('title.code_invoice') }}</th>
                                        <th scope="col" class="text-center">{{ trans('title.created_order') }}</th>
                                        <th scope="col" class="text-center">{{ trans('title.pay_method') }}</th>
                                        <th scope="col" class="text-center">{{ trans('title.total_amount') }}</th>
                                        <th scope="col" class="text-center">{{ trans('title.status_order') }}</th>
                                        <th scope="col" class="text-center">{{ trans('title.export_order') }}</th>
                                        <th scope="col" class="text-center">{{ trans('title.delete_order') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($uni_order) > 0) { ?>
                                    @forelse ($uni_order as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td class="text-left">
                                                {{ $item->code_invoice }}
                                            </td>
                                            <td class="text-center">{{ $item->created_at }}</td>
                                            @if ($item->type_pay != null)
                                                <td class="text-center"><a class="btn btn-success w-75"
                                                        href="javascript:;">
                                                        {{ getDataByLang($lang_code,config('cart.pay_type')[$item->type_pay]['name'],config('cart.pay_type')[$item->type_pay]['name_en']) }}
                                                        </a>
                                                </td>
                                            @else
                                                <td class="text-center"><a class="btn btn-info w-75"
                                                        href="{{ route('get_user.paysuccsess', ['id'=>$item->id,'locale'=>app()->getLocale()]) }}">{{ trans('title.order_warning') }}</a></td>
                                            @endif
                                            <td class="text-center">{{ formatPriceInterface($lang_code,$item->total_money) }} {{ trans('title.currency') }}</td>
                                            <td class="text-center">
                                                <span class="badge {{ $item->getStatus($item->status)['class'] }}">
                                                {{ getDataByLang($lang_code,$item->getStatus($item->status)['name'],$item->getStatus($item->status)['name_en']) }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:;" class="btn btn-info print_pdf" id="print_pdf"
                                                    data-id="{{ $item->id }}"
                                                    data-url="{{ route('get_user.generatePDF') }}">
                                                    <i class="fa fa-download text-white"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                @if ($item->status == 0 && Carbon\Carbon::now() < $item->created_at->subHours(-24))
                                                    <!-- Button trigger modal -->
                                                    <button type="button" style="margin-top: 10px;" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#exampleModal0">
                                                        <i class="fa fa-trash text-white"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal0" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: #000000" id="exampleModalLabel">{{ trans('title.alert_order_del') }}</h5>
                                                                </div>
                                                                <div class="modal-footer text-center mx-auto">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{ trans('title.close') }}</button>
                                                                        <a href="javascript:;" class="btn btn-info delete_order"
                                                                        id="delete_order" data-id="{{ $item->id }}"
                                                                        data-url="{{ route('get_user.delete_order',app()->getLocale()) }}">
                                                                        {{ trans('title.delete_order') }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                @elseif($item->status == 3)
                                                    <button type="button" style="margin-top: 10px;" class="btn btn-success"
                                                        data-toggle="modal" data-target="#ms3">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="ms3" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: #000000"
                                                                        id="exampleModalLabel">{{ trans('title.warning_delete_order') }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{ trans('title.confirm_delete_order') }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <button type="button" style="margin-top: 10px;" class="btn btn-info"
                                                        data-toggle="modal" data-target="#exampleModaln">
                                                        <i class="fa fa-clock-o text-white"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModaln" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: #000000"
                                                                        id="exampleModalLabel">{{ trans('title.error_delete_order') }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{ trans('title.success_delete_order') }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                                    <?php } else { ?>
                                    <tr>
                                        <td colspan=7 scope="row">{{ trans('title.uploading') }}</th>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script>
            function cart_order_now(cart_order_now1) {
                var data_url = $(cart_order_now1).attr('data-url');
                $.get(data_url).fail(function() {
                    location.reload();
                });
            }

            function get_product_sale(get_id) {
                var get_id = $(get_id).attr("data-id-sale");
                var get_total_price = $('h4.mr-1').attr('get-total-price');
                var price_id = $('#button_sale').attr('price-id');
                var price_slug = $('#button_sale').attr('price-slug');

                $.get("{{ route('get_user.get_product_flash_sale',app()->getLocale()) }}", {
                        get_id: get_id,
                        get_total_price: get_total_price
                    })
                    .done(function(data) {
                        $("#exampleModalLong .modal-body").html(data);
                        $('#cart_sale').attr("price-slug", price_slug);
                        $('#cart_sale').attr("price-id", price_id);
                    });
            }

            $(function() {
                $(".loadmore1").slice(0, 4).show();
                $("#loadMore").on("click", function(e) {
                    e.preventDefault();
                    $(".loadmore1:hidden").slice(0, 4).slideDown();
                    if ($(".loadmore1:hidden").length == 0) {
                        $("#load").fadeOut("slow");
                    }
                    $("#show-product").animate({
                        scrollTop: $(this).offset().top
                    }, 1500);
                });
            });

            $("a[href=#top]").click(function() {
                $("#show-product").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $(".totop a").fadeIn();
                } else {
                    $(".totop a").fadeOut();
                }
            });
        </script>

    </main>

@stop
