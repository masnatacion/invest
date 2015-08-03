@if ((bool) array_intersect(["create","edit","show","delete"], $btn))
	<td class="hidden-print">{{ trans('crud.action') }}</td>
@endif	