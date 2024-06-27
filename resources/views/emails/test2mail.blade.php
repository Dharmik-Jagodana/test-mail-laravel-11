<x-mail::message>
# {{ $data['title'] }}

<pre>{{ $data['body'] }}</pre>

<x-mail::panel>
Contact US "aatmaninfotect@gmail.com"
</x-mail::panel>

<h4>Table Component</h4>

<x-mail::table>
| Person Name       | Post         		| Number   	 |
| :---------------: |:-----------------:|:----------:|
@forelse($data['info'] as $key => $value)
	| {{ $value['name'] }}      | {{ $value['post'] }}     | {{ $value['phone'] }} |
@empty
	No Data Found
@endforelse
</x-mail::table>

<x-mail::button :url="$data['link']" color="green">
Visit Site
</x-mail::button>


Thanks,<br>
Aatman Infotect
</x-mail::message>
