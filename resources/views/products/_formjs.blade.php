@section('footer')
	<script type="text/javascript">
		$(':button').click(function(event){
			var action = ($(this).attr("name"));
			var arr = action.split("_");
			if(arr.length > 1){
				switch(arr[0]){
					case 'Add':
						window.location.href = '{{ url("products/create") }}';
					break;

					case 'View':				
						window.location.href = '{{ url("products") }}/'+arr[1];
					break;

					case 'Delete':				
						if(confirm("Are you sure you want to delete this item?")){
							return true;
						} else {
							event.preventDefault();
						}				
					break;

					case 'Edit':				
						window.location.href = '{{ url("products") }}/'+arr[1]+'/edit';
					break;
				}	
			} else {
				window.location.href = '{{ url("products") }}';
			}
			
		});
	</script>
@stop