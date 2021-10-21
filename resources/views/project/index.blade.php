@extends('layouts.admin')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert successAlert my-4" role="alert">
            <div class="flex">
                <button type="button" class="close mx-4" data-dismiss="alert">×</button>
                <div>
                    <p class="font-bold">{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="text-right">
        <div class="mt-5 float-left">
            <label for="" class="mt-5"> Order By</label>
            <select class="" onchange="getValue(this);" id="sorting" name="sort">
                <option value="asc">Asc</option>
                <option value="desc">Desc</option>
            </select>
        </div>

        <a href="/admin/projects/create"
           class="inline-block bg-blue-500 text-sm rounded text-white p-2 uppercase hover:bg-blue-600 mb-3">Create New
        </a>
    </div>
    <div class="bg-white shadow rounded-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
            <th class="table-heading">title</th>
            <th class="table-heading">link</th>
            <th class="table-heading">Featured</th>
            <th class="table-heading">actions</th>
            </thead>
            <tbody class="bg-white projectsTable divide-y divide-gray-200">
            @foreach($projects->items() as $project)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$project->title}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$project->link}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$project->featured=='1'?'true':'false'}}</div>
                    </td>
                    <td class="flex items-center my-2">
                        <a href="{{route('projects.edit',['project' => $project ])}}"
                           class="bg-indigo-600 rounded text-white px-4 py-1 hover:bg-indigo-700">Edit</a>
                        <form method="post" class="ml-2" action="{{route('projects.destroy',$project->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="bg-red-600 rounded text-white px-4 py-1 hover:bg-red-700">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            <div class="px-5">
                {{ $projects->links() }}

{{--                {{ $projects->appends(['sort' => 2] )->links() }}--}}
{{--                {!! $projects->appends(\Request::except('page'))->render() !!}--}}
            </div>
        </div>
    </div>
@endsection
<script>
    function getValue(sel) {
        axios.get(`/getProjects?sort=${sel.value}`).then(res => {
            console.log(res.data.data)
            let ht;
            res.data.data.forEach(project => {
                ht += '<tr>' +
                    `<td class="px-6 py-4 whitespace-no-wrap"> <div class="text-sm leading-5 text-gray-800">${project.title}</div> </td>` +
                    `<td class="px-6 py-4 whitespace-no-wrap"> <div class="text-sm leading-5 text-gray-800">${project.link}</div> </td>` +
                    `<td class="px-6 py-4 whitespace-no-wrap"> <div class="text-sm leading-5 text-gray-800">${project.featured?"true":"false"}</div> </td>` +
                    '<td class="flex items-center my-2">' +
                    `<a href="/admin/projects/${project.id}/edit"  class="bg-indigo-600 rounded text-white px-4 py-1 hover:bg-indigo-700">Edit</a>` +
                    '<form method="post" class="ml-2" action="{{route('projects.destroy',$project->id)}}">' +
                    '@csrf' +
                    '@method('delete')' +
                    '<button type="submit"class="bg-red-600 rounded text-white px-4 py-1 hover:bg-red-700">Delete </button>' +
                    ' </form>' +
                    ' </td>' +
                    '</tr>'
            });
            $('tbody').html(ht);

        }).catch(err => {
            console.log(err, 'error')
        })
        // alert(sel.value);
    }
</script>
