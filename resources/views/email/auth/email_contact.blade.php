{{ $data['lang_code'] == 'vi' ? 'Họ tên':'Fullname' }}: {{ $data['name'] }}<br>
Email: {{ $data['email'] }}<br>
{{ $data['lang_code'] == 'vi' ? 'Số điện thoại':'Phone number' }}: {{ $data['phone'] }}<br>
{{ $data['lang_code'] == 'vi' ? 'Tiêu đề':'Title' }}: {{ $data['subject'] }}<br>
{{ $data['lang_code'] == 'vi' ? 'Nội dung':'Content' }}: 
<p>{{ $data['message'] }}</p><br>
{{ $data['lang_code'] == 'vi' ? 'Ngày gửi':'
Sent date' }}: {{date_format(date_create($data['created_at']),"d/m/Y") }}