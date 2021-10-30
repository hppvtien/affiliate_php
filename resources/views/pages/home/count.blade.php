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
	count link
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});
</script>


<script>
	var myVar = setInterval(myTimer, 10000);
	function myStopFunction() {
		clearInterval(myVar);
	}
	function myTimer() {
		var url_string = window.location.href; //window.location.href
			var url = new URL(url_string);
			var asmid = url.searchParams.get("asmid");
			if(asmid){
				$.ajax({
					type: "POST",
					url: "{{ route('get.count_view') }}",
					data: {
						asmid: asmid,
					},
					success: function (data) {
						myStopFunction();
					},
					error: function (data) {
						myStopFunction();
					},
				});
			}
	}
</script>

</html>