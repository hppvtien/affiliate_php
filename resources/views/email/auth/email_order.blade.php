<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
    <tbody>
        <tr>
            <td align="center" valign="top">
                <div id="m_5063188309675374655template_header_image">
                </div>
                <font color="#888888">
                </font>
                <font color="#888888">
                </font>
                
                <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_5063188309675374655template_container" style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px">
                    <tbody><tr>
                        <td class="rnb-del-min-width" align="center" valign="top" style="min-width:590px;">
                            <a href="#" name="Layout_1"></a>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="rnb-container" bgcolor="#0b2d25" style="background-color: rgb(11, 45, 37); border-radius: 0px; padding-left: 20px; padding-right: 20px; border-collapse: separate;">
                                <tbody><tr>
                                    <td height="20" style="font-size:1px; line-height:20px; mso-hide: all;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top" class="rnb-container-padding" align="left">
                                        <table width="100%" cellpadding="0" border="0" align="center" cellspacing="0">
                                            <tbody><tr>
                                                <td valign="top" align="center">
                                                    <table cellpadding="0" border="0" align="center" cellspacing="0" class="logo-img-center"> 
                                                        <tbody><tr>
                                                            <td valign="middle" align="center" style="line-height: 1px;">
                                                                <div style="border-top:0px None #000;border-right:0px None #000;border-bottom:0px None #000;border-left:0px None #000;display:inline-block; " cellspacing="0" cellpadding="0" border="0"><div><img width="300" vspace="0" hspace="0" border="0" alt="admall" style="float: left;max-width:300px;display:block;" class="rnb-logo-img" src="https://img.mailinblue.com/3994151/images/rnb/original/61246ae5d964a1288e5d3b09.png"></div></div></td>
                                                        </tr>
                                                    </tbody></table>
                                                    </td>
                                            </tr>
                                        </tbody></table></td>
                                </tr>
                                <tr>
                                    <td height="20" style="font-size:1px; line-height:20px; mso-hide: all;">&nbsp;</td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody>
                    <tbody>
                        <tr>
                            <td align="center" valign="top">
                                
                                
                                <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_5063188309675374655template_body">
                                    <tbody>
                                        <tr>
                                            <td valign="top" id="m_5063188309675374655body_content" style="background-color:#ffffff">
                                                
                                                
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="font-size:14px; font-family:Arial,Helvetica,sans-serif, sans-serif; color:#3c4858;"><div>
<div style="text-align: justify;"><span style="font-size:16px;">{{ $data_bill['lang_code'] == 'vi' ? 'Xin ch??o kh??ch h??ng:':'Dear:' }} {{ $data_bill['customer_name'] }}</span></div>

<div style="text-align: justify;"><span style="font-size:16px;">{{ $data_bill['lang_code'] == 'vi' ? 'Qu?? kh??ch ??ang c?? ????n h??ng s???':'You have invoice' }} {{ $data_bill['code_invoice'] }} {{ $data_bill['lang_code'] == 'vi' ? 'theo s??? ????n h??ng ???????c t???o v??o ng??y':'created on the date' }} {{ date_format($data_bill['created_at'], 'd-m-Y') }} {{ $data_bill['lang_code'] == 'vi' ? '??ang ??? tr???ng th??i ch??a thanh to??n.':'is in unpaid status.' }}</span></div>

<div style="text-align: justify;"><span style="font-size:16px;">{{ $data_bill['lang_code'] == 'vi' ? 'Qu?? kh??ch c?? th??? thanh to??n t??? b??y gi???. N???u qu?? kh??ch ???? ?????t mua h??ng v?? ????y l?? ????n h??ng gia h???n th?? vi???c thanh to??n tr?????c ng??y ?????n h???n thanh to??n l??':'You can pay from now and pay before the payment due date is' }} {{date_format(date_create($data_bill['end_date']),"d/m/Y") }} {{ $data_bill['lang_code'] == 'vi' ? 's??? gi??p qu?? kh??ch tr??nh b??? l??? h???n thanh to??n.':'this will help you to avoid missed payment deadline. ' }} </span></div>

