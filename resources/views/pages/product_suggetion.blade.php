<style type="text/css">
	.page_design{
		padding-top: 0px;
	}
	.page_li_design{
		list-style:none;
		padding: 0 20px;
	}
	.page_li_design:hover{
		background: #F3F3F3;
		cursor: pointer;
		
	}
	.page_li_design:hover{
		background: #F3F3F3;

		cursor: pointer;}
		.page_li_design a:hover{
		color: #333333;
		
	}
		
</style>

<ul class="page_design">
	@foreach($products as $item)
		
	
	<li class="page_li_design">
	<a href="{{url('/singleproduct/'.$item->id)}}">
	<img src="{{asset('product_images/'.$item->image_one)}}" width="60">
	<strong>{{$item->product_name}}</strong>
</a>
</li>

@endforeach
</ul>

