<button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" 
{{-- onclick="changeBtnTxt()" --}}
>
    {{-- <span class="fas fa-angle-left" id="filter-angle"></span> --}}
    <span class="fa fa-filter fa-2x" aria-hidden="true" id="filter-angle"></span>
    {{-- <span id="btn-txt">Hide filters</span> --}}
</button>
<nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
	<div class="collapse navbar-collapse" id="mynav">
		<ul class="navbar-nav d-lg-flex align-items-lg-center">
			<li class="nav-item active">
				<select name="sort" id="sort">
					<option value="" hidden selected>Sort by</option>
					<option value="new">Z-A</option>
					<option value="old">A-Z</option>
				</select>
			</li>
			<li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
				<div class="d-inline-flex align-items-center mx-lg-2" id="select2">
					<div class="pl-2">Actors:</div>
					<select name="pro" id="pro">
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
					</select>
				</div>
				<div class="font-weight-bold mx-2 result">18 from 200</div>
			</li>
			<li class="nav-item d-lg-none d-inline-flex"> </li>
		</ul>
	</div>
</nav>
<div class="ml-auto mt-1 mr-2">
	<nav aria-label="Page navigation example">
		<ul class="pagination">
			{{-- <li class="page-item">
				<a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a>
			</li> --}}
			{{-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">..</a></li>
			<li class="page-item"><a class="page-link" href="#">24</a></li> --}}
			<li class="page-item">
			{{ $actors->links('Actors::pagination') }}
		</li>
			{{-- <li class="page-item">
				<a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a>
			</li> --}}
		</ul>
	</nav>
</div>