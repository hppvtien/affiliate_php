<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Short ly link
    {{ $links }}
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // window.location.href = "{{ $links }}";
    $.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});
</script>

{{-- <script type="text/javascript">
    var time = 1 * 2;
	setInterval(function () {
		let slug = "{{ slug }}";
		var data_url = "{{ link_rd }}";
		var seconds = time % 60;
		var minutes = (time - seconds) / 60;
		if (seconds.toString().length == 1) {
			seconds = "0" + seconds;
		}
		if (minutes.toString().length == 1) {
			minutes = "0" + minutes;
		}
		document.getElementById("time").innerHTML = 0 + ":" + seconds;
		time--;
		if (time == 0) {
			$.ajax({
				type: "POST",
				url: "{% url 'count-view-short-ly' %}",
				data: {
					slug: slug,
					page_link: data_url,
				},
				success: function (data) {
					window.location.href = data;
				},
				error: function () {
					window.location.href = data_url;
				},
			});
		}
	}, 10000);
</script> --}}

</html>