<div style="text-align: justify;"><span style="font-size:16px;">{{ $data_bill['lang_code'] == 'vi' ? 'T???ng ti???n ph???i thanh to??n:':'Total amount to be paid:' }} @if ($data_bill['type_pay'] ==1)<b>{{ formatPdfVnd($data_bill['lang_code'],$data_bill['total_money']) }}</b>@else <b>{{ formatPdfVnd($data_bill['lang_code'],$data_bill['total_money']) }} {{ $data_bill['lang_code'] == 'vi' ? 'khi nh???n ???????c h??ng':'when receiving the goods' }} </b> @endif</span></div>

<div style="text-align: justify;"><span style="font-size:16px;">&nbsp;</span></div>

<div style="text-align: justify;"><span style="font-size:16px;">{{ $data_bill['lang_code'] == 'vi' ? 'Ng??y ?????n h???n thanh to??n':'Due date for payment' }}: {{date_format(date_create($data_bill['end_date']),"d/m/Y") }}</span></div>

<div style="text-align: justify;"><span style="font-size:16px;">{{ $data_bill['lang_code'] == 'vi' ? 'Xem ho?? ????n ???????c ????nh k??m theo email n??y':'See the order attached to this email.' }}: <a href="{{ route('get_user.generatePDF', 'data_id='.$data_bill['id']) }}" download>{{ $data_bill['lang_code'] == 'vi' ? '':'' }}{{ $data_bill['lang_code'] == 'vi' ? 'Xem chi ti???t':'See details' }}</a></span></div>
</div>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" style="padding:10px 48px 32px">
                                                                <div id="m_5063188309675374655body_content_inner" style="color:#636363;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">
                                                                    
                                                                    <section>
                                                                        <h2 style="color:#0b2d25;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
                                                                            {{ $data_bill['lang_code'] == 'vi' ? 'Th??ng tin ????n h??ng':'Information line' }}</h2>
                                                                        <ul>
                                                                            <li>{{ $data_bill['lang_code'] == 'vi' ? 'M?? ????n h??ng':'Code invoice' }}:
                                                                                <strong>{{ $data_bill['code_invoice'] }}</strong>
                                                                            </li>
                                                                            <li>{{ $data_bill['lang_code'] == 'vi' ? 'Ng??y t???o':'Date' }}:
                                                                                <strong>{{ date_format($data_bill['created_at'], 'd/m/Y') }}</strong>
                                                                            </li>
                                                                            <li>{{ $data_bill['lang_code'] == 'vi' ? '?????a ch???':'Address' }}:
                                                                                <strong>{{ $data_bill['address'] }}</strong>
                                                                            </li>
                                                                            <li>{{ $data_bill['lang_code'] == 'vi' ? 'S??? ??i???n tho???i':'Phone number' }}:
                                                                                <strong>{{ $data_bill['phone'] }}</strong>
                                                                            </li>
                                                                            <li>{{ $data_bill['lang_code'] == 'vi' ? 'Ph????ng th???c thanh to??n':'Pay method' }}:
                                                                                <strong>{{ $data_bill['pay_node'] }}</strong>
                                                                            </li>
                                                                            <li>{{ $data_bill['lang_code'] == 'vi' ? 'Ph????ng th???c v???n chuy???n':'Shipping method' }}:
                                                                                @if ($data_bill['method_ship'] == 1)
                                                                                <strong>{{ $data_bill['lang_code'] == 'vi' ? 'Giao h??ng nhanh':'Fast delivery' }}</strong>
                                                                                @else
                                                                                <strong>{{ $data_bill['lang_code'] == 'vi' ? 'Giao h??ng ti???t ki???m':'Save delivery' }}</strong>
                                                                                @endif
                                                                            </li>
                                                                        </ul>
                                                                    </section>
                                                                    <div style="margin-bottom:40px">
                                                                        <table cellspacing="0" cellpadding="6" border="1" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $data_bill['lang_code'] == 'vi' ? 'S???n ph???m':'Product' }}</th>
                                                                                    <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $data_bill['lang_code'] == 'vi' ? 'S??? l?????ng':'Quantity' }}</th>
                                                                                    <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $data_bill['lang_code'] == 'vi' ? '????n gi??':'Price unit' }}</th>
                                                                                </tr>
                                                                                @foreach (json_decode($data_bill['cart_info']) as $item)
                                                                                <tr>
                                                                                    <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $item->name }}
                                                                                    </th>
                                                                                    <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $item->qty }}
                                                                                    </th>
                                                                                    <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ number_format($item->price, 0, '', '.') }}??
                                                                                    </th>
                                                                                </tr>
                                                                                @endforeach
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $data_bill['lang_code'] == 'vi' ? 'T???ng ti???n':'Total amount' }}:</th>
                                                                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        <span>{{ number_format($data_bill['total_no_vat'], 0, '', '.') }}<span>???</span></span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        VAT: </th>
                                                                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        <span>{{ $data_bill['total_vat'] }}</span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        {{ $data_bill['lang_code'] == 'vi' ? 'Ph?? ship':'Ship fee' }}:</th>
                                                                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        <span>{{ $data_bill['total_ship'] }}</span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">
                                                                                        {{ $data_bill['lang_code'] == 'vi' ? 'T???ng s??? thanh to??n':'Total payment' }}:</th>
                                                                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">
                                                                                        <span>{{ $data_bill['total_money'] }}</span>
                                                                                    </td>
                                                                                </tr>
                                                                                

                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                   
                                                                </div>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                  <td style="
                     font-family: Arial,
                     Helvetica, sans-serif;
                     color: #3c4858;
                     text-align: left;
                     ">
                  <span style="color: #3c4858">
                  <span style="
                     font-size: 20px;
                     ">
                  <b>{{ $data_bill['lang_code'] == 'vi' ? 'UniMall - C??ng ty TNHH Unikery':'UniMall - Unikery  Co., Ltd' }}&nbsp;</b>
                  </span>
                  </span>
                  </td>
                  </tr>
                   <table class="rnb-del-min-width" width="100%" cellpadding="0" border="0" cellspacing="0" style="min-width: 100%" name="Layout_21">
                  <tbody>
                  <tr>
                  <td class="rnb-del-min-width" align="center" valign="top">
                  <a href="#" name="Layout_21"></a>
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="rnb-container" bgcolor="#ffffff" style="
                     background-color: rgb(255, 255, 255);
                     padding-left: 20px;
                     padding-right: 20px;
                     border-collapse: separate;
                     border-radius: 0px;
                     border-bottom: 0px none rgb(200, 200, 200);
                     ">
                  <tbody>
                  <tr>
                  <td height="0" style="
                     font-size: 1px;
                     line-height: 0px;
                     mso-hide: all;
                     "> &nbsp; </td>
                  </tr>
                  <tr>
                  <td valign="top" class="rnb-container-padding" align="left">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="rnb-columns-container">
                  <tbody>
                  <tr>
                  <th class="rnb-force-col" style="
                     text-align: left;
                     font-weight: normal;
                     padding-right: 0px;
                     " valign="top">
                  <table border="0" valign="top" cellspacing="0" cellpadding="0" width="100%" align="left" class="rnb-col-1">
                  <tbody>
                  <tr>
                  <td style="
                     font-size: 14px;
                     font-family: Arial,
                     Helvetica, sans-serif,
                     sans-serif;
                     color: #3c4858;
                     ">
                  <div>
                  <span style="
                     font-size: 16px;
                     ">{{ $data_bill['lang_code'] == 'vi' ? 'Tr??? s??? ch??nh: 22 Ph??? M???i, Th???y S??n, Th???y Nguy??n, H???i Ph??ng':'Head office: 22 New Street, Thuy Son, Thuy Nguyen, Hai Phong' }}</span>
                  </div>
                  <div>
                  <span style="
                     font-size: 16px;
                     ">Tel: (024) 7108 999</span>
                  </div>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </th>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  <tr>
                  <td height="20" style="
                     font-size: 1px;
                     line-height: 20px;
                     mso-hide: all;
                     "> &nbsp; </td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                   <table class="rnb-del-min-width rnb-tmpl-width" width="100%" cellpadding="0" border="0" cellspacing="0" style="min-width: 590px" name="Layout_5" id="Layout_5">
                  <tbody>
                  <tr>
                  <td class="rnb-del-min-width" align="center" valign="top" bgcolor="#ffffff" style="
                     min-width: 590px;
                     background-color: rgb(255, 255, 255);
                     ">
                  <a href="#" name="Layout_5"></a>
                  <table width="590" class="rnb-container" cellpadding="0" border="0" align="center" cellspacing="0">
                  <tbody>
                  <tr>
                  <td height="0" style="
                     font-size: 1px;
                     line-height: 0px;
                     mso-hide: all;
                     "> &nbsp; </td>
                  </tr>
                  <tr>
                  <td valign="top" class="rnb-container-padding" style="
                     font-size: 14px;
                     font-family: Arial, Helvetica,
                     sans-serif;
                     color: #888888;
                     " align="left">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="rnb-columns-container">
                  <tbody>
                  <tr>
                  <th class="rnb-force-col" style="
                     padding-right: 20px;
                     padding-left: 20px;
                     mso-padding-alt: 0 0 0 20px;
                     font-weight: normal;
                     " valign="top">
                  <table border="0" valign="top" cellspacing="0" cellpadding="0" width="264" align="left" class="
                     rnb-col-2 rnb-social-text-left
                     " style="border-bottom: 0">
                  <tbody>
                  <tr>
                  <td valign="top">
                  <table cellpadding="0" border="0" align="left" cellspacing="0" class="
                     rnb-btn-col-content
                     ">
                  <tbody>
                  <tr>
                  <td valign="middle" align="left" style="
                     font-size: 14px;
                     font-family: Arial,
                     Helvetica,
                     sans-serif;
                     color: #888888;
                     line-height: 16px;
                     " class="
                     rnb-text-center
                     ">
                  <div>
                  <div>
                  <span style="
                     font-size: 16px;
                     ">Website: www.unimall.vn <br /> Email: info.unimall.vn <br /> Hotline: 0356.105.899 </span>
                  </div>
                  </div>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </th>
                  <th ng-if="item.text.align=='left'" class="
                     rnb-force-col rnb-social-width
                     " valign="top" style="
                     mso-padding-alt: 0 20px 0 0;
                     padding-right: 15px;
                     ">
                  <table border="0" valign="top" cellspacing="0" cellpadding="0" width="246" align="right" class="rnb-last-col-2">
                  <tbody>
                  <tr>
                  <td valign="top">
                  <table cellpadding="0" border="0" cellspacing="0" class="rnb-social-align" style="float: right" align="right">
                  <tbody>
                  <tr>
                  <td valign="middle" style="display: flex;" class="
                     rnb-text-center
                     " ng-init="width=setSocialIconsBlockWidth(item)" width="205" align="right">
                  <div class="
                     rnb-social-center
                     ">
                  <table align="left" style="
                     float: left;
                     display: inline-block;
                     " border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr>
                  <td style="
                     padding: 0px
                     5px
                     5px
                     0px;
                     mso-padding-alt: 0px
                     2px
                     5px
                     0px;
                     " align="left">
                  <span style="
                     color: #ffffff;
                     font-weight: normal;
                     ">
                  <a target="_blank" href="#">
                  <img alt="Facebook" border="0" hspace="0" vspace="0" style="
                     vertical-align: top;
                     " target="_blank" src="https://app.sendinblue.com/rnb-editor/assets/new_images/theme1/rnb_ico_fb.png" />
                  </a>
                  </span>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  <div class="
                     rnb-social-center
                     ">
                  <table align="left" style="
                     float: left;
                     display: inline-block;
                     " border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr>
                  <td style="
                     padding: 0px
                     5px
                     5px
                     0px;
                     mso-padding-alt: 0px
                     2px
                     5px
                     0px;
                     " align="left">
                  <span style="
                     color: #ffffff;
                     font-weight: normal;
                     ">
                  <a target="_blank" href="#">
                  <img alt="Twitter" border="0" hspace="0" vspace="0" style="
                     vertical-align: top;
                     " target="_blank" src="https://app.sendinblue.com/rnb-editor/assets/new_images/theme1/rnb_ico_tw.png" />
                  </a>
                  </span>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  <div class="
                     rnb-social-center
                     ">
                  <table align="left" style="
                     float: left;
                     display: inline-block;
                     " border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr>
                  <td style="
                     padding: 0px
                     5px
                     5px
                     0px;
                     mso-padding-alt: 0px
                     2px
                     5px
                     0px;
                     " align="left">
                  <span style="
                     color: #ffffff;
                     font-weight: normal;
                     ">
                  <a target="_blank" href="#">
                  <img alt="LinkedIn" border="0" hspace="0" vspace="0" style="
                     vertical-align: top;
                     " target="_blank" src="https://app.sendinblue.com/rnb-editor/assets/new_images/theme1/rnb_ico_in.png" />
                  </a>
                  </span>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  <div class="
                     rnb-social-center
                     ">
                  <table align="left" style="
                     float: left;
                     display: inline-block;
                     " border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr>
                  <td style="
                     padding: 0px
                     5px
                     5px
                     0px;
                     mso-padding-alt: 0px
                     2px
                     5px
                     0px;
                     " align="left">
                  <span style="
                     color: #ffffff;
                     font-weight: normal;
                     ">
                  <a target="_blank" href="#">
                  <img alt="Instagram" border="0" hspace="0" vspace="0" style="
                     vertical-align: top;
                     " target="_blank" src="https://app.sendinblue.com/rnb-editor/assets/new_images/theme1/rnb_ico_ig.png" />
                  </a>
                  </span>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  <div class="
                     rnb-social-center
                     ">
                  <table align="left" style="
                     float: left;
                     display: inline-block;
                     " border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr>
                  <td style="
                     padding: 0px
                     5px
                     5px
                     0px;
                     mso-padding-alt: 0px
                     2px
                     5px
                     0px;
                     " align="left">
                  <span style="
                     color: #ffffff;
                     font-weight: normal;
                     ">
                  <a target="_blank" href="#">
                  <img alt="Youtube" border="0" hspace="0" vspace="0" style="
                     vertical-align: top;
                     " target="_blank" src="https://app.sendinblue.com/rnb-editor/assets/new_images/theme1/rnb_ico_yt.png" />
                  </a>
                  </span>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                  </th>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  <tr>
                  <td height="20" style="
                     font-size: 1px;
                     line-height: 20px;
                     mso-hide: all;
                     "> &nbsp; </td>
                  </tr>
                  </tbody>
                  </table>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                   <tr>
                  <td style="
                     font-size: 16px;
                     color: #888888;
                     font-weight: normal;
                     text-align: center;
                     font-family: Arial, Helvetica,
                     sans-serif;
                     ">
                  <div>
                  <div>?? 2021 Unimall</div>
                  </div>
                  </td>
                  </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
                
            </td>
            
        </tr>
       
    </tbody>
</table>