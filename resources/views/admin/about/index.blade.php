@extends('layouts.app')

@section('styles')
{{-- sweet alert --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
<style>
.delete{
    cursor: pointer;
}
</style>
@endsection
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>About</h1>
    </div><!-- End Page Title -->
    <section class="role-table">
        <div class="card p-2">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <a class="btn btn-primary" style="float:right" href="{{ route('admin.about.create') }}">
                            <i class="fa-solid fa-plus"></i> Add About
                        </a>
                    </div>
                </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr id="row{{ $about->id }}">
                                <td>{{ $loop->iteration + $abouts->firstItem() - 1 }}</td>
                            <td>{{ $about->name }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->description }}</td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a class="pe-3 delete text-danger" title="Delete role">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </form>
                                </div>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <div style="float:right">
                        {{ $abouts->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

@endsection

@section('scripts')
{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

<script>
$('.delete').on('click', function(){
    Swal.fire({
        title: 'Warning!',
        text: 'Do you really want to delete?',
        icon: 'warning',
        confirmButtonText: 'Yes',
        showCancelButton: true,
    }).then((result) => {
        if(result.isConfirmed){
            $(this).parent().submit()
        }
    })
})
</script>
@endsection
