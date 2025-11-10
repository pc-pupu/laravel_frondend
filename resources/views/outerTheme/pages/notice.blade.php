@extends('outerTheme.layouts.guest') {{-- if you have a main layout --}}

@section('content')
<section class="bg-banner"></section>
<section class="h-75 #mx-auto #p-3" style=" overflow: auto;">
    <div class="services small_pb">
        <div class="container">
            <h2 class="fw-bold text-body-emphasis abt-dept-heading2 poppins-extralight"></h2>
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notices as $item)
                                <tr>
                                    <td>{{ $item['content_title'] }}</td>
                                    <td>{{ $item['content_description'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Laravel pagination links --}}
                    {{ $notices->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
